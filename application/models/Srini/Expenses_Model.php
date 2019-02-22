<?php 

class Expenses_Model extends CI_Model{
//Select  *  from Advances a join Employees b on a.Reciever= b.EmpID  
//where  Reciever = 'EMP101' and Status = 'Sent'
    public function getNewAdvances(){
        //select * from Advances a join Employees b on a.Reciever= b.EmpID 
        // where sender = 'EMP101' and Project_Name = 'VRDA'
        $Project_Name= $this->session->userdata('Project_Name')  ;//$data['Amount']
        $EmpID= $this->session->userdata('EmpID')  ;
        $sql="Select   a.ID,Project_Name,Amount,PaymentDetails,Payment_Mode,Payment_Date,Status, FirstName, LastName";
        $sql=$sql ." from Advances a join Employees b on a.Sender= b.EmpID  where ";
        $sql= $sql . " Reciever = " ;
        $sql= $sql .   "'". $EmpID."'" ;
        $sql= $sql .   " and Status = 'Sent'" ;
        //var_dump($sql);  
        $q=$this->db->query($sql);
     
        if( $q->result())
        {
           
         return $q->result();
         
         } 
        //echo $sql;
    }
    public function acceptAdvance($ID){

        $sql="update Advances  set status='Accepted' where ID=" . $ID ;
        $q=$this->db->query($sql);
    }
    public function rejectAdvance($ID){

        $sql="update Advances  set status='Rejected' where ID=" . $ID ;
        $q=$this->db->query($sql);
    }
    public function getProjects(){
        $EmpID= $this->session->userdata('EmpID') ;
        $sql = "SELECT * FROM ProjectTeam where EmpID = '" .   $EmpID. "'";
        $q=$this->db->query($sql);
     
        if( $q->result())
        {
           
         return $q->result();
         
         } 
    }
public function getAdvances(){
    $EmpID= $this->session->userdata('EmpID') ;
  // $sql = "Select FORMAT(Amount, 0,'en_IN') as Amount, ID,EmpID,Details,Expense_Date,Expense_Status,Project_Name,File_Name,Time_Stamp from Expenses where EmpID= '" .   $EmpID. "'";
  $sql="Select   a.ID,Project_Name,Amount,PaymentDetails,Payment_Mode,Payment_Date,Status, FirstName, LastName from Advances a join Employees b on a.Sender= b.EmpID  where Status = 'Accepted' and Reciever= '" .   $EmpID. "'";
    $q=$this->db->query($sql);
     
    if( $q->result())
    {
     //  var_dump($q->result());
     return $q->result();
     
     } 

}
    public function getExpenses()
    {
        $EmpID= $this->session->userdata('EmpID') ;
        $sql = "Select FORMAT(Amount, 0,'en_IN') as Amount, ID,EmpID,Details,Expense_Date,Expense_Status,Project_Name,File_Name,Time_Stamp from Expenses where EmpID= '" .   $EmpID. "'";
        $sql=$sql . " order by ID desc";
        $q=$this->db->query($sql);
     
        if( $q->result())
        {
         //  var_dump($q->result());
         return $q->result();
         
         } 

    }

    public function InsertExpenses($data){

        $sql="Select *  from Expenses where Amount =";
        $sql= $sql .   "'". $data['Amount'] . "' and EmpID = " ;
        $sql= $sql .   "'". $data['EmpID'] . "' and Project_Name = " ;
        $sql= $sql .   "'". $data['Project_Name'] . "' and Expense_Date = " ;        
        $sql= $sql .   "'". $data['Expense_Date'] . "'";
       // var_dump($sql);
        $q=$this->db->query($sql);
       if(! $q->result())
       {
          // echo $data;
         $this->db->insert('Expenses',$data);
        
          return 'True';
      #endregion
        } else
         {
             return 'False';
        }
    
         }


    
}

