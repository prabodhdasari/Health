<?php

class staffDetails_Model extends CI_Model{

    public function getEmp($EmpID){

        $sql="SELECT * from Employees where EMPID = '" . $EmpID . "'" ;
      //  echo $sql;
         $q=$this->db->query($sql);
         $row = $q->row();
       // var_dump($q->result());
      // var_dump($row) ;
          return  $row;
    }
    public function getProjects($EmpID){

        $sql="select * from ProjectTeam where EmpId= '" . $EmpID . "'" ;
      //  echo $sql;
      $sql=$sql . "  order by Project_Name ASC";
         $q=$this->db->query($sql);
        
             return  $q->result();
    }
    public function getExpenses($EmpID){

        $sql="select sum(amount) as Amount, Project_Name from Expenses where EmpID='" . $EmpID . "'" ;
        $sql = $sql . " group by Project_Name  WITH ROLLUP";
      //  echo $sql;
         $q=$this->db->query($sql);
        
     // var_dump($q->result());
      // var_dump($row) ;select sum(3333) as Amount, Project_Name from Expenses where EmpID='Emp101' group by Project_Name
          return  $q->result();
    }
    public function getAdvances($EmpID){

        $sql="select sum(amount) as Amount, Project_Name from Advances where Reciever='" . $EmpID . "'" ;
        $sql = $sql . " group by Project_Name WITH ROLLUP";
      //  echo $sql;
         $q=$this->db->query($sql);
        
     // var_dump($q->result());
      // var_dump($row) ;select sum(3333) as Amount, Project_Name from Expenses where EmpID='Emp101' group by Project_Name
          return  $q->result();
    }
    
     
}