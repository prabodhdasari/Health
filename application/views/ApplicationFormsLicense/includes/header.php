<?php  ?>
<!doctype html>
<html lang="en">
<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title> <?php echo $this->session->userdata('page');?></title>
  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="assets/css/bootstrap.min.css">
  <!-- External Css -->
  <link rel="stylesheet" href="assets/css/fontawesome-all.min.css">
  <link rel="stylesheet" href="assets/css/themify-icons.css">
  <link rel="stylesheet" href="assets/css/et-line.css">
  <link rel="stylesheet" href="assets/css/bootstrap-select.min.css">
  <link rel="stylesheet" href="assets/css/plyr.css">
  <link rel="stylesheet" href="assets/css/flag.css">
  <link rel="stylesheet" href="assets/css/slick.css">
  <link rel="stylesheet" href="assets/css/owl.carousel.min.css">
  <link rel="stylesheet" href="assets/css/jquery.nstSlider.min.css">
  <link rel="stylesheet" href="assets/css/html5-simple-date-input-polyfill.css">
  <!-- Custom Css -->
  <link rel="stylesheet" type="text/css" href="css/main.css">
  <!-- Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Poppins:400,500,600%7CRoboto:300i,400,500" rel="stylesheet">
  <!-- Favicon -->
  <link rel="icon" href="images/favicon.png">
  <link rel="apple-touch-icon" href="images/apple-touch-icon.png">
  <link rel="apple-touch-icon" sizes="72x72" href="images/icon-72x72.png">
  <link rel="apple-touch-icon" sizes="114x114" href="images/icon-114x114.png">
  <!--[if lt IE 9]>
    <script src="assets/js/html5shiv.min.js"></script>
    <script src="assets/js/respond.min.js"></script>
    <![endif]-->
</head>
<body>
  <header class="header-2">
    <div class="container">
      <div class="row">
        <div class="col">
          <div class="header-top">
            <div class="logo-area">
              <!-- <a href="#"><img src="images/logo-2.png" alt=""></a> -->
              <h4>Xsilica</h4>
            </div>
            <div class="header-top-toggler">
              <div class="header-top-toggler-button"></div>
            </div>
            <div class="top-nav">
              <div class="dropdown header-top-notification">
                <a href="#" class="notification-button">Notification</a>
                <div class="notification-card">
                  <div class="notification-head">
                    <span>Notifications</span>
                    <a href="#">Mark all as read</a>
                  </div>
                  <div class="notification-body">
                    <a href="home-2.html" class="notification-list">
                      <i class="fas fa-bolt"></i>
                      <p>Your Resume Updated!</p>
                      <span class="time">5 hours ago</span>
                    </a>
                    <a href="#" class="notification-list">
                      <i class="fas fa-arrow-circle-down"></i>
                      <p>Someone downloaded resume</p>
                      <span class="time">11 hours ago</span>
                    </a>
                    <a href="#" class="notification-list">
                      <i class="fas fa-check-square"></i>
                      <p>You applied for Project Manager <span>@homeland</span></p>
                      <span class="time">11 hours ago</span>
                    </a>
                    <a href="#" class="notification-list">
                      <i class="fas fa-user"></i>
                      <p>You changed password</p>
                      <span class="time">5 hours ago</span>
                    </a>
                    <a href="#" class="notification-list">
                      <i class="fas fa-arrow-circle-down"></i>
                      <p>Someone downloaded resume</p>
                      <span class="time">11 hours ago</span>
                    </a>
                  </div>
                  <div class="notification-footer">
                    <a href="#">See all notification</a>
                  </div>
                </div>
              </div>
              <?php 

              include('MyAccount.php');
              ?>
              <select class="selectpicker select-language" data-width="fit">
                <option data-content='<span class="flag-icon flag-icon-us"></span> English'>English</option>
                <option data-content='<span class="flag-icon flag-icon-mx"></span> Español'>Español</option>
              </select>
            </div>
          </div>
          <nav class="navbar navbar-expand-lg cp-nav-2">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
              aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
            
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
<ul class="navbar-nav">
  <li class="menu-item active"><a title="Home" href="home.html">Home</a></li>

  <li class="menu-item dropdown">
    <a title="" href="#" data-toggle="dropdown" class="dropdown-toggle" aria-haspopup="true"
      aria-expanded="false">Doctors</a>
    <ul class="dropdown-menu">
      <li class="menu-item"><a href="candidate.html">Doctors Listing</a></li>
      <li class="menu-item"><a href="candidate-details.html">Doctors Details</a></li>

    </ul>
  </li>
  <li class="menu-item dropdown">
    <a title="" href="#" data-toggle="dropdown" class="dropdown-toggle" aria-haspopup="true"
      aria-expanded="false">Hospitals</a>
    <ul class="dropdown-menu">
      <li class="menu-item"><a href="employer-listing.html">Hosptials Listing</a></li>
      <li class="menu-item"><a href="employer-details.html">Hospital Details</a></li>

    </ul>
  </li>
  <li class="menu-item"><a href="contact.html">Complaints</a></li>

  <li class="menu-item"><a href="contact.html">Contact Us</a></li>

</ul>
</div>

          </nav>
        </div>
      </div>
    </div>
  </header>
  <!-- Breadcrumb -->
  <div class="alice-bg padding-top-70 padding-bottom-70">
    <div class="container">
      <div class="row">
        <div class="col-md-6">
          <div class="breadcrumb-area">
            <h1>
            <?php 
            echo $this->session->userdata('page');
            ?>
            </h1>
            <nav aria-label="breadcrumb">
              <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="home">Home</a></li>
                <li class="breadcrumb-item active" aria-current="page">  <?php 
                                                                        echo $this->session->userdata('page');
                                                                        ?></li>
              </ol>
            </nav>
          </div>
        </div>
      
      </div>
    </div>
  </div>
  <!-- Breadcrumb End -->
 