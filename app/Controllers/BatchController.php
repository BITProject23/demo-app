<?php

namespace App\Controllers;

use App\Models\BatchModel;
use App\Models\CourseModel;

class BatchController extends BaseController
{
    public function index()
    {

        $courseModel = new CourseModel();
        $data['courses'] = $courseModel->findAll();


       // return view('batch/batchAddView',$data);

       return view('testbatch');

        

     //   return $course_code;
      
    }

    public function getCourseCode()
    {

       // $courseModel = new CourseModel();
        //$courseID=$this->request->getPost('courseID');
       // $courseID = '2';
       // $course = $courseModel->where('course_id',$courseID)->find();

        // if($course){
        //     $courseCode = $course['course_code'];

        // }

        header('Content-Type: application/text');
        $courseCode = "courseCode";

      //  echo $courseCode;

       return  $courseCode;
      
    }

    public function save()
    {
        $course_id = $this->request->getPost('courses');

        $data['batches'] =[
            'batch_id'=>$this->request->getPost('batch_id'), //'table col name' => $this->request->getPost 'form name' | from getPost we can capture which will came by post method
            'batch_no'=>$this->request->getPost('batch_no'),
            'batch_day'=>$this->request->getPost('batch_day'),
            'batch_time_from'=>$this->request->getPost('batch_time_from'),
            'batch_time_to'=>$this->request->getPost('batch_time_to'),
            'batch_start_date	'=>$this->request->getPost('batch_start_date'),
        
        ];

        $data['courses'] =  $course_id;

        // print_r($data);

        // $batchModel->save($data);

        $batchModel = new BatchModel();

        if($batchModel->save($data)){
            return redirect()->to('Batch')->with('success','Batch has been added Successfully!');
        }else{
            return redirect()->back()->withInput()->with('errors',$batchModel->errors());
        }


    }

    public function courseBatchJoin()
    {

        $courseModel = new CourseModel();
        $batchModel = new BatchModel();

        $query['batches'] = $batchModel->select('tbl_batch.batch_id, tbl_course.course_name, tbl_batch.batch_no, tbl_batch.batch_day, tbl_batch.batch_time_from, tbl_batch.batch_time_to, tbl_batch.batch_start_date')
        ->join('tbl_course','tbl_course.course_id = tbl_batch.course_id')
        ->findAll();

        //print_r($query);


        return view('batch/batchTableView',$query);


    }

}
?>