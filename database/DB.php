<?php

       // local server
    $db['db_host'] = "localhost";
    $db['db_user'] = "root";
    $db['db_password'] = "";
    $db['db_name'] = "black_doctor";
 
     foreach($db as $key => $value){
         define(strtoupper($key),$value);
     }
     $connect = mysqli_connect(DB_HOST,DB_USER,DB_PASSWORD,DB_NAME);


// call class methods here
require_once __DIR__."../../Handler/function.php";
$patients = new PatientHandler();
$doctors = new DoctorHandler();
$general = new GeneralHandler();

?>