<?php

class Profile_Model extends CI_Model{

    function getProfile(){

        $sql = 'Select * from Employees where EmpId = "'. $this->session->userdata('EmpID') . '"';
        
     
         $query = $this->db->query($sql);
        //var_dump ($query->result());
     // var_dump($result=$query->row())  ;
        return $result=$query->row();
    }

    function updateProfile($data){
      //  var_dump($data);
       $this->db->where('EmpID', $this->session->userdata('EmpID'));
      $this->db->update('Employees',$data );
      return 'True';
    }
    public function updatePassword($new_password, $userid)
 {
    $data = array
    (
        //'password'=> md5($new_password)
        'password'=> ($new_password)
    );
    if ($this->db->where('EmpID', $userid)->update('Employees', $data))
    {
        return 'True';
    }
}
}