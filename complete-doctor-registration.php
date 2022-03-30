<!DOCTYPE html>
<html lang="en">

<!-- doccure/doctor-profile-settings.html  30 Nov 2019 04:12:14 GMT -->

<head>
  <meta charset="utf-8">
  <title>Black Doctor-Patient Consultancy System</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="assets/css/bootstrap.min.css">

  <!-- Fontawesome CSS -->
  <link rel="stylesheet" href="assets/plugins/fontawesome/css/fontawesome.min.css">
  <link rel="stylesheet" href="assets/plugins/fontawesome/css/all.min.css">

  <!-- Select2 CSS -->
  <link rel="stylesheet" href="assets/plugins/select2/css/select2.min.css">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="assets/plugins/bootstrap-tagsinput/css/bootstrap-tagsinput.css">

  <link rel="stylesheet" href="assets/plugins/dropzone/dropzone.min.css">

  <!-- Main CSS -->
  <link rel="stylesheet" href="assets/css/style.css">

</head>

<body>

  <!-- Main Wrapper -->
  <div class="main-wrapper">

    <!-- Header -->
    <header class="header">
      <nav class="navbar navbar-expand-lg header-nav">
        <div class="navbar-header">
          <a id="mobile_btn" href="javascript:void(0);">
            <span class="bar-icon">
              <span></span>
              <span></span>
              <span></span>
            </span>
          </a>
          <a href="#" class="navbar-brand logo">
            <img src="assets/img/logo.jpg" class="img-fluid img-responsive" alt="Logo">
          </a>
        </div>
        <div class="main-menu-wrapper">
          <div class="menu-header">
            <a href="index-2.html" class="menu-logo">
              <img src="assets/img/logo.jpg" class="img-fluid" alt="Logo">
            </a>
            <a id="menu_close" class="menu-close" href="javascript:void(0);">
              <i class="fas fa-times"></i>
            </a>
          </div>
          <ul class="main-nav">
            <li class="login-link">
              <a href="login.php">Login / Signup</a>
            </li>

          </ul>
        </div>
        <ul class="nav header-navbar-rht">
          <li class="nav-item contact-item">
            <div class="header-contact-img">
              <i class="far fa-hospital"></i>
            </div>
            <div class="header-contact-detail">
              <p class="contact-header">Contact</p>
              <p class="contact-info-header">black.doctor@info.com</p>
            </div>
          </li>
          <li class='nav-item'><a class='nav-link header-login' href='login.php'>login / Signup </a></li>

        </ul>
      </nav>
    </header>
    <!-- /Header -->
    <?php
      if(isset($_GET['username'])){
        $username = $_GET['username'];
        $email = $_GET['email'];
        $mobile = $_GET['mobile'];
      }
   ?>

    <div class="col-md-2"></div>
    <div class="col-md-7 col-lg-8 col-xl-9">

      <!-- Basic Information -->
      <div class="card">
        <div class="card-body">
          <h4 class="card-title">Basic Information</h4>
          <div class="row form-row">
            <div class="col-md-12">
              <div class="form-group">
                <div class="change-avatar">
                  <div class="profile-img">
                    <img src="assets/img/blank.png" alt="User Image">
                  </div>
                  <div class="upload-img">
                    <div class="change-photo-btn">
                      <span><i class="fa fa-upload"></i> Upload Photo</span>
                      <input type="file" class="upload" name="profile">
                    </div>
                    <small class="form-text text-muted">Allowed JPG, GIF or PNG. Max size of 2MB</small>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-group">
                <label>Username <span class="text-danger">*</span></label>
                <input type="text" class="form-control" value="<?php echo $username; ?>" name="username" readonly>
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-group">
                <label>Email <span class="text-danger">*</span></label>
                <input type="email" class="form-control" value="<?php echo $email; ?>" name="email" readonly>
              </div>
            </div>

            <div class="col-md-6">
              <div class="form-group">
                <label>Phone Number</label>
                <input type="text" class="form-control" value="<?php echo $mobile; ?>" name="mobile" readonly>
              </div>
            </div>

            <div class="col-md-6">
              <div class="form-group">
                <label>Password <span class="text-danger">*</span></label>
                <input type="password" class="form-control" name="password1">
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-group">
                <label>Confirm Password<span class="text-danger">*</span></label>
                <input type="password" class="form-control" name="password2">
              </div>
            </div>

            <div class="col-md-6">
              <div class="form-group">
                <label>Gender</label>
                <select class="form-control select" name="gender">
                  <option>Select</option>
                  <option>Male</option>
                  <option>Female</option>
                </select>
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-group mb-0">
                <label>Date of Birth</label>
                <input type="text" class="form-control" name="dob">
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- /Basic Information -->

      <!-- About Me -->
      <div class="card">
        <div class="card-body">
          <h4 class="card-title">About Me</h4>
          <div class="form-group mb-0">
            <label>Biography</label>
            <textarea class="form-control" rows="5" name="bio"></textarea>
          </div>
        </div>
      </div>
      <!-- /About Me -->

      <!-- Clinic Info -->
      <div class="card">
        <div class="card-body">
          <h4 class="card-title">Clinic Info</h4>
          <div class="row form-row">
            <div class="col-md-6">
              <div class="form-group">
                <label>Clinic Name</label>
                <input type="text" class="form-control" name="clinic_name">
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-group">
                <label>Clinic Address</label>
                <input type="text" class="form-control" name="clinic_address">
              </div>
            </div>
            <div class="col-md-12">
              <div class="form-group">
                <label>Clinic Images</label>
                <form action="#" class="dropzone" name="clinic_image"></form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- /Clinic Info -->

    <!-- Contact Details -->
    <div class="card contact-card">
      <div class="card-body">
        <h4 class="card-title">Contact Details</h4>
        <div class="row form-row">
          <div class="col-md-6">
            <div class="form-group">
              <label>Address Line 1</label>
              <input type="text" class="form-control" name="address_line_1">
            </div>
          </div>
          <div class="col-md-6">
            <div class="form-group">
              <label class="control-label">Address Line 2</label>
              <input type="text" class="form-control" name="address_line_2">
            </div>
          </div>
          <div class="col-md-6">
            <div class="form-group">
              <label class="control-label">City</label>
              <input type="text" class="form-control" name="city">
            </div>
          </div>

          <div class="col-md-6">
            <div class="form-group">
              <label class="control-label">State / Province</label>
              <input type="text" class="form-control" name="city">
            </div>
          </div>
          <div class="col-md-6">
            <div class="form-group">
              <label class="control-label">Country</label>
              <input type="text" class="form-control" name="city">
            </div>
          </div>
          <div class="col-md-6">
            <div class="form-group">
              <label class="control-label">Postal Code</label>
              <input type="text" class="form-control" name="postal_code">
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- /Contact Details -->

    <!-- Pricing -->
    <div class="card">
      <div class="card-body">
        <h4 class="card-title">Pricing</h4>

        <div class="form-group mb-0">
          <div id="pricing_select">
            <div class="custom-control custom-radio custom-control-inline">
              <input type="radio" id="price_free" name="rating_option" class="custom-control-input" value="price_free"
                checked>
              <label class="custom-control-label" for="price_free">Free</label>
            </div>
            <div class="custom-control custom-radio custom-control-inline">
              <input type="radio" id="price_custom" name="rating_option" value="custom_price"
                class="custom-control-input">
              <label class="custom-control-label" for="price_custom">Custom Price (per hour)</label>
            </div>
          </div>

        </div>

        <div class="row custom_price_cont" id="custom_price_cont" style="display: none;">
          <div class="col-md-4">
            <input type="text" class="form-control" id="custom_rating_input" name="custom_price_value" value=""
              placeholder="20">
            <small class="form-text text-muted">Custom price you can add</small>
          </div>
        </div>

      </div>
    </div>
    <!-- /Pricing -->

    <!-- Services and Specialization -->
    <div class="card services-card">
      <div class="card-body">
        <h4 class="card-title">Services and Specialization</h4>
        <div class="form-group">
          <label>Services</label>
          <input type="text" data-role="tagsinput" class="input-tags form-control" placeholder="Enter Services"
            name="services" value="Tooth cleaning" id="services" name="service_list">
          <small class="form-text text-muted">Note : Type & Press enter to add new services</small>
        </div>
        <div class="form-group mb-0">
          <label>Specialization </label>
          <input class="input-tags form-control" type="text" data-role="tagsinput" placeholder="Enter Specialization"
            name="specialist" value="Children Care,Dental Care" id="specialist" name="specialization_list">
          <small class="form-text text-muted">Note : Type & Press enter to add new specialization</small>
        </div>
      </div>
    </div>
    <!-- /Services and Specialization -->

    <!-- Education -->
    <div class="card">
      <div class="card-body">
        <h4 class="card-title">Education</h4>
        <div class="education-info">
          <div class="row form-row education-cont">
            <div class="col-12 col-md-10 col-lg-11">
              <div class="row form-row">
                <div class="col-12 col-md-6 col-lg-4">
                  <div class="form-group">
                    <label>Degree</label>
                    <input type="text" class="form-control" name="degree">
                  </div>
                </div>
                <div class="col-12 col-md-6 col-lg-4">
                  <div class="form-group">
                    <label>College/Institute</label>
                    <input type="text" class="form-control" name="collage">
                  </div>
                </div>
                <div class="col-12 col-md-6 col-lg-4">
                  <div class="form-group">
                    <label>Year of Completion</label>
                    <input type="text" class="form-control" name="year_of_completion">
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="add-more">
          <a href="javascript:void(0);" class="add-education"><i class="fa fa-plus-circle"></i> Add More</a>
        </div>
      </div>
    </div>
    <!-- /Education -->

    <!-- Experience -->
    <div class="card">
      <div class="card-body">
        <h4 class="card-title">Experience</h4>
        <div class="experience-info">
          <div class="row form-row experience-cont">
            <div class="col-12 col-md-10 col-lg-11">
              <div class="row form-row">
                <div class="col-12 col-md-6 col-lg-4">
                  <div class="form-group">
                    <label>Hospital Name</label>
                    <input type="text" class="form-control" name="expr_hosp">
                  </div>
                </div>
                <div class="col-12 col-md-6 col-lg-4">
                  <div class="form-group">
                    <label>From</label>
                    <input type="text" class="form-control" name="from_date">
                  </div>
                </div>
                <div class="col-12 col-md-6 col-lg-4">
                  <div class="form-group">
                    <label>To</label>
                    <input type="text" class="form-control" name="to_date">
                  </div>
                </div>
                <div class="col-12 col-md-6 col-lg-4">
                  <div class="form-group">
                    <label>Designation</label>
                    <input type="text" class="form-control" name="design">
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="add-more">
          <a href="javascript:void(0);" class="add-experience"><i class="fa fa-plus-circle"></i> Add More</a>
        </div>
      </div>
    </div>
    <!-- /Experience -->

    <!-- Awards -->
    <div class="card">
      <div class="card-body">
        <h4 class="card-title">Awards</h4>
        <div class="awards-info">
          <div class="row form-row awards-cont">
            <div class="col-12 col-md-5">
              <div class="form-group">
                <label>Awards</label>
                <input type="text" class="form-control" name="award_name">
              </div>
            </div>
            <div class="col-12 col-md-5">
              <div class="form-group">
                <label>Year</label>
                <input type="text" class="form-control" name="award_year">
              </div>
            </div>
          </div>
        </div>
        <div class="add-more">
          <a href="javascript:void(0);" class="add-award"><i class="fa fa-plus-circle"></i> Add More</a>
        </div>
      </div>
    </div>
    <!-- /Awards -->


    <div class="submit-section submit-btn-bottom">
      <button type="submit" class="btn btn-primary submit-btn" name="complete_registration">Submit</button>
    </div>

  </div>
  </div>

  </div>

  </div>
  <!-- /Page Content -->


  <!-- Footer -->
  <footer class="footer">

    <!-- Footer Top -->
    <div class="footer-top">
      <div class="container-fluid">
        <div class="row">
          <div class="col-lg-3 col-md-6">

            <!-- Footer Widget -->
            <div class="footer-widget footer-about">
              <div class="footer-logo">
                <img src="assets/img/logo.jpg" alt="logo">
              </div>
              <div class="footer-about-content">
                <p>We serve our customer 24X7 with quality treatment and consultancy at home as well as online.</p>
                <div class="social-icon">
                  <ul>
                    <li>
                      <a href="#" target="_blank"><i class="fab fa-facebook-f"></i> </a>
                    </li>
                    <li>
                      <a href="#" target="_blank"><i class="fab fa-twitter"></i> </a>
                    </li>
                    <li>
                      <a href="#" target="_blank"><i class="fab fa-linkedin-in"></i></a>
                    </li>
                    <li>
                      <a href="#" target="_blank"><i class="fab fa-instagram"></i></a>
                    </li>
                    <li>
                      <a href="#" target="_blank"><i class="fab fa-dribbble"></i> </a>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
            <!-- /Footer Widget -->

          </div>

          <div class="col-lg-3 col-md-6">

            <!-- Footer Widget -->
            <div class="footer-widget footer-menu">
              <h2 class="footer-title">For Patients</h2>
              <ul>
                <li><a href="index.php"><i class="fas fa-angle-double-right"></i> Home</a></li>
                <li><a href="login.php"><i class="fas fa-angle-double-right"></i> Login</a></li>
                <li><a href="register.php"><i class="fas fa-angle-double-right"></i> Register</a></li>
                <li><a href="search.php"><i class="fas fa-angle-double-right"></i> Find Doctor</a></li>
                <li><a href="privacy-policy.php"><i class="fas fa-angle-double-right"></i> Privacy Policy</a>
                </li>
              </ul>
            </div>
            <!-- /Footer Widget -->

          </div>

          <div class="col-lg-3 col-md-6">

            <!-- Footer Widget -->
            <div class="footer-widget footer-menu">
              <h2 class="footer-title">For Doctors</h2>
              <ul>
                <li><a href="appointments.php"><i class="fas fa-angle-double-right"></i> Appointments</a></li>
                <li><a href="chat.php"><i class="fas fa-angle-double-right"></i> Chat</a></li>
                <li><a href="login.php"><i class="fas fa-angle-double-right"></i> Login</a></li>
                <li><a href="doctor-register.php"><i class="fas fa-angle-double-right"></i> Register</a></li>
                <li><a href="term-condition.php"><i class="fas fa-angle-double-right"></i> Terms and Condition</a>
                </li>
              </ul>
            </div>
            <!-- /Footer Widget -->

          </div>

          <div class="col-lg-3 col-md-6">

            <!-- Footer Widget -->
            <div class="footer-widget footer-contact">
              <h2 class="footer-title">Contact Us</h2>
              <div class="footer-contact-info">
                <div class="footer-address">
                  <span><i class="fas fa-map-marker-alt"></i></span>
                  <p> Meganagna, Amare and his Family Building<br> Addis Ababa, Ethiopia </p>
                </div>
                <p>
                  <i class="fas fa-phone-alt"></i> +251923799232
                </p>
                <p class="mb-0">
                  <i class="fas fa-envelope"></i> black.doctor@info.com
                </p>
              </div>
            </div>
            <!-- /Footer Widget -->

          </div>

        </div>
      </div>
    </div>
    <!-- /Footer Top -->

    <!-- Footer Bottom -->
    <div class="footer-bottom">
      <div class="container-fluid">

        <!-- Copyright -->
        <div class="copyright">
          <div class="row">
            <div class="col-md-6 col-lg-6">
              <div class="copyright-text">
                <p class="mb-0"><a href="https://www.temxtech.66ghz.com" target="_blank">TemxTech</a></p>
              </div>
            </div>
            <div class="col-md-6 col-lg-6">

              <!-- Copyright Menu -->
              <div class="copyright-menu">
                <ul class="policy-menu">
                  <li><a href="term-condition.php">Terms and Conditions</a></li>
                  <li><a href="privacy-policy.php">Policy</a></li>
                </ul>
              </div>
              <!-- /Copyright Menu -->

            </div>
          </div>
        </div>
        <!-- /Copyright -->

      </div>
    </div>
    <!-- /Footer Bottom -->

  </footer>
  <!-- /Footer -->

  </div>
  <!-- /Main Wrapper -->

  <!-- jQuery -->
  <script src="assets/js/jquery.min.js"></script>

  <!-- Bootstrap Core JS -->
  <script src="assets/js/popper.min.js"></script>
  <script src="assets/js/bootstrap.min.js"></script>

  <!-- Sticky Sidebar JS -->
  <script src="assets/plugins/theia-sticky-sidebar/ResizeSensor.js"></script>
  <script src="assets/plugins/theia-sticky-sidebar/theia-sticky-sidebar.js"></script>

  <!-- Select2 JS -->
  <script src="assets/plugins/select2/js/select2.min.js"></script>

  <!-- Dropzone JS -->
  <script src="assets/plugins/dropzone/dropzone.min.js"></script>

  <!-- Bootstrap Tagsinput JS -->
  <script src="assets/plugins/bootstrap-tagsinput/js/bootstrap-tagsinput.js"></script>

  <!-- Profile Settings JS -->
  <script src="assets/js/profile-settings.js"></script>

  <!-- Custom JS -->
  <script src="assets/js/script.js"></script>

</body>

<!-- doccure/doctor-profile-settings.html  30 Nov 2019 04:12:15 GMT -->

</html>