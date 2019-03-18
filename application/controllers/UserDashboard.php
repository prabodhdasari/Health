<?php 
defined('BASEPATH') or exit('No direct script access allowed');
class UserDashboard extends CI_Controller
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
        $this->session->set_userdata('page', 'Dashboard');
        $applicationData[]=array();
        $email=$this->session->userdata('email');
        if($email){
            $applicationData['records']= $this->db_functions->getByID('Application_Licenses','email',$email);
        }
       
        $this->load->view('UserDashboard_view.php', $applicationData);
    }
}
 /* End of file  Dental.php */
?> 
   
