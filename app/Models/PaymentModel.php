<?php 

namespace App\Models;
use CodeIgniter\Model;


class PaymentModel extends Model
{

    protected $table = 'tbl_payment';
    protected $primaryKey = 'payment_id';
    protected $allowedFields =['batch_id','student_id','course_payment','payment_year_month','payment_remark'];


}

?>