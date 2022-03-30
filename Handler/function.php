<?php
declare(strict_types = 1);

interface DoctorInterface{
  public function RegisterDoctor($name,$mobile,$email);
  public function GetDocId($email);
  public function AddPersonalDetail($email,$profile,$password,$gender,$dob, $bio,$price,$service_list,$category);
  public function AddAddress($doc_id,$address_line_1,$address_line_2,$city,$state,$country,$pincode);
  public function AddAward($doc_id,$award_name,$award_year);
  public function AddClinic($doc_id,$clinic_name,$clinic_address,$clinic_image);
  public function AddExprience($doc_id,$exp_hosp,$from_date,$to_date,$design);
  public function AddEducation($doc_id,$degree,$collage,$year_of_completion);
}
interface PatientInterface{
  public function RegisterPatient($fname,$lname, $email, $mobile, $password);

}

interface GeneralInterface{
  public function SuccessMsg($msg);
  public function ErrorMsg($msg);
  public function CheckDuplicateUser($email);
  public function randomPassword();
  public function SetValue($input);
  public function Escape($value);
}

class PatientHandler implements PatientInterface{

  public function RegisterPatient($fname,$lname, $email, $mobile, $password){
    global $connect;
    
    $sql = "INSERT INTO `patients`(`first_name`,`last_name`,`email`,`mobile`,`password`)VALUES('$fname','$lname','$email','$mobile','$password')";
    $res = $connect->query($sql);
    return $res;
  }

 
  
  // get patient detail
  public function FetchPatient($email){
    global $connect;
    $sql = "SELECT * FROM `patients` WHERE `email`='$email'";
    $res = $connect->query($sql);
    return $res;
  }
}

class DoctorHandler implements DoctorInterface{
 
  public function RegisterDoctor($name,$mobile,$email){
    global $connect;
    $sql = "INSERT INTO `doctors`(`doc_name`,`doc_email`,`doc_mobile`)VALUES('$name','$email','$mobile')";
    $res = $connect->query($sql);
    return $res;
  }

  // get doctorEmail first
  public function GetDocId($email)
  {
      //  fetch data from current doctor
      $sql = "SELECT * FROM `doctors` WHERE `doc_email`='$email'";
      $result = $connect->query($sql);
      $row = $res->fetch_array();
      $doc_id = $row['doc_id'];
      return $doc_id;

  }
  
  public function AddPersonalDetail($email,$profile,$password,$gender,$dob, $bio,$price,$service_list,$category){
    global $connect;
    $sql = "UPDATE `doctors` SET `doc_password`='$password',
    `doc_dob`='$dob',`doc_gender`='$gender',`doc_category`='$specialization',
    `doc_service_list`='$service_list',`doc_bio`='$bio',`doc_pricing`='$price'
     WHERE `doc_email`='$email'";
     
     $res= $connect->query($sql); 
  }
  public function AddAddress($doc_id,$address_line_1,$address_line_2,$city,$state,$country,$pincode){

    $sql3 = "INSERT INTO `doctor_address`(`doc_id`, `address_line1`, `address_line2`, `city`, `state`, `country`, `pincode`) 
    VALUES ('$doc_id','$address_line_1','$address_line_2','$city','$state','$country','$pincode')";
    $res3 = $connect->query($sql);
  }
   public function AddEducation($doc_id,$degree,$collage,$year_of_completion){
    //  insert education
    $sql4 = "INSERT INTO `doctor_education`(`doc_id`, `degree_name`, `collage`, `year_completed`) 
    VALUES ('$doc_id','$degree','$collage','$year_of_completion')";
    $res4 = $connect->query($sql4);
   //  insert awards
  }
  public function AddAward($doc_id,$award_name,$award_year){
    $sql5 = "INSERT INTO `doctor_awards`(`doc_id`,`award_name`, `award_detail`)
      VALUES ('$doc_id','$award_name','$award_year')";
      $res5 = $connect->query($sql5);
  }
  public function AddExprience($doc_id,$exp_hosp,$from_date,$to_date,$design){
      // insert Exprience
      $sql6 = "INSERT INTO `doctor_exprience`(`doc_id`, `hospital_name`, `from_date`, `to_date`, `designation`) 
        VALUES ('$doc_id','$exp_hosp','$from_date','$to_date','$design')";
      $res6 = $connect->query($sql6);
  }

    // insert clinic
  public function AddClinic($doc_id,$clinic_name,$clinic_address,$clinic_image){
    $sql7 = "INSERT INTO `doctor_clinic`(`doc_id`, `clinic_name`, `clinic_address`, `clinic_image`) 
    VALUES ('$doc_id','$clinic_name','$clinic_address','$clinic_image')";
    $res7 = $connect->query($sql7);
    
  }
}


class GeneralHandler implements GeneralInterface{

  public function CheckDuplicateUser($email){
    global $connect;
    $sql = "SELECT * from `patients` WHERE `email`='$email'";
    $res = $connect->query($sql);
    $count = $res->num_rows;
    return $count;
  } 

  // random password
  public function randomPassword() {
    $alphabet = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ1234567890';
    $pass = array(); //remember to declare $pass as an array
    $alphaLength = strlen($alphabet) - 1; //put the length -1 in cache
    for ($i = 0; $i < 8; $i++) {
        $n = rand(0, $alphaLength);
        $pass[] = $alphabet[$n];
    }
    return implode($pass); //turn the array into a string
  }
  
  // success mesg
  public function SuccessMsg($msg){
    return "<div class='alert alert-success text-center'>Operation Successful. $msg</div>";
  } 
  
  // error msg
  public function ErrorMsg($msg){
    return "<div class='alert alert-danger text-center'>Operation Failed. $msg</div>";
  } 

 // set input after validation to input text 
  public function SetValue($input){
    return isset($_POST[$input])? htmlspecialchars($_POST[$input]):"";

   }

  //  escape real string for the seek of security
  public function Escape($value){
    global $connect;
    return mysqli_real_escape_string($connect,$value);
  }
  
}



?>