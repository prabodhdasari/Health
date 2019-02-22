<?php 
        
defined('BASEPATH') OR exit('No direct script access allowed');
        
class Speciality_Hospital extends CI_Controller {

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
        $this->session->set_userdata('page', 'SPECIALITY HOSPITAL PERMIT');
        $this->load->view('ApplicationFormsFacility\Speciality_Hospital_View.php');
        
    }
        
}
        
    /* End of file  Speciality_Hospital.php */
        
                            