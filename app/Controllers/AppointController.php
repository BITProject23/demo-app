<?php

namespace App\Controllers;

use App\Models\BatchModel;
use App\Models\CourseModel;
use App\Models\CourseSubjectModel;
use App\Models\AppointModel;

class AppointController extends BaseController
{
    public function index($lecId)
    {
        $courseModel = new CourseModel();
        $data['courses'] = $courseModel->findAll();
        $data['lecturerId'] = $lecId;


        return view('appoint/appointView',$data);
    }

    public function create()
    {

        $lecturerId = $this->request->getPost('lecturer_id');

        $data = [
            'course_id'=>$this->request->getPost('courses'),
            'batch_id'=>$this->request->getPost('batches'),
            'subject_id'=>$this->request->getPost('subjects'),
            'appoint_data'=>$this->request->getPost('appoint_data'),
            'lecturer_id'=>$lecturerId,
        ];

        $appointModel = new AppointModel();

        if($appointModel->save($data)){
            return redirect()->to('Lecturer_View')->with('success','Lecturer has been Appointed Successfully!');
        }else{
            return redirect()->back()->withInput()->with('errors',$appointModel->errors());
        }

    }

    public function showdata()
    {

        $appointModel = new AppointModel();
        $appointModel =  $appointModel->select('tbl_appointment.appoint_id, tbl_appointment.appoint_data, tbl_lecturer.lecturer_no, 
        tbl_lecturer.lecturer_first_name, tbl_lecturer.lecturer_last_name, tbl_lecturer.lecturer_nic, tbl_batch.batch_no, tbl_course.course_name,
        tbl_subject.subject_name')
        ->join('tbl_lecturer','tbl_lecturer.lecturer_id = tbl_appointment.lecturer_id')
        ->join('tbl_batch','tbl_batch.batch_id = tbl_appointment.batch_id')
        ->join('tbl_course','tbl_course.course_id = tbl_appointment.course_id')
        ->join('tbl_subject','tbl_subject.subject_id = tbl_appointment.subject_id');
        
        $data['lecturers'] = $appointModel->findAll();
        
        return view('appoint/appointTableView',$data);

    }

   
    

}
?>