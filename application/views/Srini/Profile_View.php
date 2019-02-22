

<?php if (strlen($this->session->userdata('FirstName')) > 0) {  
 

 
 include("includes/header1.php");
  
 } else {
   redirect("Login");
 } ?>


<script>
 

<?php if( strlen($this->session->userdata('FirstName'))>0){ ?>

    <?php  $EmpId= $this->session->userdata('EmpID')  ;
        $role=$this->session->userdata('Role')  ;
        if($role=='Admin'){
        $sql="select * from NavBar a join Employees b where a.Role like ('%Admin%') and b.Active='Y' and b.EmpID='". $EmpId . "'";
    } else {
        $sql="select * from NavBar a join Employees b where a.Role like ('%User%') and b.Active='Y' and b.EmpID='". $EmpId . "'";


    }
        $q=$this->db->query($sql);
        
           if( $q->result())
           {
            $row= $q->row();
            $data[]=array();
            $data['navs']= $q->result();
            $this->load->view('Header',$data);
            }   ?>
<?php } else {
   redirect("Login");
} ?>



  
 
 
 <div id="loader"></div>
 <style>
   .image-upload > input
{
    display: none;
}
</style> 

    <div class="row mt-0">

        <div class="col container col-md-3 col-sm-12 mt-0">
      
            <div class="card center " style="width: 20rem;">

          <!--    
           <img  type="file"  name="userfile" class="card-img-top" src="../node_modules/material-kit/assets/img/img_avatar1.png" alt="Card image">

                  <input type="file"  class= "badge-primary" name="userfile" size="20" />
                <input type="submit" class="badge-primary" value="upload" /> -->

  <?php echo form_open_multipart('Profile/addPhoto'); ?>
  <div class="image-upload mt-0 align-items-center align-content-center" style="width:20rem;" >
    <label for="file-input">
        <img src="<?php echo $photo; ?>" style="width:20rem; height:80%" />
    </label>

    <input id="file-input"  name="userfile" onchange="form.submit()" type="file" accept=".png, .jpg,  " />
</div>
<?php echo form_close(); ?>   




  <?php echo form_open_multipart('upload/do_upload');?>
                <div class="card-body">
                    <h4 class="card-title"><?php echo $records->FirstName . '  ' .$records->LastName ?></h4>
                    <div class="row">
                        <div class="col">
                            <p class="card-text">   <i class="fa fa-mobile-phone" aria-hidden="true"></i>  <?php echo $records->Mobile ?></p>
                        </div>
                        <div class="col">
                            <p class="card-text"><?php echo $records->Designation ?>  </p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col"> <a href="#" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#profile">
                                Profile</a></div>
                        <div class="col"> <a href="#" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#password"> Password</a></div>
                    </div>

                </div>
            </div>
            <?php  echo form_close(); ?>    
        </div>
    </div>




    <!--Modal for Profils

<label for="validationDefault01" class="bmd-label-floating">First Name</label>
              <input type="text" class="form-control" id="validationDefault01" name="FirstName" required>
-->
    <div class="modal fade" id="profile" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <?php  echo form_open('Profile/update'); ?>
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Profile</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col"> <div class="form-group">
                        <label for="validationDefault01" class="bmd-label-floating"><?php echo $records->FirstName  ?></label>
                        <input type="text" class="form-control" id="FirstName" name="FirstName" required>
                    </div></div>
                        <div class="col"><div class="form-group">
                        <label for="validationDefault02" class="bmd-label-floating"><?php echo $records->LastName  ?></label>
                        <input type="text" class="form-control" id="LastName" name="LastName" required>
                    </div></div>
                    </div>
                    <div class="row">
                        <div class="col"><div class="form-group">
                        <label for="validationDefault03" class="bmd-label-floating"><?php echo $records->Mobile  ?></label>
                        <input type="Number" class="form-control" id="Mobile" name="Mobile" required>
                    </div></div>
                        <div class="col"> <div class="form-group">
                        <label for="validationDefault04" class="bmd-label-floating"><?php echo $records->Designation  ?></label>
                        <input type="text" class="form-control" id="Designation" name="Designation" required>
                    </div></div>
                    </div>
                   
                    
                    
                   
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Save changes</button>
                </div>
            </div>
        </div>
        <?php  echo form_close(); ?>
    </div>


       <!--Modal for Password-->
       <div class="modal fade" id="password" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
       <?php  echo form_open('Profile/changePassword'); ?>   
       <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Change Password</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                            <div class="modal-body"><div class="row">
                                <div class="col">
                                                    <div class="form-group">
                                                        <label for="validationDefault01" class="bmd-label-floating">New Password</label>
                                                        <input type="password" class="form-control" id="PasswordOld" name="PasswordOld" required>
                                                    </div></div>
                                <div class="col"> <div class="form-group">
                                                        <label for="validationDefault02" class="bmd-label-floating">Confirm Password</label>
                                                        <input type="password" class="form-control" id="PasswordNew" name="PasswordNew" required>
                                                    </div></div>
                            </div>
                    
                       
                        
                       
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Save changes</button>
                    </div>
                </div>
            </div>
            <?php  echo form_close(); ?>
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

 
 
     

   