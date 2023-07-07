<?php 

namespace App\Models;
use CodeIgniter\Model;


class BatchTimeFrameModel extends Model
{

    protected $table = 'tbl_batch_timeframe';
    protected $primaryKey = 'batch_timeframe_id';
    protected $allowedFields =['batch_day','batch_time_from','batch_time_to','batch_id'];


}

?>