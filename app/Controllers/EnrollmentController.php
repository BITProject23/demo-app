<?php

namespace App\Controllers;

use App\Models\EnrollmentModel;
use App\Models\BatchModel;
use App\Models\CourseModel;
use App\Models\StudentModel;

class EnrollmentController extends BaseController
{
    public function index($stuId)
    {
        $courseModel = new CourseModel();
        $data['courses'] = $courseModel->findAll();
        $data['studentId'] = $stuId;


       return view('enrollment/studentEnrollmentView',$data);
       
    }

    public function create()
    {

        $studentId = $this->request->getPost('student_id');

        $data = [
            'course_id'=>$this->request->getPost('courses'),
            'batch_id'=>$this->request->getPost('batches'),
            'en_date'=>$this->request->getPost('en_date'),
             'student_id'=>$studentId,
        ];

        $enrollmentModel = new EnrollmentModel();

        if($enrollmentModel->save($data)){
            return redirect()->to('Enrollment_search')->with('success','Enroll Student Successfully!');
        }else{
            return redirect()->back()->withInput()->with('errors',$batchModel->errors());
        }

    }



    public function searchdata()
    {

        $batchModel = new BatchModel();
        $data['batches'] = $batchModel->findAll();

        $studentNumber = $this->request->getGet('student_no'); 
        $batchId = $this->request->getGet('batches'); //how to get batch_id when it is not in the form????

        $enrollmentModel = new EnrollmentModel();//enrollement
        $enrollmentModel =  $enrollmentModel->select('tbl_enrollment.en_id, tbl_enrollment.en_date, tbl_student.student_no, 
        tbl_student.student_first_name, tbl_student.student_last_name, tbl_student.student_nic, tbl_course.course_name,
        tbl_batch.batch_no')
        ->join('tbl_student','tbl_student.student_id = tbl_enrollment.student_id')
        ->join('tbl_course','tbl_course.course_id = tbl_enrollment.course_id')
        ->join('tbl_batch','tbl_batch.batch_id = tbl_enrollment.batch_id');

        if(isset($studentNumber) && $studentNumber != ""){
            $enrollmentModel = $enrollmentModel->where('tbl_student.student_no', $studentNumber);
        }
        if(isset($batchId) && $batchId != ""){
            $enrollmentModel = $enrollmentModel->where('tbl_enrollment.batch_id', $batchId);
        }
        
        $data['enrollements'] = $enrollmentModel->findAll();
        
        return view('enrollment/studentEnrollmentTableView',$data);

    }

    // public function delete($id){
    //     $userModel = new UserModel();
    //     $data['user'] = $userModel->where('id', $id)->delete($id);
    //     return $this->response->redirect(site_url('/users-list'));
    // } 
}
?>