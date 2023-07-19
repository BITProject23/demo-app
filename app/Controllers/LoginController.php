<?php

namespace App\Controllers;

use App\Models\SigninModel;
use App\Models\UserModel;

class LoginController extends BaseController
{
    public function index()
    {
        return view('loginview1');
    }

    public function authenticate(){

        $loginModel = new UserModel();

        $username = $this->request->getPost('user_name');
        $password = $this->request->getPost('user_password')[0];

        $user = $loginModel->where('user_name',$username)->first(); //where('tbl col name',loginform username) //first->take the first record

        if($user == null || !password_verify($password,$user['user_password'])){ //(userlogin password,$user[reg password form tbl col name of register])
            return redirect()->back()->withInput()->with('error','Invalid login, please try again'); 
        }

        if($user['user_type']=='STUDENT'){
            $studentID = $user['student_id'];
        }else{
            $studentID = null;
        }

        if($user['user_type']=='LECTURER'){
            $lecturerID = $user['lecturer_id'];
        }else{
            $lecturerID = null;
        }

        $userData = [
            'user_id' => $user['user_id'],
            'user_name' => $user['user_name'],
            'user_email' => $user['user_email'],
            'login_status' => true,
            'user_type' => $user['user_type'],
            'student_id' =>  $studentID,
            'lecturer_id' => $lecturerID,
        ];

        session()->set($userData);

        if($user['user_type']=='ADMIN'){
            return redirect()->to('/');
        }elseif($user['user_type']=='LECTURER'){
            return redirect()->to('Lecturer_Portal');
        }elseif($user['user_type']=='STUDENT'){
            return redirect()->to('Student_Portal');
        }elseif($user['user_type']=='RECEPTIONIST'){
            return redirect()->to('Receptionist_Portal');
        }

       // session()->set('test',123);

       // $test = session('user_name');

    //    $session_username = session->get('user_name');

        

    }

    public function logout(){
        // echo "asd";
        session()->destroy();
        return redirect()->to('login');

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

    public function passwordReset()
    {
        $userId = session()->get('user_id');
        
        if($userId == null){
            return redirect()->to('/login');
        }
        return view('user/userPasswordRestView');
    }

    public function passwordResetAction(){
        
        $userId = session()->get('user_id');
        
        if($userId == null){
            return redirect()->to('/login');
        }
       
        $userModel = new UserModel();

        $currentPassword = $this->request->getPost('current_password');
        $newPassword = $this->request->getPost('new_password');
        $confirmPassword = $this->request->getPost('confirm_password');

        $user = $userModel->find($userId);

        if($user == null){
            return redirect()->back()->withInput()->with('errors','Incorrect User'); 
        }else if(!password_verify($currentPassword,$user['user_password'])){
            return redirect()->back()->withInput()->with('errors','Incorrect Password'); 
        } else if($newPassword != $confirmPassword){
            return redirect()->back()->withInput()->with('errors',"Passwords doesn't match"); 
        }

        $data = [
            'user_password' => password_hash($newPassword, PASSWORD_DEFAULT),
        ];

        if($userModel->update($userId, $data)){
            return redirect()->to('/User_PasswordReset')->with('success','Password change Successfully!');
        }else{
            return redirect()->back()->withInput()->with('errors','Password change Failed');
        }


    }
}
?>
