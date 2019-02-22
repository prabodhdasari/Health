<?php

class Team extends CI_Controller{

    public function __construct()
    {
        parent::__construct();
         $this->load->helper('url');
        $this->load->helper('form');
        // Session
        $this->load->library('session');
    }


public function addMember(){

    if($this->input->post()){
    foreach($_POST['TeamNames'] as $selected){

        $data=Array(
            'Project_Name'=>$this->session->userdata('Project_Name'),
           'EmpID'=> trim( $selected),
          
               );
       
        }
        $res =     $this->Team_Model->insertTeam($data) ;  // $this->db->insert('Employees',$data); 
       // header("Location:http://localhost:8080/vasu/index.php/Team");
      // header("Location:http://vasu.medtrans.in/index.php/Team");
      redirect('Team');
       
    }


}

public function index()
    {
    $data[]=array();
    $this->load->library('session');
    //echo $this->session->userdata('Project_Name') . 'Hello';
    if(strlen($this->input->post('Project_Name'))){
        $this->session->set_userdata('Project_Name',$this->input->post('Project_Name'));
    }
                
       
            if($query=$this->Team_Model->getAllStaff())
                {
                $data['records']=$query;            
                }
            $projectData=array();
            $query1=$this->Team_Model->getAllTeam();
    
       // var_dump($query1);
            $data = array( 'records' => $query, 'projects' => $query1 ); 
        
          $this->load->view('Team_view',$data);
    }


}