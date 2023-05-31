<?php 

namespace App\Models;
use CodeIgniter\Model;


class StudentModel extends Model
{

    protected $table = 'tbl_student';
    protected $primaryKey = 'student_id';
    protected $allowedFields =['student_first_name','student_last_name','student_nic','student_email','student_gender','student_bod','student_contact_no','student_address'];


}

?>