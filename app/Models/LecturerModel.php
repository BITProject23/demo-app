<?php 

namespace App\Models;
use CodeIgniter\Model;


class LecturerModel extends Model
{

    protected $table = 'tbl_lecturer';
    protected $primaryKey = 'lecturer_id';
    protected $allowedFields =['lecturer_no','lecturer_first_name','lecturer_last_name','lecturer_nic','lecturer_email',
    'lecturer_gender','lecturer_bod','lecturer_contact_no','lecturer_address' ,'lec_qulification'];
    protected $useSoftDeletes = 'true';


}

?>