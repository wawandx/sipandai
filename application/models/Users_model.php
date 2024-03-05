<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Users_model extends CI_Model
{
  function get_users()
  {
    $query = $this->db->query("SELECT u.*, l.level FROM users u LEFT JOIN level l ON u.id_level = l.id");
    return $query;
  }

	function get_user($username)
	{
		$query = $this->db->query("SELECT u.*, l.level FROM users u LEFT JOIN level l ON u.id_level = l.id WHERE username = '$username'");
		return $query;
	}

	function get_levels()
	{
		$query = $this->db->query("SELECT * FROM level");
		return $query;
	}

	function post_users($data)
	{
		$this->db->insert('users', $data);
		return $this->db->affected_rows();
	}

	function update_users($data, $username)
	{
		$this->db->where('username', $username);
		$this->db->update('users', $data);
		return $this->db->affected_rows();
	}

	function delete_user($username)
	{
		$this->db->where('username', $username);
		$this->db->delete('users');
		return $this->db->affected_rows();
	}
}
