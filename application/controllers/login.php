<?php  
defined('BASEPATH') or exit ('Access denied.');

class login extends CI_Controller {

	public function index() 
	{
		$this->load->view('template/pages/login');
	}

}
