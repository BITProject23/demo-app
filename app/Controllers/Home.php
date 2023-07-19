<?php

namespace App\Controllers;

use App\Models\BatchModel;
use App\Models\CourseModel;
use App\Models\LecturerModel;
use App\Models\PaymentModel;
use App\Models\StudentModel;

class Home extends BaseController
{
    public function index()
    {
        $studentModel = new StudentModel();
        $lectureModel = new LecturerModel();
        $courseModel =  new CourseModel();
        $batchModel = new BatchModel();
        $paymentModel = new PaymentModel();

        $thisMonthPayments = $paymentModel
        ->where('payment_year_month >=', date('Y-m-01'))
        ->where('payment_year_month <=', date('Y-m-t'))->findAll();

        $data = [
            "student_count" => $studentModel->countAll(),
            "lecture_count" => $lectureModel->countAll(),
            "course_count" => $courseModel->countAll(),
            "batch_count" => $batchModel->countAll(),
            "thisMonthPayments" => $thisMonthPayments,
        ];

        return view('homeView', $data);
      
    }

}
?>