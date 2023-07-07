<?php

namespace App\Controllers;

class ReportController extends BaseController
{
    public function index()
    {
        
        return view('studentReportView');
    }

    public function index01()
    {
        
        return view('lecturerReportView');
    }
}
?>