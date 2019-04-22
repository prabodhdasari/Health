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
      $this->session->set_userdata('L_Id', 'L5c88dca36a5274.18924309'); 
       // $this->session->set_userdata('page', 'GENERAL LICENSE');
       // $this->load->view('ApplicationFormsLicense\General_View.php');
       $data=$this->getData();
       $this->load->view('ApplicationFormsLicense\General_view.php',$data);
    }
    public function addNewOrUpdate()
    {
        $email = $this->session->userdata('email'); //'prabodhdasari@gmail.com';
        $ip_address=$this->input->ip_address();
        //var_dump ($uniq);
       
       // $L_Id= uniqid('H',true);//Generate Uniq ID     
       // $uniq = $this->db_functions->getById('H_PersonalDetails','email',$email);    
       $application='General License';
       $uniq = $this->db_functions->checkForNewApplication($email,$application);
       var_dump ('First'.$uniq);
        if(empty($uniq)){
          do{
            $L_Id= uniqid('L',true);//Generate Uniq ID     
            $ID =$this->db_functions->generateL_ID($L_Id);
            var_dump($L_Id);
            $flag='Add New';
          } while(!empty($ID));
        } else {$L_Id=$uniq; 
            $flag='No Add'; 
            
        }
       // var_dump('Flag   is  :'.$flag);
          if($flag==''){
            //Already exists in DB
            //$this->session->set_flashdata('msg','Application Already Exists !!!'); 
          var_dump($L_Id);
           var_dump('Flag is  '.$flag);
           // redirect('General');
          }
          $this->session->set_flashdata('msg',''); 

        $Application_Licenses =array(
          'L_Id'=> $L_Id,
          'Application'=>'General License',
          'email'=> $email,
          'Status'=>'New',
        );
      
        $this->session->set_userdata('L_Id', $L_Id);

        $data=$this->input->post();
        $personal=array_slice($data,0,13);
        $registration=array_slice($data,13,4);
        $speciality=array_slice($data,17,1);
        $identification=array_slice($data,18,6);
        $H_Education=array_slice($data,24,4);
        $experience=array_slice($data,28,7);
        $Special_Qualification=array_slice($data,35,1);
        $Special_Qualification;
        $L_Id_Array =array(
          'L_ID' => $L_Id,
          'email' => $email,
          
        );
        $L_Id_Array1 =array(
          'L_Id' => $L_Id,         
          
        );
        if($flag=='Add New'){
        $personal=   array_merge($personal,$L_Id_Array);
        $H_Education=   array_merge($H_Education,$L_Id_Array1);
        $registration=   array_merge($registration,$L_Id_Array1);
        $speciality=   array_merge($speciality,$L_Id_Array1);
        $identification=   array_merge($identification,$L_Id_Array1);
        $experience=   array_merge($experience,$L_Id_Array1);
        $Special_Qualification=   array_merge($Special_Qualification,$L_Id_Array1);
      
        $res= $this->db_functions->addNewOrUpdate('Application_Licenses','L_Id',$L_Id, $Application_Licenses);
        $res= $this->db_functions->addNewOrUpdate('L_PersonalDetails','L_Id',$L_Id,$personal);
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
      redirect('General');
         
    }

    public function getData(){
      $field='L_ID';
      $value=$this->session->userdata('L_Id');
      $personal=  $this->db_functions->getByID('L_PersonalDetails',$field,$value);
      $Education=   $this->db_functions->getByID('L_Education',$field,$value);
      $registration=   $this->db_functions->getByID('L_Medical_Registration',$field,$value);
      $speciality=   $this->db_functions->getByID('L_Speciality',$field,$value);
      $identification=   $this->db_functions->getByID('L_Identification',$field,$value);
      $experience=   $this->db_functions->getByID('L_Experience',$field,$value);
      $Special_Qualification=   $this->db_functions->getByID('L_Special_Qualification',$field,$value);
      $data=array_merge($personal,$Education, $registration, $speciality, $identification, $experience,$Special_Qualification );
      //var_dump($data);
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