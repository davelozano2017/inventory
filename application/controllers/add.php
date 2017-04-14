<?php 
defined('BASEPATH') or exit ('Access denied.');

class add extends CI_Controller
{
	public function index()
	{
		$this->load->view('template/header/header');
		$this->load->view('template/pages/admin/add-administrator');
		$this->load->view('template/footer/footer');
	}
}