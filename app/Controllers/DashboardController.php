<?php

namespace App\Controllers;

class DashboardController extends BaseController
{
    public function index()
    {
        echo view('partials/header');
        echo view('dashboardView');
        echo view('partials/footer');

    }
    
}
