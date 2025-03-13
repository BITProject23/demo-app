<?php

namespace App\Controllers;

use App\Models\StudentMarksModel;
use App\Models\PaymentModel;
use App\Models\BatchModel;
use App\Models\EnrollmentModel;
use App\Models\CourseModel;

class StudentPortalController extends BaseController
{
    public function index()
    {
        $batchModel = new BatchModel();
        $data['today_class'] = $batchModel->select('count(*) AS count')
        ->join('tbl_batch_timeframe','tbl_batch_timeframe.batch_id  = tbl_batch.batch_id')
        ->join('tbl_enrollment','tbl_enrollment.batch_id  = tbl_batch.batch_id') 
        ->where('batch_start_date <=',date('Y-m-d'))->where('batch_end_date >=',date('Y-m-d'))->where('batch_day',date('l'))
        ->where('tbl_enrollment.student_id',session('student_id'))->first();

        $enrollmentModel = new EnrollmentModel();
        $data['total_enrollments'] = $enrollmentModel->select('count(*) AS count')
        ->where('tbl_enrollment.student_id',session('student_id'))->first();

        $studentMarksModel = new StudentMarksModel();
        $data['total_assignments'] = $studentMarksModel->select('count(*) AS count')
        ->where('tbl_student_marks.student_id',session('student_id'))->first();

        $courseModel = new CourseModel();
        $data['total_courses'] = $courseModel->select('count(*) AS count')->first();


        return view('studentPortal/studentDashboard',$data);
    }

    public function get_marks()
    {
        $studentMarksModel = new StudentMarksModel();
        $data['getmarks'] = $studentMarksModel->findAll();

        $studentMarksModel = new StudentMarksModel();
        $studentMarksModel =  $studentMarksModel->select('tbl_student_marks.student_marks_id, tbl_student_marks.assignment_name, tbl_student_marks.assignment_date, 
        tbl_student_marks.assignment_marks, tbl_student_marks.assignment_grade, tbl_subject.subject_name, 
        tbl_batch.batch_no')
        ->join('tbl_subject','tbl_subject.subject_id = tbl_student_marks.subject_id')
        ->join('tbl_batch','tbl_batch.batch_id = tbl_student_marks.batch_id')
        ->where('tbl_student_marks.student_id',session('student_id'));
        
        $data['getmarks'] = $studentMarksModel->findAll();
        
        return view('studentPortal/getMarks',$data);
    }

    public function showdata()
    {

        $paymentModel = new PaymentModel();

        
        $data['payments'] = $paymentModel->select('tbl_batch.batch_id, tbl_course.course_name, tbl_batch.batch_no, 
        tbl_student.student_no,tbl_student.student_first_name,tbl_student.student_last_name , tbl_payment.course_payment ,
        tbl_payment.payment_year_month, tbl_payment.payment_remark')
        ->join('tbl_batch','tbl_batch.batch_id = tbl_payment.batch_id')
        ->join('tbl_course','tbl_course.course_id = tbl_batch.course_id') 
        ->join('tbl_student','tbl_student.student_id = tbl_payment.student_id')
        ->where('tbl_payment.student_id',session('student_id'))
        ->findAll();

        return view('studentPortal/viewPayments',$data);
    }


    


}
?>