<?php

namespace App\Controllers;

use App\Models\SigninModel;

class LoginController extends BaseController
{
    public function index()
    {
        return view('loginview1');
    }

    public function authenticate(){

        $loginModel = new SigninModel();

        $username = $this->request->getPost('user_name');
        $password = $this->request->getPost('user_password');

        $user = $loginModel->where('user_name',$username)->first(); //where('tbl col name',loginform username) //first->take the first record

        if(!$user || !password_verify($password,$user['user_password'])){ //(userlogin password,$user[reg password form tbl col name of register])
            return redirect()->back()->withInput()->with('error','Invalid login, please try again');
            
        }

        $userData = [
            'user_id' => $user['user_id'],
            'user_name' => $user['user_name'],
            'user_email' => $user['user_email'],
            'login_status' => true,
            'user_type' => "ADMIN",
        ];

        session()->set($userData);
        return redirect()->to('/');

    }

    public function logout(){

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
}
?>
