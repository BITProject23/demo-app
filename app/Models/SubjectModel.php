<?php 

namespace App\Models;
use CodeIgniter\Model;


class SubjectModel extends Model
{

    protected $table = 'tbl_subject';
    protected $primaryKey = 'subject_id ';
    protected $allowedFields =['subject_name','subject_code',];


}

?>