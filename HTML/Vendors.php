<?php




Class Vendors extends CI_Controller{

    public function __construct()
    {
        parent::__construct();
         $this->load->helper('url');
        $this->load->helper('form');
        // Session
        $this->load->library('session');      
                
    }
    function index()
    {
        //Get all records
        $data[]=array();
        $res =  $this->Vendors_Model->getAllVendors();
        //$query=$this->Expenses_Model->getProjects() ; 
       // $query1=$this->Expenses_Model->getExpenses() ; 

           $data['records']=$res;
          // "blue",'msg'=>$this->session->flashdata('msg')
         //  array_push($data,$this->session->flashdata('msg'));
           
            $query1=$this->session->flashdata('msg');
            $data = array( 'records' => $res, 'error' => $query1);; 
            //var_dump($data);
           $this->load->view('Vendors_View.php',$data);
        }
       
         
    
    function create()
    {   
        {
        $timestamp = date('Y-m-d G:i:s');
        $id="";
        $flag="False";
       
         while($flag="False")
          {
            $rand=$this->generateID();
            $id=$rand;
            //var_dump($rand);
            $res=$this->Vendors_Model->getVendor($rand);
          
         
            if($res=="Cool"){  break;} 
          }
        //$id=$this->generateID() ;
        $data=Array(
       
      'Business_Name'=> trim($this->input->post('Business_Name')),
      'GSTIN'=> trim($this->input->post('GSTIN')),
      'Address1'=> trim($this->input->post('Address1')),
      'Address2'=> trim($this->input->post('Address2')),
      'City'=>  ($this->input->post('City')),
      'State'=> trim($this->input->post('State')),
      'Postal_Code'=> trim($this->input->post('Postal_Code')),
      'VendorID'=> $id ,
      'CreatedBy'=>$this->session->userdata('EmpID'),      
      'CreatedDate'=>$timestamp   ,      
      'Active'=> 'Y',
          );
       //   var_dump($data);
       if(strlen($this->input->post('Business_Name'))>0) 
      {
        $res =  $this->Vendors_Model->add_Vendor($data);
      //  echo $res;
              // $res = $this->products->addnewproducts($data);
             
              if($res=='True')
              {
                $this->session->set_flashdata('msg', '');
               //   $message = '<div class="alert alert-success" role="alert">Success</div>';
              }
             else
              {
                $this->session->set_flashdata('msg', 'Duplicate Business Name');

             //   $message = '<div class="alert alert-danger" role="alert">Fail</div>';
              }
          //  header("Location:http://localhost:8080/vasu/index.php/staff");
          //header("Location:http://vasu.medtrans.in/index.php/staff");
             redirect('Vendors','refresh');
         // http://vasu.medtrans.in   

            }              
          }
     }

     public function generateID()
     {
        $seed = str_split('ABCDEFGHIJKLMNOPQRSTUVWXYZ'); // and any other characters
shuffle($seed); // probably optional since array_is randomized; this may be redundant
$rand = '';
foreach (array_rand($seed, 5) as $k) $rand .= $seed[$k];
$rand = $rand . mt_rand(1,999);

//$res=$this->Vendors_Model->getVendor($rand);
//if($res="Already Exsits")
 return $rand;

}

     
}