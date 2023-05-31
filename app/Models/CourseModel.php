<?php 

namespace App\Models;
use CodeIgniter\Model;


class CourseModel extends Model
{

    protected $table = 'tbl_course';
    protected $primaryKey = 'course_id';
    protected $allowedFields =['course_name','course_code','course_fee'];


}

?>