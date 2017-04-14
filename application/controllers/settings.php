<?php 
defined('BASEPATH') or exit ('Access denied.');

class settings extends CI_Controller 
{
	public function __construct()
	{
		parent::__construct();
	}



	public function index()
	{	
		$data['result'] = $this->model->getAllUsers();
		$this->load->view('template/header/header');
		$this->load->view('template/pages/admin/settings',$data);
		$this->load->view('template/footer/footer');
		$this->load->view('template/footer/notify_delete');
	}
}