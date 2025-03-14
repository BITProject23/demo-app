<?php

namespace App\Controllers;

use App\Models\BatchTimeFrameModel;
use App\Models\BatchModel;
use App\Models\CourseModel;
use App\Models\BatchSubjectTimeTableModel;


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

        $check = $batchTimeframeModel->where('batch_id', $batchId)
        ->where('batch_day', $this->request->getPost('batch_day'))
        ->where('batch_time_from', $this->request->getPost('batch_time_from'))
        ->where('batch_time_to', $this->request->getPost('batch_time_to'))->countAllResults();

        if($check > 0){
            return redirect()->back()->withInput()->with('errors', "This Time Schedule is alredy added");
        }

        $batchTimeframeModel = new BatchTimeFrameModel();
        $batchTimeframeModel->insert($data); 
        $batch_timeframe_id = $batchTimeframeModel->getInsertID();

        $subject_id = $this->request->getPost('subject_id');
        $subject_time_from = $this->request->getPost('subject_time_from');
        $subject_time_to = $this->request->getPost('subject_time_to');

        foreach ($subject_id as $idx=>$name) :

            $data = ['batch_timeframe_id' => $batch_timeframe_id,
                    'subject_id' => $subject_id[$idx], 
                    'batch_id' => $batchId,  
                    'subject_time_from' => $subject_time_from[$idx],
                    'subject_time_to' => $subject_time_to[$idx]
                ];
           
           $batchSubjectTimeTableModel = new BatchSubjectTimeTableModel();
        
            $result = $batchSubjectTimeTableModel->save($data);
           endforeach;


        if($result){
            return redirect()->to('Batch_Timetable/'.$batchId)->with('success','Batch Time Schedule added Successfully!');
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

    public function load_subject_time_data()
    {
        $batchSubjectTimeTableModel = new BatchSubjectTimeTableModel();
        $selectedValue = $this->request->getPost('selectedValue');

        $data['subjecttimes'] = $batchSubjectTimeTableModel->select('tbl_batch_subject_timetable.subject_id ,tbl_batch_subject_timetable.subject_time_from,
        tbl_batch_subject_timetable.subject_time_to , tbl_subject.subject_name')
        ->join('tbl_subject','tbl_subject.subject_id  = tbl_batch_subject_timetable.subject_id')
        ->where('tbl_batch_subject_timetable.batch_timeframe_id', $selectedValue)->findAll();

        return view('batch/ajaxSubjectTimeBybatchtime',$data);
    }
}
?>