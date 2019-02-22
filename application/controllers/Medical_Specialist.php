<?php 
defined('BASEPATH') or exit('No direct script access allowed');
class Medical_Specialist extends CI_Controller
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
        $this->session->set_userdata('page', 'MEDICAL SPECIALIST LICENSE');
        $this->load->view('ApplicationFormsLicense\Medical_Specialist_View.php');
    }
}
/* End of file  Medical_Specialist.php */
?> 
    
