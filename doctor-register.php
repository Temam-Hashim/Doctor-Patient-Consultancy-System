<!-- header -->
<?php 
 require_once "partials/header.php"

?>
<!-- /Header -->

<?php

if(isset($_POST['doctor_register'])){
	$name = $general->Escape($_POST['name']);
	$email = $general->Escape($_POST['email']);
	$mobile = $general->Escape($_POST['mobile']);
	// chech if user already exists
	$count = $general->CheckDuplicateUser($email);
	if($count>0){
		echo $general->ErrorMsg('This User Already Exist in Our System <a href="login.php">Login Here</a>');
	}else{
		$res = $doctors->RegisterDoctor($name,$mobile,$email);
		if($res){
      
      $from = "ourgroupemail2018@gmail.com";
			$subject = "Complete Your registration of Black Doctor-Patient Consultancy System";
  
			$body = "<p>Dear $name,<br><hr> </p>";
			$body.= "<p>Welcome to Our Black Consultancy System. <br></p>";
			$body.= "<p>We are really happy to have you with us. We appreciate your interest to work with us. <br></p>";
      $body.= "<p 'style=color:blue'>Before your access to our dashboard you are required to complete your registration by providing us more detail about your profession as well as additional information.  . <br></p>";
			$body.= "<p>To get full authority of your dashboard please complete your registration by following the link below.<br></p>";
			$body.= "<a href='localhost/doctor-appointment-booking/complete-doctor-registration.php?username=$name&email=$email&mobile=$mobile'>dhfugcbufhdiueygvucheiuhcugvbcyebjcrifhiceubvgfubcjwbjsbcbfvudhbvcjbdwdheucbbwebquucweucbecvwebcweuhdcvchduducwbwvhbswyetytfvchvhc</a><br><hr><hr>";
			$body.= "you can change your password as soon as you get logged into our system from change password section .<br><hr><hr>";
			$body.=  "<p>FROM BLACK FINANCIAL SOLUTION</p><br>";
			$body.=  "<p 'style=color:red'>Please do not replay to this email. this is system generated email, for any query please contact us using our contact detail from our offical website.<br><hr></p><br>";
			$body.=  "<p>THANK YOU FOR CHOOSING US.</p><br>";

			PHP_MAILER($email,$from,$subject,$body);
			echo $general->SuccessMsg('Please Check Your Email to Complete your Registration');
		}else{
			echo $general->ErrorMsg('Please Try Again');
		}
	}

}

?>

<!-- Page Content -->
<div class="content">
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-8 offset-md-2">

        <!-- Account Content -->
        <div class="account-content">
          <div class="row align-items-center justify-content-center">
            <div class="col-md-7 col-lg-6 login-left">
              <img src="assets/img/login-banner.png" class="img-fluid" alt="Login Banner">
            </div>
            <div class="col-md-12 col-lg-6 login-right">
              <div class="login-header">
                <h3>Doctor Register <a href="register.php">Not a Doctor?</a></h3>
              </div>

              <!-- Register Form -->
              <form action="#" method="post">
                <div class="form-group form-focus">
                  <input type="text" class="form-control floating" name="name">
                  <label class="focus-label">Full Name</label>
                </div>
                <div class="form-group form-focus">
                  <input type="email" class="form-control floating" name="email">
                  <label class="focus-label">Email Address</label>
                </div>
                <div class="form-group form-focus">
                  <input type="text" class="form-control floating" name="mobile">
                  <label class=" focus-label">Mobile</label>
                </div>

                <div class="text-right">
                  <a class="forgot-link" href="login.php">Already have an account?</a>
                </div>
                <button class="btn btn-primary btn-block btn-lg login-btn" type="submit"
                  name="doctor_register">Signup</button>
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
        <!-- /Account Content -->

      </div>
    </div>

  </div>

</div>
<!-- /Page Content -->

<?php 
 require_once "partials/footer.php"

?>