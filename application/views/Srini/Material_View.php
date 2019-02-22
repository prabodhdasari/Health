

<?php if (strlen($this->session->userdata('FirstName')) > 0) {  
 

 
 include("includes/header1.php");
  
 } else {
   redirect("Login");
 } ?>
<script>
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



 
 
 <div id="loader"></div>
    
<!--Expenses-->
<div class="row ml-3">

<div class="card m-0 mr-5">
   
    <div class="card-body mr-4 sm-12">
        <h4 class="card-title">Vendors Payment</h4>
        <?php echo form_open_multipart('Material/addPayments'); ?>
        <div class="row mr-4">
       
                        <div class=" col-md-2 col-sm-12 mb-2" >                             
                            <select class="custom-select" id="SelVendor" name="SelVendor" >
                                <?php if ($vendors) : ?>
                                <?php foreach ($vendors as $row) : ?>
                                <option class="ml-2"   value=" <?php echo $row->VendorID ?>"  >
                                <?php echo $row->Business_Name  ?>
                                </option>
                                <?php endforeach; ?>
                                <?php endif; ?>
                            </select>
                        </div>
                        <div class="col-md-2 col-sm-12 mb-2">
                             <?php echo $countryDropdown; ?>
                         </div>
                         <div class="col-md-3 col-sm-12 mb-2"> 
                             <?php echo $stateDropdown; ?>
                         </div>
                         <div class="form-group col-md-2 col-sm-12  ml-2">
                            <label for="validationDefault01" class="bmd-label-floating">Invoice Number</label>
                             <input type="text" class="form-control" id="InvNumber" name="InvNumber" required>
                        </div>
                        <div class="form-group col-md-2 col-sm-12 ml-2">
                            <label for="validationDefault01" class="bmd-label-floating">Invoice Amount</label>
                             <input type="number" class="form-control" id="Amount" name="Amount" required>
                        </div>
                 
                        
       </div>

        <div class="row">
                         <div class="form-group col-md-2 col-sm-12 ml-2">
                            <label class="label-control">Payment Date & Time</label>
                            <input type="text" class="form-control datetimepicker" id="Payment_Date" name="Payment_Date" value= <?php echo date("d/m/Y"); ?>   />
                        </div>   
                        <div class="form-group  col-md-2 col-sm-12 ml-2">
                            <label for="validationDefault01" class="bmd-label-floating">Particulars</label>
                             <input type="text" class="form-control" id="Details" name="Details" required>
                        </div> 
                        <div class=" ">
                         
                            <input type="file"  class= "btn-info   small mt-4 align-bottom" name="userfile" accept=".png, .jpg, " size="20" />
                        </div> 
                        <div class=" ">
                                    
                                    <input type="submit" class="btn-sm btn-primary   col-sm-12 mt-4 ml-2" value="Save">
                                </div>

                  <?php echo form_close(); ?>        
        </div>





    </div>
</div>

            
</div>



<div class="row">
    <?php  if($payments) :?>
    <?php 
    //money_format('%i', $number)
    ?>
    <table id="payments" class="table table-hover center table-responsive small ml-5 col-md-10" style="width:100%">

        <thead class="thead-default">
        <tr>
         <th> ID</th>
            <th>Vendor</th>
            <th> Project </th>
            <th>BOQID</th>
          
            <th>InvNumber</th>
            <th>Amount</th>
            <th  >Details </th>
            <th>Payment_Date</th>
            <th>Action</th>          
        </tr>
        </thead>
        <?php foreach ($payments as $row) : ?>  
        
        <tr>
        <td scope="row"><?php echo $row->ID ?></td>
                <td><?php echo $row->VendorName ?></td>
                 <td nowrap><?php echo $row->Project_Name ?></td>
                <td><?php echo $row->BOQID ?></td>
               
            
                <td><?php echo $row->InvNumber ?></td>
                <td class="text-dark"><?php 
               
             //  $fmt = new NumberFormatter( 'en_IN', NumberFormatter::CURRENCY );
             //  $fmt->setAttribute(NumberFormatter::FRACTION_DIGITS, 0);
             //  echo $fmt->formatCurrency( $row->Amount, "INR")."\n";

             $this->load->helper('custom');
             echo  "<i class=\"fa fa-inr\" aria-hidden=\"true\"></i>".
             moneyFormatIndia((int) $row->Amount);
              // echo  $row->Amount;  ?></td>
                <td><?php echo $row->Details ?></td>


                <td><?php   echo date("d/M/Y", strtotime($row->Payment_Date)); ?></td>
              

                <td><?php  if( $row->File_Name):
                           $fname=base_url()."uploadfiles/".$row->File_Name;
                                     ?>
         
                <input type="button" class="form-control" name="" id="" data-toggle="modal" data-myvalue=" <?php echo $fname ?> " data-target="#myModal" onclick="document.getElementById('imgDisp').src=' <?php echo $fname ?> '"  value="View">
                                
                                <?php endif; ?></td> 
                
                

          </tr>  

        <?php   endforeach ?>  

    </table>
<?php  endif; ?>
</div>

 <!-- Modal -->
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

 <?php  
include("includes/footer.php")
 ?> 



