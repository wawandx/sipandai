<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Dashboard_model extends CI_Model
{
  function get_guru()
  {
    $query = $this->db->query("SELECT * FROM assesmen_guru GROUP By username");
    return $query;
  }
}
