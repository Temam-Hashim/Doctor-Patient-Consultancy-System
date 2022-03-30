<?php
  ob_start();
  require_once "session.php";
  require_once "../DataBase/DB.php";
  require_once "../phpMailer/mailer.php";
  
?>

<!DOCTYPE html>
<html lang="en">

<!-- doccure/change-password.html  30 Nov 2019 04:12:18 GMT -->

<head>
  <meta charset="utf-8">
  <title>Black Doctor Consultancy</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">

  <!-- Favicons -->
  <link href="../assets/img/favicon.png" rel="icon">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="../assets/css/bootstrap.min.css">

  <!-- Fontawesome CSS -->
  <link rel="stylesheet" href="../assets/plugins/fontawesome/css/fontawesome.min.css">
  <link rel="stylesheet" href="../assets/plugins/fontawesome/css/all.min.css">

  <!-- Main CSS -->
  <link rel="stylesheet" href="../assets/css/style.css">


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
            <a href="../../index.php" class="menu-logo">
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
              <a href="#">Patients <i class="fas fa-chevron-down"></i></a>
              <ul class="submenu">
                <li><a href="search.php">Search Doctor</a></li>
                <li><a href="doctor-profile.php">Doctor Profile</a></li>
                <li><a href="booking.php">Booking</a></li>
                <li><a href="checkout.php">Checkout</a></li>
                <li><a href="booking-success.php">Booking Success</a></li>
                <li><a href="index.php">Patient Dashboard</a></li>
                <li><a href="favourites.php">Favourites</a></li>
                <li><a href="chat.php">Chat</a></li>
                <li><a href="profile-settings.php">Profile Settings</a></li>
                <li class="active"><a href="change-password.php">Change Password</a></li>
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
                <img class="rounded-circle" src="assets/img/patients/patient.jpg" width="31" alt="Ryan Taylor">
              </span>
            </a>
            <div class="dropdown-menu dropdown-menu-right">
              <div class="user-header">
                <div class="avatar avatar-sm">
                  <img src="../assets/img/patients/patient.jpg" alt="User Image" class="avatar-img rounded-circle">
                </div>
                <div class="user-text">
                  <h6>Patient NAme </h6>
                  <p class="text-muted mb-0">Patient</p>
                </div>
              </div>
              <a class="dropdown-item" href="index.php">Dashboard</a>
              <a class="dropdown-item" href="profile-settings.php">Profile Settings</a>
              <a class="dropdown-item" href="includes/logout.php">Logout</a>
            </div>
          </li>
          <!-- /User Menu -->
        </ul>
      </nav>
    </header>