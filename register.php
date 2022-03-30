<?php require_once "partials/header.php" ?>
<!-- /Header -->

<?php

if(isset($_POST['patient_register'])){
	$fname = $general->Escape($_POST['fname']);
	$lname = $general->Escape($_POST['lname']);
	$email = $general->Escape($_POST['email']);
	$mobile = $general->Escape($_POST['mobile']);
	$password = $general->randomPassword();
	// chech if user already exists
	$count = $general->CheckDuplicateUser($email);
	if($count>0){
		$error = $general->ErrorMsg('This User Already Exist in Our System <a href="login.php" class="btn btn-md btn-success">Login Here</a>');
    echo $error;
	}else{
		$res = $patients->RegisterPatient($fname,$lname,$email,$mobile,$password);
		if($res){
			// send email to patient with login credentials

      $from = "ourgroupemail2018@gmail.com";
			$subject = "Login Credential From Black Financial Solution";
  
			$body = "<p>Dear $fname $lname,<br><hr> </p>";
			$body.= "<p>Welcome to Our Black Consultancy System. <br></p>";
			$body.= "<p>We are really happy to have you with us and assist you under any circumstance with a huge number of doctor registered with us. <br></p>";
			$body.= "<p>To access our system here is the detail of your login credential.<br></p>";
			$body.= "USERNAME: $email.<br><hr><hr>";
			$body.= "PASSWORD: $password.<br><hr><hr>";
			$body.= "you can change your password as soon as you get logged into our system from change password section .<br><hr><hr>";
			$body.=  "<p>FROM BLACK FINANCIAL SOLUTION</p><br>";
			$body.=  "<p color='red'>Please do not replay to this email. this is system generated email, for any query please contact us using our contact detail from our offical website.<br><hr></p><br>";
			$body.=  "<p>THANK YOU FOR CHOOSING US.</p><br>";

			PHP_MAILER($email,$from,$subject,$body);
			$success = $general->SuccessMsg('Please Check Your Email for Login Credential');
      echo $success;
		}else{
			echo FailedMsg('Please Try Again');
		}
	}

}

?>

<!-- Page Content -->
<div class="content">
  <div class="container-fluid">

    <div class="row">
      <div class="col-md-8 offset-md-2">

        <!-- Register Content -->
        <div class="account-content">
          <div class="row align-items-center justify-content-center">
            <div class="col-md-7 col-lg-6 login-left">
              <img src="assets/img/login-banner.png" class="img-fluid" alt="Doccure Register">
            </div>
            <div class="col-md-12 col-lg-6 login-right">
              <div class="login-header">
                <h3>Patient Register <a href="doctor-register.php">Are you a Doctor?</a></h3>
              </div>

              <!-- Register Form -->
              <form action="" method="post">
                <div class="row">
                  <div class="form-group form-focus col-md-6">
                    <input type="text" class="form-control floating" name="fname">
                    <label class="focus-label"> First Name</label>
                  </div>
                  <div class="form-group form-focus col-md-6">
                    <input type="text" class="form-control floating" name="lname">
                    <label class="focus-label"> Last Name</label>
                  </div>

                </div>


                <div class="form-group form-focus">
                  <input type="text" class="form-control floating" name="mobile">
                  <label class="focus-label">Mobile Number</label>
                </div>
                <div class="form-group form-focus">
                  <input type="text" class="form-control floating" name="email">
                  <label class="focus-label">Email Address</label>
                </div>
                <div class="text-right">
                  <a class="forgot-link" href="login.php">Already have an account?</a>
                </div>
                <button class="btn btn-primary btn-block btn-lg login-btn" name="patient_register"
                  type="submit">Signup</button>
                <div class="login-or">
                  <span class="or-line"></span>
                  <span class="span-or">or</span>
                </div>
                <div class="row form-row social-login">
                  <div class="col-6">
                    <a href="#" class="btn btn-facebook btn-block"><i class="fab fa-facebook-f mr-1"></i> Login</a>
                  </div>
                  <div class="col-6">
                    <a href="#" class="btn btn-google btn-block"><i class="fab fa-google mr-1"></i> Login</a>
                  </div>
                </div>
              </form>
              <!-- /Register Form -->

            </div>
          </div>
        </div>
        <!-- /Register Content -->

      </div>
    </div>

  </div>

</div>
<!-- /Page Content -->
<?php require_once "partials/footer.php" ?>