<?php

namespace App\Controllers;

use App\Models\AppointModel;
use App\Models\BatchModel;
use App\Models\StudentMarksModel;
use App\Models\BatchSubjectTimeTableModel;
use App\Models\LecturerModel;

use App\Models\StudentModel;
use App\Models\PaymentModel;
use App\Models\EnrollmentModel;

class LecturerPortalController extends BaseController
{
    public function index()
    {
        //if(!userlooged){
        //     redirect(login)
        // }else if(type != admin){
        //     redirect(login)
        // }
        $enrollmentModel = new EnrollmentModel();
        $data['total_students'] = $enrollmentModel->select('count(*) AS count')
        ->join('tbl_appointment','tbl_enrollment.course_id = tbl_appointment.course_id AND tbl_enrollment.batch_id = tbl_appointment.batch_id')
        ->where('tbl_appointment.lecturer_id',session('lecturer_id'))->first();

        $batchModel = new BatchModel();
        $data['total_batches'] = $batchModel->select('count(*) AS count')
        ->join('tbl_appointment','tbl_appointment.batch_id = tbl_batch.batch_id')
        ->where('tbl_appointment.lecturer_id',session('lecturer_id'))->first();

        $appointModel = new AppointModel();
        $data['total_subjects'] = $appointModel->select('count(*) AS count')
        ->where('tbl_appointment.lecturer_id',session('lecturer_id'))->first();

        $batchModel = new BatchModel();
        $data['today_class'] = $batchModel->select('count(*) AS count')
        ->join('tbl_batch_timeframe','tbl_batch_timeframe.batch_id  = tbl_batch.batch_id') 
        ->join('tbl_appointment','tbl_appointment.batch_id  = tbl_batch.batch_id')
        ->where('batch_start_date <=',date('Y-m-d'))->where('batch_end_date >=',date('Y-m-d'))->where('tbl_appointment.lecturer_id',session('lecturer_id'))->first();
        

        return view('lecturerPortal/lecturerDashboard',$data);
    }

    public function create_marks()
    {
        $batchModel = new BatchModel();
        $data['batches'] = $batchModel->select('tbl_batch.batch_id, tbl_batch.batch_no')
        ->join('tbl_appointment','tbl_appointment.batch_id  = tbl_batch.batch_id')
        ->where('tbl_appointment.lecturer_id',session('lecturer_id'))->findAll();

        return view('lecturerPortal/createMarks',$data);
    }

    public function store_marks()
    {
        $student_id = $this->request->getPost('student_id');
        $assignment_marks = $this->request->getPost('assignment_marks');

        foreach ($student_id as $idx=>$name) :
 
                        
                switch ($assignment_marks[$idx]) {
                    case $assignment_marks[$idx] >= 75:
                      $assignmentGrade = "A";
                      break;
                    case $assignment_marks[$idx] >= 65:
                        $assignmentGrade = "B";
                      break;
                    case $assignment_marks[$idx] >= 50:
                        $assignmentGrade = "C";
                      break;
                    case $assignment_marks[$idx] >= 35:
                        $assignmentGrade = "D";
                      break;
                    case $assignment_marks[$idx] >= 0:
                        $assignmentGrade = "F";
                      break;
                    case $assignment_marks[$idx] < 0:
                        $assignmentGrade = "NA";
                        break;
                    default:
                        $assignmentGrade = "NA";
                  }
                


            $data = [ 
                'student_id' => $student_id[$idx],
                'assignment_marks' => $assignment_marks[$idx], 
                'batch_id'=>$this->request->getPost('batches'),
                'subject_id'=>$this->request->getPost('subjects'),
                'assignment_name'=>$this->request->getPost('assignment_name'),
                'assignment_discreption'=>$this->request->getPost('assignment_discreption'), 
                'assignment_date'=>$this->request->getPost('assignment_date'),
                'assignment_grade'=>$assignmentGrade,
            ];
          
           $studentMarksModel = new StudentMarksModel();
        
            $result = $studentMarksModel->save($data);
           endforeach;

        if($result){
            return redirect()->to('View_Marks')->with('success',' Marks Added Successfully!');
        }else{
            return redirect()->back()->withInput()->with('errors',$studentMarksModel->errors());
        }

    }

    public function view_marks()
    {
        $studentMarksModel = new StudentMarksModel();
        

        $data['viewmarks'] = $studentMarksModel->select('tbl_student_marks.student_marks_id , tbl_student_marks.assignment_name , tbl_student_marks.assignment_discreption,
        tbl_student_marks.assignment_date ,tbl_student_marks.assignment_marks ,tbl_student_marks.assignment_grade , tbl_batch.batch_no ,
        tbl_student.student_first_name, tbl_student.student_last_name, tbl_subject.subject_name')
        ->join('tbl_appointment','tbl_appointment.subject_id = tbl_student_marks.subject_id AND tbl_appointment.batch_id = tbl_student_marks.batch_id')
        ->join('tbl_student','tbl_student.student_id  = tbl_student_marks.student_id')
        ->join('tbl_batch','tbl_batch.batch_id  = tbl_student_marks.batch_id')
        ->join('tbl_subject','tbl_subject.subject_id  = tbl_student_marks.subject_id')
        ->where('tbl_appointment.lecturer_id',session('lecturer_id'))->findAll();


        return view('lecturerPortal/viewMarks',$data);
    }

    public function view_timetable()
    {
        $batchSubjectTimeTableModel = new BatchSubjectTimeTableModel();

        $data['timetables'] = $batchSubjectTimeTableModel->select('tbl_batch_subject_timetable.batch_subject_timetable_id,tbl_batch_timeframe.batch_day, 
        tbl_batch_subject_timetable.subject_time_from, tbl_batch_subject_timetable.subject_time_to ,tbl_batch.batch_no , tbl_lecturer.lecturer_first_name,
         tbl_lecturer.lecturer_last_name, tbl_course.course_name, tbl_subject.subject_name')
        ->join('tbl_batch_timeframe','tbl_batch_timeframe.batch_timeframe_id = tbl_batch_subject_timetable.batch_timeframe_id')
        ->join('tbl_batch','tbl_batch.batch_id = tbl_batch_timeframe.batch_id')
        ->join('tbl_appointment','tbl_appointment.subject_id = tbl_batch_subject_timetable.subject_id AND tbl_appointment.batch_id = tbl_batch_subject_timetable.batch_id')
        ->join('tbl_lecturer','tbl_lecturer.lecturer_id = tbl_appointment.lecturer_id')
        ->join('tbl_course','tbl_course.course_id  = tbl_batch.course_id')
        ->join('tbl_subject','tbl_subject.subject_id  = tbl_batch_subject_timetable.subject_id')
        ->where('tbl_appointment.lecturer_id',session('lecturer_id'))->findAll();


        return view('lecturerPortal/viewTimetable',$data);
      
    }

    public function showAppointData(){

        $lecturerModel = new LecturerModel();

        $data['lecturers'] = $lecturerModel->select('*')
        ->join('tbl_appointment','tbl_appointment.lecturer_id  = tbl_lecturer.lecturer_id')
        ->join('tbl_batch','tbl_batch.batch_id   = tbl_appointment.batch_id')
        ->join('tbl_course','tbl_course.course_id  = tbl_appointment.course_id')
        ->join('tbl_subject','tbl_subject.subject_id  = tbl_appointment.subject_id')
        ->where('tbl_appointment.lecturer_id',session('lecturer_id'))->findAll();

        return view('lecturerPortal/viewAppointment',$data);

    }


}
?>