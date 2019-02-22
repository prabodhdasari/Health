

<?php if (strlen($this->session->userdata('FirstName')) > 0) {  
 

 
 include("includes/header1.php");
  
 } else {
   redirect("Login");
 } ?>
<script type="text/javascript" src="https://cdn.datatables.net/v/dt/dt-1.10.18/datatables.min.js"></script>




<script type="text/javascript">

function checkGST(sender){

   
    if(!isNaN(sender.value)){
        if(sender.value > 28 )
            sender.value = 28;
        if(sender.value < 0 )
            sender.value = 0;
    
             
        }else{sender.value = 0;}
       
        getTotal();  }
function checkAmount(sender)    {
    
    if(!isNaN(sender.value)){
         
        x=  sender.value.toString();
             y=  x.length; 

         if(y > 10 ){
             alert('The Invoice Amount is very large');
             sender.value=x.substring(0, 10);
        }
        if(sender.value < 0 )
            sender.value = 0;
        }else{
          sender.value = 0;
    }
   
    
    getTotal();}
 
function checkDiscount(sender){
   
    if(!isNaN(sender.value)){
        
        if(sender.value > 99 )
            sender.value = 99;
        if(sender.value < 0 )
            sender.value = 0;
    }else{
          sender.value = 0;
    }
   
    getTotal(); }

function getTotal(){
    
    gstAmount=document.getElementById("GST").value;
    total=0;
    discountAmount=document.getElementById("Discount").value;
    invAmount=document.getElementById("Amount").value;
    
    if(!isNaN(invAmount))
    {
        gstAmount=invAmount*gstAmount;
        gstAmount=gstAmount/100;

      //  alert(gstAmount);
        discountAmount=invAmount*discountAmount;
        discountAmount=discountAmount/100;
       // alert(discountAmount);
        total=Number(invAmount) + Number(gstAmount) - Number(discountAmount);
      //  alert(total);
        var tot=document.getElementById("Total");
        document.getElementById("Total").innerHTML=total;
        document.getElementById("Total").innerText=total;
        document.getElementById("gtot").innerText=total;
        document.getElementById("gtot").innerHTML=total;
        tot.value=total;
        var tot=document.getElementById("gtot");
        tot.value=total;
    }
  
}


</script>
</head>

 
 
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

 
    <div class="row mt-0 mb-0" >
  
        <!---->
        <div class="col container col-md-12 col-sm-12">

            <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                <li class="nav-item">
                    <a class="nav-link active" id="Venodor_Name" data-toggle="pill" href="#pills-home" role="tab"
                        aria-controls="pills-home" aria-selected="true"> 
                        <?php echo $this->session->userdata('VendorID'); ?> 
                     <?php 
                      echo $this->session->userdata('Business_Name'); 
                    //   if($Vendors)
                    //   {
                    //   echo $Vendors->Business_Name . ' | Invoice';
                    //    }
                    //   else {
                    //       redirect("Vendors","refresh");
                    //   }
                      ?> 
                        </a>
                </li>
                <li class="nav-item">  <a class="nav-link  small ml-4" href="Vendors">Back to Vendors</a> </li>
            </ul>
           
            <hr>
            <!--Tab Content-->


        </div>
    </div>


    <div class="row mt-0">

<div class="col col-md-12 mt-0">
<?php  echo form_open_multipart('Invoices/addInvoice'); ?>

       <div class="col-md-10 ml-4 mt-0">
            <div class="card mt-0" >
                
                <hr class="mb-0 mt-0">
                <div class="row m-2">
                    <div class="form-group  col-sm-12 col-md-2">
                      <label for="validationDefault01" class="bmd-label-floating">Invoice Number</label>
                      <input type="text" class="form-control" id="Invoice_Number" name="Invoice_Number" required>
                    </div>
                    <div class="form-group ml-2 col-sm-12 col-md-2">
                     <label class="label-control">Invoice Date </label>
                     <input type="text" class="form-control datetimepicker" id="Invoice_Date" name="Invoice_Date" value= <?php echo date("d/m/Y"); ?>   />
                     </div>
                     <div class="form-group col-sm-12 col-md-4">
                    <label for="validationDefault01" class="bmd-label-floating"> Details</label>
                    <input type="Text" class="form-control" id="Details" name="Details" required>
                    </div>
                     <div class="form-group ml-2 col-sm-12 col-md-2 ">
                         <label for="validationDefault01" class="bmd-label-floating"> Amount</label>
                         <input type="number" class="form-control" id="Amount" name="Amount" maxlength="10" onblur="checkAmount(this)"  required>
                    </div>
                </div>
                
                    <div class="row m-2">
                                    <div class="form-group ml-2 col-sm-12 col-md-1 " >
                                    <label for="validationDefault01" class="bmd-label-floating" > GST %</label>
                                    <input type="number" class="form-control" id="GST" name="GST" onblur="checkGST(this)" required>
                                    </div>
                                    <div class="form-group ml-2 col-sm-12 col-md-2  "  >
                                    <label for="validationDefault01" class="bmd-label-floating ml-2"> Discount %</label>
                                    <input type="number" class="form-control" id="Discount" name="Discount"  onblur="checkDiscount(this)"  required>
                                    </div>
                                    <div class="form-group ml-2 col-sm-12 col-md-3  ">
                                    <label for="validationDefault01" class="bmd-label-floating"> Total</label>
                                    <input type="text"  class="form-control text-center text-dark" id="Total" name="Total" disabled > 
                                    <input type="hidden"  class="form-control text-center text-dark" id="gtot" name="gtot"  > 
                                  
                                     </div>
                                    <div class=" ml-2 col-sm-12 col-md-3">
                                 <input type="file"  class= "btn btn-info" name="userfile" accept=".png, .jpg, .jpeg" size="20" />
                                <button type="submit" class="btn btn-primary btn-sm ml-2 col-sm-12 ">Add New Invoice</button>
                                 <input type="Hidden" id="VendorID" name="VendorID" value= " 
                                 <?php echo $this->session->userdata('VendorID'); ?>">
                                 </div>
                                 <div class="form-group m-2 ">
                                     </div>
                         </div>
                 

                 
               
            </div>
      
        </div>
 
    <?php  echo form_close(); ?>
</div>
<div class="row col-md-10 col-sm-12 ml-5 mr-5">


 

 <?php   if($records): ?>
<table id="BOQ" class="table table-hover    table-responsive small " >
    <thead class="thead-default">
        <tr>
        <th> ID</th>
            <th>Vendor Name</th>
            <th>Invoice Number</th>
            <th> Inv Amount </th>
            <th> GST </th>
            <th> Discount </th>
            <th> Total Amount </th>

            <th>Description</th>
            <th>Invoice Date</th>
            <th>Action</th>
            
            
           
        </tr>
        </thead>
        <tbody>
        <!-- <?php foreach($records as $row): ?>
            <tr>
                <td scope="row"><?php echo $row->BOQID ?></td>
                <td><?php 
                
                echo $row->BOQ_Amount ?></td>
                <td><?php echo $row->BOQ_Description ?></td>
                <td><i class="fas fa-edit    ">Edit</i></td>
                <td><i class="fa fa-remove" aria-hidden="true">Del</i> </td>

            </tr>
            <?php endforeach; ?> -->

             <?php foreach ($records as $row) { ?>      
      <tr>
      <td scope="row"><?php echo $row->ID ?></td>
      <td ><?php echo $row->Business_Name ?></td>
                <td><?php echo $row->Invoice_Number ?></td>
                <td> 
                
                <?php 
                  //  $fmt = new NumberFormatter( 'en_IN', NumberFormatter::CURRENCY );
                  //  $fmt->setAttribute(NumberFormatter::FRACTION_DIGITS, 0);
                  //  echo $fmt->formatCurrency( $row->Amount, "INR")."\n";
                  $this->load->helper('custom');
                  echo  "<i class=\"fa fa-inr\" aria-hidden=\"true\"></i>".
                  moneyFormatIndia((int) $row->Amount);
              //echo $row->Amount
               ?></td>
                <td><?php echo $row->GST . ' %' ?></td>
                <td><?php echo $row->Discount . ' %'?></td>
                <td class="text-dark"><b><?php 
                
                $this->load->helper('custom');
                echo  "<i class=\"fa fa-inr\" aria-hidden=\"true\"></i>".
                moneyFormatIndia((int) $row->Total_Amount);
              // echo $row->Total_Amount ?></b></td>
                <td><?php echo $row->Details ?></td>
                <td>   <?php echo date("d/M/Y", strtotime($row->Invoice_Date));  ?></td>
               
                   
      <td  >
      <td><?php  if( $row->File_Name):
                           
                        
                           $fname=base_url()."uploadfiles/".$row->File_Name;
                            
                                     ?>     
                                 <input type="button" class="form-control" name="" id="" data-toggle="modal" data-myvalue=" <?php echo $fname ?> " data-target="#myModal" onclick="document.getElementById('imgDisp').src=' <?php echo $fname ?> '"  value="View">
                                
                                <?php endif; ?></td>
     
        
        
            
      </td>     
      </tr>
      <?php } ?>

        </tbody>
</table>
<?php endif; ?>

</div> 

 <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
       <img>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body ">
     
     <label id="modal-myvalue" hidden></label>
     
      <img id="imgDisp" src=""  height="300px" >
      
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        
      </div>
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

 

    <!--   Core JS Files   -->
<script>
$(document).ready(function() {
    $('#BOQ').DataTable();
} );
</script>
 <?php  
include("includes/footer.php")
 ?>
 



