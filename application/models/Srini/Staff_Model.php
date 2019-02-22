<?php

class Staff_Model extends CI_Model{

function getAllStaff(){

    $query = $this->db->get('Employees');
    return $query->result();    

}

function add_staff($data){
     
    $sql="SELECT * from Employees where Email =? or EMPID = ?";
    $q=$this->db->query($sql, array( trim($data['Email']), trim($data['EmpID'])));
     $msg="";
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
