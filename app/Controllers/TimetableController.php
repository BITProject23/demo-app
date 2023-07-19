<?php

namespace App\Controllers;

use App\Models\BatchSubjectTimeTableModel;

class TimetableController extends BaseController
{
    public function index()
    {
        $batchSubjectTimeTableModel = new BatchSubjectTimeTableModel();

        $data['timetables'] = $batchSubjectTimeTableModel->select('tbl_batch_subject_timetable.batch_subject_timetable_id,tbl_batch_timeframe.batch_day, 
        tbl_batch_subject_timetable.subject_time_from, tbl_batch_subject_timetable.subject_time_to ,tbl_batch.batch_no , tbl_lecturer.lecturer_first_name,
         tbl_lecturer.lecturer_last_name, tbl_course.course_name, tbl_subject.subject_name')
        ->join('tbl_batch_timeframe','tbl_batch_timeframe.batch_timeframe_id = tbl_batch_subject_timetable.batch_timeframe_id')
        ->join('tbl_batch','tbl_batch.batch_id = tbl_batch_timeframe.batch_id')
        ->join('tbl_appointment','tbl_appointment.subject_id = tbl_batch_subject_timetable.subject_id AND tbl_appointment.batch_id = tbl_batch_subject_timetable.batch_id')
        ->join('tbl_lecturer','tbl_lecturer.lecturer_id = tbl_appointment.lecturer_id')
        ->join('tbl_course','tbl_course.course_id  = tbl_batch.course_id')
        ->join('tbl_subject','tbl_subject.subject_id  = tbl_batch_subject_timetable.subject_id')

        ->findAll();

        return view('timetable/timetableView',$data);
      
    }

}
?>