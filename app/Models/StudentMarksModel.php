<?php 

namespace App\Models;
use CodeIgniter\Model;


class StudentMarksModel extends Model
{

    protected $table = 'tbl_student_marks';
    protected $primaryKey = 'student_marks_id';
    protected $allowedFields =['student_id','subject_id','batch_id','assignment_name','assignment_discreption','assignment_date','assignment_marks','assignment_grade'];


}

?>