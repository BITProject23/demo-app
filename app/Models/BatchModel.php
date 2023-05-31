<?php 

namespace App\Models;
use CodeIgniter\Model;


class BatchModel extends Model
{

    protected $table = 'tbl_batch';
    protected $primaryKey = 'batch_id';
    protected $allowedFields =['batch_no','batch_day','batch_time_from','batch_time_to','course_id'];


}

?>