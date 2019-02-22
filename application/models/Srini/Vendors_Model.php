<?php

class Vendors_Model extends CI_Model{

function getAllVendors()
{

    $query = $this->db->get('Vendors');
    
       return $query->result(); 
     
     }
      


function getVendor($data)
{
    $sql="SELECT * from Vendors where VendorID ='" . $data ."'";
    $q=$this->db->query($sql);
    if(!$q->result())
    {
        return('Cool');
    } else {return('Already Exsits');}
}
function add_Vendor($data){
     
    $sql="SELECT * from Vendors where Business_Name ='" .  trim($data['Business_Name']) . "'";
    $q=$this->db->query($sql);
     
       if(! $q->result())
       {
        return $this->db->insert('Vendors',$data);
          
        } else
         {
            return;;
        }
    
      

}

function getTotalInvoiceAmount(){

   $sql ="select Business_Name as Vendor, sum(Total_Amount) as Amount from Vendor_Invoice a join Vendors b on a.VendorID = b.VendorID  group by a.VendorID";
 $q=$this->db->query($sql);
  
 if( $q->result())
 {
  //  var_dump($q->result());
  return $q->result();
  
  } 
}
function getTotalVendorPaymentAmount(){

    $sql =" select Business_Name as Vendor, sum(Amount) as Amount from Material a join Vendors b on a.VendorID = b.VendorID  group by a.VendorID";

  $q=$this->db->query($sql);
   
  if( $q->result())
  {
   //  var_dump($q->result());
   return $q->result();
   
   } 
 }
 function getTotalProjectsPaymentAmount(){

    $sql ="Select a.Project_Name project, Business_Name vendor, sum(Amount) Amount from Material a join Vendors b on a.VendorID = b.VendorID group by a.VendorID,Project_Name order by Project_Name";
    $q=$this->db->query($sql);
   
  if( $q->result())
  {
   //  var_dump($q->result());
   return $q->result();
   
   } 
 }
 //

function update_staff($data){
    $q=$this->db->query($sql, trim($data['Email']));

    if($q->result())
    {
        $this->db->where('Email', trim($data['Email']));
        $this->db->update('Employees', $data); 
     } else
      {
          echo 'No record Exists';
     }
 
    return;
}

 

}
