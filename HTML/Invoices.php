<?php

class Invoices extends CI_Controller{

    public function __construct()
    {
    parent::__construct();
     $this->load->helper('url');
    $this->load->helper('form');
    // Session
    $this->load->library('session');  
 //   $this->load->model('Pdf', 'pdf');    
            
    }

    public function index(){
        $vendorID=$this->input->post('VendorID');

      //  $this->session->set_userdata('VendorID', $vendorID);

        $data[]=array(); 
        $q="";
        $row="";
         if(strlen($vendorID))
         {
            $sql="SELECT * from Vendors where VendorID ='" . $vendorID ."'";
            $q=$this->db->query($sql);
            if($q->result()){
                 $row = $q->row();
                
                 $this->session->set_userdata('Business_Name', $row->Business_Name);
                 $this->session->set_userdata('VendorID',  $row->VendorID);
                }
           
                
          }
        
            $query1=$this->session->flashdata('msg');
            $query2=$this->Invoice_Model->getInvoices();
            $data['Vendors']=$row;
            $data['error'] = $query1; 
            $data['records']=$query2;

            $role=$this->session->userdata('Role')  ;
            if ($role=='Admin'){
                $this->load->view('Invoices_View',$data);} else {
              $this->load->view('Login_view.php');}
        
    }

    public function addInvoice(){

        $config['upload_path']          = './uploadfiles/';
        $config['allowed_types']        = 'gif|jpg|png|JPEG|pdf';
        $config['max_size']             = 10048;
        $config['file_name']=time();
       // isset($_FILES["userfile"]['name']);
       $ext="";
       $new_name="";
       if( isset($_FILES["userfile"]['name'])){ 
             $new_name =$_FILES["userfile"]['name'];
            $info = new SplFileInfo($new_name);
            $ext=$info->getExtension();
            $new_name=  time(). '.'.($info->getExtension());
            } 
       
       $File_Name="";
       $timestamp = date('Y-m-d G:i:s');
       $EmpID= $this->session->userdata('EmpID')  ;
       $VendorID=$this->session->userdata('VendorID');
       $Invoice_Number=html_escape(trim($this->input->post("Invoice_Number")));
       $Invoice_Date=html_escape(trim($this->input->post("Invoice_Date")));
       $Invoice_Date = date('Y-m-d', strtotime($Invoice_Date));
       $Details=html_escape(trim($this->input->post("Details")));
       $Amount=html_escape(trim($this->input->post("Amount")));
       $GST=html_escape(trim($this->input->post("GST")));
       $Discount=html_escape(trim($this->input->post("Discount")));
       $Total_Amount=html_escape(trim($this->input->post("gtot")));
       if($Invoice_Date="01/Jan/1970")
       {
           $Invoice_Date=date('Y-m-d');
       }
       if( strlen($ext)){ $File_Name=  $new_name;}
       $config['file_name']=  $File_Name;


       $data=Array(
        'VendorID'=>$VendorID,
       'Invoice_Number'=>$Invoice_Number ,
       'Invoice_Date'=> $Invoice_Date,
       'Amount'=>$Amount,
       'GST'=>$GST,
       'Details'=>$Details,
       'Discount'=>$Discount,   
       'Total_Amount'     =>$Total_Amount   ,
        'Created_Date'=>$timestamp,
        'Created_by'=>  $EmpID,
        'File_Name'=>$File_Name,
           );
           
           if(strlen( $VendorID))
           {
           
            $res =  $this->Invoice_Model->insertPayments($data) ; 
           }
               if($res="True" && strlen($ext)) 
               
               {           
                $this->load->library('upload', $config);
                   if ( ! $this->upload->do_upload('userfile'))
                   {
                   // $error = array('error' => $this->upload->display_errors());                  
                   $this->session->set_flashdata('msg', 'The File Error');
                   //  
                   }
       
               } 
               else {

                $this->session->set_flashdata('msg', 'The Invoice Added');
               }

           redirect('Invoices','refresh');

    }

}
