<?php if (strlen($this->session->userdata('FirstName')) > 0) {  
 

 
 include("includes/header1.php");
  
 } else {
   redirect("Login");
 } ?>
 
 <div id="loader"></div>
 
      <!--New Advances-->
      <?php if ($newadvances) : ?>
               
               <div class="div ml-2">
                    <div class="card">               
                        <div class="card-body">
                            <h5 class="card-title">You have a New Advances</h5>
                                <table class="table table-hover}  table-responsive text-small">
                                    <thead class="thead-inverse|thead-default">
                                       
                                        <tr>
                                            
                                            <td scope="row">Project</td>
                                            <td>Name</td>
                                            <td>Amount</td>
                                            <td>Date</td>                                        
                                            <td>Details</td>
                                            <td>Accept</td>                                        
                                            <td>Reject</td>
                                           
                                          
                                        </tr>
                                          
                                       
                                        </thead>
                                        <tbody>
                                        <?php foreach ($newadvances as $row) : ?>
                      
                                            <tr>
                                            <td scope="row"><?php echo $row->Project_Name ?>  </td>
                                            <td  ><?php echo $row->FirstName . ' ' . $row->LastName ?>  </td>
                                            <td class="text-dark"> 
                                            
                                              <?php 
                                              
                                              $this->load->helper('custom');
                                              echo  "<i class=\"fa fa-inr\" aria-hidden=\"true\"></i>".
                                              moneyFormatIndia((int) $row->Amount );
                                           ?> </td>
                                        <td><?php echo date("d/M/Y", strtotime($row->Payment_Date));  ?></td>
                                        <td><?php echo $row->PaymentDetails ?></td>
                                                <td>
                                                <?php echo form_open('Expenses/Accept'); ?>
                                              
                                                <button type="submit" class="btn btn-primary btn-fab btn-fab-mini btn-round"
                                                name="btnID"  value="<?php echo $row->ID ?>" >
                                               
                                                <i class="fa fa-check " aria-hidden="true"></i> </button>  
                                                                                   
                                            
                                                <input type="hidden" class="form-control" id="ExpensesID" name="ExpensesID" 
                                  value= <?php echo "'" .  $row->ID  ."'"?>
                                  >
                                             <?php echo form_close(); ?>
                                            
                                              </td>
                                                <td> 
                                                <?php echo form_open('Expenses/Rejected'); ?>
                                                <button class="btn btn-danger btn-fab btn-fab-mini btn-round">
                                                <i class="fa fa-close"></i> </button>
                                                <input type="hidden" class="form-control" id="ExpensesID" name="ExpensesID" 
                                  value= <?php echo "'" .  $row->ID  ."'"?>
                                  >
                                             <?php echo form_close(); ?>
                                               </td>
                                     
                                            </tr>
        
                                            <?php endforeach; ?>
                           
                                        </tbody>
                                </table>           
        
        
                        </div>
                       
                    </div>
               </div>
               <?php endif; ?>    
       
    
<!--Material-->
<div class="row ml-3">
        <div class="col mt-0">

                <div class="card mt-0">
                     <div class="card-body m-0">
                     <h4 class="card-title mb-0">Expenses</h4><hr class="mb-2 mt-0">
                        <?php echo form_open('Expenses/addExpenses'); ?>
                        <div class="row">
                       
                        <div class="form-group ml-2 col-md-3 col-sm-12">
                            <label for="exampleFormControlSelect1">Select Project</label>
                            <?php if($projects): ?>
                            <select class="custom-select" id="SelEmp" name="SelProject" >
                            
                         
                            <?php foreach ($projects as $row) : ?>
                            <option> <?php echo $row->Project_Name ?>  </option>
                            <?php endforeach; ?>
                            <?php endif; ?>
                               
                            </select>
                        </div>
                        <div class="form-group bmd-form-group ml-2 col-md-2 col-sm-12">
                            <label class="bmd-label-floating">Expense Amount</label>
                            <input type="number" class="form-control" name="Amount" id="Amount" required>
                            </div>
                            <div class="form-group ml-2">
                                <label class="label-control">Date</label>
                                <input type="text" id="Expense_Date", name="Expense_Date" class="form-control datetimepicker" value="<?php date('d/m/YYYY') ?>"/>
                            </div>
                            <div class="form-group bmd-form-group col-md-3 ">
                                <label class="bmd-label-floating"> Reason</label>
                                <input type="Text" class="form-control"  id="Details" name="Details" required>
                            </div>
                            <div class="card-body">
                          
                            <input type="submit" class="btn-sm btn-primary ml-2" value="Save">
                            <?php echo form_close(); ?>
                             <input type="submit" class="btn-sm btn-light ml-2" value="Back">

                     
                       
                   </div>
                        </div>
                  
                        

                            

                  
                    </div>
                   
                </div>
   
        </div>
        </div>
        <div class="row m-3">

    <?php if($expenses): ?>
   
        
        <?php  $total=0; foreach($expenses as $row){
            $total=$total + str_replace(',','', $row->Amount) ;            

        } ?>
                

                <div class="col">
                <p> Total Expenses :  <b>
                
                 <?php
                 
               
               //  $fmt = new NumberFormatter( 'en_IN', NumberFormatter::CURRENCY );
                // $fmt->setAttribute(NumberFormatter::FRACTION_DIGITS, 0);
               //  echo $fmt->formatCurrency( $total, "INR")."\n";
               $this->load->helper('custom');
               echo '<i class="fa fa-inr" aria-hidden="true"></i>'. 
               moneyFormatIndia((int) $total )
                 . ' : ';  $total=ctc($total);
               echo $total;  
               ?> </b>  </p>
               <table class="table text-small small">
                   <thead>
                       <tr>
                           <th>Project</th>
                           <th>Expenses</th>
                           <th>Date</th>
                           <th>Reason</th>
                           <th>Status</th>
                       </tr>
                   </thead>
                   <tbody>
                   <?php foreach ($expenses as $row) : ?>
                           
                          
                      
                       <tr>
                           <td scope="row">   <?php echo $row->Project_Name ?>  </td>

                           <td> <i class="fa fa-inr" aria-hidden="true"></i> <?php                           
                            //    $fmt = new NumberFormatter( 'en_IN', NumberFormatter::CURRENCY );
                            //    $fmt->setAttribute(NumberFormatter::FRACTION_DIGITS, 0);
                            //    echo $fmt->formatCurrency( $row->Amount, "INR")."\n";
                           
                           echo $row->Amount ?></i> </td>
                           <td> <?php echo date("d/M/Y", strtotime($row->Expense_Date))  ?></td>
                           <td> <?php echo $row->Details ?></td>


                           <td> <?php echo $row->Expense_Status ?></td>

                       </tr>
                      
                            <?php endforeach; ?>
                   </tbody>
               </table>
               <?php endif; ?>
                </div>


                <div class="col">
              
    <?php if($adv): ?> 
    <?php 
     $tot=0;;
    foreach($adv as $row):?>
    <?php
    $this->load->helper('custom');
    $tot=$tot+$row->Amount;                         
                           ?>
     <?php endforeach; ?> 
    <p> Total Advances :   <b>
    <?php
    
  
   echo '<i class="fa fa-inr" aria-hidden="true"></i>'. 
   moneyFormatIndia((int) $tot ) . ' : ';  $tot=ctc($tot);
  echo $tot; ?>
    </b> </p>
                <table class="table text-small small">
                   <thead>
                       <tr>
                           <th>Project</th>
                           <th>Advance Amount</th>
                           <th>Date</th>
                           <th>Sender</th>
                           <th> Status </th>
                       </tr>
                   </thead>
                   <tbody>
                       <?php  foreach($adv as $row):?>
                       
                       <tr>
                           <td scope="row"><?php echo $row->Project_Name ?></td>
                           <td><?php
                           
                        //   $fmt = new NumberFormatter( 'en_IN', NumberFormatter::CURRENCY );
                        //   $fmt->setAttribute(NumberFormatter::FRACTION_DIGITS, 0);
                         //  echo $fmt->formatCurrency( $row->Amount, "INR")."\n";
                         echo  "<i class=\"fa fa-inr\" aria-hidden=\"true\"></i>".
                         moneyFormatIndia((int) $row->Amount );
                           
                           
                           ?></td>
                           <td> 
                           <?php echo date("d/M/Y", strtotime( $row->Payment_Date))  ?></td>
                           <td><?php echo $row->FirstName . ' ' . $row->LastName?></td>
                           <td><?php echo $row->Status ?></td>
                           <td></td>
                       </tr>
                       <?php endforeach; ?> 
                   </tbody>
               </table>
               <?php endif;?>
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

 
 <?php  include("includes/footer.php")?>