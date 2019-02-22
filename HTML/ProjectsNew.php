


<?php

class ProjectsNew extends CI_Controller
{

    public function __construct(){
        parent::__construct();
         $this->load->helper('url');
        $this->load->helper('form');
        // Session
        $this->load->library('session');
    }
public function index()
{

    $data[]=array();
      
    if($query=$this->Projects_Model->getAllProjects())
        {
           $data['records']=$query;
           
           $this->load->view('projects_view.php',$data);
         // $this->load->view('projects_view.php');

        }
       // $this->load->view('projects_view.php',$data);
   

}

public function create()
{  
   // echo "Iam inside Add Projects";
    $data[]=array();
    $res="";
        $data=Array(
       'Project_Name'=>trim($this->input->post('Project_Name')),
      'Project_Description'=> trim($this->input->post('Project_Description')),
      'Tender_ID'=> trim($this->input->post('Tender_ID')),
      'Temder_Amount'=> trim($this->input->post('Temder_Amount')),
      'Project_Start_Date'=> trim($this->input->post('Project_Start_Date')),
      'Project_End_Date'=>  ($this->input->post('Project_End_Date')),
      'Status_ID'=> 1,
      
          );
       
         
          if(strlen($this->input->post('Project_Name'))>0) 
          {
           
                $res = $this->Projects_Model->add_projects($data);
                  if($res==true)
                  {
                      $message = '<div class="alert alert-success" role="alert">Success</div>';
                  }
                  else
                  {
                    $message = '<div class="alert alert-danger" role="alert">Fail</div>';
                  }
               
    
            // header("Location:http://localhost:8080/vasu/index.php/projectsnew");
            //header("Location:http://vasu.medtrans.in/index.php/projectsnew");
              redirect('projectsnew','refresh');   
    
                }


}

}