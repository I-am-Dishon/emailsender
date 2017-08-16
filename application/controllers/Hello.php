<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
*  Hello
*/
class Hello extends CI_Controller
{
	
	public function index()
	{
		$this->load->view('firstview');
	}
}
?>