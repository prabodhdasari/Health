

<?php if (strlen($this->session->userdata('FirstName')) > 0) {  
 

 
 include("includes/header1.php");
  
 } else {
   redirect("Login");
 } ?>
 
 <div id="loader"></div>
<div class="row">
<?php if($error):  ?>
  <!-- <div class="alert alert-danger m-0" role="alert"> <strong>
    Oh snap!</strong>  <?php echo $error ;  ?>   </div> -->
    <div class="alert alert-danger text-center ">
<div class="container-fluid">
  <div class="alert-icon">
	<i class="material-icons">warning</i>
  </div>
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
	<span aria-hidden="true"><i class="material-icons">clear</i></span>
  </button>
  <b>Warning Alert:</b> <?php echo $error ?>
</div>
</div>
<?php endif;?>
</div>
 
<div class="row">


    <?php   foreach($records as $row): ?>
    
 
     <div class="card mt-1 ml-2 m-3" style="width:15rem;">
             
     <div class="card-body">
                <h5 class="card-title"> <?php  echo $row->FirstName . ' '. $row->LastName;  ?></h5>
                <div class="row">
                  <div class="col"> <?php  echo $row->Mobile .'  |  '. $row->Designation ;  ?></div>
                 
                </div>

                <div class="row">
                  <div class="col">
                    <div class="form-check form-check-radio form-check-inline">
                      <label class="form-check-label">
                        <input class="form-check-input" type="radio" 
                        
                        name= <?php echo "'". $row->EmpID . 'Radio1' . "'" ?>
                        
                      id=  <?php echo "'". $row->EmpID . 'IDRadio1' . "'" ?>
                        
                        value="option1"


                        <?php   if($row->Role=='User') :
                             echo 'Checked';   ?> 
                               <?php endif; ?>
                        Disabled>
                        User
                        <span class="circle">
                          <span class="check"></span>
                        </span>
                      </label>
                      <label class="form-check-label ml-2">
                        <input class="form-check-input" type="radio" 
                        
                        name= <?php echo "'". $row->EmpID . 'Radio2' . "'" ?>
                        
                        id=  <?php echo "'". $row->EmpID . 'IDRadio2' . "'" ?>
                        
                        value="option2"
                        <?php   if($row->Role=='Admin') :
                          echo 'Checked';       ?> 
                                 <?php endif; ?>
                         disabled>
                        Admin
                        <span class="circle">
                          <span class="check"></span>
                        </span>
                      </label>
                    </div>

                  </div>

                </div>
                <div class="row">
                  <div class="col">

                    <div class="togglebutton">
                      <label>
                        <input type="checkbox" checked="unchecked">
                        <span class="toggle"></span>
                        Active
                      </label>
                    </div>

                  </div>
                  <div class="col">
                   
                  <?php echo form_open('staffDetails'); ?>     
                         
                          <?php echo form_hidden('EmpID',  $row->EmpID ) ?>
                         <button type="submit" class="btn btn-success  btn-sm btn-link" name="Emp"   >Details </button>
                           
                          <?php echo form_close(); ?>



                  </div>
                </div>


              </div>  
            
            </div>

<?php  endforeach; ?>
           
        
    
</div>






        <div class="row">
          <div class="col col-12 col-sm-12 col-md-12 text-right">
            <div class="col-sm12 col-md-12 align-content-end">
              <button class="btn btn-info " type="button" data-toggle="modal" data-target="#addEmployee">
                <i class="material-icons">add</i> New Employee
              </button>
            </div>
          </div>
        </div>

    


 <!-- Modal  New Employee name-->
 <div class="modal fade" id="addEmployee" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
      aria-hidden="true">
      <?php  echo form_open('staff/create'); ?>
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header bg-info">
            <h5 class="modal-title " id="exampleModalLabel">New Employee</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
              <div class="row">
            <div class="form-group col">
              <label for="validationDefault01" class="bmd-label-floating">First Name</label>
              <input type="text" class="form-control" id="validationDefault01" name="FirstName" required>
            </div>
            <div class="form-group col">
              <label for="validationDefault02" class="bmd-label-floating">Last Name</label>
              <input type="text" class="form-control" id="validationDefault02" name="LastName" required>
            </div>
            </div>
            <div class="form-group">
              <label for="validationDefault03" class="bmd-label-floating">Email</label>
              <input type="email" class="form-control" id="validationDefault03" name="Email" required>

            </div>
            <div class="row">

 <div class="form-group col">
              <label for="validationDefault04" class="bmd-label-floating">Password</label>
              <input type="password" class="form-control" id="validationDefault04" name="Password1">

            </div>
            <div class="form-group col">
              <label for="validationDefault05" class="bmd-label-floating">Confirm Password</label>
              <input type="confirmpassword" class="form-control" id="validationDefault05" name="Password2">

            </div>
            </div>
           <div class="row">
           <div class="form-group ml-2">
              <label for="formGroupExampleInput" class="bmd-label-floating">Designation</label>
              <input type="text" class="form-control" id="formGroupExampleInput" name="Designation">

            </div>
            <div class="form-group ml-3">
              <label for="formGroupExampleInput" class="bmd-label-floating" >Mobile</label>
              <input type="number" class="form-control" id="formGroupExampleInput" name="Mobile">

            </div>
           </div>
           
            <div class="row">
           
            <div class="form-check form-check-radio ml-2">
    <label class="form-check-label ">
        <input class="form-check-input" type="radio" name="role" id="role1" value="Admin" >
        Admin
        <span class="circle">
            <span class="check"></span>
        </span>
    </label>
</div>
<div class="form-check form-check-radio ml-2">
    <label class="form-check-label">
        <input class="form-check-input" type="radio" name="role" id="role2" value="User" checked>
        Staff
        <span class="circle">
            <span class="check"></span>
        </span>
    </label>
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