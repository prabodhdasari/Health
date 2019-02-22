


<?php if (strlen($this->session->userdata('FirstName')) > 0) {  
 

 
 include("includes/header1.php");
  
 } else {
   redirect("Login");
 } ?>

<style>
/* Center the loader */
#loader {
  position: absolute;
  left: 50%;
  top: 50%;
  z-index: 1;
  width: 150px;
  height: 150px;
  margin: -75px 0 0 -75px;
  border: 16px solid #f3f3f3;
  border-radius: 50%;
  border-top: 16px solid #3498db;
  width: 120px;
  height: 120px;
  -webkit-animation: spin 2s linear infinite;
  animation: spin 2s linear infinite;
}

@-webkit-keyframes spin {
  0% { -webkit-transform: rotate(0deg); }
  100% { -webkit-transform: rotate(360deg); }
}

@keyframes spin {
  0% { transform: rotate(0deg); }
  100% { transform: rotate(360deg); }
}

/* Add animation to "page content" */
.animate-bottom {
  position: relative;
  -webkit-animation-name: animatebottom;
  -webkit-animation-duration: 1s;
  animation-name: animatebottom;
  animation-duration: 1s
}

@-webkit-keyframes animatebottom {
  from { bottom:-100px; opacity:0 } 
  to { bottom:0px; opacity:1 }
}

@keyframes animatebottom { 
  from{ bottom:-100px; opacity:0 } 
  to{ bottom:0; opacity:1 }
}

#myDiv {
  display: none;
  text-align: center;
}
</style>

 
 
 <div id="loader"></div>
   
<?php   $name='';   if($projects): ?>
    
                  
    <?php  foreach($projects as $row) :?>
        
        <?php  $name= $row->Project_Name;   ?>
         
    <?php   endforeach; ?>

<?php  endif;  ?>
    <div class="row">
  
        <!--Work and Report-->
        <div class="col container col-md-12 col-sm-12">

            <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                <li class="nav-item">
                    <a class="nav-link active" id="projectName" data-toggle="pill" href="#pills-home" role="tab"
                        aria-controls="pills-home" aria-selected="true"> 
                      <?php echo $this->session->userdata('Project_Name'); ?> 
                        </a>
                </li>
                <li class="nav-item">  <a class="nav-link  small ml-4" href="Projectsnew">Back to Projects</a> </li>
            </ul>

            <hr>
            <!--Tab Content-->


        </div>
    </div>
    <div class="row">



        <!--List of Employees-->
        <?php  echo form_open('Team/addMember'); ?>
      
        <div class="col-md-3 ml-4">
            <div class="card " style="width: 20rem;">
                <div class="row">
                    <div class="col">
                        <p class="h4 ">Employees </p>
                    </div>
                    <div class="col">
                        
<button type="submit" class="btn btn-primary btn-sm mr-2">Add Team Member</button>

                    </div>
                </div>
                <hr>
                <?php   foreach($records as $row) : ?>
                <div class="form-check ml-2">
              
                    <label class="form-check-label ">
                        <input class="form-check-input" type="checkbox" name="TeamNames[]" value= <?php  echo $row->EmpID; ?>>
                        <?php  echo $row->FirstName . ' ' .  $row->LastName . '  ' . $row->EmpID;   ?>
                        <span class="form-check-sign">
                            <span class="check"></span>
                        </span>
                    </label>
                </div>
           
                   <?php   endforeach; ?>
            </div>
        </div>
        <?php  echo form_close(); ?>
        <!--Beneficiaries-->

        <!--Project Team-->
        <div class="col-md-3 ml-4">
            <div class="card " style="width: 20rem;">
                <p class="h4 ml-2">Project Team Members </p>
                <hr>
                <ul class="list-group list-group-flush">
             
                <?php   if($projects): ?>
    
                     
                        <?php  foreach($projects as $row) :?>
                            <li class="list-group-item">
                            <?php  echo  $row->FirstName . ' ' .  $row->LastName;   ?>
                            </li>
                        <?php   endforeach; ?>
                    
                    <?php  endif;  ?>
                    
                </ul>
            </div>
        </div>






    </div>


    <!-- Modal  New Beneficiary name
    <div class="modal fade" id="addBen" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header bg-info">
                    <h5 class="modal-title " id="exampleModalLabel">New Beneficiary</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="form-group">
                        <label for="formGroupExampleInput" class="bmd-label-floating">Name</label>
                        <input type="text" class="form-control" id="formGroupExampleInput">

                    </div>
                    <div class="form-group">
                        <label for="formGroupExampleInput" class="bmd-label-floating">Mobile</label>
                        <input type="text" class="form-control" id="formGroupExampleInput">

                    </div>
                    <div class="form-group">
                        <label for="formGroupExampleInput" class="bmd-label-floating">Designation</label>
                        <input type="password" class="form-control" id="formGroupExampleInput">

                    </div>

                    <div class="form-group">
                        <label for="formGroupExampleInput" class="bmd-label-floating">Email Id</label>
                        <input type="text" class="form-control" id="formGroupExampleInput">

                    </div>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-success">Save changes</button>
                </div>
            </div>
        </div>
    </div>


     
    <div class="modal fade" id="profile" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Profile</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="form-group">
                        <label for="formGroupExampleInput" class="bmd-label-floating">First Name</label>
                        <input type="text" class="form-control" id="formGroupExampleInput">
                    </div>
                    <div class="form-group">
                        <label for="formGroupExampleInput" class="bmd-label-floating">Last Name</label>
                        <input type="text" class="form-control" id="formGroupExampleInput">
                    </div>
                    <div class="form-group">
                        <label for="formGroupExampleInput" class="bmd-label-floating">Mobile</label>
                        <input type="text" class="form-control" id="formGroupExampleInput">
                    </div>
                    <div class="form-group">
                        <label for="formGroupExampleInput" class="bmd-label-floating">Designation</label>
                        <input type="text" class="form-control" id="formGroupExampleInput">
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Save changes</button>
                </div>
            </div>
        </div>
    </div>


  
  <div class="modal fade" id="addEmployee" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
  aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header bg-info">
        <h5 class="modal-title " id="exampleModalLabel">New Employee</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="form-group">
          <label for="formGroupExampleInput" class="bmd-label-floating">Name</label>
          <input type="text" class="form-control" id="formGroupExampleInput">

        </div>
        <div class="form-group">
          <label for="formGroupExampleInput" class="bmd-label-floating">Email</label>
          <input type="text" class="form-control" id="formGroupExampleInput">

        </div>
        <div class="form-group">
          <label for="formGroupExampleInput" class="bmd-label-floating">Password</label>
          <input type="password" class="form-control" id="formGroupExampleInput">

        </div>
        <div class="form-group">
          <label for="formGroupExampleInput" class="bmd-label-floating">Confirm Password</label>
          <input type="password" class="form-control" id="formGroupExampleInput">

        </div>
        <div class="form-group">
          <label for="formGroupExampleInput" class="bmd-label-floating">Designation</label>
          <input type="text" class="form-control" id="formGroupExampleInput">

        </div>
        <div class="form-group">
          <label for="formGroupExampleInput" class="bmd-label-floating">Mobile</label>
          <input type="text" class="form-control" id="formGroupExampleInput">

        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-success">Save changes</button>
      </div>
    </div>
  </div>
</div>
-->

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