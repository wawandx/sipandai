<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Asesmen_model extends CI_Model
{
  function get_asesmen()
  {
    $query = $this->db->query("SELECT * FROM assesmen");
    return $query;
  }

  function get_guru()
	{
    $query = $this->db->query("SELECT username FROM users WHERE id_level='2'");
    return $query;
	}

	function get_asesmen_guru($username)
	{
    $query = $this->db->query("SELECT ag.*,a.komponen, a.indikator FROM assesmen_guru ag LEFT JOIN assesmen a ON ag.id_assesmen=a.id WHERE ag.username='$username'");
    return $query;
	}

	function get_asesmen_guru_ada($username)
	{
    $query = $this->db->query("SELECT * FROM assesmen_guru WHERE username='$username' AND analisis='ada' AND status='disetujui'");
    return $query;
	}

	function get_asesmen_guru_menunggu_kepsek($username)
	{
    $query = $this->db->query("SELECT * FROM assesmen_guru WHERE username='$username' AND status='menunggu kepsek'");
    return $query;
	}

	function get_asesmen_guru_menunggu_assesor($username)
	{
    $query = $this->db->query("SELECT * FROM assesmen_guru WHERE username='$username' AND status='menunggu assesor'");
    return $query;
	}

	function get_asesmen_guru_grup()
	{
    $query = $this->db->query("SELECT ag.*,a.komponen, a.indikator, u.fullname FROM assesmen_guru ag LEFT JOIN assesmen a ON ag.id_assesmen=a.id LEFT JOIN users u ON ag.username=u.username GROUP BY ag.username");
    return $query;
	}

	function post_assesmen_guru($data)
	{
		$this->db->insert('assesmen_guru', $data);
		return $this->db->affected_rows();
	}

	function update_assesmen_guru($data, $id)
	{
		$this->db->where('id', $id);
		$this->db->update('assesmen_guru', $data);
		return $this->db->affected_rows();
	}

}
