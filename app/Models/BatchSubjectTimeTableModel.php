<?php 

namespace App\Models;
use CodeIgniter\Model;


class BatchSubjectTimeTableModel extends Model
{

    protected $table = 'tbl_batch_subject_timetable';
    protected $primaryKey = 'batch_subject_timetable_id';
    protected $allowedFields =['batch_timeframe_id','batch_id','subject_id','subject_time_from','subject_time_to'];


}

?>