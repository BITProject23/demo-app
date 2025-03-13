<?php 

namespace App\Models;
use CodeIgniter\Model;


class AppointModel extends Model
{

    protected $table = 'tbl_appointment';
    protected $primaryKey = 'appoint_id';
    protected $allowedFields =['course_id','batch_id','lecturer_id','subject_id','appoint_data'];
    protected $useSoftDeletes = 'true';


}

?>