<?php

Class staffDetails extends CI_Controller{


    public function __construct(){
        parent::__construct();
         $this->load->helper('url');
        $this->load->helper('form');
        // Session
        $this->load->library('session');
    }
    
    function index()
    {
       $EmpID= $this->input->post('EmpID');
        //echo $EmpID;
        $query="";
        $query1="";
        $query2="";
        $query3="";
        if($query=$this->staffDetails_Model->getEmp($EmpID))
        {
             $data['emp']=$query;
             $query1=$this->staffDetails_Model->getProjects($EmpID);
             $query2=$this->staffDetails_Model->getExpenses($EmpID);
             $query3=$this->staffDetails_Model->getAdvances($EmpID);

             $data['projects']= $query1;
             $data['expenses']= $query2;
             $data['advances']= $query3;
        //  var_dump($query2) ;

      
             $this->load->view('staffDetails_view',$data);
             
        } else { redirect('Staff');}
    }
}