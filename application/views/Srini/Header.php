<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <link rel="apple-touch-icon" sizes="76x76" href="../node_modules/material-kit/assets/img/se.png">
  <link rel="icon" type="image/png" href="../node_modules/material-kit/assets/img/se.png">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  
  <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
  <!--     Fonts and icons     -->
  <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css">
  <!-- CSS Files 
 <link href="../node_modules/material-kit/assets/css/material-kit.css?v=2.0.4" rel="stylesheet" />
-->
<link href="../node_modules/material-kit/assets/css/material-kit.css?v=2.0.4" rel="stylesheet" />
  <!-- CSS Just for demo purpose, don't include it in your project -->
  <link href="../node_modules/material-kit/assets/css//loader.css" rel="stylesheet" />
</head>
<body class="login-page sidebar-collapse bg-white">



<nav class="navbar navbar-expand-lg bg-info align-items-start  ">
    <div class="container col-md-8 align-items-start align-self-start">
      <a class="navbar-brand" style="width:100%" href="#">Srinivasa Electricals</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown"
        aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
        <span class="sr-only">Toggle navigation</span>
        <span class="navbar-toggler-icon"></span>
        <span class="navbar-toggler-icon"></span>
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNavDropdown">
        <ul class="navbar-nav">
          <li class="nav-item ">
            <a class="nav-link" href="#">Home </a>
          </li>
        
          <?php if($navs):
   //alert($navs);
           foreach($navs as $row):{?>
           <li class="nav-item" style="width:120px">
           <a class="nav-link active" style="width:120px" href=<?php echo $row->Page;  ?>> <?php echo $row->Name ?> </a>
         </li>
          <?php } endforeach; endif;   ?>
          <li class="nav-item ">
          <img src="<?php echo $this->session->userdata('Photo') ?>" class="rounded-circle mr-2" style="width:50px;height:50px" alt=""> 
           
          </li> <li class="nav-item ">
          <a class="nav-link" href="Profile" style="width:120px">
             <?php echo $this->session->userdata('FirstName'); ?> </a>
             </li>
          <li class="nav-item ml-2" style="width:50px">
         
            <a class="nav-link" href="Login" style="width:120px"> <i class="material-icons"><i class="fa fa-sign-out" aria-hidden="true"></i></i></a>
          </li>
 


        </ul>
      </div>
    </div>

  </nav>
  
  <!--   Core JS Files   -->
  <script src="../node_modules/material-kit/assets/js/core/jquery.min.js" type="text/javascript"></script>
  <script src="../node_modules/material-kit/assets/js/core/popper.min.js" type="text/javascript"></script>
  <script src="../node_modules/material-kit/assets/js/core/bootstrap-material-design.min.js" type="text/javascript"></script>
  <script src="../node_modules/material-kit/assets/js/plugins/moment.min.js"></script>
  <!--	Plugin for the Datepicker, full documentation here: https://github.com/Eonasdan/bootstrap-datetimepicker -->
  <script src="../node_modules/material-kit/assets/js/plugins/bootstrap-datetimepicker.js" type="text/javascript"></script>
  <!--  Plugin for the Sliders, full documentation here: http://refreshless.com/nouislider/ -->
  <script src="../node_modules/material-kit/assets/js/plugins/nouislider.min.js" type="text/javascript"></script>
  <!--	Plugin for Sharrre btn -->
  <script src="../node_modules/material-kit/assets/js/plugins/jquery.sharrre.js" type="text/javascript"></script>
  <!-- Control Center for Material Kit: parallax effects, scripts for the example pages etc -->
  <script src="../node_modules/material-kit/assets/js/material-kit.js?v=2.0.4" type="text/javascript"></script>



</body>

</html>