<?php 
defined('BASEPATH') or exit('No direct script access allowed');
class LandingPage extends CI_Controller
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
        $this->session->set_userdata('page', 'home');
         
        // set array of items in session
        $arraydata = array(
                'First_Name'  => 'Sajal ',
                'Last_Name'     => 'Soni',
                'Email_Id' => '@sajalsoni',
                'Mobile'=>'525652',
                'User_Role' => 'Admin',
                'interests' => array('tennis', 'travelling')
        );
       // $this->session->set_userdata($arraydata);
        $this->load->view('LandingPage_view.php');
    }
}
/* End of file  home.php.php */
?> 
    
