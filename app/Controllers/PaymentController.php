<?php

namespace App\Controllers;

use App\Models\BatchModel;
use App\Models\CourseModel;
use App\Models\PaymentModel;

class PaymentController extends BaseController
{
    public function index()
    {
        $batchModel = new BatchModel();
        $data['batches'] = $batchModel->select('tbl_batch.batch_id, tbl_batch.batch_no')
        ->findAll();

        return view('payment/paymentView',$data);
      
    }

    public function create()
    {
        $data = [
            'batch_id'=>$this->request->getPost('batches'),
            'student_id'=>$this->request->getPost('students'),
            'course_payment'=>$this->request->getPost('course_payment'),
            'payment_year_month'=>$this->request->getPost('payment_year_month'),
            'payment_remark'=>$this->request->getPost('payment_remark'),
        ];

        
        $paymentModel = new PaymentModel();

        $check = $paymentModel->where('student_id', $this->request->getPost('students'))
        ->where('batch_id', $this->request->getPost('batches'))
        ->where('payment_year_month', $this->request->getPost('payment_year_month'))->countAllResults();

        if($check > 0){
            return redirect()->back()->withInput()->with('errors', "Student alredy paid");
        }

        if($paymentModel->save($data)){
            return redirect()->to('Payment_View')->with('success','Student payment has been added Successfully!');
        }else{
            return redirect()->back()->withInput()->with('errors',$paymentModel->errors());
        }

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
        ->findAll();

        return view('payment/paymentTableView',$data);
    }

}
?>