<?php

namespace App\Controllers;

use App\Models\SigninModel;

class SigninController extends BaseController
{
    public function index()
    {
        return view('signinview4');
    }

    public function create(){

        $datauser = [
            'user_name'=>$this->request->getPost('user_name'),
            'user_email'=>$this->request->getPost('user_email'),
            'user_password'=>password_hash($this->request->getPost('user_password'),PASSWORD_DEFAULT),
        ];

        // print_r($datauser);

        $signinModel = new SigninModel();

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