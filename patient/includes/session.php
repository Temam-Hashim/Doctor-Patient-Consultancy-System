<?php
  session_start();
  
  if(!isset($_SESSION['patient_email'])){
    header("Location:../login.php");
  }

?>