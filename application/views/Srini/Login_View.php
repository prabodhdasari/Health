
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <title>
   Login
  </title>
  <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
  <!--     Fonts and icons     -->
  <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css">
  <!-- CSS Files -->
  <link href="node_modules/material-kit/assets/css/material-kit.css?v=2.0.4" rel="stylesheet" />
  <!-- CSS Just for demo purpose, don't include it in your project -->
  <link href="node_modules/material-kit/assets/demo/demo.css" rel="stylesheet" />
</head>
<body class="login-page sidebar-collapse bg-white">
<div class="row">
     

        

</div>
<!--Sign in class-->
<?php  echo form_open('Login/Login'); ?>
<div class="container py-3   ">
        <div class="row">
          <div class="col-md-12 ">
            <h2 class="text-center text-black mb-4"> Welcome to Srinivas Electrical</h2>        
 
         
            <div class="row">
              <div class="col-md-6 mx-auto">
    
                <!-- form card login -->
                <div class="card rounded-0">
                  <div class="card-header bg-info   card-header-rose">
                    <h3 class="mb-0">Login</h3>
                  </div>
                  <div class="card-body text-left">
                  
                     
                      <div class="form-group">
                        <label for="validationDefault01" class="bmd-label-floating">Email Id</label>
                        <input type="email" class="form-control" id="EmailID" name="EmailID" required>
                </div>
                      <div class="form-group">
                        <label for="validationDefault01" class="bmd-label-floating">Password</label>
                        <input type="password" class="form-control" id="Password" name="Password" required>
             
                      </div>
                      <div class="form-check">
                            <label class="form-check-label">
                                <input class="form-check-input" type="checkbox" value="">
                               Remember Me
                                <span class="form-check-sign">
                                    <span class="check"></span>
                                </span>
                            </label>
                        </div>
                         <input name="btnLogin" id="btnLogin" class="btn btn-primary float-right" type="submit" value="Login">
                 
                  </div>
                  <!--/card-block-->
                </div>
                <!-- /form card login -->
    
              </div>
    
    
            </div>
            <!--/row-->
    
          </div>
          <!--/col-->
        </div>
        <!--/row-->
      </div>

  <?php  echo form_close(); ?>

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

    



            

