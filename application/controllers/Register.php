<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Register extends CI_Controller {

 public function __construct()
 {
  parent::__construct();
  if($this->session->userdata('id'))
  {
   redirect('private_area');
  }
  $this->load->library('form_validation');
//  $this->load->library('encrypt');
  $this->load->model('register_model');
 }

 function index()
 {
  $this->load->view('home.php');
 }

 function validation()
 {
  $this->form_validation->set_rules('user_name', 'Name', 'required|trim');
  $this->form_validation->set_rules('user_email', 'Email Address', 'required|trim|valid_email|is_unique[codeigniter_register.email]');
  $this->form_validation->set_rules('user_password', 'Password', 'required');
  if($this->form_validation->run())
  {
   $verification_key = md5(rand());
   //$this->encrypt->encode($this->input->post('user_password'));
   $encrypted_password = $this->input->post('user_password');
   $data = array(
    'name'  => $this->input->post('user_name'),
    'email'  => $this->input->post('user_email'),
    'password' => $encrypted_password,
    'verification_key' => $verification_key
   );
   $id = $this->register_model->insert($data);
   if($id > 0)
   {
    $subject = "Please verify email for login";
    $message = "
    <p>Hi ".$this->input->post('user_name')."</p>
    <p>This is email verification mail from MedTrans system. To complete registration process and login into the system. Verify you email by click this <a href='".base_url()."register/verify_email/".$verification_key."'>link</a>.</p>
    <p>Once you click this link your email will be verified and you can login into system.</p>
    <p>Thanks,</p>
    ";
$message1="<a href=" .base_url(). "register/verify_email/".$verification_key.">Activate</a>";
    // $config = array(
    //     'protocol' => 'smtp',
    //     'smtp_host' => 'ssl://smtp.googlemail.com',
    //      'smtp_port' => 465,
    //     'smtp_user'  => 'prabodhdasari@gmail.com', 
    //                  'smtp_pass'  => 'acer@1234', 
    //     'mailtype'  => 'html',
    //     'charset'    => 'iso-8859-1',
    //                   'wordwrap'   => TRUE
    //    );
      


    $this->load->library('email' );
    $this->email->set_newline("\r\n");
    $this->email->from('info@xsilica.com');
    $this->email->to($this->input->post('user_email'));
    $this->email->subject($subject);
   // $this->email->message($message);
   $key1=$verification_key;
    $data=array(
    'verification_key'=>$verification_key,
    'message'=>"Test",
    );
    $data = array('userName'=> $this->input->post('user_name') ,'verification_key'=> base_url(). "register/verify_email/".$verification_key,);
    $body = $this->load->view('email_activation.php',$data,TRUE);
    $this->email->message($body); 
    if($this->email->send())
    {
     $this->session->set_flashdata('message', 'An Email has been sent, please confirm the verification mail');
     redirect(base_url().'home.php');
    }
   }
  }
  else
  {
    $this->index();
  }
 }

 function verify_email()
 {
  if($this->uri->segment(3))
  {
   $verification_key = $this->uri->segment(3);
   if($this->register_model->verify_email($verification_key))
   {
    $data['message'] = '<h1 align="center">Your Email has been successfully verified, now you can login from <a href="'.base_url().'login">here</a></h1>';
   }
   else
   {
    $data['message'] = '<h1 align="center">Invalid Link or Expired Link</h1>';
   }
   $this->load->view('email_verification', $data);
  }
 }

}

?>