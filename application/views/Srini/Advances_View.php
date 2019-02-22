
<?php if (strlen($this->session->userdata('FirstName')) > 0) {  
 

 
 include("includes/header1.php");
  
 } else {
   redirect("Login");
 } ?>
 
 <div id="loader"></div>
     
     <div class="row m-0  col-sm-12">
           <div class="col-md-5 col-sm-12" >
         <!-- <?php echo form_open('Advances/addAdvance'); ?> -->
         <?php echo form_open_multipart('Advances/addAdvance'); ?>
         <div class=" col-md-3 col-sm-12">
            <div class="card " style="width: 30rem;">
               <div class="row">
                  <div class="col">
                     <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                        <li class="nav-item">
                           <a class="nav-link active" id="projectName" data-toggle="pill" href="#pills-home" role="tab"
                              aria-controls="pills-home" aria-selected="true"> 
                           <?php echo $this->session->userdata('Project_Name'); ?> 
                           </a>
                        </li>
                        
                     </ul>
                  </div>

                  <div class="col">
                     <p class="h4 text-left ">Advances </p>
                  </div>
               </div>
               <hr class="mb-0 mt-0">
               <div class="row ml-2">
                  <div class="col form-group">
                     <label for="exampleFormControlSelect1">Select Receiver </label>
                     <select class="custom-select" id="SelEmp" name="SelEmp" >
                        <?php if ($records) : ?>
                        <?php foreach ($records as $row) : ?>
                        <option class="ml-2"   value=" <?php echo $row->EmpID ?>"  >
                           <?php echo $row->FirstName . ' ' . $row->LastName; ?>
                        </option>
                        <?php endforeach; ?>
                        <?php endif; ?>
                     </select>
                  </div>
                  <div class="form-group col">
                     <label for="validationDefault01" class="bmd-label-floating">Amount</label>
                     <input type="number" class="form-control" id="Amount" name="Amount" required>
                  </div>
               </div>
               <div class="row ml-2">
                  <div class="form-check form-check-radio form-check-inline">
                     <label class="form-check-label">
                     <input class="form-check-input" type="radio" name="Payment_Mode" id="inlineRadio1" value="Cash" checked> Cash
                     <span class="circle">
                     <span class="check"></span>
                     </span>
                     </label>
                  </div>
                  <div class="form-check form-check-radio form-check-inline">
                     <label class="form-check-label">
                     <input class="form-check-input" type="radio" name="Payment_Mode" id="inlineRadio2" value="Cheque"> Cheque
                     <span class="circle">
                     <span class="check"></span>
                     </span>
                     </label>
                  </div>
                  <div class="form-check form-check-radio form-check-inline">
                     <label class="form-check-label">
                     <input class="form-check-input" type="radio" name="Payment_Mode" id="inlineRadio3" value="PayTM"> PayTM
                     <span class="circle">
                     <span class="check"></span>
                     </span>
                     </label>
                  </div>
                  <div class="form-check form-check-radio form-check-inline">
                     <label class="form-check-label">
                     <input class="form-check-input" type="radio" name="Payment_Mode" id="inlineRadio4" value="Mobile"> Other Mobile Transfer
                     <span class="circle">
                     <span class="check"></span>
                     </span>
                     </label>
                  </div>
               </div>
               <div class="row ml-2" >
                  <div class="form-group col">
                     <label for="validationDefault01" class="bmd-label-floating">Payment Details</label>
                     <input type="text" class="form-control" id="PaymentDetails" name="PaymentDetails" required>
                  </div>
               </div>
               <div class="form-group ml-2">
                  <label class="label-control">Payment Date & Time</label>
                  <input type="text" class="form-control datetimepicker" id="Payment_Date" name="Payment_Date" value= <?php echo date("d/m/Y"); ?>   />
               </div>
               <div class="container">
                  <input type="file"  class= "btn btn-primary" name="userfile" size="20" accept=".png, .jpg, "/>
                  <br /><br />
               </div>
               </form>
               <div class="row ml-2" >
               
                  <div class="col text-center">
                     <input type="submit" class="btn btn-primary btn m-2" value="Send Advance" >
                  </div>
                  <div class="col text-centerml-2">
                  <a class="nav-link   ml-2" href="Projectsnew">Back to Projects</a> 
                  </div>
               </div>
            </div>
            <?php echo form_close(); ?>
         </div>
            </div> 
 
         <div class=" col-md-6">
            <div class="">
             <div class="card-body small">
                          <p class="card-text text-capitalize text-center">
                          Advances by   <?php echo $this->session->userdata('FirstName'); ?>  </p>
                        
                    <table class="table "  id="example" style="width:30rem;"  >
                        <thead>
                            <tr>
                            <th>ID</th>
                                <th>Name</th>
                                <th>Amount</th>
                                <th>Date</th>
                                <th>Project</th>
                                <th>Details</th>
                                <th>Status</th>
                                <th>File</th>
                            </tr>
                        </thead>
                        <tbody>

                         <?php if ($advances) : ?>
                 <?php foreach ($advances as $row) : ?>
                        <tr>
                        <td scope="row" style="width:20px"><?php echo $row->ID?>  </td>
                             
                                <td   nowrap><?php echo $row->FirstName . ' ' . $row->LastName ?>  </td>
                                <td style="width:20px">  <?php 
                                
                                $this->load->helper('custom');
                                echo  "<i class=\"fa fa-inr\" aria-hidden=\"true\"></i>".
                                moneyFormatIndia((int) $row->Amount);
                               // echo $row->Amount;
                                
                              // $fmt = new NumberFormatter('en_IN', NumberFormatter::CURRENCY);
                              //                        // $fmt->setAttribute(NumberFormatter::FRACTION_DIGITS, 0);
                              //                         echo $fmt->formatCurrency($row->Amount, "INR") . "\n";
                               //                      

                              //                            if (strcasecmp(substr(PHP_OS, 0, 3), 'WIN') == 0) {
                              //                               $fmt = new NumberFormatter('en_IN', NumberFormatter::CURRENCY);
                              //                               $fmt->setAttribute(NumberFormatter::FRACTION_DIGITS, 0);
                              //                               echo $fmt->formatCurrency($row->Amount, "INR") . "\n";
                              //                            } else { 
                              //  //  setlocale(LC_MONETARY,"en_IN");
                              //    //echo money_format("%i", (int)$row->Amount);
                              //                               echo $row->Amount;
                              //                            } 
                              ?>                         
                                
                                  </td>
                                <td style="width:20px"><?php echo date("d/M/Y", strtotime($row->Payment_Date));  ?></td>
                                <td style="width:20px"><?php echo $row->Project_Name ?></td>
                                <td nowrap><?php echo $row->PaymentDetails ?></td>
                                <td style="width:20px"><?php echo $row->Status;  ?></td>
                                <td><?php  if( $row->File_Name):
                           
                        
                          $fname=base_url()."uploadfiles/".$row->File_Name;
                           
                                    ?>     
                                <input type="button" class="form-control" name="" id="" data-toggle="modal" data-myvalue=" <?php echo $fname ?> " data-target="#myModal" onclick="document.getElementById('imgDisp').src=' <?php echo $fname ?> '"  value="View">
                               
                               <?php endif; ?></td>
                               
                            </tr>
                    <?php endforeach; ?>
                    <?php endif; ?>
                            
                            
                        </tbody>
                    </table>



             </div> 
            </div>
        </div>
  
 

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
 // document.getElementById("myDiv").style.display = "block";
}
</script>

 <?php  
include("includes/footer.php")
 ?>