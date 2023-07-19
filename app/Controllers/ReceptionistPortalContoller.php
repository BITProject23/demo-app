<?php

namespace App\Controllers;

use App\Models\StudentMarksModel;
use App\Models\StudentModel;

class ReceptionistPortalContoller extends BaseController
{
    public function index()
    {
        
        return view('receptionistPortal/receptionistDashboard');
    }

    public function view_students()
    {
        $studentModel = new StudentModel();
        $data['students'] = $studentModel->findAll();

        
        return view('receptionistPortal/viewStudents',$data);
    }

    

}
?>