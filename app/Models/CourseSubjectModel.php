<?php 

namespace App\Models;
use CodeIgniter\Model;


class CourseSubjectModel extends Model
{

    protected $table = 'tbl_course_subject';
    protected $primaryKey = 'course_subject_id';
    protected $allowedFields =['course_id','subject_id','status'];



}

?>