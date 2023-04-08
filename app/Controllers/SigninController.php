<?php

namespace App\Controllers;

class SigninController extends BaseController
{
    public function index()
    {
        return view('signinview2');
    }

    public function forgetPassword($userid = null){

        echo "forgetPassword function" . $userid ;

    }

    public function _remap($method, $para1 = null)
    {
        if(method_exists($this,$method)){
            return $this->$method($para1);
        }else{
            throw \CodeIgniter\Exceptions\PageNotFoundException::forPageNotFound();
        }
    }
}
