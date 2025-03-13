<?php

namespace App\Controllers;

use App\Models\LecturerModel;

class LecturerController extends BaseController
{
    public function index()
    {
        $lecturerModel = new LecturerModel; //make new object from model that use in this controller

        $lec_no_count = $lecturerModel->countAll() + 1;             //The str_pad() function is a built-in function in PHP
        $lec_count = str_pad($lec_no_count, 4, 0, STR_PAD_LEFT); //string str_pad($string, $length, $pad_string, $pad_type)
        $prefix = "LEC";
        $lec_no = $prefix.$lec_count;
        $data['lec_no'] = $lec_no;
    
        return view('lecturer/lecturerFormView', $data);
      
    }

    public function create(){ //take the form data to pass it to DB | ex: which we filled in course_form (data) pass it-> course table col names

        $data =[
            'lecturer_no'=>$this->request->getPost('lecturer_no'),
            'lecturer_first_name'=>$this->request->getPost('lecturer_first_name'), //'table col name' => $this->request->getPost 'form name' | from getPost we can capture which will came by post method
            'lecturer_last_name'=>$this->request->getPost('lecturer_last_name'),
            'lecturer_nic'=>$this->request->getPost('lecturer_nic'),
            'lecturer_email'=>$this->request->getPost('lecturer_email'),
            'lecturer_gender'=>$this->request->getPost('lecturer_gender'),
            'lecturer_bod'=>$this->request->getPost('lecturer_bod'),
            'lecturer_contact_no'=>$this->request->getPost('lecturer_contact_no'),
            'lecturer_address'=>$this->request->getPost('lecturer_address'),
            // 'lec_qulification'=>$this->request->getPost('lec_qulification'),

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

        return view('lecturer/lecturerTableView',$data);

    }

    public function editdata($lecId){

        $lecturerModel = new LecturerModel();

        $data['lecturer'] = $lecturerModel->find($lecId);

        return view('lecturer/lecturerUpdateView',$data);

    }

    public function updatedata(){

        $lecturerId = $this->request->getPost('lecturer_id');

        $data =[
            'lecturer_no'=>$this->request->getPost('lecturer_no'),
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

        if($lecturerModel->update($lecturerId,$data)){
            return redirect()->to('Lecturer_View')->with('success','Lecturer updated Successfully!');
        }else{
            return redirect()->back()->withInput()->with('errors',$lecturerModel->errors());
        }

    }

    public function deleteData($id){

        $lecturerModel = new LecturerModel;

        if($lecturerModel->where('lecturer_id',$id)->delete()){
            return redirect()->to('Lecturer_View')->with('success','Lecturer deteled Successfully!');
        }else{
            return redirect()->back()->withInput()->with('errors','Lecturer delete Failed');
        }

    }

}
?>