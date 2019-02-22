
<?php
defined('BASEPATH') OR exit('No direct script access allowed');
 
class Welcome extends CI_Controller {
    public function index()
    {
           $this->load->helper(array('dropdown','form'));
           $this->load->database();
		// $dropdownItems = listData('country_tbl','country_id', 'country_name');
		  //$dropdownItems = listData('Projects','Project_Name', 'Project_Name');
		 //$countryDropdown = form_dropdown('country',$dropdownItems);
		// var_dump( $countryDropdown);
        //$stateDropdown =   form_dropdown('state',[]);
      //  $this->load->view('welcome_View', ['countryDropdown' => $countryDropdown, 'stateDropdown' => $stateDropdown]);

      $this->load->view('login_view');
    }
 
    public function getState() {
        $this->load->helper(array('dropdown','form'));
        $this->load->database();
	 $country_id = $this->input->get('country_id');
	 echo  $country_id;
		$dropdownItems = listData('BOQ','BOQID', 'BOQ_Description',['where' => ['Project_Name' => $country_id]]);
		var_dump($dropdownItems);
        echo $stateDropdown =   form_dropdown('state',$dropdownItems);
        
	}
	
	// public function getState() {
    //     $this->load->helper(array('dropdown','form'));
    //     $this->load->database();
    //  $country_id = $this->input->get('country_id');
    //     $dropdownItems = listData('state_tbl','sate_id', 'sate_name',['where' => ['country_id' => $country_id]]);
    //     echo $stateDropdown =   form_dropdown('state',$dropdownItems);
        
    // }
}