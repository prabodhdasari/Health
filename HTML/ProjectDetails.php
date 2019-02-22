<?php

Class ProjectDetails extends CI_Controller{

public function Index(){
   $Project=$this->input->post('Project_Name');
   //echo $Project;
    $sql="Select Project_Name, Amount from Advances ";
    $sql=  "Select Project_Name,CAST( (Count(Amount)* 100 / (Select Count(*) From Advances)) as SIGNED) as  score   ";
    $sql=$sql . " From Advances";
    $sql= $sql . " Group By Project_Name";
    $q=$this->db->query($sql);
    $result=$q;
    // var_dump($q);
       if( $q->result())
       {
        $query=   json_encode( $q->result());  
      
        }    
        
        $data[]=array();
        $data['records']= $q->result();

        $sql="select sum(amount) as Amount, Project_Name from Advances group by Project_Name ";
        $q=$this->db->query($sql);
        $data['Projects']= $q->result();
        $sql="select left(Business_Name,10) as Business_Name, sum(amount) as Amount from Vendor_Invoice a Join Vendors b on a.VendorID=b.VendorID group by a.VendorID ";
        $q=$this->db->query($sql);
        $data['Vendors']= $q->result();


 $role=$this->session->userdata('Role')  ;
 if ($role=='Admin'){
         $this->load->view('ProjectDetails_view', $data);} else {
         $this->load->view('Login_view.php');}

  
     

}


       
            
}

   ?>
    