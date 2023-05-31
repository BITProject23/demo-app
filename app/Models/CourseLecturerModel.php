<?php 

namespace App\Models;
use CodeIgniter\Model;


class CourseLecturerModel extends Model
{

    protected $table = 'tbl_course_lecturer';
    protected $primaryKey = 'course_lecturer_id';
    protected $allowedFields =['course_id','lecturer_id','subject_id'];



}

?>