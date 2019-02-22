<?php 
defined('BASEPATH') or exit('No direct script access allowed');
class Dental extends CI_Controller
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
        $this->session->set_userdata('page', 'DENTAL LICENSE');
        $this->load->view('ApplicationFormsLicense\Dental_View.php');
    }
}
 /* End of file  Dental.php */
?> 
   
