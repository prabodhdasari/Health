<?php if (strlen($this->session->userdata('FirstName')) > 0) {
    include("includes/header1.php");
} else {
    redirect("Login");
} ?>
 <div id="loader"></div>
 <?php if ($error) : ?>
  <!-- <div class="alert alert-danger m-0" role="alert"> <strong>
    Oh snap!</strong>  <?php echo $error; ?>   </div> -->
    <div class="alert alert-danger text-center ">
     <div class="container-fluid">
         <div class="alert-icon">
	        <i class="material-icons">warning</i>
          </div>
         <button type="button" class="close" data-dismiss="alert" aria-label="Close">
	    <span aria-hidden="true"><i class="material-icons">clear</i></span>
        </button>
         <?php echo $error; ?>
        </div>
    </div>
<?php endif; ?>
    <div class="row">
        <!---->
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
<div class="col col-md-4">
<?php echo form_open('BOQ/addNewBOQ'); ?>
       <div class="col-md-3 ml-4">
            <div class="card " style="width: 20rem;">
                <div class="row">
                    <div class="col">
                        <p class="h4 text-center ">Bill of Quantity </p>
                    </div>
                    <div class="col">
                    </div>
                </div>
                <hr class="mb-0 mt-0">
                <div class="row m-2">
                    <div class="form-group col">
                    <label for="validationDefault01" class="bmd-label-floating">BOQ Number</label>
                    <input type="text" class="form-control" id="BOQID" name="BOQID" required>
                    </div>
                    <div class="form-group col">
                    <label for="validationDefault01" class="bmd-label-floating"> BOQ Amount</label>
                    <input type="number" class="form-control" id="BOQ_Amount" name="BOQ_Amount" required>
                    </div>
                </div>
                <div class="form-group col">
                    <label for="validationDefault01" class="bmd-label-floating"> BOQ Title</label>
                    <input type="Text" class="form-control" id="BOQ_Title" name="BOQ_Title" required>
                    </div>
                <div class="form-group m-2 ">
                  <label for="validationDefault01" class="bmd-label-floating"> BOQ Description</label>
    <textarea class="form-control" id="BOQ_Description" name="BOQ_Description" rows="3"></textarea>
                 </div>
                 <button type="submit" class="btn btn-primary btn-sm mr-2">Add New BOQ</button>
            </div>
        </div>
    <?php echo form_close(); ?>
</div>
<div class=" col-md-7 col-sm-12 ml-1">
 <?php if ($records) : ?>
<table id="BOQ" class="table table-hover  table-responsive small col-md-7" style="width:100%">
    <thead class="thead-default">
        <tr>
        <th> ID</th>
            <th>BOQ ID</th>
            <th>Amount</th>
            <th> Title </th>
            <th>Description</th>
            <th>Action</th>
        </tr>
        </thead>
        <tbody>
        <!-- <?php foreach ($records as $row) : ?>
            <tr>
                <td scope="row"><?php echo $row->BOQID ?></td>
                <td><?php echo $row->BOQ_Amount ?></td>
                <td><?php echo $row->BOQ_Description ?></td>
                <td><i class="fas fa-edit    ">Edit</i></td>
                <td><i class="fa fa-remove" aria-hidden="true">Del</i> </td>
            </tr>
            <?php endforeach; ?> -->
             <?php foreach ($records as $row) { ?>      
      <tr>
      <td scope="row"><?php echo $row->ID ?></td>
      <td ><?php echo $row->BOQID ?></td>
                <td><?php 
                  //  $fmt = new NumberFormatter( 'en_IN', NumberFormatter::CURRENCY );
                  //  $fmt->setAttribute(NumberFormatter::FRACTION_DIGITS, 0);
                  //  echo $fmt->formatCurrency( $row->BOQ_Amount, "INR")."\n";
                    $this->load->helper('custom');
                    echo "<i class=\"fa fa-inr\" aria-hidden=\"true\"></i>" .
                        moneyFormatIndia((int)$row->BOQ_Amount);
             //   echo $row->BOQ_Amount ?></td>
                <td><?php echo $row->BOQ_Title ?></td>
                <td><?php echo $row->BOQ_Description ?></td>
      <td  >
      <?php echo form_open('BOQ/delete'); ?>
        <!-- <form method="DELETE" action="<?php echo ('BOQ/delete/' . $row->BOQID); ?>"> -->
        <input type="hidden" id="BOQID" name="BOQID" value="<?php echo ($row->BOQID) ?>">
            <div class="div">
                 <a class="btn btn-info btn-sm" href="<?php echo ('BOQ/edit/' . $row->BOQID) ?>">
             <i class="fa fa-pencil" aria-hidden="true"></i>
              </a>
          <button type="submit" class="btn btn-danger btn-sm">  <i class="fa fa-remove" aria-hidden="true"></i>
             </button> 
            </div>
            <?php echo form_close(); ?>
      </td>     
      </tr>
      <?php 
    } ?>
        </tbody>
</table>
<?php endif; ?>
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
    <!--   Core JS Files   -->
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
 <?php 
include("includes/footer.php")
?>
