<!-- header -->
<?php 
 require_once "partials/header.php"

?>
<!-- /Header -->

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
                <h3>Doctor Login <a href="login.php">Not a Doctor?</a></h3>
              </div>

              <!-- doctor login Form -->
              <form action="#" method="POST">
                <div class="form-group form-focus">
                  <input type="email" class="form-control floating" name="email">
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
                  name="doctor_login">Login</button>
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
                <div class="text-center dont-have">Don’t have an account? <a href="register.php">Register</a></div>
              </form>
              <!-- /doctor login Form -->

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