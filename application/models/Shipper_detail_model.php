<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Shipper_detail_model extends App_Model
{

public function __construct()
{
parent::__construct();


}

public function get_all_entries()
{

$query = $this->db->get(db_prefix() . 'shipper_detail');


return $query->result();

}


}