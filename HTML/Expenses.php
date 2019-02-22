<?php

 

class Expenses extends CI_Controller{
    public function __construct()
    {
        parent::__construct();
         $this->load->helper('url');
        $this->load->helper('form');
        $this->load->helper('custom');
        // Session
        $this->load->library('session');      
                
    }
public function index(){
    if(strlen($this->input->post('Project_Name'))){
        $this->session->set_userdata('Project_Name',$this->input->post('Project_Name'));
    }
            
      
       $data[]=array();

      // $data['expenses']=$query1;
       // $data = array( 'records' => $query, 'advances' => $query1 ); 
     //   $data = array( 'records' => $query, 'advances' => $query1 ); 

        $query=$this->Expenses_Model->getProjects() ; 
        $query1=$this->Expenses_Model->getExpenses() ; 
        $query2 = $this->Expenses_Model->getNewAdvances() ; 
        $query3=$this->Expenses_Model->getAdvances();

        $data = array( 'projects' => $query, 'expenses' => $query1, 'newadvances'=>$query2 , 'adv'=>$query3); 

       
            $this->load->view('Expenses_View',$data); 
        
}
public function Accept(){

    $ID=$this->input->post('ExpensesID');
    $query1 = $this->Expenses_Model->acceptAdvance($ID) ; 
  // header("Location:http://localhost:8080/vasu/index.php/Expenses");
   // header("Location:http://vasu.medtrans.in/index.php/Expenses");
   redirect('Expenses');
   
}
public function Rejected(){

    $ID=$this->input->post('ExpensesID');
    $query1 = $this->Expenses_Model->rejectAdvance($ID) ; 
     //header("Location:http://localhost:8080/vasu/index.php/Expenses");
   //  header("Location:http://vasu.medtrans.in/index.php/Expenses");
   redirect('Expenses');
}

public function addExpenses(){
//Project_Name,Amount,EmpID,Expense_Date,Details,Time_Stamp,Status
 
$Amount=html_escape(trim($this->input->post('Amount')));
$Details=html_escape(trim($this->input->post('Details')));

$Expense_Date= html_escape(trim($this->input->post('Expense_Date')));

$Expense_Date = date('Y-m-d', strtotime($Expense_Date));
if($Expense_Date="01/Jan/1970")
{
    $Expense_Date=date('Y-m-d');
}
$Approval='';
if($Amount<50000)
{$Approval="Approved";} 
else
 {$Approval="Need Approval";}
  
$Project = html_escape(trim($this->input->post("SelProject")));
$timestamp = date('Y-m-d G:i:s');
    $data=Array(
        'Project_Name'=> $Project,
       'EmpID'=>$this->session->userdata('EmpID'),
        'Amount'=> $Amount,
        'Expense_Date'=>$Expense_Date,
       'Details'=>$Details ,
        
       'Expense_Status'=>$Approval,  
       
       'Time_Stamp'=>$timestamp   ,

           );
           
           if(strlen(trim($this->input->post('SelProject')))){
           $res =     $this->Expenses_Model->InsertExpenses($data) ; 
           }
        //   header("Location:http://localhost:8080/vasu/index.php/expenses");
           // header("Location:http://vasu.medtrans.in/index.php/expenses");
           redirect('expenses','refresh');
}

}