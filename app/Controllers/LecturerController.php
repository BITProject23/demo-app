<?php

namespace App\Controllers;

use App\Models\LecturerModel;

class LecturerController extends BaseController
{
    public function index()
    {
        //return view('welcome_message');
        return view('lecturerFormView');
      
    }

    public function create(){ //take the form data to pass it to DB | ex: which we filled in course_form (data) pass it-> course table col names

        $data =[
            'lecturer_first_name'=>$this->request->getPost('lecturer_first_name'), //'table col name' => $this->request->getPost 'form name' | from getPost we can capture which will came by post method
            'lecturer_last_name'=>$this->request->getPost('lecturer_last_name'),
            'lecturer_nic'=>$this->request->getPost('lecturer_nic'),
            'lecturer_email'=>$this->request->getPost('lecturer_email'),
            'lecturer_gender'=>$this->request->getPost('lecturer_gender'),
            'lecturer_bod'=>$this->request->getPost('lecturer_bod'),
            'lecturer_contact_no'=>$this->request->getPost('lecturer_contact_no'),
            'lecturer_address'=>$this->request->getPost('lecturer_address'),

        ];

        $lecturerModel = new LecturerModel; //make new object from model that use in this controller

        if($lecturerModel->save($data)){
            return redirect()->to('Lecturer_add')->with('success','Lecturer has been added Successfully!');
        }else{
            return redirect()->back()->withInput()->with('errors',$lecturerModel->errors());
        }


    }

    public function showdata(){

        $lecturerModel = new LecturerModel();

        $data['lecturer'] = $lecturerModel->findAll();

        return view('lecturerTableView',$data);

    }

}
?>