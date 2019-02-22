<?php 

class grocery extends CI_Controller{

    public function __construct()
	{
		parent::__construct();

		$this->load->database();
		$this->load->helper('url');

		$this->load->library('grocery_CRUD');
    }
    public function index()
	{
        $crud = new grocery_CRUD();
        $crud->set_theme('datatables');
		$crud->set_table('Vendors');	
		$crud->columns('Business_Name','GSTIN','PAN','Address1','Address2','City','State','Postal_Code');	 
        $output = $crud->render();
       
       // $this->_example_output((object)array('output' => '' , 'js_files' => array() , 'css_files' => array()));
        $this->load->view('grocery_view.php',(array)$output);
	
	}
    public function _example_output($output = null)
	{
            $crud = new grocery_CRUD();
			$crud->set_theme('datatables');
			$crud->set_table('Vendors');		 
			$output = $crud->render();
			$this->_example_output($output);
		    $this->load->view('grocery_view.php',(array)$output);
	}


}