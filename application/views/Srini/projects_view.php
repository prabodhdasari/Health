

<?php if (strlen($this->session->userdata('FirstName')) > 0) {  
 

 
include("includes/header1.php");
 
} else {
  redirect("Login");
} ?>
<div class="row">
     

 
<div id="loader"></div>

  
<div class="row m-0">
    <?php foreach ($records as $row) : ?>
           
                <div class="card m-1" style="width: 20rem;">
                    <div class="card-body">
                        <div class="row">
                            <div class="col">
                                <h4 class="card-title m-1"><?php echo $row->Project_Name ?></h4>
                            </div>
                            <div class="col">
                                <span class="badge badge-pill badge-info">
                                <?php 
                                echo $row->Status; ?>
                               
                                
                                </span>
                            </div>
                        </div>
                        <h5 class="card-subtitle mb-0 text-muted">
                        
                         <?php echo strtoupper($row->Tender_ID); ?>  | <i class="fas fa-rupee-sign"></i><i
                                class="fa fa-inr" aria-hidden="true"></i> <b><?php 
                                
                                $this->load->helper('custom');
                                echo  
                                moneyFormatIndia((int) $row->Temder_Amount );
                               // echo $row->Temder_Amount; ?></b> </h5>


   <P class="card-subtitle mb-0 text-muted">                       
   Start Date:: <?php $newDate = date("d-M-Y", strtotime($row->Project_Start_Date));
                echo $newDate; ?> </P>
   <P class="card-subtitle mb-0 text-muted">
                        
                       End Date   : <?php 
                                    $newDate = date("d-M-Y", strtotime($row->Project_End_Date));
                                    echo $newDate; ?> </P>
                      

                      <div class="row">
                          <div class="col">   
                          <?php echo form_open('BOQ'); ?>     
                         
                          <input type="hidden" class="form-control" id="validationDefault01" name="Project_Name" 
                          value= <?php echo "'" . $row->Project_Name . "'" ?>
                          >
                          <button type="submit" class="btn btn-success  btn-sm btn-link" name="btnNewBOQ" style="width:auto; color:Blue"   >BOQ </button>
                            <?php echo form_close(); ?>  
                          </div>
                          <div class="col"> 
                          <?php echo form_open('Advances'); ?>   
                          <input type="hidden" class="form-control" id="validationDefault01" name="Project_Name" 
                          value= <?php echo "'" . $row->Project_Name . "'" ?>
                          >
                          <button type="submit" class="btn btn-success  btn-sm btn-link" name="btnAdvance" style="width:auto; color:Blue"   >Advances </button>
                        

                          <?php echo form_close(); ?>     
                                                  
                          </div>
                          <div class="col">
                          <?php echo form_open('Team'); ?>                                            
                          <input type="hidden" class="form-control" id="validationDefault01" name="Project_Name" 
                          value= <?php echo "'" . $row->Project_Name . "'" ?>                          >
                          <?php echo form_hidden('Project', "'" . $row->Project_Name . "'") ?>
                              <button type="submit" class="btn btn-success  btn-sm btn-link" name="btnNewProject"   >Team </button>
                                 <?php echo form_close(); ?>
                          </div>
                          <div class="col">
                          <?php echo form_open('ProjectDetails'); ?>     
                          <input type="hidden" class="form-control" id="validationDefault01" name="Project_Name" 
                          value= <?php echo "'" . $row->Project_Name . "'" ?>  >
                          <?php echo form_hidden('Project', "'" . $row->Project_Name . "'") ?>
                         <button type="submit" class="btn btn-success  btn-sm btn-link" name="btnNewProject" >Details </button>
                           
                          <?php echo form_close(); ?>
                          </div>
                      </div>
                    </div>
                </div>
             
         
    
    
       
        <?php endforeach; ?>
</div>
</div>





        <div class="row ">
          <div class="col col-12 col-sm-12 col-md-12 text-right float-right">
            <div class="col-sm12 col-md-12 align-content-end">
              <button class="btn btn-info " type="button" data-toggle="modal" data-target="#addProjects">
                <i class="material-icons">add</i> New Project
              </button>
            </div>
          </div>
        </div>

  

 <!-- Modal  New Project name-->
 
 
 <div class="modal fade" id="addProjects" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
      aria-hidden="true">
      <?php echo form_open('projectsnew/create'); ?>
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header bg-info">
            <h5 class="modal-title " id="exampleModalLabel">New Project</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
              <div class="row">
              <div class="form-group col">
              <label for="validationDefault01" class="bmd-label-floating">Project Name</label>
              <input type="text" class="form-control" id="validationDefault01" name="Project_Name" required>
              </div>
              </div>
            <div class="form-group col">
              <label for="validationDefault02" class="bmd-label-floating">Project Description</label>
              <input type="text" class="form-control" id="validationDefault02" name="Project_Description" required>
            </div>
            <div class="row">
            <div class="form-group">
              <label for="validationDefault03" class="bmd-label-floating">Tender ID</label>
              <input type="text" class="form-control" id="validationDefault03" name="Tender_ID" required>

            </div>
           

 <div class="form-group col">
              <label for="validationDefault04" class="bmd-label-floating">Tender Amount</label>
              <input type="number" class="form-control" id="validationDefault04" name="Temder_Amount" required>

            </div>
            </div>
            <div class="row">
            <div class="form-group col">
              <label for="validationDefault05" class="bmd-label">Project Start Date</label>
              <input type="text" class="form-control datetimepicker" id="validationDefault05" name="Project_Start_Date">

            </div>        
           
            <div class="form-group">
              <label for="formGroupExampleInput" class="bmd-label">Project End Date</label>
              <input type="text" class="form-control datetimepicker" id="formGroupExampleInput" name="Project_End_Date">

            </div>
            </div>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary btn-small small" data-dismiss="modal">Cancel</button>
            <button type="submit" class="btn btn-success btn-small small" name="btnNewProject" >Save </button>
          </div>
          <?php echo form_close(); ?>
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
  //document.getElementById("myDiv").style.display = "block";
}
</script>

 <?php  include("includes/footer.php")?>