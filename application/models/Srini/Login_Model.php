<?php

class Login_Model extends CI_Model{

function getLogin(){
   
    $EmailId=trim($this->input->post('EmailID'));
 
    $query = $this->db->get_where('Employees', array('Email' => $EmailId));
    return $query->result();    
//var_dump($query);
}

function add_staff($data){
     
    $sql="SELECT * from Employees where Email =? or EMPID = ?";
    $q=$this->db->query($sql, array( trim($data['Email']), trim($data['EmpID'])));
     
       if(! $q->result())
       {
           $this->db->insert('Employees',$data);
           return 'True';
        } else
         {
            return 'False';
        }
    
 

}

function update_staff($data){
    $q=$this->db->query($sql, trim($data['Email']));

    if($q->result())
    {
        $this->db->where('Email', trim($data['Email']));
        $this->db->update('Employees', $data); 
        return 'True';
     } else
      {
        return 'False';
     }
 
  
}

function changepassword(){}

function assignword(){}

}
