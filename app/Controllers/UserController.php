<?php

namespace App\Controllers;

use App\Models\LecturerModel;
use App\Models\StudentModel;
use App\Models\UserModel;

class UserController extends BaseController
{
    public function index()
    {
        $studentModel = new StudentModel();
        $data['students'] = $studentModel->findAll();

        $lecturerModel = new LecturerModel();
        $data['lecturers'] = $lecturerModel->findAll();
        
        return view('user/userAddView',$data);
    }

    public function create(){

        $userName = $this->request->getPost('user_name');
        $userEmail = $this->request->getPost('user_email');
        $userType = $this->request->getPost('user_type');

        if($userType=='STUDENT'){
            $studentID = $this->request->getPost('students');
        }else{
            $studentID = null;
        }

        if($userType=='LECTURER'){
            $lecturerID = $this->request->getPost('lecturers');
        }else{
            $lecturerID = null;
        }
       

        
        
        $datauser = [
            'user_name'=>$userName,
            'user_email'=>$userEmail,
            'user_password'=>password_hash($this->request->getPost('user_password')[0],PASSWORD_DEFAULT),
            'user_type'=> $userType,
            'student_id'=>$studentID,
            'lecturer_id'=>$lecturerID,

        ];

        // print_r($datauser);

        $userModel = new UserModel();
       
        

        if($userType == "STUDENT"){
            $studentModel = new StudentModel();
            $exists = $studentModel->where("student_email", $userEmail)->first();
            if($exists == null){
                return redirect()->back()->withInput()->with('errors', "No Student exists with this email");
            }
        } else if($userType == "LECTURE"){
            $lectureModel = new LecturerModel();
            $exists = $lectureModel->where("lecturer_email", $userEmail)->first();
            if($exists == null){
                return redirect()->back()->withInput()->with('errors', "No Lecturer exists with this email");
            }
        }

        $emailExists = $userModel->where("user_email", $userEmail)->first();
        if($emailExists != null){
            return redirect()->back()->withInput()->with('errors', "Email Already Registered");
        }
        $usernameExists = $userModel->where("user_name", $userName)->first();
        if($usernameExists != null){
            return redirect()->back()->withInput()->with('errors', "Username Already Registered");
        }
        

        if ($userModel->save($datauser)){
            return redirect()->to('User_View')->with('success','Your Account has been created Successfully!');
        }else{
            return redirect()->back()->withInput()->with('errors',$userModel->errors());
        }
    }

    public function showdata(){

        $userModel = new UserModel();

        $data['users'] = $userModel->findAll();

        return view('user/userTableView',$data);

    }

    public function editdata($id){

        $userModel = new UserModel();

        $data['user'] = $userModel->find($id);

        return view('user/userUpdateView',$data);

    }

    public function updatedata(){



        $userId = $this->request->getPost('user_id');

        $data = [
            'user_name'=>$this->request->getPost('user_name'),
            'user_email'=>$this->request->getPost('user_email'), //'table col name' => $this->request->getPost 'form name' | from getPost we can capture which will came by post method

            
        ];

        $userModel = new UserModel(); //make new object from model that use in this controller

        if($userModel->update($userId, $data)){
            return redirect()->to('User_View')->with('success','User updated Successfully!');
        }else{
            return redirect()->back()->withInput()->with('errors','Update Failed');
        }

    }

    public function deleteData($id){

        $userModel = new UserModel();

        if($userModel->where('user_id',$id)->delete()){
            return redirect()->to('User_View')->with('success','User deteled Successfully!');
        }else{
            return redirect()->back()->withInput()->with('errors','User delete Failed');
        }

    }

}
?>