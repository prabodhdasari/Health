<?php

class Advances extends CI_Controller{

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
     
    if(strlen($this->input->post('Project_Name'))){
        $this->session->set_userdata('Project_Name',$this->input->post('Project_Name'));
    }
             $Empdata[]=array();       
             $query = $this->Advances_Model->getEmployees() ; 
           
             $page_title="Advances";
            $query1 = $this->Advances_Model->getAdvances() ; 
       
       
        $data = array( 'records' => $query, 'advances' => $query1 ); 
        $role=$this->session->userdata('Role')  ;
        if ($role=='Admin'){  $this->load->view('Advances_View',$data);} else {
            $this->load->view('Login_view.php');
        }
      
}

public function addAdvance(){

    $config['upload_path']          = './uploadfiles/';
    $config['allowed_types']        = 'gif|jpg|png|JPEG|pdf';
    $config['max_size']             = 10048;
    $config['file_name']=time();
  
 
   $new_name =  $_FILES["userfile"]['name'];
   $info = new SplFileInfo($new_name);
   $new_name=  time(). '.'.($info->getExtension());
     
    $File_Name="";
    $Payment_Mode=html_escape(trim($this->input->post('Payment_Mode')));
    $Reciever = html_escape(trim($this->input->post("SelEmp")));
    $Amount=html_escape(trim($this->input->post('Amount')));
    $PaymentDetails=html_escape(trim($this->input->post('PaymentDetails')));
    $Payment_Date= html_escape(trim($this->input->post('Payment_Date')));
  

    $Payment_Date = date('Y-m-d', strtotime($Payment_Date));
    if($Payment_Date="01/Jan/1970")
    {
        $Payment_Date=date('Y-m-d');
    }
    if (strlen($_FILES["userfile"]['name'])){
        $File_Name=  $new_name;
    }
  
    $timestamp = date('Y-m-d G:i:s');
   // echo $timestamp;
    $data=Array(
        'Project_Name'=>$this->session->userdata('Project_Name'),
        'Sender'=>$this->session->userdata('EmpID'),
        'Reciever'=>$Reciever,
        'Amount'=>$Amount,
       'PaymentDetails'=>$PaymentDetails ,
       'Payment_Mode'=>$Payment_Mode,
       'Payment_Date'=> $Payment_Date, 
       'Status'=>'Sent',  
       'File_Name'=>  (trim($File_Name)),
       'Time_Stamp'=>$timestamp   ,

           );
         //  echo $data;
           if(strlen(trim($this->input->post('SelEmp')))){
            $res =     $this->Advances_Model->insertAdvances($data) ; 
           }
         if($res="True"){

            if(strlen($new_name)) {           
                 $this->load->library('upload', $config);
                if ( ! $this->upload->do_upload('userfile'))
                {
                   $error = array('error' => $this->upload->display_errors());                  
                   //  echo $error;
                 //  $this->load->view('upload_form', $error);
           }
           else
           {
                //   echo 'Hello';
                 $data = array('upload_data' => $this->upload->data());
            //   header("Location:http://localhost/index.php/Advances");
            // header("Location:http://vasu.medtrans.in/index.php/Advances");
            redirect( 'Advances','refresh');
              
           }
        } 
         //  header("Location:http://localhost:8080/vasu/index.php/Advances");
       //  header("Location:http://vasu.medtrans.in/index.php/Advances");
        redirect( 'Advances','refresh');
      
         }

}


}