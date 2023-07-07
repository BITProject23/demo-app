<?php 

namespace App\Models;
use CodeIgniter\Model;


class BatchModel extends Model
{

    protected $table = 'tbl_batch';
    protected $primaryKey = 'batch_id';
    protected $allowedFields =['batch_no','batch_start_date','batch_end_date','course_id'];


}

?>