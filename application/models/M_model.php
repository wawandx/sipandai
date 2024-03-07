<?php

defined('BASEPATH') or exit('No direct script access allowed');

class M_model extends CI_Model
{

  function get_data($table)
  {
    $query = $this->db->query("SELECT * FROM $table");
    return $query;
  }

  function get_data_asc($table, $order_by)
  {
    $query = $this->db->query("SELECT * FROM $table ORDER BY $order_by ASC");
    return $query;
  }

  function get_data_whare($table)
  {
    $query = $this->db->query("SELECT * FROM $table WHERE id_level = '3'");
    return $query;
  }

  function post($table, $data)
	{
		$this->db->insert($table, $data);
		return $this->db->affected_rows();
	}

	function get_where($table, $whare)
	{
		$query = $this->db->query("SELECT * FROM $table WHERE id = '$whare'");
		return $query;
	}

    function update($table, $data, $id)
	{
		$this->db->where('id', $id);
		$this->db->update($table, $data);
		return $this->db->affected_rows();
	}

    function delete($where, $table)
	{
		$this->db->where('id', $where);
		$this->db->delete($table);
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
