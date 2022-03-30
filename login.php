<!-- header -->
<?php 
 require_once "partials/header.php";


// check credential to login to patient area
if(isset($_POST['patient_login'])){
  $email = $general->Escape($_POST['email']);
  $password = $general->Escape($_POST['password']);

  $res = $patients->FetchPatient($email);
  $count = $res->num_rows;
  if($count==0){
    echo $general->ErrorMsg("This Email is Not Registered with Us. Please Complete your Registration First! <a href='register.php' class='btn btn-md btn-success'>Register</a>");
  }else{
    $row = $res->fetch_array();
    $email_db = $row['email'];
    $mobile_db = $row['mobile'];
    $pass_db = $row['password'];

    if($password == $pass_db && $email == $email_db){
      $_SESSION['patient_email'] = $email_db;
      $_SESSION['patient_mobile'] = $mobile_db;
      
      header("Location:patient/index.php");
    }else{
     echo $general->ErrorMsg("Invalid Email Or Password");
    }
  }
 
}


?>

<!-- Page Content -->
<div class="content">
  <div class="container-fluid">

    <div class="row">
      <div class="col-md-8 offset-md-2">

        <!-- Login Tab Content -->
        <div class="account-content">
          <div class="row align-items-center justify-content-center">
            <div class="col-md-7 col-lg-6 login-left">
              <img src="assets/img/login-banner.png" class="img-fluid" alt="Doccure Login">
            </div>
            <div class="col-md-12 col-lg-6 login-right">
              <div class="login-header">
                <h3>Patient Login <a href="doctor-login.php">Are you a Doctor?</a></h3>
              </div>

              <form action="" method="POST">
                <div class="form-group form-focus">
                  <input type="email" class="form-control floating" name="email"
                    value="<?php echo $general->SetValue('email'); ?>">
                  <label class="focus-label">Email</label>
                </div>
                <div class="form-group form-focus">
                  <input type="password" class="form-control floating" name="password">
                  <label class="focus-label">Password</label>
                </div>
                <div class="text-right">
                  <a class="forgot-link" href="forgot-password.php">Forgot Password ?</a>
                </div>
                <button class="btn btn-primary btn-block btn-lg login-btn" type="submit"
                  name="patient_login">Login</button>
                <div class=" login-or">
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
                <div class="text-center dont-have">Don’t have an account? <a href="register.php">Register</a></div>
              </form>
            </div>
          </div>
        </div>
        <!-- /Login Tab Content -->

      </div>
    </div>

  </div>

</div>
<!-- /Page Content -->

<!-- Footer -->
<!-- header -->
<?php 
 require_once "partials/footer.php"

?>