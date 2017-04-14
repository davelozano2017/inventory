<?php 
defined('BASEPATH') or exit ('Access denied.');

class settings extends CI_Controller 
{
	public function index()
	{
		$this->load->view('template/header/header');
		$this->load->view('template/pages/admin/settings');
		$this->load->view('template/footer/footer');
	}
}