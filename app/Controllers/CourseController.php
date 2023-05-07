<?php

namespace App\Controllers;

use App\Models\CourseModel;


class CourseController extends BaseController
{
    
    public function index() 
    {
        
        return view('courseAddView');
    } 

    public function create(){ //take the form data to pass it to DB | ex: which we filled in course_form (data) pass it-> course table col names

        $data =[
            'course_name'=>$this->request->getPost('course_name'), //'table col name' => $this->request->getPost 'form name' | from getPost we can capture which will came by post method
            'course_code'=>$this->request->getPost('course_code'),
            'course_fee'=>$this->request->getPost('course_fee'),

        ];

        $courseModel = new CourseModel(); //make new object from model that use in this controller

        if($courseModel->save($data)){
            return redirect()->to('Course_add')->with('success','Course has been added Successfully!');
        }else{
            return redirect()->back()->withInput()->with('errors',$courseModel->errors());
        }

    }

    public function showdata(){

        $courseModel = new CourseModel();

        $data['courses'] = $courseModel->findAll();

        return view('courseTableView',$data);

    }

    public function update(){

        $courseModel = new CourseModel();

        $course_name = $this->request->getPost('course_name');
        $course_code = $this->request->getPost('course_code');
        $course_fee = $this->request->getPost('course_fee');

        $courseModel->update('course_id',['course_name'=>$course_name, 'course_code'=>$course_code, 'course_fee'=>$course_fee]);
    }
    

}

?>