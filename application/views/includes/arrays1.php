<?php 
$this->output->delete_cache();
 $EmpId= $this->session->userdata('EmpID')  ;
 $sql="select * from NavBar a join Employees b where a.Role like ('%Admin%') and b.Active='Y' and b.EmpID='". $EmpId . "'";
 $q=$this->db->query($sql);
 $EmpId= $this->session->userdata('EmpID')  ;
        $role=$this->session->userdata('Role')  ;
        if($role=='Admin'){
        $sql="select * from NavBar a join Employees b where a.Role like ('%Admin%') and b.Active='Y' and b.EmpID='". $EmpId . "'";
    } else {
        $sql="select * from NavBar a join Employees b where a.Role like ('%User%') and b.Active='Y' and b.EmpID='". $EmpId . "'";


    }
    $q=$this->db->query($sql);
    if( $q->result())
    {
     $row= $q->row();
     $data[]=array();
     $data['navs']=$q->result();
    
     }  


     
    $the_array = array();

    foreach($q->result() as $items){
    $the_array[] = array('slug' => $items->Page, 'title' =>  $items->Name);
        }

      

        $navitems=$the_array;

?>
