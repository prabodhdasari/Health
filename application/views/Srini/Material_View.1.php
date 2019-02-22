<?php if (strlen($this->session->userdata('FirstName')) > 0) { ?>
<?php include 'Header.php' ?>
<?php 
   } else {
       redirect("Login");
   } ?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
 
  <title>
   Material
  </title>
  <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
      <!--     Fonts and icons     -->
      <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css">
      <!-- CSS Files -->
      <link href="../node_modules/material-kit/assets/css/material-kit.css?v=2.0.4" rel="stylesheet" />
      <!-- CSS Just for demo purpose, don't include it in your project -->
      <link href="../node_modules/material-kit/assets/demo/demo.css" rel="stylesheet" />

     <link href="https://cdn.datatables.net/1.10.18/css/dataTables.bootstrap4.min.css"rel="stylesheet" />
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
 
<script type="text/javascript">
$(function(){
    $('select[name=country]').on('change',function(){
        $.ajax({
           // url: 'index.php/welcome/getState?country_id='+$(this).val(),
            url: 'Material/getState?country_id='+$(this).val(),
            type: "GET",
         }).done(function(data) {
            $('select[name=state]').html(data);
         }).fail(function() {
            
         }).always(function() {
         
        });
    });
});
</script>
</head>


<body class="login-page sidebar-collapse bg-white" onload="myFunction()"> 
 
 <div id="loader"></div>
    
<!--Expenses-->
<div class="row ml-3">
      

                <div class="card mt-0">
                     <div class="card-body m-0">
                        <h4 class="card-title mb-0">Vendor Payments</h4><hr class="mb-2 mt-0">
                        <?php echo form_open('Material/addPayments'); ?>
                        <div class="row">
                        <div class="col form-group">
                            
                                    <label for="exampleFormControlSelect1">Select Vendor </label>
                                    <select class="custom-select" id="SelEmp" name="SelEmp" >
                                        <?php if ($vendors) : ?>
                                        <?php foreach ($vendors as $row) : ?>
                                        <option class="ml-2"   value=" <?php echo $row->Business_Name ?>"  >
                                        <?php echo $row->Business_Name  ?>
                                        </option>
                                        <?php endforeach; ?>
                                        <?php endif; ?>
                                    </select>
                                </div>
                                <div class="form-group bmd-form-group ml-2 col-md-2 col-sm-12">
                                      <?php echo $countryDropdown; ?>
                                </div>
                                <div class="form-group bmd-form-group ml-2 col-md-2 col-sm-12"> <?php echo $stateDropdown; ?>
                                </div>
                          
                                 <div class="form-group bmd-form-group ml-2 col-md-2 col-sm-12">
                                    <label class="bmd-label-floating">Invoice Number</label>
                                    <input type="text" class="form-control" name="InvNumber" id="InvNumber" required>
                                    </div>
                                    <div class="form-group col">
                                         <label for="validationDefault01" class="bmd-label-floating">Amount</label>
                                          <input type="number" class="form-control" id="Amount" name="Amount" required>
                                     </div>
                            
                        </div>

                        <div class="row">
                        <div class="form-group ml-2">
                                    <label class="label-control">Date</label>
                                    <input type="date" id="Expense_Date", name="Expense_Date" class="form-control datetimepicker" value="<?php date('d/m/YYYY') ?>"/>
                                </div>
                                <div class="form-group ml-2 ">
                                    <label class="bmd-label-floating"> Reason</label>
                                    <input type="Text" class="form-control"  id="Details" name="Details" required>
                                    
                                </div>
                                <div class="col mt-4 ml-2">
                                    <input type="file"  class= "btn-info small" name="userfile" size="20" />
                                    
                                </div>
                                <div class="form-group ml-0 mr-3 mt-4 ">
                                    
                                    <input type="submit" class="btn-sm btn-primary ml-2" value="Save">
                                </div>
                          
                        </div>

 <?php echo form_close(); ?>
                    </div>
                   
             
   
        </div>
        </div>





        <div class="row m-3">

    <?php if($expenses): ?>
   
        <?php  $total=0; foreach($expenses as $row){
            $total=$total + str_replace(',','', $row->Amount) ;            

        } ?>
                

                <div class="col">
                <p> Total Expenses : <i class="fa fa-inr" aria-hidden="true">  
                
                 <?php
                 
               
              
                 
                 echo $total ?></i>  </p>
               <table class="table text-small small">
                   <thead>
                       <tr>
                           <th>Project</th>
                           <th>Expenses</th>
                           <th>Date</th>
                           <th>Reason</th>
                           <th>Status</th>
                       </tr>
                   </thead>
                   <tbody>
                   <?php foreach ($expenses as $row) : ?>
                           
                          
                      
                       <tr>
                           <td scope="row">   <?php echo $row->Project_Name ?>  </td>

<?php setlocale(LC_MONETARY, 'en_IN');
 
  ?>

                           <td>  <i class="fa fa-inr" aria-hidden="true"><?php echo $row->Amount ?></i> </td>
                           <td> <?php echo date("d/M/Y", strtotime($row->Expense_Date))  ?></td>
                           <td> <?php echo $row->Details ?></td>


                           <td> <?php echo $row->Expense_Status ?></td>

                       </tr>
                      
                            <?php endforeach; ?>
                   </tbody>
               </table>
               <?php endif; ?>
                </div>


                <div class="col">
                <p> Total Advances : <i class="fa fa-inr" aria-hidden="true">  </i> </p>
    <?php if($adv): ?> 
                <table class="table text-small small">
                   <thead>
                       <tr>
                           <th>Project</th>
                           <th>Advance Amount</th>
                           <th>Date</th>
                           <th>Sender</th>
                           <th> Status </th>
                       </tr>
                   </thead>
                   <tbody>
                       <?php  foreach($adv as $row):?>
                       
                       <tr>
                           <td scope="row"><?php echo $row->Project_Name ?></td>
                           <td><?php echo $row->Amount ?></td>
                           <td> 
                           <?php echo date("d/M/Y", strtotime( $row->Payment_Date))  ?></td>
                           <td><?php echo $row->FirstName . ' ' . $row->LastName?></td>
                           <td><?php echo $row->Status ?></td>
                           <td></td>
                       </tr>
                       <?php endforeach; ?> 
                   </tbody>
               </table>
               <?php endif;?>
                </div>

        </div>





     
<script>
var myVar;

function myFunction() {
    myVar = setTimeout(showPage, 3000);
}

function showPage() {
  document.getElementById("loader").style.display = "none";
  document.getElementById("myDiv").style.display = "block";
}
</script>

 

    <!--   Core JS Files   -->
    <script src="./assets/js/core/jquery.min.js" type="text/javascript"></script>
    <script src="./assets/js/core/popper.min.js" type="text/javascript"></script>
    <script src="./assets/js/core/bootstrap-material-design.min.js" type="text/javascript"></script>
    <script src="./assets/js/plugins/moment.min.js"></script>
    <!--	Plugin for the Datepicker, full documentation here: https://github.com/Eonasdan/bootstrap-datetimepicker -->
    <script src="./assets/js/plugins/bootstrap-datetimepicker.js" type="text/javascript"></script>
    <!--  Plugin for the Sliders, full documentation here: http://refreshless.com/nouislider/ -->
    <script src="./assets/js/plugins/nouislider.min.js" type="text/javascript"></script>
    <!--	Plugin for Sharrre btn -->
    <script src="./assets/js/plugins/jquery.sharrre.js" type="text/javascript"></script>
    <!-- Control Center for Material Kit: parallax effects, scripts for the example pages etc -->
    <script src="./assets/js/material-kit.js?v=2.0.4" type="text/javascript"></script>
    <script>
        $(document).ready(function () {
            //init DateTimePickers
            materialKit.initFormExtendedDatetimepickers();

            // Sliders Init
            materialKit.initSliders();
        });


        function scrollToDownload() {
            if ($('.section-download').length != 0) {
                $("html, body").animate({
                    scrollTop: $('.section-download').offset().top
                }, 1000);
            }
        }


        $(document).ready(function () {

            $('#facebook').sharrre({
                share: {
                    facebook: true
                },
                enableHover: false,
                enableTracking: false,
                enableCounter: false,
                click: function (api, options) {
                    api.simulateClick();
                    api.openPopup('facebook');
                },
                template: '<i class="fab fa-facebook-f"></i> Facebook',
                url: 'https://demos.creative-tim.com/material-kit/index.html'
            });

            $('#googlePlus').sharrre({
                share: {
                    googlePlus: true
                },
                enableCounter: false,
                enableHover: false,
                enableTracking: true,
                click: function (api, options) {
                    api.simulateClick();
                    api.openPopup('googlePlus');
                },
                template: '<i class="fab fa-google-plus"></i> Google',
                url: 'https://demos.creative-tim.com/material-kit/index.html'
            });

            $('#twitter').sharrre({
                share: {
                    twitter: true
                },
                enableHover: false,
                enableTracking: false,
                enableCounter: false,
                buttons: {
                    twitter: {
                        via: 'CreativeTim'
                    }
                },
                click: function (api, options) {
                    api.simulateClick();
                    api.openPopup('twitter');
                },
                template: '<i class="fab fa-twitter"></i> Twitter',
                url: 'https://demos.creative-tim.com/material-kit/index.html'
            });

        });
    </script>
    <!-- javascript for init -->
      <script>
      // data-* attributes to scan when populating modal values
var ATTRIBUTES = ['myvalue'];

$('[data-toggle="modal"]').on('click', function (e) {
  // convert target (e.g. the button) to jquery object
  var $target = $(e.target);
  // modal targeted by the button
  var modalSelector = $target.data('target');
  
  // iterate over each possible data-* attribute
  ATTRIBUTES.forEach(function (attributeName) {
    // retrieve the dom element corresponding to current attribute
    var $modalAttribute = $(modalSelector + ' #modal-' + attributeName);
    var dataValue = $target.data(attributeName);
    image = document.getElementById('imgDisp');
     image.src = $target.data(attributeName);
    // if the attribute value is empty, $target.data() will return undefined.
    // In JS boolean expressions return operands and are not coerced into
    // booleans. That way is dataValue is undefined, the left part of the following
    // Boolean expression evaluate to false and the empty string will be returned
    $modalAttribute.text(dataValue || '');
  });
});
      
      </script>
      <script>    $(document).ready(function() {
    $('#example').DataTable();
} );</script>
    <script>
        $('.datetimepicker').datetimepicker({
            icons: {
                time: "fa fa-clock-o",
                date: "fa fa-calendar",
                up: "fa fa-chevron-up",
                down: "fa fa-chevron-down",
                previous: 'fa fa-chevron-left',
                next: 'fa fa-chevron-right',
                today: 'fa fa-screenshot',
                clear: 'fa fa-trash',
                close: 'fa fa-remove'
            }
        });
    </script>
   </body>
</html>