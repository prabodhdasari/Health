<?php

class Material_Model extends CI_Model{

    public function getMaterialPayments(){

            //$sql="select * from Material";
$sql="SELECT  a.Project_Name Project_Name,a.ID ID, a.BOQID BOQID, a.InvNumber InvNumber, a.Amount Amount, a.PaymentDetails Details,a.Payment_Date, Vendors.Business_Name VendorName, a.File_Name";
$sql=$sql . " FROM Material  a ";
$sql=$sql . " INNER JOIN Vendors ON a.VendorID=Vendors.VendorID order by a.ID desc";
//var_dump($sql);
           $q=$this->db->query($sql);
        // var_dump($q);
           if( $q->result())
           {
            return $q->result();
            }                  

    }


  public function  insertPayments($data){

   // var_dump($data);
     $sql="select * from Material where Project_Name ='" . $data['Project_Name'] ."' and Created_Date ='". $data['Created_Date'] . "'";
     $sql=$sql . " and PaymentDetails='" .$data['PaymentDetails'] . "'";
     $sql=$sql . " and Amount =" . $data['Amount'] ;
     $q=$this->db->query($sql);
     if(! $q->result())
     {
       $this->db->insert('Material',$data);      
        return 'True';  
      } 
      else
       {
           return 'False';
        }
  
}

}