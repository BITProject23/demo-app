<?php

namespace App\Controllers;

use App\Models\LecturerModel;
use App\Models\SigninModel;
use App\Models\StudentModel;

class SigninController extends BaseController
{
    public function index()
    {
        return view('signinview4');
    }

    public function create(){

        $userType = $this->request->getPost('user_type');
        $userEmail = $this->request->getPost('user_email');
        $userName = $this->request->getPost('user_name');
        $datauser = [
            'user_name'=>$userName,
            'user_email'=>$userEmail,
            'user_password'=>password_hash($this->request->getPost('user_password'),PASSWORD_DEFAULT),
            'user_type'=>$userType,
        ];

        // print_r($datauser);

        $signinModel = new SigninModel();

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

        $emailExists = $signinModel->where("user_email", $userEmail)->first();
        if($emailExists != null){
            return redirect()->back()->withInput()->with('errors', "Email Already Registered");
        }
        $usernameExists = $signinModel->where("user_name", $userName)->first();
        if($usernameExists != null){
            return redirect()->back()->withInput()->with('errors', "Username Already Registered");
        }
        

        if ($signinModel->save($datauser)){
            return redirect()->to('Register')->with('success','Your Account has been created Successfully!');
        }else{
            return redirect()->back()->withInput()->with('errors',$signinModel->errors());
        }
    }

    // public function forgetPassword($userid = null){

    //     echo "forgetPassword function" . $userid ;

    // }

    // public function _remap($method, $para1 = null)
    // {
    //     if(method_exists($this,$method)){
    //         return $this->$method($para1);
    //     }else{
    //         throw \CodeIgniter\Exceptions\PageNotFoundException::forPageNotFound();
    //     }
    // }
}

?>