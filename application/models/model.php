<?php 

defined('BASEPATH') or exit ('Access denied.');

class model extends CI_Model
{	

	public function GetAllUsers() 
	{
		$query = $this->db->get('site_settings');
		return $query->result();
	}

	public function GetId($id)
	{
		$query = $this->db->get_where('site_settings', array('id' =>$id));
		return $query->row_array();
	}

	public function CreateUser($data)
	{
		$query = $this->db->insert('site_settings',$data);
		return $query;
	}

	public function UpdateUser($data,$id)
	{
		$this->db->where(['id' => $id]);
		$query = $this->db->update('site_settings',$data);
		return $query;
	}

	public function DeleteUser($id)
	{
		$this->db->where(['id' => $id]);
		$query = $this->db->delete('site_settings');
		return $query;
	}

}