<?php
//https://www.webslesson.info/2018/09/inline-table-crud-in-codeigniter-using-ajax-jquery.html
class BOQ extends CI_Controller{

    public function __construct()
    {
        parent::__construct();
         $this->load->helper('url');
        $this->load->helper('form');
        // Session
        $this->load->library('session');
    }
public function index(){
    
    if(strlen($this->input->post('Project_Name'))){
        $this->session->set_userdata('Project_Name',$this->input->post('Project_Name'));
    }

      
   $data[]=array();   
   if(strlen(trim($this->session->userdata('Project_Name')))){
    $query = $this->BOQ_Model->getBOQ($data) ; 
 
   }
     
            $query1=$this->session->flashdata('msg');
  
            $data = array( 'records' => $query , 'error' => $query1);
           
          $role=$this->session->userdata('Role')  ;
          if ($role=='Admin'){
         $this->load->view('BOQ_View',$data);} else {
            $this->load->view('Login_view.php');}
}

public function addNewBOQ(){
   
    if($this->input->post()){
        $timestamp = date('Y-m-d G:i:s');
        $BOQID=html_escape(trim($this->input->post('BOQID')));
        $BOQ_Title=html_escape(trim($this->input->post('BOQ_Title')));
        $BOQ_Amount=html_escape(trim($this->input->post('BOQ_Amount')));
        $BOQ_Description= html_escape(trim($this->input->post('BOQ_Description')));
        $data=Array(
            'BOQID'=>$BOQID,
           'BOQ_Amount'=>$BOQ_Amount ,
           'BOQ_Description'=> $BOQ_Description,
           'BOQ_Title'=>$BOQ_Title,
           'Project_Name'=>$this->session->userdata('Project_Name'),
           'Created_Date'=>$timestamp,
               );

       // var_dump($data);       
       if(strlen(trim($this->input->post('BOQID')))){
        $res = $this->BOQ_Model->addBOQ($data) ; 
 
        if($res=='True')
        {
            $message = ' Success !! BOQ Added ';
           $this->session->set_flashdata('msg',  $message );
         
        }
       else
        {
            $message = ' Duplicate BOQ ';
          $this->session->set_flashdata('msg',  $message);

       //   $message = '<div class="alert alert-danger" role="alert">Fail</div>';
        }


       }
            
       //    header("Location:http://localhost:8080/vasu/index.php/BOQ");
        //  header("Location:http://vasu.medtrans.in/index.php/BOQ");
        redirect('BOQ','refresh');
        
    }
}

public function delete()
   {
    $BOQID=html_escape(trim($this->input->post('BOQID')));
   
       $this->db->where('BOQID',  $BOQID);
      $this->db->delete('BOQ');
     redirect(('BOQ'));
   }
   public function edit($id)
   {
      echo 'Hello World';
   }

public function escape_output($string)
{
    echo $string;
    $newString = str_replace('\r\n','<br/>',$string);
    $newString = str_replace('\n\r','<br/>',$newString);
    $newString = str_replace('\r','<br/>',$newString);
    $newString = str_replace('\n','<br/>',$newString);
    $newString = str_replace('\'','',$newString);
    return $newString;
}
public function getBOQ(){

}

}