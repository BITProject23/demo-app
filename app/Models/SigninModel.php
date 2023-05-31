<?php 

namespace App\Models;
use CodeIgniter\Model;


class SigninModel extends Model
{

    protected $table = 'tbl_user';
    protected $allowedFields =['user_name','user_email','user_password'];


}

?>