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
}     
    /* End of file  General_Hospital.php */
        
                            