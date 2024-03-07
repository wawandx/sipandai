<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Modul_model extends CI_Model
{
  function get_modul()
  {
    $query = $this->db->query("SELECT * FROM modul");
    return $query;
  }

	function get_modul_one($id)
	{
    $query = $this->db->query("SELECT * FROM modul WHERE id='$id'");
    return $query;
	}

	function post_modul($data)
	{
		$this->db->insert('modul', $data);
		return $this->db->affected_rows();
	}

	function update_modul($data, $id)
	{
		$this->db->where('id', $id);
		$this->db->update('modul', $data);
		return $this->db->affected_rows();
	}

	function delete_modul($id)
	{
		$this->db->where('id', $id);
		$this->db->delete('modul');
		return $this->db->affected_rows();
	}
}
