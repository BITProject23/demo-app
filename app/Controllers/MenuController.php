<?php

namespace App\Controllers;

class MenuController extends BaseController
{
    public function index()
    {
        //return view('welcome_message');
        return view('homeView');
    }

    // public function student()
    // {
        
    //     return view('studentFormView');
    // }

    public function login()
    {
        
        return view('signinView2');
    }

    public function courseTable()
    {
        
        return view('courseTableView');
    }


}
?>