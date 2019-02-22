<?php 
class test extends CI_Controller{

  public  function index(){
    
  $this->load->helper('custom'); 
    
    //$this->load->helper(array('My_functions','form'));
    
     // $this->load->helper('My_Functions');

    // let's print the international format for the en_US locale
    $number = 185234.56;
    
    //$ctc = $this-ctc();
$ab = abc();
   //echo ctc($number);
   echo $number . '  ';
   $ab=ctc($number);
   echo $ab;
   //$st1=$getIndianCurrency($number);
   $amount = (int)'10000034000.25';
   $amount = moneyFormatIndia( $amount );
   echo $amount;
   $this->load->view("test_view.php");
     
  } 


 
}
?>