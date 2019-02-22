

<?php if (strlen($this->session->userdata('FirstName')) > 0) {  
 

 
 include("includes/header1.php");
  
 } else {
   redirect("Login");
 } ?>

 
 
 <div id="loader"></div>
    <div class="row ml-2 ">
            <div class="card card-nav-tabs" style="width: 20rem;">
                <div class="card-header card-header-info text-center">
                 <b>   <?php echo $emp->FirstName . " " .$emp->LastName;  ?>  </b>
                </div>
             <ul class="list-group list-group-flush">
                <li class="list-group-item"> <?php echo "Emp ID :" . " " .$emp->EmpID;  ?> </li>
                <li class="list-group-item"> <?php echo "Designation :" . " " .$emp->Designation;  ?> </li>
                <li class="list-group-item"> <?php echo "Mobile :" . " " .$emp->Mobile;  ?> </li>
                <li class="list-group-item"> <?php echo "Role :" . " " .$emp->Role;  ?> </li>
            </ul>
        </div>

 <div class="card card-nav-tabs align-top" style="width: 20rem; aligh:Top">
        <div class="card-header card-header-primary align-top">
            Projects  
        </div>
  <ul class="list-group list-group-flush">
<?php if($projects):  ?>
<?php foreach($projects as $row) : ?> 
    <li class="list-group-item"><?php echo $row->Project_Name ?></li>
    <?php endforeach;?>
<?php endif; ?> 
  </ul>
</div>

<?php if($expenses): $tot=0;  ?>
<div class="card card-nav-tabs align-top" style="width: 20rem;" style="aligh:Top">
        <div class="card-header card-header-warning">
            Expenses  
        </div>
       
        <table class="table ml-2 align-top table-sm mt-1" style="align:Top">
    
    <?php
      $this->load->helper('custom');
    foreach($expenses as $row) : ?> 
      <?php   if($row->Project_Name) 
     {  echo  '<tr><td>'.  $row->Project_Name . " </td><td>" ?><i class="fa fa-inr" aria-hidden="true">
     <?php echo moneyFormatIndia((int)$row->Amount). '</td></tr>';  }?></i>
     <?php endforeach;?>
     </table>
      
         
            <hr>
              <Label class=" text-dark ml-4"><i class="fa fa-inr" aria-hidden="true"></i>
                <?php 
                 $this->load->helper('custom');
                echo  " Total : " . moneyFormatIndia((int)$row->Amount) ?>
                </Label>
                <H6 class="small m-1">
                <?php 
                 $this->load->helper('custom');
                echo   ctc((int)$row->Amount) ?>
                </H6>

           

                </div> 
<?php endif; ?> 


<?php if($advances): $tot=0;  ?>
<div class="card card-nav-tabs" style="width: 20rem;">
        <div class="card-header card-header-danger">
        Advances  
        </div>

       <table class="table ml-2 align-top table-sm mt-1" style="align:Top">
    
        <?php
          $this->load->helper('custom');
        foreach($advances as $row) : ?> 
          <?php   if($row->Project_Name) 
         {  echo  '<tr><td>'.  $row->Project_Name . " </td><td>" ?><i class="fa fa-inr" aria-hidden="true">
         <?php echo moneyFormatIndia((int)$row->Amount). '</td></tr>';  }?></i>
         <?php endforeach;?>
         </table>
         
            <hr>
            <Label class=" text-dark ml-4"><i class="fa fa-inr" aria-hidden="true"></i>
                <?php 
                 $this->load->helper('custom');
                echo  " Total : " . moneyFormatIndia((int)$row->Amount) ?>
                </Label>
                <H6 class="small m-1">
                <?php 
                 $this->load->helper('custom');
                echo   ctc((int)$row->Amount) ?>
                </H6>


                </div> 
<?php endif; ?> 


 </div>
 
<div class="row ml-4">
<a href="staff" class="btn btn-info ml-3" role="button">Back</a>
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
   
 <?php 
 include("includes/footer.php")
 ?>
