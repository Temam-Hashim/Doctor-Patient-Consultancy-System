<?php
  session_start();
  
  unset($_SESSION['patient_email']);
  unset($_SESSION['patient_mobile']);
  header("Location:../../login.php");

?>