<?php

namespace App\Controllers;

use App\Models\BatchTimeFrameModel;
use App\Models\BatchModel;
use App\Models\CourseModel;

class BatchTimeFrameController extends BaseController
{
    public function index()
    {
        
        return view('batch/batchTimetableView');
    }

    public function create()
    {

        $batchId = $this->request->getPost('batch_id');
        $data = [
            'batch_id'=> $batchId,
            'batch_day'=>$this->request->getPost('batch_day'),
            'batch_time_from'=>$this->request->getPost('batch_time_from'),
            'batch_time_to'=>$this->request->getPost('batch_time_to'),
        ];

        $batchTimeframeModel = new BatchTimeFrameModel();

        if($batchTimeframeModel->save($data)){
            return redirect()->to('Batch_Timetable/'.$batchId)->with('success','Enroll Student Successfully!');
        }else{
            return redirect()->back()->withInput()->with('errors',$batchTimeframeModel->errors());
        }

    }

    public function showBatchTimetable($batchId)
    {
        
        $batchModel = new BatchModel();
        $data['batches'] = $batchModel->select('tbl_batch.batch_no, tbl_batch_timeframe.batch_timeframe_id, 
        tbl_batch_timeframe.batch_day, tbl_batch_timeframe.batch_time_from, tbl_batch_timeframe.batch_time_to')
        ->join('tbl_batch','tbl_batch.batch_id = tbl_batch_timeframe.batch_id')
        ->where('tbl_batch.batch_id', $batchId)->first();

        $batchTimeframeModel = new BatchTimeFrameModel();
        $data['batchTimes'] = $batchTimeframeModel->where('batch_id', $batchId)->all();

        return view('batch/batchTableView',$data);
    }
}
?>