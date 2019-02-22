<?php 
class Allied extends CI_Controller
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
        $this->session->set_userdata('page', 'ALLIED HEALTH PROFESSIONAL LICENSE');
        $this->load->view('ApplicationFormsLicense\Allied_View.php');
    }
}
 /* End of file  Allied.php */
?> 
   
