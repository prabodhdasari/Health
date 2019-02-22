<?php

Class HeaderMain extends CI_Controller{

    public function __construct()
    {
        parent::__construct();
         $this->load->helper('url');
        $this->load->helper('form');
        // Session
        $this->load->library('session');  
     //   $this->load->model('Pdf', 'pdf');    
                
    }

    public function  Index(){

        $EmpId= $this->session->userdata('EmpID')  ;
        $sql="select * from NavBar a join Employees b where a.Role like ('%Admin%') and b.Active='Y' and b.EmpID='". $EmpId . "'";
        $q=$this->db->query($sql);
        
           if( $q->result())
           {
            $row= $q->row();
            $data[]=array();
            $data['navs']=$q->result();
            $this->load->view('Header',$data);
            }  

    }

}