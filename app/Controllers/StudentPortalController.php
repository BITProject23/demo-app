<?php

namespace App\Controllers;

use App\Models\StudentMarksModel;

class StudentPortalController extends BaseController
{
    public function index()
    {


        // $studentModel = new StudentModel();
        // $data['today_reg_student'] = $studentModel->select('count(*) AS count')  //count is mysql
        // ->where('student_registration_date',date('Y-m-d'))->first();

        // $batchModel = new BatchModel();
        // $data['today_class'] = $batchModel->select('count(*) AS count')
        // ->join('tbl_batch_timeframe','tbl_batch_timeframe.batch_id  = tbl_batch.batch_id') 
        // ->where('batch_start_date <=',date('Y-m-d'))->where('batch_end_date >=',date('Y-m-d'))->where('batch_day',date('l'))->first();

        // $enrollmentModel = new EnrollmentModel();
        // $data['today_enrollments'] = $enrollmentModel->select('count(*) AS count')  //count is mysql
        // ->where('en_date',date('Y-m-d'))->first();

        // $paymentModel = new PaymentModel();
        // $data['today_payments'] = $paymentModel->select('sum(course_payment) AS total')  //sum of mysql
        // ->where('payment_year_month',date('Y-m-d'))->first();

        return view('studentPortal/studentDashboard');
    }

    public function get_marks()
    {
        $studentMarksModel = new StudentMarksModel();
        $data['getmarks'] = $studentMarksModel->findAll();

        $studentMarksModel = new StudentMarksModel();
        $studentMarksModel =  $studentMarksModel->select('tbl_student_marks.student_marks_id, tbl_student_marks.assignment_name, tbl_student_marks.assignment_date, 
        tbl_student_marks.assignment_marks, tbl_student_marks.assignment_grade, tbl_subject.subject_name, 
        tbl_batch.batch_no')
        ->where('tbl_student_marks.student_id',session('student_id'))
        ->join('tbl_subject','tbl_subject.subject_id = tbl_student_marks.subject_id')
        ->join('tbl_batch','tbl_batch.batch_id = tbl_student_marks.batch_id');
        
        $data['getmarks'] = $studentMarksModel->findAll();
        
        return view('studentPortal/getMarks',$data);
    }


    


}
?>