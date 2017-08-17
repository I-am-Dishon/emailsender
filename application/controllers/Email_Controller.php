<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
* 
*/
class Email_Controller extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();
		
		$this->load->helper('form');
		
	}
	public function index()
	{

		$this->load->helper('form');
		$this->load->view('email_form');
	}
	public function send_mail()
	{

		$config = Array( 
  		'protocol' => 'smtp', 
  		'smtp_host' => 'ssl://smtp.googlemail.com', 
  		'smtp_port' => 465, 
  		'smtp_user' => ''//your gmail address, 
  		'smtp_pass' => ''//your gmail account password,
  		'wordwrap' =>TRUE, ); 

		$from_email = ""//your gmail address;
		
		$to_email = $this->input->post('email');

		$this->load->library('email', $config);
		 $this->email->initialize($config);

		$this->email->set_newline("\r\n");

		$this->email->from($from_email, "onyango");
		$this->email->to($to_email);
		$this->email->subject('Email test');
		$this->email->message('testing the email class.');

		//send mail
		if ($this->email->send()) {
			      echo "email sent"; 
		}
		else
		{
			show_error($this->email->print_debugger());
		}

		$this->load->view('email_form');
	}

}

?>