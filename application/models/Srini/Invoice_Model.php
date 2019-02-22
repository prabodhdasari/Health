<?php

class Invoice_Model extends CI_Model{

    public function insertPayments($data)
    {
        $sql="Select ID from Vendor_Invoice where VendorID=";
        $sql= $sql .   "'". $data['VendorID'] . "'";
        $sql=$sql . " and Invoice_Number='". $data['Invoice_Number'] . "'";
      //  var_dump($sql);
     $q=$this->db->query($sql);
    if(! $q->result())
     {
        
        $this->db->insert('Vendor_Invoice',$data);
    
     return 'True';

     } else
       {
          return 'False';
      }
    }

    public function getInvoices(){
        $sql="SELECT a.ID,  Business_Name,Invoice_Number,	Invoice_Date,	Details,	Amount,	GST,	Discount,	Total_Amount,	File_Name  FROM Vendor_Invoice a INNER JOIN Vendors ON a.VendorID=Vendors.VendorID order by a.ID desc";
        $q=$this->db->query($sql);
        return ( $q->result());
    }
}