<?php

defined('BASEPATH') or exit('No direct script access allowed');

class shipment_details_model extends App_Model
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

    public function getShippers()
    {
        $row = $this->db->select("*")->where('shipper_code !=', '')->where('deleted =',1)->order_by('id', "ASC")->get(db_prefix() . 'shipper_detail');
        return $row->result();
    }


    public function save_orders( $orderdata)
    {
        $this->db->insert(db_prefix() . 'shipment_detail_orders', $orderdata);
        
        return;
    }


}