<?php

namespace App\Controllers;

use App\Models\BatchModel;
use App\Models\CourseModel;
use App\Models\LecturerModel;
use App\Models\StudentModel;
use App\Models\PaymentModel;
use App\Models\SubjectModel;

class ReportController extends BaseController
{
    public function index()
    {
        
        return view('studentReportView');
    }

    public function paymentsearch()
    {
        $batchModel = new BatchModel();
        $data['batches'] = $batchModel->findAll();

        $courseModel = new CourseModel();
        $data['courses'] = $courseModel->findAll();

        $studentModel = new StudentModel();
        $data['students'] = $studentModel->findAll();
        
        return view('report/paymentSearchView',$data);
    }

    public function paymentview()
    {
        $data = [
            'batch_id'=>$this->request->getPost('batches'),
            'course_id'=>$this->request->getPost('courses'),
            'student_id'=>$this->request->getPost('students'),
            'payment_from_date'=>$this->request->getPost('payment_from_date'),
            'payment_to_date'=>$this->request->getPost('payment_to_date'),
        ];

        $paymentModel = new PaymentModel();

        //optinal where close 

        $db = \Config\Database::connect();

        $builder = $db->table('tbl_payment');
        $builder->select('tbl_batch.batch_id, tbl_course.course_name, tbl_batch.batch_no, 
        tbl_student.student_no,tbl_student.student_first_name,tbl_student.student_last_name , tbl_payment.course_payment ,
        tbl_payment.payment_year_month, tbl_payment.payment_remark,tbl_course.course_fee');
        $builder->join('tbl_batch','tbl_batch.batch_id = tbl_payment.batch_id');
        $builder->join('tbl_course','tbl_course.course_id = tbl_batch.course_id');
        $builder->join('tbl_student','tbl_student.student_id = tbl_payment.student_id');

        if($data['batch_id']!=''){ //not equal
            $builder->where('tbl_payment.batch_id', $data['batch_id']);
        }
        if($data['course_id']!=''){ //not equal
            $builder->where('tbl_course.course_id', $data['course_id']);
        }
        if($data['student_id']!=''){ //not equal
            $builder->where('tbl_student.student_id', $data['student_id']);
        }
        if($data['payment_from_date']!=''){ //not equal
            $builder->where('tbl_payment.payment_year_month >=', $data['payment_from_date']);
        }
        if($data['payment_to_date']!=''){ //not equal
            $builder->where('tbl_payment.payment_year_month <=', $data['payment_to_date']);
        }
       
        $data['payments'] = $builder->get()->getResultArray();
        
        return view('report/paymentReportView',$data);
    }

    public function timetableSearch()
    {
        $batchModel = new BatchModel();
        $data['batches'] = $batchModel->findAll();


        $courseModel = new CourseModel();
        $data['courses'] = $courseModel->findAll();

        $subjectModel = new SubjectModel();
        $data['subjects'] = $subjectModel->findAll();

        $lecturerModel = new LecturerModel();
        $data['lecturers'] = $lecturerModel->findAll();
        
        return view('report/timtableSearchView',$data);
    }

    public function timetableview()
    {
        $data = [
            'batch_id'=>$this->request->getPost('batches'),
            'batch_day'=>$this->request->getPost('batch_day'),
            'course_id'=>$this->request->getPost('courses'),
            'subject_id'=>$this->request->getPost('subjects'),
            'lecturer_id'=>$this->request->getPost('lecturers'),
            'batch_start_date'=>$this->request->getPost('batch_start_date'),
            'batch_end_date'=>$this->request->getPost('batch_end_date'),
        ];

        

        //optinal where close 

        $db = \Config\Database::connect();

        $builder = $db->table('tbl_batch_subject_timetable');
        $builder->select('tbl_batch.batch_no, tbl_batch_timeframe.batch_day, tbl_batch.batch_no, tbl_course.course_name, 
        tbl_subject.subject_name, tbl_lecturer.lecturer_id ,tbl_lecturer.lecturer_first_name,tbl_lecturer.lecturer_last_name ,
        tbl_batch_timeframe.batch_time_from, tbl_batch_timeframe.batch_time_to');
        $builder->join('tbl_batch','tbl_batch.batch_id = tbl_batch_subject_timetable.batch_id');
        $builder->join('tbl_appointment','tbl_appointment.subject_id = tbl_batch_subject_timetable.subject_id AND tbl_appointment.batch_id = tbl_batch_subject_timetable.batch_id');
        $builder->join('tbl_lecturer','tbl_lecturer.lecturer_id = tbl_appointment.lecturer_id');
        $builder->join('tbl_course','tbl_course.course_id = tbl_batch.course_id');
        $builder->join('tbl_batch_timeframe','tbl_batch_timeframe.batch_id = tbl_batch_subject_timetable.batch_timeframe_id');
        $builder->join('tbl_subject','tbl_subject.subject_id  = tbl_batch_subject_timetable.subject_id');

        if($data['batch_id']!=''){ //not equal
            $builder->where('tbl_batch.batch_id', $data['batch_id']);
        }
        if($data['batch_day']!=''){ //not equal
            $builder->where('tbl_batch_timeframe.batch_day', $data['batch_day']);
        }
        if($data['course_id']!=''){ //not equal
            $builder->where('tbl_course.course_id', $data['course_id']);
        }
        if($data['subject_id']!=''){ //not equal
            $builder->where('tbl_subject.subject_id', $data['subject_id']);
        }
        if($data['lecturer_id']!=''){ //not equal
            $builder->where('tbl_lecturer.lecturer_id', $data['lecturer_id']);
        }
        if($data['batch_start_date']!=''){ //not equal
            $builder->where('tbl_batch_timeframe.batch_start_date >=', $data['batch_start_date']);
        }
        if($data['batch_end_date']!=''){ //not equal
            $builder->where('tbl_batch_timeframe.batch_end_date <=', $data['batch_end_date']);
        }
       
        $data['timetables'] = $builder->get()->getResultArray();
        
        return view('report/timetableReportView',$data);
    }

    public function enrollmentsearch()
    {
        $batchModel = new BatchModel();
        $data['batches'] = $batchModel->findAll();

        $courseModel = new CourseModel();
        $data['courses'] = $courseModel->findAll();

        $studentModel = new StudentModel();
        $data['students'] = $studentModel->findAll();
        
        return view('report/enrollmentSearchView',$data);
    }

    public function enrollmentview()
    {
        $data = [
            'batch_id'=>$this->request->getPost('batches'),
            'course_id'=>$this->request->getPost('courses'),
            'student_id'=>$this->request->getPost('students'),
            'enrollment_from_date'=>$this->request->getPost('enrollment_from_date'),
            'enrollment_to_date'=>$this->request->getPost('enrollment_to_date'),
        ];



        //optinal where close 

        $db = \Config\Database::connect();

        $builder = $db->table('tbl_enrollment');
        $builder->select('tbl_batch.batch_no, tbl_course.course_name,  
        tbl_student.student_no,tbl_student.student_first_name,tbl_student.student_last_name ,
        tbl_student.student_nic , tbl_enrollment.en_date');
        $builder->join('tbl_batch','tbl_batch.batch_id = tbl_enrollment.batch_id');
        $builder->join('tbl_course','tbl_course.course_id = tbl_enrollment.course_id');
        $builder->join('tbl_student','tbl_student.student_id = tbl_enrollment.student_id');

        if($data['batch_id']!=''){ //not equal
            $builder->where('tbl_enrollment.batch_id', $data['batch_id']);
        }
        if($data['course_id']!=''){ //not equal
            $builder->where('tbl_course.course_id', $data['course_id']);
        }
        if($data['student_id']!=''){ //not equal
            $builder->where('tbl_student.student_id', $data['student_id']);
        }
        if($data['enrollment_from_date']!=''){ //not equal
            $builder->where('tbl_enrollment.en_date >=', $data['enrollment_from_date']);
        }
        if($data['enrollment_to_date']!=''){ //not equal
            $builder->where('tbl_enrollment.en_date <=', $data['enrollment_to_date']);
        }
       
        $data['enrollments'] = $builder->get()->getResultArray();
        
        return view('report/enrollmentReportView',$data);
    }



    
}
?>