<?php 

defined('BASEPATH') or exit ('Access denied.');

class execute extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
	}

	public function insert()
	{
		$data = array(
			'page_title' => $this->input->post('page_title'),
			'site_title' => $this->input->post('site_title')
			);

		$result = $this->model->CreateUser($data);
		$this->session->set_flashdata('added','Successfully Added!');
		if($result)
		{
			redirect('settings','refresh');
		}
	}

	public function edit()
	{	

		$id = $this->uri->segment(3);
		$data['user_data'] = $this->model->GetId($id);
		$this->load->view('template/header/header');
		$this->load->view('template/pages/admin/edit',$data);
		$this->load->view('template/footer/footer');

	}

	public function update($id)
	{
		$data = array(
			'page_title' => $this->input->post('page_title'),
			'site_title' => $this->input->post('site_title')
			);
		$result = $this->model->UpdateUser($data,$id);
		$this->session->set_flashdata('updated','Successfully Updated!');
		if ($result)
		{
			redirect('settings','refresh');
		}
	}

	public function delete($id)
	{
		$result = $this->model->DeleteUser($id);
		if($result)
		{
			redirect('settings','refresh');
		}
	}


}