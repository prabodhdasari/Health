
<?php

class Staff extends CI_Controller{

    public function __construct(){
        parent::__construct();
         $this->load->helper('url');
        $this->load->helper('form');
        // Session
        $this->load->library('session');
    }
    
    function index()
    {
        //Get all records
        $data[]=array();
        $query1=$this->session->flashdata('msg');
  
      //  $data = array( 'records' => $query , 'error' => $query1);; 
        if($query=$this->Staff_Model->getAllStaff())
        {
            $data['records']=$query;
            $data['error']=   $query1;
          
            $role=$this->session->userdata('Role')  ;
            if ($role=='Admin'){
                $this->load->view('Staff_View.php',$data);} else {
              $this->load->view('Login_view.php');}
      
//or you can auto-load

           // var_dump($data);
        }
        


       
       
    }

    function create()
    { 
       
        $role = $_POST['role']; 
        
        {
        $data=Array(
       'FirstName'=>trim($this->input->post('FirstName')),
      'LastName'=> trim($this->input->post('LastName')),
      'Email'=> trim($this->input->post('Email')),
      'Designation'=> trim($this->input->post('Designation')),
      'Password'=> trim($this->input->post('Password1')),
     // 'ConfirmPassword'=> trim($this->input->post('Password2')),
      'Mobile'=>  ($this->input->post('Mobile')),
      'EmpID'=> 'Emp'. mt_rand(1,999),
      'Role'=> $role,
      'Active'=> 'Y',
          );

          $Cpass=trim($this->input->post('Password2'));
      if(strlen($this->input->post('Email'))>0) 
      {
          if($data['Password']==$Cpass){
            $res =     $this->Staff_Model->add_staff($data);
      //  echo $res;
              // $res = $this->products->addnewproducts($data);
              if($res=="True")
              {
                $this->session->set_flashdata('msg', 'Saved');

              }
              else
              {
                $this->session->set_flashdata('msg', 'Oops!!! The Email already Exists. ');
              }
                  
             
        

            } 
            else {

                $this->session->set_flashdata('msg', 'Sorry!!! Password and confirm Does not Match');
            }


        }
       redirect('staff','refresh');
              
          }

     }

    }




        
     //if(strlen($this->input->post('FirstName'))>0) 
      //  {
          //$this->site_model->add_record($data);}
        // $this->index();

        // }
  //  }
    