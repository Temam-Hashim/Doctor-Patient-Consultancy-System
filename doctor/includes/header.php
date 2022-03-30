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
  <link rel="stylesheet" href="../assets/css/bootstrap.min.css">

  <!-- Fontawesome CSS -->
  <link rel="stylesheet" href="../assets/plugins/fontawesome/css/fontawesome.min.css">
  <link rel="stylesheet" href="../assets/plugins/fontawesome/css/all.min.css">

  <!-- Select2 CSS -->
  <link rel="stylesheet" href="../assets/plugins/select2/css/select2.min.css">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="../assets/plugins/bootstrap-tagsinput/css/bootstrap-tagsinput.css">

  <link rel="stylesheet" href="../assets/plugins/dropzone/dropzone.min.css">

  <!-- Main CSS -->
  <link rel="stylesheet" href="../assets/css/style.css">

  <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!--[if lt IE 9]>
			<script src="assets/js/html5shiv.min.js"></script>
			<script src="assets/js/respond.min.js"></script>
		<![endif]-->

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
          <a href="index-2.html" class="navbar-brand logo">
            <img src="../assets/img/logo.jpg" class="img-fluid" alt="Logo">
          </a>
        </div>
        <div class="main-menu-wrapper">
          <div class="menu-header">
            <a href="index-2.html" class="menu-logo">
              <img src="../assets/img/logo.jpg" class="img-fluid" alt="Logo">
            </a>
            <a id="menu_close" class="menu-close" href="javascript:void(0);">
              <i class="fas fa-times"></i>
            </a>
          </div>
          <ul class="main-nav">
            <li>
              <a href="../index.php">Home</a>
            </li>
            <li class="has-submenu active">
              <a href="#">Doctors <i class="fas fa-chevron-down"></i></a>
              <ul class="submenu">
                <li><a href="doctor-dashboard.php">Doctor Dashboard</a></li>
                <li><a href="appointments.php">Appointments</a></li>
                <li><a href="schedule-timings.php">Schedule Timing</a></li>
                <li><a href="my-patients.php">Patients List</a></li>
                <li class="active"><a href="patient-profile.php">Patients Profile</a></li>
                <li><a href="chat-doctor.php">Chat</a></li>
                <li><a href="invoices.php">Invoices</a></li>
                <li><a href="doctor-profile-settings.php">Profile Settings</a></li>
                <li><a href="reviews.php">Reviews</a></li>
                <li><a href="../doctor-register.php">Doctor Register</a></li>
              </ul>
            </li>

            <li class="login-link">
              <a href="../login.php">Login / Signup</a>
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
              <p class="contact-info-header"> +251 923 79 92 32</p>
            </div>
          </li>

          <!-- User Menu -->
          <li class="nav-item dropdown has-arrow logged-item">
            <a href="#" class="dropdown-toggle nav-link" data-toggle="dropdown">
              <span class="user-img">
                <img class="rounded-circle" src="../assets/img/doctors/doctor-thumb-02.jpg" width="31"
                  alt="Darren Elder">
              </span>
            </a>
            <div class="dropdown-menu dropdown-menu-right">
              <div class="user-header">
                <div class="avatar avatar-sm">
                  <img src="../assets/img/doctors/doctor-thumb-02.jpg" alt="User Image"
                    class="avatar-img rounded-circle">
                </div>
                <div class="user-text">
                  <h6>Darren Elder</h6>
                  <p class="text-muted mb-0">Doctor</p>
                </div>
              </div>
              <a class="dropdown-item" href="doctor-dashboard.php">Dashboard</a>
              <a class="dropdown-item" href="doctor-profile-settings.php">Profile Settings</a>
              <a class="dropdown-item" href="../login.php">Logout</a>
            </div>
          </li>
          <!-- /User Menu -->
        </ul>
      </nav>
    </header>