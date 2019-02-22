<?php

class Profile extends CI_Controller{

    public function __construct()
    {
        parent::__construct();
         $this->load->helper('url');
        $this->load->helper('form');
        
        $this->load->helper(array('form', 'url'));
        // Session
        $this->load->library('session');
    }

    public function index()
    {
        $this->output->delete_cache();
     $data[]=array();
    $this->load->library('session');
    //echo $this->session->userdata('Project_Name') . 'Hello';
    $EmpID= $this->session->userdata('EmpID')  ;
    $query =     $this->Profile_Model->getProfile() ;
   $data['records']=$query;
    //var_dump($data) ;
   
   $sql="SELECT Photo from Employees where EmpID='" . $EmpID . "'";    
   $q=$this->db->query($sql);
       $row = $q->row();
       if (isset($row->Photo)){$fname=base_url()."uploadfiles/".$row->Photo;}
       if($row->Photo==''){$fname=base_url()."uploadfiles/".'Avatar.png';}
        //echo $fname;
       $data['photo']=$fname;
       //var_dump($data);
       $this->load->view('Profile_View', $data);
    }


    public function update(){
        if($this->input->post()){
            $data=Array(
                'FirstName'=>trim($this->input->post('FirstName')),
               'LastName'=> trim($this->input->post('LastName')),
                
               'Designation'=> trim($this->input->post('Designation')),
              
               'Mobile'=>  ($this->input->post('Mobile')),
               'EmpID'=> $this->session->userdata('EmpID') ,
              
                   );
           
                $res =     $this->Profile_Model->updateProfile($data) ;  // $this->db->insert('Employees',$data); 
              //  header("Location:http://localhost:8080/vasu/index.php/Profile");
              
              //header("Location:http://vasu.medtrans.in/index.php/Profile");
                redirect('profile','refresh');
    }}

    public function changePassword(){
        if($this->input->post()){
            $new_password=trim($this->input->post('PasswordOld'));
            $conf_password=trim($this->input->post('PasswordNew'));
            $userid= $this->session->userdata('EmpID');
            echo $new_password . '  ' .$conf_password;
            $data=Array(
                'Password'=>trim($this->input->post('Password')),
                   );
                   if ($new_password != $conf_password)  
                   {  echo ('New password & Confirm password is not matching');}
                   else { $res =   $this->Profile_Model->updatePassword($new_password, $userid);
                    
             //    header("Location:http://localhost:8080/vasu/index.php/Profile");
                   // header("Location:http://vasu.medtrans.in/index.php/Profile");
                    redirect('profile','refresh');
                }
           

        }

    }
    public function addPhoto(){
    
        $this->output->delete_cache();
        $config['upload_path']          = './uploadfiles/';
        $config['allowed_types']        = 'gif|jpg|png|';
        $config['max_size']             = 10048;
        
        $config['overwrite']=True;
        
       // isset($_FILES["userfile"]['name']);
       $ext="";
       $EmpID= $this->session->userdata('EmpID')  ;
      
       $File_Name="";
       $timestamp = date('Y-m-d G:i:s');
       $new_name="";
    //echo ($_FILES["userfile"]['name']);
       if( isset($_FILES["userfile"]['name'])){ 
             $new_name =$_FILES["userfile"]['name'];
            $info = new SplFileInfo($new_name);
            $ext=$info->getExtension();
          //  $new_name=  $EmpId. '.'.($info->getExtension());
            } 
       $new_name= $EmpID. '.'. $ext;
     
     
       if( strlen($ext)){ $File_Name=  $new_name;}
       $config['file_name']=  $File_Name;
         $ph1 = array(
         'Photo' => $File_Name, );
         $error="";
         $this->db->where('EmpID', $EmpID);
         $this->db->update('Employees', $ph1);
    
      
            $this->load->library('upload', $config);
            $this->upload->initialize($config);
          
          
          if($this->upload->do_upload())
          {
             $data = array('upload_data' => $this->upload->data());
           //  $this->load->view('upload_success',$data);
          }
          else
          {
              $error = array('error' => $this->upload->display_errors());
              //echo $error;
            //  $this->load->view('file_view', $error);
          }
           
      
          
         
         redirect('profile','refresh');
        }
}