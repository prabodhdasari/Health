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
       // $this->session->set_userdata('page', 'GENERAL LICENSE');
       // $this->load->view('ApplicationFormsLicense\General_View.php');
       $this->load->view('ApplicationFormsLicense\General_view.php');
    }
    public function addNewOrUpdate()
    {
        echo 'hello';
        $data=$this->input->post();
        $personal=array_slice($data,0,13);
        $registration=array_slice($data,13,4);
        $speciality=array_slice($data,17,1);
        $identification=array_slice($data,18,6);
        $education=array_slice($data,24,4);
        $experience=array_slice($data,28,7);
        var_dump($personal);
        var_dump($registration);
        var_dump($speciality);
        var_dump($identification);
        var_dump($education);
        var_dump($experience);
        var_dump($data);
    }
}

 
/* End of file  General.php */
?> 
    
