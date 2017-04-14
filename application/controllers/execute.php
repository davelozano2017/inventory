<?php 

defined('BASEPATH') or exit ('Access denied.');

class execute extends CI_Controller
{

	public function insert()
	{
		$data = array(
			'page_title' => $this->input->post('page_title'),
			'site_title' => $this->input->post('site_title')
			);

		$result = $this->model->CreateUser($data);

		$this->session->set_flashdata('success', 'Successfully Saved!');
		if($result)
		{
			redirect('settings','refresh');
		}
	}


}