<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Report_model extends CI_Model
{
  function get_guru()
  {
    $query = $this->db->query("SELECT u.nip, u.fullname, u.no_telp, u.alamat, g.* FROM users u LEFT JOIN guru g on u.username=g.username WHERE u.id_level = 2");
    return $query;
  }

  function get_asesmen()
  {
    $query = $this->db->query("SELECT a.*, u.fullname from assesmen_guru a LEFT JOIN users u on a.username=u.username WHERE a.status='disetujui' GROUP by a.username");
    return $query;
  }

	function get_asesmen_by_username($username){
    $query = $this->db->query("SELECT ag.*,a.komponen, a.indikator FROM assesmen_guru ag LEFT JOIN assesmen a ON ag.id_assesmen=a.id WHERE ag.username='$username'");
    return $query;
	}
	
	function get_asesmen_guru_ada($username)
	{
    $query = $this->db->query("SELECT * FROM assesmen_guru WHERE username='$username' AND analisis='ada' AND status='disetujui'");
    return $query;
	}
}
