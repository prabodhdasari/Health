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
        $this->session->set_userdata('page', 'GENERAL LICENSE');
        $this->load->view('ApplicationFormsLicense\General_View.php');
    }
}
/* End of file  General.php */
?> 
    
