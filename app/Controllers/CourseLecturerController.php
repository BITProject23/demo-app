<?php

namespace App\Controllers;

use App\Models\LecturerModel;
use App\Models\CourseModel;
use App\Models\SubjectModel;
use App\Models\CourseLecturerModel;

class CourseLecturerController extends BaseController
{
    public function index()
    {
        $courseModel = new CourseModel();
        $data['courses'] = $courseModel->findAll();

        $subjectModel = new SubjectModel();
        $data['subjects'] = $subjectModel->findAll();

        $lecturerModel = new LecturerModel;
        $data['lecturers'] = $lecturerModel->findAll();
        
        return view('courseLecturer/courseLecturerView',$data);
      
    }

    public function save()
    {
        $subject_id = $this->request->getPost('subjects');

        $lecturers = $this->request->getPost('lecturers');

        $courseLecturerModel = new CourseLecturerModel();

        // print_r($subject_id);

        // print_r($lecturers);


       foreach ($lecturers as $lec) :

        $data = ['subject_id' => $subject_id, 'lecturer_id' => $lec];
        //print_r($data);
        $courseLecturerModel->save($data);
       endforeach;

       $courseLecturerModel = new CourseLecturerModel(); //make new object from model that use in this controller

        if($courseLecturerModel->save($data)){
            return redirect()->to('CourseLecturer_assign')->with('success','Lecturer have been assigned for the Subjects successfully!');
        }else{
            return redirect()->back()->withInput()->with('errors',$courseLecturerModel->errors());
        }
    }

    public function courseLecturerJoin()
    {

        
        $subjectModel = new SubjectModel();
        $lecturerModel = new LecturerModel;
        $courseLecturerModel = new CourseLecturerModel();

        $query['subjects'] = $courseLecturerModel->select('tbl_course_lecturer.course_lecturer_id, tbl_subject.subject_name, tbl_lecturer.lecturer_first_name,tbl_lecturer.lecturer_last_name')
        ->join('tbl_lecturer','tbl_lecturer.lecturer_id = tbl_course_lecturer.lecturer_id')
        ->join('tbl_subject','tbl_subject.subject_id = tbl_course_lecturer.subject_id')
        ->findAll();

        //print_r($query);

        

        return view('courseLecturer/courseLecturerTableView',$query);


    }
}
?>