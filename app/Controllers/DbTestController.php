<?php

namespace App\Controllers;

class DbTestController extends BaseController
{
    public function index()
    {
        
        $db = \Config\Database::connect();

        $query = $db->query('select * from student');

        $result = $query->getResult();

        echo "<pre>";

        //print_r($result);
        
        //echo "<br> <hr>";
        
        foreach ($query->getResult('array') as $row) {
            echo "<br>" . $row['std_fname'];
            echo "<br>" . $row['std_lname'];
            echo "<br>" . $row['std_email_address'];
        }
    }
}
