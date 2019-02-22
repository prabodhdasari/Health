<?php

 

class VendorDetails extends CI_Controller{
    public function __construct()
    {
        parent::__construct();
         $this->load->helper('url');
        $this->load->helper('form');
        $this->load->helper('custom');
        // Session
        $this->load->library('session');      
                
    }
public function index(){
      
       $data[]=array();
    
        $query=$this->Vendors_Model->getTotalInvoiceAmount() ; 
        $query1=$this->Vendors_Model->getTotalVendorPaymentAmount() ; 
         $query2 = $this->Vendors_Model->getTotalProjectsPaymentAmount() ; 
       // $query3=$this->vendors_Model-->getAdvances();

        $data = array( 'InvoiceAmt' => $query, 'PaymentAmt' => $query1, 'ProjectAmt'=>$query2 ,); 

      // var_dump($data);
            $this->load->view('VendorsDetails_View',$data); 
        
        }    
}