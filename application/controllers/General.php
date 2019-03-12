<?php 
defined('BASEPATH') or exit('No direct script access allowed');
class General extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->helper('url');
        $this->load->helper('form');
        // Session
        $this->load->library('session');  
     //   $this->load->model('Pdf', 'pdf');    
    }
    public function index()
    {
       // $this->session->set_userdata('page', 'GENERAL LICENSE');
       // $this->load->view('ApplicationFormsLicense\General_View.php');
       $this->load->view('ApplicationFormsLicense\General_view.php');
    }
    public function addNewOrUpdate()
    {
        $email = 'prabodhdasari@gmail.com';
        $ip_address=$this->input->ip_address();
        //var_dump ($uniq);
       
       // $H_Id= uniqid('H',true);//Generate Uniq ID     
        $uniq = $this->db_functions->getById('H_PersonalDetails','email',$email);    
     
        if(empty($uniq)){
          do{
            $H_Id= uniqid('H',true);//Generate Uniq ID     
            $uniq = $this->db_functions->getById('H_PersonalDetails','email',$email);     
          } while(!empty($uniq));
        } else {$H_Id=$uniq;}

        
      
     
        $data=$this->input->post();
        $personal=array_slice($data,0,13);
        $registration=array_slice($data,13,4);
        $speciality=array_slice($data,17,1);
        $identification=array_slice($data,18,6);
        $H_Education=array_slice($data,24,4);
        $experience=array_slice($data,28,7);
        $Special_Qualification=array_slice($data,35,1);
        var_dump(  $Special_Qualification);
        $H_Id_Array =array(
          'H_ID' => $H_Id,
          'email' => $email,
          
        );
        $H_Id_Array1 =array(
          'H_ID' => $H_Id,         
          
        );
      
        $personal=   array_merge($personal,$H_Id_Array);
        $H_Education=   array_merge($H_Education,$H_Id_Array1);
        $registration=   array_merge($registration,$H_Id_Array1);
        $speciality=   array_merge($speciality,$H_Id_Array1);
        $identification=   array_merge($identification,$H_Id_Array1);
        $experience=   array_merge($experience,$H_Id_Array1);
        $Special_Qualification=   array_merge($Special_Qualification,$H_Id_Array1);
    

     $res= $this->db_functions->addNewOrUpdate('H_PersonalDetails','H_Id',$H_Id,$personal);
     $res= $this->db_functions->addNewOrUpdate('H_Medical_Registration','H_Id',$H_Id,$registration);
     $res= $this->db_functions->addNewOrUpdate('H_Speciality','H_Id',$H_Id,$speciality);
     $res= $this->db_functions->addNewOrUpdate('H_Identification','H_Id',$H_Id,$identification);
     $res= $this->db_functions->addNewOrUpdate('H_Education','H_Id',$H_Id,$H_Education);
     $res= $this->db_functions->addNewOrUpdate('H_Experience','H_Id',$H_Id,$experience);
    $res= $this->db_functions->addNewOrUpdate('H_Special_Qualification','H_Id',$H_Id,$Special_Qualification);
         // var_dump($res);
        //select H_Documents
        // select H_Education
        // select H_Experience
        // select H_Identification
        // select H_Medical_Registration
        // select H_Payment
        // select H_PersonalDetails
        // select H_Speciality
        // select H_Special_Qualification         
         redirect('General' );
         
    }
     
  }

 
/* End of file  General.php */
 
    
    //$i=0;
        // foreach ($education as $key ) {
        //    foreach ($key as $key1  ) {
        //     var_dump($key1);
           
             
        //    }
     // $deg;
     // $uni;
     // $yer;
      //$roll;
        // for ($x = 0; $x < sizeof($education['Name_Degree']); $x++) {
        //     var_dump( $education['Name_Degree'][$x]);
        //     var_dump( $education['University'][$x]);
        //     var_dump( $education['Passing_Year'][$x]);
        //     var_dump( $education['RollNumber'][$x]);
        // } 
           
         //   $result=$this->db_functions->addNewOrUpdate('H_Education', $key->Name_Degree[$i], 'one',$key);
            
         
       
       // var_dump($result);
       ?>