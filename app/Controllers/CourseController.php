<?php

namespace App\Controllers;

use App\Models\CourseModel;


class CourseController extends BaseController
{
    
    public function index() 
    {
        
        return view('course/courseAddView');
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

    public function showdata(){ //show the course list in table

        $courseModel = new CourseModel();

        $data['courses'] = $courseModel->findAll();

        return view('course/courseTableView',$data);

    }

    public function singleCourse($course_id = null){ //show single course in update form

       $courseModel = new CourseModel();

      // $course_id ;
       //$this->request->getVar('course_id');

       $data['course_single'] = $courseModel->where('course_id',$course_id)->first(); //check first row

      // print_r($data);
      return view('course/courseUpdateView',$data);
        // return view('course/courseUpdateView');
    }

    public function update(){

        $courseModel = new CourseModel();


        // $data['courses'] = $courseModel->where('course_id');

        // return view('course/courseUpdateView',$data);

        $course_id=$this->request->getPost('course_id');
        $course_name=$this->request->getPost('course_name');
        $course_code=$this->request->getPost('course_code');
        $course_fee=$this->request->getPost('course_fee');

        $courseModel->update($course_id,
                            ['course_name'=>$course_name,
                             'course_code'=>$course_code,
                             'course_fee'=>$course_fee]
                            );

        return redirect()->to('Course_View')->with('success','Course Details Updated!');                    
    }
    

}

?>