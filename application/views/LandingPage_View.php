<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Xsilica</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" type="text/css" href="css/main.css">
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
    <script src="..assets/js/html5shiv.min.js"></script>
    <script src="..assets/js/respond.min.js"></script>
    <![endif]-->
</head>

<body>
    <header class="header-2">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="header-top">
                        <div class="logo-area">
                            <h4>Xsilica</h4>
                        </div>
                        <div class="header-top-toggler">
                            <div class="header-top-toggler-button"></div>
                        </div>
                        <div class="top-nav">
                            <!-- <div class="dropdown header-top-notification">
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
                </div> -->
                            <?php
                if($this->session->flashdata('message'))
                {
                    echo '
                    <div class="alert alert-success">
                        '.$this->session->flashdata("message").'
                    </div>
                    ';
                }
                ?>
                            <div class="dropdown header-top-account login-modals">
                                <button title="Title" type="button" data-toggle="modal"
                                    data-target="#exampleModalLong">Login</button>
                                <button title="Title" type="button" data-toggle="modal"
                                    data-target="#exampleModalLong2">Registration</button>
                            </div>
                            <select class="selectpicker select-language" data-width="fit">
                                <option data-content='<span class="flag-icon flag-icon-us"></span> English'>English
                                </option>
                                <option data-content='<span class="flag-icon flag-icon-ae"></span> Arabic'>Arabic
                                </option>
                            </select>
                        </div>
                    </div>
                    <nav class="navbar navbar-expand-lg cp-nav-2">
                        <button class="navbar-toggler" type="button" data-toggle="collapse"
                            data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                            aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse" id="navbarSupportedContent">
                            <ul class="navbar-nav">
                                <li class="menu-item active"><a title="Home" href="home.html">Home</a></li>
                                <li class="menu-item dropdown">
                                    <a title="" href="#" data-toggle="dropdown" class="dropdown-toggle"
                                        aria-haspopup="true" aria-expanded="false"> Healthcare Professional Licenses</a>
                                    <ul class="dropdown-menu">
                                        <li class="menu-item"><a href="candidate.html">Doctors Listing</a></li>
                                        <li class="menu-item"><a href="candidate-details.html">Doctors Details</a></li>
                                    </ul>
                                </li>
                                <li class="menu-item dropdown">
                                    <a title="" href="#" data-toggle="dropdown" class="dropdown-toggle"
                                        aria-haspopup="true" aria-expanded="false">Clinical Permits</a>
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
    <!-- Modal -->
    <div class="account-entry">
        <div class="modal fade" id="exampleModalLong" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title"><i data-feather="user"></i>Login</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <?php
                if($this->session->flashdata('message'))
                {
                    echo '
                    <div class="alert alert-success">
                        '.$this->session->flashdata("message").'
                    </div>
                    ';
                }
                ?>
                        <form method="post" action="<?php echo base_url(); ?>login/validation">
                            <div class="form-group">
                                <label>Enter Email Address</label>
                                <input type="text" name="user_email" class="form-control"
                                    value="<?php echo set_value('user_email'); ?>" />
                                <span class="text-danger"><?php echo form_error('user_email'); ?></span>
                            </div>
                            <div class="form-group">
                                <label>Enter Password</label>
                                <input type="password" name="user_password" class="form-control"
                                    value="<?php echo set_value('user_password'); ?>" />
                                <span class="text-danger"><?php echo form_error('user_password'); ?></span>
                            </div>
                            <div class="more-option">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                                    <label class="form-check-label" for="defaultCheck1">
                                        Remember Me
                                    </label>
                                </div>
                                <a href="#">Forget Password?</a>
                            </div>
                            <input type="submit" name="login" value="Login" class="button primary-bg btn-block" />
                            <!-- <button class="button primary-bg btn-block">Login</button> -->
                        </form>
                        <div class="shortcut-login">
                            <span>Or connect with</span>
                            <div class="buttons">
                                <a href="#" class="facebook"><i class="fab fa-facebook-f"></i>Facebook</a>
                                <a href="#" class="google"><i class="fab fa-google"></i>Google</a>
                            </div>
                            <p>Don't have an account? <a href="#">Register</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="modal fade" id="exampleModalLong2" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title"><i data-feather="edit"></i>Registration</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <!-- <div class="account-type">
                <a href="#" class="candidate-acc active"><i data-feather="user"></i>Membership</a>
               </div> -->
                        <!-- <form action="#"> -->
                        <form method="post" action="<?php echo base_url(); ?>register/validation">
                            <div class="form-group">
                                <label>Enter Your Name</label>
                                <input type="text" name="user_name" class="form-control"
                                    value="<?php echo set_value('user_name'); ?>" />
                                <span class="text-danger"><?php echo form_error('user_name'); ?></span>
                            </div>
                            <div class="form-group">
                                <label>Enter Your Valid Email Address</label>
                                <input type="text" name="user_email" class="form-control"
                                    value="<?php echo set_value('user_email'); ?>" />
                                <span class="text-danger"><?php echo form_error('user_email'); ?></span>
                            </div>
                            <div class="form-group">
                                <label>Enter Password</label>
                                <input type="password" name="user_password" class="form-control"
                                    value="<?php echo set_value('user_password'); ?>" />
                                <span class="text-danger"><?php echo form_error('user_password'); ?></span>
                            </div>
                            <div class="more-option terms">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="" id="defaultCheck2">
                                    <label class="form-check-label" for="defaultCheck2">
                                        I accept the <a href="#">terms & conditions</a>
                                    </label>
                                </div>
                            </div>
                            <input type="submit" name="register" value="Register" class="button primary-bg btn-block" />
                            <!-- <button class="button primary-bg btn-block">Register</button> -->
                        </form>
                        <div class="shortcut-login">
                            <span>Or connect with</span>
                            <div class="buttons">
                                <a href="#" class="facebook"><i class="fab fa-facebook-f"></i>Facebook</a>
                                <a href="#" class="google"><i class="fab fa-google"></i>Google</a>
                            </div>
                            <p>Already have an account? <a href="#">Login</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="searchAndFilter-wrapper-2">
        <div class="container mt-5">
            <div class="row">
                <div class="col">
                    <!-- Login-->

                    <div class="" id="" tabindex="-1" role="" aria-hidden="true">
                        <div class="" role="document">
                            <div class="content">
                                <div class="header">
                                    <h5 class="title"><i data-feather="user"></i>Login</h5>

                                </div>
                                <div class="body">
                                         <?php
                                                if($this->session->flashdata('message'))
                                                {
                                                    echo '
                                                    <div class="alert alert-success">
                                                        '.$this->session->flashdata("message").'
                                                    </div>
                                                    ';
                                                }
                                            ?>
                                    <form method="post" action="<?php echo base_url(); ?>login/validation">
                                        <div class="form-group box">
                                            <label>Enter Email Address</label>
                                            <input type="text" name="user_email" class="form-control box"
                                                value="<?php echo set_value('user_email'); ?>" />
                                            <span class="text-danger"><?php echo form_error('user_email'); ?></span>
                                        </div>
                                        <div class="box">
                                                <input type="text" class="form-control" name="asd" required="">
                                                <label> Name</label>
                                            </div>
                                        <div class="form-group">
                                            <label>Enter Password</label>
                                            <input type="password" name="user_password" class="form-control"
                                                value="<?php echo set_value('user_password'); ?>" />
                                            <span class="text-danger"><?php echo form_error('user_password'); ?></span>
                                        </div>
                                        <div class="more-option">
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value=""
                                                    id="defaultCheck1">
                                                <label class="form-check-label" for="defaultCheck1">
                                                    Remember Me
                                                </label>
                                                <a href="#">Forget Password?</a>
                                            </div>

                                        </div>
                                        <input type="submit" name="login" value="Login"
                                            class="button primary-bg btn-block" />
                                        <!-- <button class="button primary-bg btn-block">Login</button> -->
                                    </form>
                                    <div class="shortcut-login">



                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>




                </div>
                <div class="col" id="">
                    <!-- Registration -->
                    <div class="row ">

                        <div class="" id="registration" tabindex="-1" role="dialog" aria-hidden="true">
                            <div class="" role="document">
                                <div class="content">
                                    <div class="header">
                                        <h5 class="title"><i data-feather="edit"></i>Registration</h5>

                                    </div>
                                    <div class="body">

                                        <!-- <form action="#"> -->
                                        <form method="post" action="<?php echo base_url(); ?>register/validation">
                                            <div class="form-group">
                                                <label>Enter Your Name</label>
                                                <input type="text" name="user_name" class="form-control"
                                                    value="<?php echo set_value('user_name'); ?>" />
                                                <span class="text-danger"><?php echo form_error('user_name'); ?></span>
                                            </div>
                                            <div class="form-group">
                                                <label>Enter Your Valid Email Address</label>
                                                <input type="text" name="user_email" class="form-control"
                                                    value="<?php echo set_value('user_email'); ?>" />
                                                <span class="text-danger"><?php echo form_error('user_email'); ?></span>
                                            </div>
                                            <div class="form-group">
                                                <label>Enter Password</label>
                                                <input type="password" name="user_password" class="form-control"
                                                    value="<?php echo set_value('user_password'); ?>" />
                                                <span
                                                    class="text-danger"><?php echo form_error('user_password'); ?></span>
                                            </div>
                                            <div class="more-option terms">
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" value=""
                                                        id="defaultCheck2">
                                                    <label class="form-check-label" for="defaultCheck2">
                                                        I accept the <a href="#">terms & conditions</a>
                                                    </label>
                                                </div>
                                            </div>
                                            <input type="submit" name="register" value="Register"
                                                class="button primary-bg btn-block" />
                                            <!-- <button class="button primary-bg btn-block">Register</button> -->
                                        </form>
                                        <div class="shortcut-login">


                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>


                    </div>
                </div>
            </div>
        </div>
        <!-- Search and Filter End -->
        <div class="container">
            <div class="row">
            </div>
        </div>
    </div>
    <div class="padding-bottom-60">
    </div>
    <!-- Category In PatientEnd -->
    </div>
    <!-- App Download End -->
    <!-- Footer -->
    <footer class="footer-bg">
        <div class="footer-top border-bottom section-padding-top padding-bottom-40">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <div class="footer-logo">
                            <!-- <a href="#">
                  <img src="images/footer-logo.png" class="img-fluid" alt="">
                </a> -->
                            <h3>Xsilica</h3>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="footer-social">
                            <ul class="social-icons">
                                <li><a href="#"><i data-feather="facebook"></i></a></li>
                                <li><a href="#"><i data-feather="twitter"></i></a></li>
                                <li><a href="#"><i data-feather="linkedin"></i></a></li>
                                <li><a href="#"><i data-feather="instagram"></i></a></li>
                                <li><a href="#"><i data-feather="youtube"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer-bottom-area">
            <div class="container">
                <div class="row">
                    <div class="col">
                        <div class="footer-bottom border-top">
                            <div class="row">
                                <div class="col-lg-6">
                                    <p class="copyright-text">Copyright <a href="#">Xsilica</a> 2018, All right reserved
                                    </p>
                                </div>
                                <div class="col-lg-6">
                                    <div class="back-to-top">
                                        <a href="#">Back to top<i class="fas fa-angle-up"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- Footer End -->
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/popper.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/feather.min.js"></script>
    <script src="assets/js/bootstrap-select.min.js"></script>
    <script src="assets/js/jquery.nstSlider.min.js"></script>
    <script src="assets/js/owl.carousel.min.js"></script>
    <script src="assets/js/visible.js"></script>
    <script src="assets/js/jquery.countTo.js"></script>
    <script src="assets/js/chart.js"></script>
    <script src="assets/js/plyr.js"></script>
    <script src="assets/js/tinymce.min.js"></script>
    <script src="assets/js/slick.min.js"></script>
    <script src="assets/js/jquery.ajaxchimp.min.js"></script>
    <script src="js/custom.js"></script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyC87gjXWLqrHuLKR0CTV5jNLdP4pEHMhmg"></script>
    <script src="js/map.js"></script>
</body>

</html>