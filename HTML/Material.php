<?php

class Material extends CI_Controller{

    public function __construct()
    {
        parent::__construct();
         $this->load->helper('url');
        $this->load->helper('form');
        // Session
        $this->load->library('session');      
                
    }
public function index(){
    $data[]=array();

    // $data['expenses']=$query1;
     // $data = array( 'records' => $query, 'advances' => $query1 ); 
   //   $data = array( 'records' => $query, 'advances' => $query1 ); 

      $query=$this->Expenses_Model->getProjects() ; 
       $query1=$this->Material_Model->getMaterialPayments() ; 
     // $query2 = $this->Expenses_Model->getNewAdvances() ; 
      //$query3=$this->Expenses_Model->getAdvances();
        $query4=$this->Vendors_Model->getAllVendors();
        $data['payments']=$query1;
        $data['projects']=$query;
        $data['vendors']=$query4;
      

    
      $this->load->helper(array('dropdown','form'));
      $this->load->database();
  
         $dropdownItems = listData('Projects','Project_Name', 'Project_Name');
      $countryDropdown = form_dropdown('country',$dropdownItems);
  
    $countryDropdown= str_replace("<select name=\"country\">","<select class=\"custom-select\" name=\"country\">",$countryDropdown );
  
    $stateDropdown =   form_dropdown('state',[]);
    $stateDropdown =str_replace("<select name=\"state\">","<select class=\"custom-select\" name=\"state\">",$stateDropdown );
    
  $data['countryDropdown']= $countryDropdown;
  $data['stateDropdown'] = $stateDropdown;
  $this->load->view('Material_View',$data);

}

public function getState() {
    $this->load->helper(array('dropdown','form'));
    $this->load->database();
 $country_id = $this->input->get('country_id');
 //echo  $country_id;
    $dropdownItems = listData('BOQ','BOQID', 'BOQ_Title',['where' => ['Project_Name' => $country_id]]);
   // var_dump($dropdownItems);
   echo $stateDropdown =   form_dropdown('state',$dropdownItems);
    
}

public function addPayments(){

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
    $VendorID = html_escape(trim($this->input->post("SelVendor")));
    $Project_Name=html_escape(trim($this->input->post('country')));
    $BOQID=html_escape(trim($this->input->post('state')));
    $InvNumber= html_escape(trim($this->input->post('InvNumber')));
    $Amount= html_escape(trim($this->input->post('Amount')));
    $PaymentDetails=html_escape(trim($this->input->post('Details')));
    $Payment_Date= html_escape(trim($this->input->post('Payment_Date')));
    $Payment_Date = date('Y-m-d', strtotime($Payment_Date));
    if($Payment_Date="01/Jan/1970")
    {
        $Payment_Date=date('Y-m-d');
    }
        if( strlen($ext)){ $File_Name=  $new_name;}
        $config['file_name']=  $File_Name;

        $data=Array(
            'VendorID'=>$VendorID,
           'Project_Name'=>$Project_Name ,
           'InvNumber'=> $InvNumber,
           'BOQID'=>$BOQID,
           'Amount'=>$Amount,
           'PaymentDetails'=>$PaymentDetails,
           'Payment_Date'=>$Payment_Date,           
            'Created_Date'=>$timestamp,
            'Created_by'=>  $EmpID,
            'File_Name'=>$File_Name,
               );
             //  $data['FileName']=$File_Name;
            //   array_push($data,'FileName', $File_Name);
            
            
                if(strlen( $Project_Name))
                {
               // echo 'Hello';
                $res =  $this->Material_Model->insertPayments($data) ; 
                }
                    if($res="True" && strlen($ext)) 
                    
                    {           
                     $this->load->library('upload', $config);
                        if ( ! $this->upload->do_upload('userfile'))
                        {
                        // $error = array('error' => $this->upload->display_errors());                  
                      //  echo $error;
                        //  
                        }
            
                    } 

                    redirect('Material','refresh');

        
}
}