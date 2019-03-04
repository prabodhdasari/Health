<?php 
        
defined('BASEPATH') OR exit('No direct script access allowed');
        
class formtest extends CI_Controller {
    public function __construct()
    {
        parent::__construct();
        $this->load->helper('url');
        $this->load->helper('form');
        // Session
        $this->load->library('session');  
         $this->load->model('db_functions');    
    }
public function index()
{
        $recs=$this->db_functions->getall('test');
        
        $data = array( 'records' => $recs ); 
        //    $data = array( 'records' => $recs, 'advances' => $query1 ); 
        
       $this->load->view('formtest',$data);
               
}
public function save()
{
     
      // $this->load->view('formtest');

     $data=$this->input->post();
     unset($data['Submit']);
     unset($data['fr']);
    // var_dump($data);
    $result=$this->db_functions->add('test', $data);
               
}
public function addNewOrUpdate()
{
     
      // $this->load->view('formtest');

     $data=$this->input->post();
     unset($data['Submit']);
     unset($data['fr']);
   // var_dump($data);
    // echo $data['fname'];
    if(!empty($data))
    {
    $result=$this->db_functions->addNewOrUpdate('test','fname', $data['fname'],$data);
    $this->session->set_flashdata('message',$result); 
    //('test', $data);
    $this->index();
}

              
}
        
}
        
    /* End of file  formtest.php */
        
                            