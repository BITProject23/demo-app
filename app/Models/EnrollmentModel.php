<?php 

namespace App\Models;
use CodeIgniter\Model;


class EnrollmentModel extends Model
{

    protected $table = 'tbl_enrollment';
    protected $primaryKey = 'en_id';
    protected $allowedFields =['en_date','student_id','course_id','batch_id'];
    protected $useSoftDeletes = 'true';



}

?>