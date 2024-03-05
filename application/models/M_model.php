<?php

defined('BASEPATH') or exit('No direct script access allowed');

class M_model extends CI_Model
{

  function get_data()
  {
    $query = $this->db->query("SELECT * FROM guru");
    return $query;
  }

  function post($table, $data)
	{
		$this->db->insert($table, $data);
		return $this->db->affected_rows();
	}

	function get_where($table, $whare)
	{
		$query = $this->db->query("SELECT * FROM $table WHERE nip = '$whare'");
		return $query;
	}

    function update($table, $data, $nip)
	{
		$this->db->where('nip', $nip);
		$this->db->update($table, $data);
		return $this->db->affected_rows();
	}

    function delete($nip)
	{
		$this->db->where('nip', $nip);
		$this->db->delete('guru');
		return $this->db->affected_rows();
	}

	// function get_levels()
	// {
	// 	$query = $this->db->query("SELECT * FROM level");
	// 	return $query;
	// }

	// function post_users($data)
	// {
	// 	$this->db->insert('users', $data);
	// 	return $this->db->affected_rows();
	// }

	// function update_users($data, $username)
	// {
	// 	$this->db->where('username', $username);
	// 	$this->db->update('users', $data);
	// 	return $this->db->affected_rows();
	// }

}
