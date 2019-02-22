<?php

class BOQ_Model extends CI_Model{

    public function addBOQ($data){
        $sql="SELECT * from BOQ where BOQID =? ";
        $q=$this->db->query($sql,  array( trim($data['BOQID'])));
         
           if(! $q->result())
           {
               $this->db->insert('BOQ',$data);
               return("True");

            } else
             {
                return("False");
            }
        
          

    }

    public function getBOQ(){
             $sql = 'Select * from BOQ where Project_Name = "'. $this->session->userdata('Project_Name') . '" order by ID desc';
            //var_dump($sql);
             $query = $this->db->query($sql);       
            return   $query->result();
           

    }
  


}