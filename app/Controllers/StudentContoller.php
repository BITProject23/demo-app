<?php

namespace App\Controllers;

use App\Models\StudentModel;

class StudentContoller extends BaseController
{
    public function index()
    {
        //return view('welcome_message');
        return view('studentFormView');
      
    }

    public function create(){ //take the form data to pass it to DB | ex: which we filled in course_form (data) pass it-> course table col names

        $data =[
            'student_first_name'=>$this->request->getPost('student_first_name'), //'table col name' => $this->request->getPost 'form name' | from getPost we can capture which will came by post method
            'student_last_name'=>$this->request->getPost('student_last_name'),
            'student_nic'=>$this->request->getPost('student_nic'),
            'student_email'=>$this->request->getPost('student_email'),
            'student_gender'=>$this->request->getPost('student_gender'),
            'student_bod'=>$this->request->getPost('student_bod'),
            'student_contact_no'=>$this->request->getPost('student_contact_no'),
            'student_address'=>$this->request->getPost('student_address'),

        ];

        $studentModel = new StudentModel; //make new object from model that use in this controller

        if($studentModel->save($data)){
            return redirect()->to('Student_add')->with('success','Student has been added Successfully!');
        }else{
            return redirect()->back()->withInput()->with('errors',$studentModel->errors());
        }

    }

    public function showdata(){

        $studentModel = new StudentModel();

        $data['student'] = $studentModel->findAll();

        return view('studentTableView',$data);

    }




}
?>