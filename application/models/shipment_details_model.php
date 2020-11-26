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

    public function getOrders($id){
        // $row=$this->db->get(db_prefix() . 'shipment_detail_orders');
        // return $row->result();

        // print_r("hello");exit;

        $this->db->select('*')->from(db_prefix() . 'shipment_detail_orders')->where("tracking_number", $id);
        
        $query = $this->db->get();
        
        return $query->result_array();

    }


   

    public function get_order_id($id){
        $this->db->select('id')->from(db_prefix() . 'shipment_detail_orders')->where("tracking_number", $id);
        
        $query = $this->db->get();

        // print_r($query->result_array());
        // exit;
        return $query->result_array();
    }

    // public function all_orders(){

    //     $this->db->select('*')->from(db_prefix() . 'shipment_detail_orders');
    //     $query = $this->db->get();
    //     return $query->result();

    // }



    public function update_orders($orderdata)
    {
        $id = $orderdata['id'];
        $this->db->where('id', $id);
        $this->db->update(db_prefix() . 'shipment_detail_orders', $orderdata);
       
        return;
    }

    public function get_generated_id()
    {
        $this->db->select('tracking_number')->from(db_prefix() . 'shipment_detail_orders')->where('tracking_number !=', '')->order_by("id", "desc")->limit(1);

        $query = $this->db->get();

        return $query->result_array();
    }

    public function get_update_status_data($id)
    {

     
      
        $query =$this->db->select('*')->from(db_prefix() . 'shipment_detail_orders')->where("tracking_number", $id)->get();

        // $query = $this->db->get();
        return $query->result();
    }
     
    

    public function update_status_again($orderdata)
    {
        $id = $orderdata['id'];
        $this->db->where('id', $id);
        $this->db->update(db_prefix() . 'shipment_detail_orders', $orderdata);
        return;
    }

    public function save_orders_array( $orderdata)
    {
      


        foreach($orderdata as $item){
           
            $result = $this->get_generated_id();

            $id = (isset($result[0]['tracking_number'])) ? $result[0]['tracking_number'] : '';
            if ($id != '') {
                $memberid = $id;
                $num = preg_replace('/\D/', '', $memberid);
                $number=8;
                $data['tracking_number'] = sprintf('%s', str_pad($num + 1, "6", "0", STR_PAD_LEFT));
            } else {
                $data['tracking_number'] = '8000001';
            }

            $item['tracking_number'] = $data['tracking_number'];

            $this->db->insert(db_prefix() . 'shipment_detail_orders', $item);
        }
      
        return;
    }

}