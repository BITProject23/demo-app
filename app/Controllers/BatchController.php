<?php

namespace App\Controllers;

use App\Models\BatchModel;
use App\Models\CourseModel;
use App\Models\BatchTimeFrameModel;


class BatchController extends BaseController
{
    public function index()
    {

        $courseModel = new CourseModel();
        $data['courses'] = $courseModel->findAll();

        return view('batch/batchAddView',$data);      
    }

    public function load_data() 
    {
        $courseModel = new CourseModel();
        $course_code = "";
        
        // Access the selected value from the request data
        $selectedValue = $this->request->getPost('selectedValue');

        $data = $courseModel->select('course_code')->where('course_id',$selectedValue)->first();

        if($data){
           // $course_code = $data->course_code;
        }


        //  $selectedValue = 5;


    
        // Perform your data retrieval based on the selected value
        // Example: Generate some dynamic content based on the selected value
        //$data =  $courseCode;

        //print_r($data);
    
        // Return the data as a response
         return ($data['course_code']);
    }
    
    public function batchByCourse() 
    {
        $batchModel = new BatchModel();
        
        // Access the selected value from the request data
        $selectedValue = $this->request->getPost('selectedValue');

        $data = $batchModel->where('course_id', $selectedValue)->findAll();

        echo json_encode($data);
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

    public function create()
    {
        $data = [
            'batch_no'=>$this->request->getPost('batch_no'),
            'batch_start_date'=>$this->request->getPost('batch_start_date'),
            'batch_end_date'=>$this->request->getPost('batch_end_date'),
            'course_id'=>$this->request->getPost('courses')
        ];

        
        $batchModel = new BatchModel();

        if($batchModel->save($data)){
            return redirect()->to('Batch_add')->with('success','Batch has been added Successfully!');
        }else{
            return redirect()->back()->withInput()->with('errors',$batchModel->errors());
        }

    }

    public function showCourseBatchdata()
    {

        $courseModel = new CourseModel();
        $batchModel = new BatchModel();

        
        $data['batches'] = $batchModel->select('tbl_batch.batch_id, tbl_course.course_name, tbl_batch.batch_no, 
            tbl_batch.batch_start_date, tbl_batch.batch_end_date')
        ->join('tbl_course','tbl_course.course_id = tbl_batch.course_id')
        ->findAll();

        return view('batch/batchTableView',$data);
    }

    public function editdata($id){

        $batchModel = new BatchModel();
        $courseModel = new CourseModel();

        $data['batch'] = $batchModel->find($id);
        $data['courses'] = $courseModel->findAll();

        return view('batch/batchUpdateView',$data);

    }

    public function updatedata()
    {

        $data = [
            'batch_no'=>$this->request->getPost('batch_no'),
            'batch_start_date'=>$this->request->getPost('batch_start_date'),
            'batch_end_date'=>$this->request->getPost('batch_end_date'),
            'course_id'=>$this->request->getPost('courses')
        ];

        
        $batchModel = new BatchModel();

        if($batchModel->update($data)){
            return redirect()->to('Batch')->with('success','Batch updated Successfully!');
        }else{
            return redirect()->back()->withInput()->with('errors','Update Failed'());
        }

    }

    public function timetable($batchId)
    {
        $batchModel = new BatchModel();
        $data['batch'] = $batchModel->select('tbl_batch.batch_id, tbl_course.course_name, tbl_batch.batch_no, 
                tbl_batch.batch_start_date, tbl_batch.batch_end_date')
            ->join('tbl_course','tbl_course.course_id = tbl_batch.course_id')
            ->where('tbl_batch.batch_id', $batchId)->first();

        $batchTimeframeModel = new BatchTimeFrameModel();
        $data['batchTimes'] = $batchTimeframeModel
        ->join('tbl_batch', 'tbl_batch.batch_id = tbl_batch_timeframe.batch_id')
        ->where('tbl_batch.batch_id', $batchId)->findAll();

        return view('batch/batchTimetableView',$data);

    }

//     <!-- admin register -> 
// type -> [ADMIN, RECEPTION, STUDENT, LECTURE]


// if(user_type == ADMIN || user_type == RECEPTION){
//     DB->save(data);
// }
// elseif(user_type == STUDENT){
//     $exsisting_student = DB->student()->where->('email', $email)->first();
//     if($exsisting_student == null){
//         return error()
//     }else{
//         DB->save(data);
//     }
// }
// elseif(user_type == LECTURE){
//     $exsisting_lecture = DB->lecture()->where->('email', $email)->first();
//     if($exsisting_lecture == null){
//         return error()
//     }else{
//         DB->save(data);
//     }
// } -->

}
?>

