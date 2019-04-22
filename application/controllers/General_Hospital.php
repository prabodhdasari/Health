<?php 
        
defined('BASEPATH') OR exit('No direct script access allowed');
        
class General_Hospital extends CI_Controller {
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
        $this->session->set_userdata('page', 'GENERAL HOSPITAL PERMIT');
        $this->load->view('ApplicationFormsFacility\General_Hospital_View.php');
    }

    public function addNewOrUpdate()
    {
        $email = $this->session->userdata('email'); //'prabodhdasari@gmail.com';
        $ip_address=$this->input->ip_address();
        //var_dump ($uniq);
       
       // $L_Id= uniqid('H',true);//Generate Uniq ID     
       // $uniq = $this->db_functions->getById('H_PersonalDetails','email',$email);    
       $application='GENERAL HOSPITAL PERMIT';
       $uniq = $this->db_functions->checkForNewApplication($email,$application);
       var_dump ('First'. $uniq);
        if(empty($uniq)){
          do{
            $H_Id= uniqid('H',true);//Generate Uniq ID     
            $ID =$this->db_functions->generateH_ID($H_Id);
            var_dump($H_Id);
            $flag='Add New';
          } while(!empty($ID));
        } else {$H_Id=$uniq; 
            $flag='No Add'; 
            
        }
       // var_dump('Flag   is  :'.$flag);
          if($flag==''){
            //Already exists in DB
            //$this->session->set_flashdata('msg','Application Already Exists !!!'); 
          var_dump($H_Id);
           var_dump('Flag is  '.$flag);
           // redirect('General');
          }
          $this->session->set_flashdata('msg',''); 

        $Application_Clinics =array(
          'H_Id'=> $H_Id,
          'Application'=>'GENERAL HOSPITAL PERMIT',
          'email'=> $email,
          'Status'=>'New',
        );
      
        $this->session->set_userdata('H_Id', $H_Id);

        $data=$this->input->post();
        var_dump($data);
        $personal=array_slice($data,0,13);
        $registration=array_slice($data,13,4);
        $speciality=array_slice($data,17,1);
        $identification=array_slice($data,18,6);
        $H_Education=array_slice($data,24,4);
        $experience=array_slice($data,28,7);
        $Special_Qualification=array_slice($data,35,1);
        $Special_Qualification;
        $H_Id_Array =array(
          'H_ID' => $H_Id,
          'email' => $email,
          
        );
        $H_Id_Array1 =array(
          'H_Id' => $H_Id,         
          
        );
        if($flag=='Add New'){
        $personal=   array_merge($personal,$H_Id_Array);
        $H_Education=   array_merge($H_Education,$H_Id_Array1);
        $registration=   array_merge($registration,$H_Id_Array1);
        $speciality=   array_merge($speciality,$H_Id_Array1);
        $identification=   array_merge($identification,$H_Id_Array1);
        $experience=   array_merge($experience,$H_Id_Array1);
        $Special_Qualification=   array_merge($Special_Qualification,$H_Id_Array1);
      
      //  $res= $this->db_functions->addNewOrUpdate('Application_Licenses','L_Id',$L_Id, $Application_Licenses);
      //  $res= $this->db_functions->addNewOrUpdate('L_PersonalDetails','L_Id',$L_Id,$personal);
      //  $res= $this->db_functions->addNewOrUpdate('L_Medical_Registration','L_Id',$L_Id,$registration);
      //  $res= $this->db_functions->addNewOrUpdate('L_Speciality','L_Id',$L_Id,$speciality);
      //  $res= $this->db_functions->addNewOrUpdate('L_Identification','L_Id',$L_Id,$identification);
      //  $res= $this->db_functions->addNewOrUpdate('L_Education','L_Id',$L_Id,$H_Education);
      //  $res= $this->db_functions->addNewOrUpdate('L_Experience','L_Id',$L_Id,$experience);
      //  $res= $this->db_functions->addNewOrUpdate('L_Special_Qualification','L_Id',$L_Id,$Special_Qualification);
        $this->session->set_flashdata('msg','Application Inserted !!!'); 
      }
   
         // var_dump($res);
         //Tables
        //select L_Documents
        // select L_Education
        // select L_Experience
        // select L_Identification
        // select L_Medical_Registration
        // select L_Payment
        // select L_PersonalDetails
        // select L_Speciality
        // select L_Special_Qualification         
       //var_dump($res);
     // redirect('General');
         
    }

}     
    /* End of file  General_Hospital.php */
        
                            