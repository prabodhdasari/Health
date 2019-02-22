
<?php

class Projects_Model extends CI_Model{

function getAllProjects(){

 //   $query = $this->db->get('Projects');

    $this->db->select('*');
$this->db->from('Projects');
$this->db->join('Project_Status', 'Project_Status.Status_ID = Projects.Status_ID');
$query = $this->db->get();
 

    return $query->result();    

}

function add_projects($data){
     
   

    $sql="SELECT * from Projects where Project_Name = ?";
    $q=$this->db->query($sql, array( trim($data['Project_Name'])));
    // var_dump($q);
       if(! $q->result())
       {
           $this->db->insert('Projects',$data);
           return 'True';
        } else
         {
            return 'False';
        }
    
      

}

function update_projects($data){
    $q=$this->db->query($sql, trim($data['Project_Name']));

    if($q->result())
    {
        $this->db->where('Project_Name', trim($data['Project_Name']));
        $this->db->update('Projects', $data); 
        return 'True';
     } else
      {
        return 'False';
     }
 
   
}

function changepassword(){}

function assignword(){}

}
