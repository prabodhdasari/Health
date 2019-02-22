
<?php if (strlen($this->session->userdata('FirstName')) > 0) {  
 

 
 include("includes/header1.php");
  
 } else {
   redirect("Login");
 } ?>
 
<div id="loader"></div>
 

<div class="container">


<?php 

   
 //$query1['rec'] = $ProjectAmt->row();
    //echo $query1->Amount;
  
//echo $ProjectAmt
 
?>

  <div class="card-deck">
    <div class="card">
      <img class="card-img-top" src="holder.js/100x180/" alt="">
      <div class="card-body">
     
      <?php if($ProjectAmt){ 
        $tot=0;
          $this->load->helper('custom');
         foreach($ProjectAmt as $row):
         {$tot=$tot + $row->Amount; } endforeach;} ?>
        <h4 class="card-title" id="pname">Project Payments 
        <?php echo  ' |  <i class="fa fa-inr mr-1" aria-hidden="true"> ' .  moneyFormatIndia((int)$tot) ?> </i>
        
        </h4><hr>
        <h6 class="small "><?php  echo ctc($tot) ?></h6>
         
       <?php if($ProjectAmt){ 
          $this->load->helper('custom');?>
          <table> <?php
         foreach($ProjectAmt as $row):
         {
           
          echo '<tr><td class="ml-3">  '.$row->project. '</td><td>&nbsp;&nbsp;</td><td>' . $row->vendor . '  '. '</td><td>  ' . 
         
         '<i class="fa fa-inr mr-1" aria-hidden="true"></i>'. 
          moneyFormatIndia((int) $row->Amount  )
          .   '</td></tr> ';
                  }
                endforeach;
        
      
                 } ?></table>
               
      </div>
    </div>

    <div class="card">
      <img class="card-img-top" src="holder.js/100x180/" alt="">
      <div class="card-body"><?php $tot=0;
      $this->load->helper('custom');
      foreach($InvoiceAmt as $row):
         {$tot=$tot + $row->Amount; } 
        endforeach;
      
        ?>

        <h4 class="card-title">Vendor Invoices
        <?php   echo  ' |  <i class="fa fa-inr mr-1" aria-hidden="true"> ' .  moneyFormatIndia((int)$tot) ?> </i>
        </h4><hr>
        <h6 class="small "><?php  echo ctc($tot) ?></h6>
        <?php 
       
        if($InvoiceAmt){  $this->load->helper('custom');;?>
          <table> <?php
         foreach($InvoiceAmt as $row):
         {

   
          echo '<tr><td class="ml-3">  '. $row->Vendor. '</td><td>&nbsp;&nbsp;</td><td>  ' . 
         
         '<i class="fa fa-inr mr-1" aria-hidden="true"></i>'. 
          moneyFormatIndia((int) $row->Amount  )
          .   '</td></tr> ';
                  
 
                  }
                endforeach;
        
      
                 } ?></table>
      </div>
    </div>
    <div class="card">
      <img class="card-img-top" src="holder.js/100x180/" alt="">
      <div class="card-body"><?php $tot=0;
      $this->load->helper('custom');
      foreach($PaymentAmt as $row):
         {$tot=$tot + $row->Amount; } 
        endforeach;
      
        ?>
        <h4 class="card-title">Vendor Payments
        <?php   echo  ' |  <i class="fa fa-inr mr-1" aria-hidden="true"> ' .  moneyFormatIndia((int)$tot) ?> </i>
        </h4><hr>
        <h6 class="small "><?php  echo ctc($tot) ?></h6>
        <?php if($PaymentAmt){  $this->load->helper('custom');
        ;?>
        <table> <?php
         foreach($PaymentAmt as $row):
         {
          echo '<tr><td class="ml-3">  '. $row->Vendor. '</td><td>&nbsp;&nbsp;</td><td>  ' . 
         
          '<i class="fa fa-inr mr-1" aria-hidden="true"></i>'. 
           moneyFormatIndia((int) $row->Amount  )
           .   '</td></tr> ';

         
                  }
                endforeach;
        
      
                 } ?></table>
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
  //document.getElementById("myDiv").style.display = "block";
}
</script>

 
 <?php 
 include("includes/footer.php")
 ?>