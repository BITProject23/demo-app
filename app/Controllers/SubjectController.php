<?php

namespace App\Controllers;

use App\Models\SubjectModel;

class SubjectController extends BaseController
{
    public function index() //display the form
    {
        //return view('welcome_message');
        return view('subjectAddView');
      
    }

    public function create(){

        $data =[
            'subject_name'=>$this->request->getPost('subject_name'),
            'subject_code'=>$this->request->getPost('subject_code'),
        ];

        $subjectModel = new SubjectModel; //make new object from model that use in this controller

        if($subjectModel->save($data)){
            return redirect()->to('Subject_add')->with('success','Subject has been added Successfully!');
        }else{
            return redirect()->back()->withInput()->with('errors',$subjectModel->errors());
        }
            
    }

    public function showdata(){

        $subjectModel = new SubjectModel();

        $data['subject'] = $subjectModel->findAll();

        return view('subjectTableView',$data);

    }

}
?>