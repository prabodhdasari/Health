<html>
<head>
  <meta charset="utf-8" />
  <link rel="apple-touch-icon" sizes="76x76" href="../node_modules/material-kit/assets/img/apple-icon.png">
  <link rel="icon" type="image/png" href="../node_modules/material-kit/assets/img/favicon.png">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <title>
   Staff
  </title>

  <style>
  .upload-btn-wrapper {
  position: relative;
  overflow: hidden;
  display: inline-block;
}

.btn {
  border: 2px solid gray;
  color: Green;
  background-color: white;
  padding: 8px 20px;
  border-radius: 8px;
  font-size: 20px;
  font-weight: bold;
}

.upload-btn-wrapper input[type=file] {
  font-size: 100px;
  position: absolute;
  left: 0;
  top: 0;
  opacity: 0;
}

  </style>
  <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
  <!--     Fonts and icons     -->
  <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css">
  <!-- CSS Files -->
  <link href="../node_modules/material-kit/assets/css/material-kit.css?v=2.0.4" rel="stylesheet" />
  <!-- CSS Just for demo purpose, don't include it in your project -->
  <link href="../node_modules/material-kit/assets/demo/demo.css" rel="stylesheet" />
</head>

<body class="body bg-white">

<?php echo $error;?>

<?php echo form_open_multipart('upload/do_upload');?>
<div class="container">

<input type="file"  class= "badge-primary" name="userfile" size="20" />

<br /><br />

<input type="submit" class="badge-primary" value="upload" />
</div>

<div class="upload-btn-wrapper">
  <button class="file bs-tooltip-bottom">Choose a file</button>
  <input type="submit" class="btn-danger" name="userfile" />
</div>

</form>

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