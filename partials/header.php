<?php

 ob_start();
 session_start();
 require_once "Database/DB.php";
 require_once "phpMailer/mailer.php";




?>
<!DOCTYPE html>
<html lang="en">

<!-- doccure/doctor-register.html  30 Nov 2019 04:12:15 GMT -->

<head>
  <meta charset="utf-8">
  <title>Black Medical Consultancy</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="assets/css/bootstrap.min.css">

  <!-- Fontawesome CSS -->
  <link rel="stylesheet" href="assets/plugins/fontawesome/css/fontawesome.min.css">
  <link rel="stylesheet" href="assets/plugins/fontawesome/css/all.min.css">

  <!-- Select2 CSS -->
  <link rel="stylesheet" href="../assets/plugins/select2/css/select2.min.css">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="../assets/plugins/bootstrap-tagsinput/css/bootstrap-tagsinput.css">

  <link rel="stylesheet" href="../assets/plugins/dropzone/dropzone.min.css">

  <!-- Main CSS -->
  <link rel="stylesheet" href="assets/css/style.css">


</head>

<body class="account-page">

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
          <a href="index.php" class="navbar-brand logo">
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
            <li>
              <a href="index.php">Home</a>
            </li>
            <!-- doctor -->
            <!-- <li class="has-submenu active">
              <a href="#">Doctors <i class="fas fa-chevron-down"></i></a>
              <ul class="submenu">
                <li><a href="doctor/doctor-dashboard.php">Doctor Dashboard</a></li>
                <li><a href="doctor/appointments.php">Appointments</a></li>
                <li><a href="doctor/doctor/schedule-timings.php">Schedule Timing</a></li>
                <li><a href="doctor/my-patients.php">Patients List</a></li>
                <li><a href="doctor/patient-profile.php">Patients Profile</a></li>
                <li><a href="doctor/chat-doctor.php">Chat</a></li>
                <li><a href="doctor/invoices.php">Invoices</a></li>
                <li><a href="doctor/doctor-profile-settings.php">Profile Settings</a></li>
                <li><a href="doctor/reviews.php">Reviews</a></li>
                <li class="active"><a href="doctor-register.php">Doctor Register</a></li>
              </ul>
            </li> -->
            <!-- patients -->
            <!-- <li class="has-submenu">
              <a href="#">Patients <i class="fas fa-chevron-down"></i></a>
              <ul class="submenu">
                <li><a href="patient/search.php">Search Doctor</a></li>
                <li><a href="patient/doctor-profile.php">Doctor Profile</a></li>
                <li><a href="patient/booking.php">Booking</a></li>
                <li><a href="patient/checkout.php">Checkout</a></li>
                <li><a href="patient/booking-success.php">Booking Success</a></li>
                <li><a href="patient/patient-dashboard.php">Patient Dashboard</a></li>
                <li><a href="patient/favourites.php">Favourites</a></li>
                <li><a href="patient/chat.php">Chat</a></li>
                <li><a href="patient/profile-settings.php">Profile Settings</a></li>
                <li><a href="patient/change-password.php">Change Password</a></li>
              </ul>
            </li> -->
            <!-- pages -->
            <!-- <li class="has-submenu">
              <a href="#">Pages <i class="fas fa-chevron-down"></i></a>
              <ul class="submenu">
                <li><a href="voice-call.php">Voice Call</a></li>
                <li><a href="video-call.php">Video Call</a></li>
                <li><a href="search.php">Search Doctors</a></li>
                <li><a href="calendar.php">Calendar</a></li>
                <li><a href="components.php">Components</a></li>
                <li class="has-submenu">
                  <a href="invoices.php">Invoices</a>
                  <ul class="submenu">
                    <li><a href="invoices.php">Invoices</a></li>
                    <li><a href="invoice-view.php">Invoice View</a></li>
                  </ul>
                </li>
                <li><a href="blank-page.php">Starter Page</a></li>
                <li><a href="login.php">Login</a></li>
                <li><a href="register.php">Register</a></li>
                <li><a href="forgot-password.php">Forgot Password</a></li>
              </ul>
            </li> -->

            <!-- <li>
              <a href="admin/index.html" target="_blank">Admin</a>
            </li> -->
            <li>
              <a href="#" target="">Service</a>
            </li>
            <li>
              <a href="#" target="">About</a>
            </li>
            <li>
              <a href="#" target="">Contact</a>
            </li>

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
          <?php 
          if(isset($_SESSION['patient_email'])){
            echo "<li class='nav-item'><a class='nav-link header-login' href='patient/index.php'>Patient Dashboard</a></li>";
          // }else if(isset($_SESSION['doctor_email'])){
          //   echo "<li class='nav-item'><a class='nav-link header-login' href='doctor/index.php'>Doctor Dashboard</a></li>";
          // }else if($_SESSION['admin_email']){
          //   echo "<li class='nav-item'><a class='nav-link header-login' href='admin/index.php'>Admin Dashboard</a></li>";
          // }else if($_SESSION['sales_email']){
          //   echo "<li class='nav-item'><a class='nav-link header-login' href='sales/index.php'>Sales Dashboard</a></li>";
          }else{
            echo "<li class='nav-item'><a class='nav-link header-login' href='login.php'>login / Signup </a></li>";
          }

          ?>

        </ul>
      </nav>
    </header>