<?php

defined('BASEPATH') or exit('No direct script access allowed');

class M_model extends CI_Model
{

  function get_data($table)
  {
    $query = $this->db->query("SELECT * FROM $table");
    return $query;
  }

  function get_join($table, $join, $on_condition)
  {
	$query = $this->db->query("SELECT * FROM $table JOIN $join ON $on_condition");
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

	function get_where_biodata($username)
	{
		$query = $this->db->query("SELECT u.*, g.* FROM users u join guru g ON u.username=g.username WHERE u.username = '$username'");
		return $query;
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

	function update_biodata($table, $data, $username)
	{
		$this->db->where('username', $username);
		$this->db->update($table, $data);
		return $this->db->affected_rows();
	}

    function delete($where, $table)
	{
		$this->db->where('id', $where);
		$this->db->delete($table);
		return $this->db->affected_rows();
	}

}
