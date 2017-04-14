<?php 

defined('BASEPATH') or exit ('Access denied.');

class model extends CI_Model
{

	public function CreateUser($data)
	{

		$query = $this->db->insert('site_settings',$data);
		return $query;
	}

}