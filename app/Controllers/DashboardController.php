<?php

namespace App\Controllers;

use App\Models\BatchModel;
use App\Models\CourseModel;
use App\Models\EnrollmentModel;
use App\Models\LecturerModel;
use App\Models\PaymentModel;
use App\Models\StudentMarksModel;
use App\Models\StudentModel;

class DashboardController extends BaseController
{
    public function index()

    {
        $studentModel = new StudentModel();
        $data['today_reg_student'] = $studentModel->select('count(*) AS count')  //count is mysql
        ->where('student_registration_date',date('Y-m-d'))->first();

        $batchModel = new BatchModel();
        $data['today_class'] = $batchModel->select('count(*) AS count')
        ->join('tbl_batch_timeframe','tbl_batch_timeframe.batch_id  = tbl_batch.batch_id') 
        ->where('batch_start_date <=',date('Y-m-d'))->where('batch_end_date >=',date('Y-m-d'))->first();
        // ->where('batch_day',date('l'))->first();
        

        $enrollmentModel = new EnrollmentModel();
        $data['today_enrollments'] = $enrollmentModel->select('count(*) AS count')  //count is mysql
        ->where('en_date',date('Y-m-d'))->first();

        $paymentModel = new PaymentModel();
        $data['today_payments'] = $paymentModel->select('sum(course_payment) AS total')  //sum of mysql
        ->where('payment_year_month',date('Y-m-d'))->first();

        $studentModel = new StudentModel();
        $data['total_students'] = $studentModel->select('count(*) AS count')->first();

        $lecturerModel = new LecturerModel();
        $data['total_lecturers'] = $lecturerModel->select('count(*) AS count')->first();

        $batchModel = new BatchModel();
        $data['total_batches'] = $batchModel->select('count(*) AS count')->first();

        $courseModel = new CourseModel();
        $data['total_courses'] = $courseModel->select('count(*) AS count')->first();

        $studentMarksModel = new StudentMarksModel();
        $data['bar_assignment_grade'] = $studentMarksModel->select('count(*) AS count, assignment_grade AS grade')->groupBy('assignment_grade')->findAll();  //y-axis && x-axis
        
        $enrollmentModel = new EnrollmentModel();
        $data['pie_enrollments'] = $enrollmentModel->select('count(*) AS count, tbl_course.course_name')->groupBy('tbl_enrollment.course_id')
        ->join('tbl_course','tbl_course.course_id  = tbl_enrollment.course_id')
        ->findAll(); 

        $paymentModel = new PaymentModel();
        $data['last_sixmonth_payments'] = $paymentModel->select("sum(course_payment) AS total, CONCAT(YEAR(payment_year_month),'-',MONTH(payment_year_month)) AS payment_year_month")->groupBy('YEAR(payment_year_month) , MONTH(payment_year_month)')->orderBy('payment_year_month','DESC')->limit(6)->findAll();

        $enrollmentModel = new EnrollmentModel();
        $data['last_sixmonth_enrollments'] = $enrollmentModel->select("count(*) AS count, CONCAT(YEAR(en_date),'-',MONTH(en_date)) AS en_year_month")->groupBy('YEAR(en_date) , MONTH(en_date)')->orderBy('en_date','DESC')->limit(6)->findAll();
        return view('dashboard/dashboardView',$data);

    }
    
}
