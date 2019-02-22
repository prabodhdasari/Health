<?php

class Team_Model extends CI_Model{

    function getAllTeam(){    
       $Project_Name=$this->session->userdata('Project_Name');
       if(strlen($Project_Name)){    
       
          //  $query = $this->db->get_where('ProjectTeam', array('Project_Name' => $Project_Name));
            $this->db->select('Employees.EmpID,Employees.FirstName,Employees.LastName,ProjectTeam.Project_Name');
            $this->db->from('ProjectTeam');
            $this->db->join('Employees', 'Employees.EmpID = ProjectTeam.EmpID');
            $this->db->where('ProjectTeam.Project_Name', $Project_Name);
          //  $this->db->where('Project_Name' = $Project_Name);
           $query = $this->db->get();
           
        return $query->result();   
       }
      
       }

       function getAllStaff(){
         //select * from Employees a LEFT OUTER JOIN  ProjectTeam b  ON a.EmpID = b.EmpID where b.EmpID is null
        $Project_Name=$this->session->userdata('Project_Name');
        $this->db->select('Employees.EmpID,Employees.FirstName,Employees.LastName');
        $this->db->from('Employees');
        $this->db->join('ProjectTeam', 'Employees.EmpID = ProjectTeam.EmpID','left outer');
         $query = $this->db->get();
         
         $sql = 'Select * from Employees a where a.EmpID not in (select EmpID from ProjectTeam where Project_Name ="'. $Project_Name . '")';
        // echo $sql;
         $query = $this->db->query($sql);
        
            return $query->result(); 
       }

       function insertTeam($data)
       {
        $this->db->insert('ProjectTeam',$data); 
       }

}