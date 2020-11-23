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
        // print_r($orderdata);
        // exit();
        $this->db->insert(db_prefix() . 'shipment_detail_orders', $orderdata);
        
        return;
    }

    public function getOrders(){
        $row=$this->db->get(db_prefix() . 'shipment_detail_orders');
        return $row->result();

    }

    public function get_generated_id()
    {
        $this->db->select('tracking_number')->from(db_prefix() . 'shipment_detail_orders')->where('tracking_number !=', '')->order_by("id", "desc")->limit(1);

        $query = $this->db->get();

        return $query->result_array();
    }


}