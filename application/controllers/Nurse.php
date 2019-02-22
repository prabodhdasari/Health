<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
class Nurse extends CI_Controller {
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
    $this->session->set_userdata('page', 'NURSING LICENSE');
    $this->load->view('ApplicationFormsLicense\Nurse_View.php');              
}
}
/* End of file  Nurse.php */
  ?>  
