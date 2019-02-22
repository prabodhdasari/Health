<?php

Class Advances_Model extends CI_Model{

    public function getEmployees(){

        $Project_Name= $this->session->userdata('Project_Name')  ;
        $sql="Select * from Employees a where a.Empid in (SELECT EmpID FROM `ProjectTeam`)";
        $q=$this->db->query($sql);
        // var_dump($q);
           if( $q->result())
           {
            return $q->result();
            }                  

    }

    public function getAdvances(){
        //select * from Advances a join Employees b on a.Reciever= b.EmpID 
        // where sender = 'EMP101' and Project_Name = 'VRDA'
        $Project_Name= $this->session->userdata('Project_Name')  ;//$data['Amount']
        $EmpID= $this->session->userdata('EmpID')  ;
        $sql="select a.ID ID,FirstName,LastName,Amount,PaymentDetails,Payment_Mode,Payment_Date,Status, File_Name,Project_Name  from Advances a join Employees b on a.Reciever= b.EmpID  where ";
        $sql= $sql . " sender = " ;
        $sql= $sql .   "'". $EmpID."'" ;
        $sql= $sql .   " and Project_Name = " ;
        $sql= $sql .   "'". $Project_Name . "'";
        $sql= $sql .   " order by a.ID desc";
      //  echo $sql;
        $q=$this->db->query($sql);
       
        if( $q->result())
        {
         return $q->result();
         } 
        //echo $sql;
    }
public function insertAdvances($data){

    $Project_Name= $this->session->userdata('Project_Name')  ;//$data['Amount']
    $sql="Select *  from Advances where amount =";
    $sql= $sql .   "'". $data['Amount'] . "' and sender = " ;
    $sql= $sql .   "'". $data['Sender'] . "' and Reciever = " ;
    $sql= $sql .   "'". $data['Reciever'] . "' and Project_Name = " ;
    $sql= $sql .   "'". $data['Project_Name'] . "'";
    $q=$this->db->query($sql);
   if(! $q->result())
   {
      // echo $data;
       $this->db->insert('Advances',$data);
    
      return 'True';

    } else
     {
         return 'False';
    }

   //return;
     

}


}