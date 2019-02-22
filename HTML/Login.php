
<?php

class Login extends CI_Controller{

    public function __construct(){
        parent::__construct();
         $this->load->helper('url');
        $this->load->helper('form');
        // Session
        $this->load->library('session');
    }
    
    function index()
    {
        session_destroy() ;
        session_start(); 
        $this->output->delete_cache();
        $this->load->library('session');
       
        $data=Array(
            'msg'=>$this->session->flashdata('msg'),
        );
        $this->session->set_userdata('EmpID','');
        $this->session->set_userdata('FirstName','');
        $this->load->view('Login_View.php');
       
    }
//EMP101	Manager	Vasu	Veeravally	first@email.com	1234567	2147483647	Admin	Y
    function Login()
    {
        $data[]=array();
        $error="";
         
        $data=Array(
            
           'Email'=> trim($this->input->post('EmailID')),
           //'Designation'=> trim($this->input->post('Designation')),
           'Password'=> trim($this->input->post('Password')),
           //'Mobile'=>  ($this->input->post('Mobile')),
           //'EmpID'=> 'Emp'. mt_rand(1,999),
           //'Role'=> 'User',
           //'Active'=> 'Y',
               );
        $sql="SELECT * from Employees where Email =? and Password = ?";    

        $q=$this->db->query($sql, array( trim($data['Email']), trim($data['Password'])));
         
           if( $q->result())   {
            $row = $q->row();
            if($row->Active=='N'){redirect('login');}
            if (isset($row))
                {
                    $fname="";
                if (isset($row->Photo)){$fname=base_url()."uploadfiles/".$row->Photo;}
                  if($row->Photo==''){$fname=base_url()."uploadfiles/".'Avatar.png';}
            // echo $row->FirstName;
            // $this->session->unset_userdata('some_name');
                $this->session->set_userdata('FirstName',$row->FirstName);
                $this->session->set_userdata('LastName',$row->LastName);
                $this->session->set_userdata('EmpID',$row->EmpID);
                $this->session->set_userdata('Role',$row->Role);
                $this->session->set_userdata('Photo',$fname);
                $this->session->set_userdata('Error','');
                $this->session->set_userdata('Project_Name','');
   
                }
$role=$this->session->userdata('Role')  ;
if($role=='Admin'){ redirect('Projectsnew');}
else{
    redirect('Expenses');}
           } else

           {
               $this->session->set_flashdata('msg','Invalid Credentials');
               $msg=$this->session->set_flashdata('msg');
               $this->session->set_userdata('Error','Invalid Credentials');
          $data=Array(
              'msg'=>$this->session->flashdata('msg'),
          );

        // header("Location:http://localhost:8080/vasu/index.php/Login",$data);
         redirect('login','refresh');
           }
        }
}