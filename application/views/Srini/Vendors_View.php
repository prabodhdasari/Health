
<?php if (strlen($this->session->userdata('FirstName')) > 0) {  
 

 
 include("includes/header1.php");
  
 } else {
   redirect("Login");
 } ?>
 
<div id="loader"></div>
<?php if($error):  ?>
  <!-- <div class="alert alert-danger m-0" role="alert"> <strong>
    Oh snap!</strong>  <?php echo $error ;  ?>   </div> -->
    <div class="alert alert-warning text-center ">
<div class="container-fluid">
  <div class="alert-icon">
	<i class="material-icons">warning</i>
  </div>
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
	<span aria-hidden="true"><i class="material-icons">clear</i></span>
  </button>
  <b>Warning Alert:</b> Hey, it looks like you are inserting Duplicate Business!
</div>
</div>
<?php endif;?>


<div class="row ml-2 mt-0">    

 
<?php   if($records): ?>
        
    <?php   foreach($records as $row): ?>   
 
     <div class="card  ml-2 mt-0" style="width:15rem;background:#FDE3DD">
             
       <div class="card-body">
                <h5 class="card-title m-0"> <?php  echo $row->Business_Name   ?></h5>
                <div class="row m-0">
                  <div class="m-0"> <?php  echo $row->VendorID  . " | " . $row->GSTIN ;  ?></div>
                  </div>

               
                <div class="row m-0">
                <div class=" m-0">
                <p class="text-small small m-0">  <?php  echo $row->Address1 ." | ". $row->Address2    ;  ?></p>
    
                <p class="text-small small m-0">  <?php  echo $row->City ." | ". $row->State ;  ?></p>
                  

                  </div>
                  
                </div>

 <div class="col">
                  
                    <?php echo form_open('Invoices'); ?>     
                         
                          <input type="hidden" class="form-control" id="validationDefault01" name="VendorID" 
                          value= <?php echo "'" . $row->VendorID . "'" ?>
                          >
                          <button type="submit" class="btn btn-success  btn-sm btn-link" name="btnNewBOQ" style="width:auto; color:Blue"   >Invoices </button>
                            <?php echo form_close(); ?>  
                            <a href="Material" class=" card-link" role="button">Vendor Payment</a>
                  </div>
              </div>  
             
            </div>

<?php  endforeach; ?>
<?php endif; ?>         
        
    
</div>






        <div class="row">
          <div class="col col-12 col-sm-12 col-md-12 text-right">
            <div class="col-sm12 col-md-12 align-content-end">
              <button class="btn btn-info " type="button" data-toggle="modal" data-target="#addVendor">
                <i class="material-icons">add</i> New Vendor
              </button>
            </div>
          </div>
        </div>

    <!-- -->


 <!-- Modal  New Vendor name-->
 <div class="modal fade" id="addVendor" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
      aria-hidden="true">
      <?php  echo form_open('Vendors/create'); ?>
      <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header bg-info">
              <h5 class="modal-title " id="exampleModalLabel">New Vendor</h5>
                 <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                 <span aria-hidden="true">&times;</span>
                 </button>
             </div>
          <div class="modal-body">
              <div class="row">
                    <div class="form-group col">
                    <label for="validationDefault01" class="bmd-label-floating">Business Name</label>
                     <input type="text" class="form-control" id="validationDefault01" name="Business_Name" required>
                </div>
            </div>
            <div class="row">
              <div class="form-group col">
                    <label for="validationDefault02" class="bmd-label-floating">Address1</label>
                     <input type="text" class="form-control" id="validationDefault02" name="Address1" required>
                </div>
           
            <div class="form-group">
              <label for="validationDefault03" class="bmd-label-floating">Address2</label>
              <input type="text" class="form-control" id="validationDefault03" name="Address2" required>

            </div>
            </div>
           
            
            <div class="row">

 <div class="form-group col">
              <label for="validationDefault04" class="bmd-label-floating">City</label>
              <input type="text" class="form-control" id="validationDefault04" name="City">

            </div>
            <div class="form-group col">
              <label for="validationDefault05" class="bmd-label-floating">State</label>
              <input type="text" class="form-control" id="validationDefault05" name="State">

            </div>
          
            </div>
           <div class="row">
           <div class="form-group">
              <label for="formGroupExampleInput" class="bmd-label-floating">Postal Code</label>
              <input type="text" class="form-control" id="formGroupExampleInput" name="Postal_Code">

            </div>
           <div class="form-group">
              <label for="formGroupExampleInput" class="bmd-label-floating">GSTIN</label>
              <input type="text" class="form-control" id="formGroupExampleInput" name="GSTIN">

            </div>
            <div class="form-group">
              <label for="formGroupExampleInput" class="bmd-label-floating">PAN</label>
              <input type="text" class="form-control" id="formGroupExampleInput" name="PAN">

            </div>
           </div>
          
 
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary btn-small small" data-dismiss="modal">Cancel</button>
            <button type="submit" class="btn btn-success btn-small small">Save </button>
          </div>
          <?php  echo form_close(); ?>
        </div>
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

 
 <?php 
 include("includes/footer.php")
 ?>