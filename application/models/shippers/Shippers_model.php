<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Shippers_model extends App_Model
{
   
    public function __construct()
    {
         parent::__construct();
    }

    public function get_generated_id()
    {
        $this->db->select('tracking_number')->from(db_prefix() . 'shipment_detail_orders')->where('tracking_number !=', '')->order_by("id", "desc")->limit(1);

        $query = $this->db->get();

        return $query->result_array();
    }

    public function save_order($orderdata, $customFileds)
    {
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

        $orderdata['tracking_number'] = $data['tracking_number'];

        // =$this->db->insert(db_prefix() . 'shipment_detail_orders', $orderdata);


        ///

       
        $this->db->insert(db_prefix() . 'shipment_detail_orders', $orderdata);
        $userid = $this->db->insert_id();

        // inserting into custom fields table //
        
    
            $insertData= array(
              'uid'=>  $userid,
              'meta_key'=>$customFileds['value'][0],
              'meta_value'=>$customFileds['_sender_full_address'],

            );

            $this->db->insert(db_prefix() . 'custom_fields', $insertData);

            $insertData= array(
                'uid'=>  $userid,
                'meta_key'=>$customFileds['value'][0],
                'meta_value'=>$customFileds['_sender_full_address'],
  
              );
  
              $this->db->insert(db_prefix() . 'custom_fields', $insertData);

              $insertData= array(
                'uid'=>  $userid,
                'meta_key'=>$customFileds['value'][1],
                'meta_value'=>$customFileds['_cash'],
  
              );
  
              $this->db->insert(db_prefix() . 'custom_fields', $insertData);

              $insertData= array(
                'uid'=>  $userid,
                'meta_key'=>$customFileds['value'][2],
                'meta_value'=>$customFileds['_height'],
  
              );
  
              $this->db->insert(db_prefix() . 'custom_fields', $insertData);

              $insertData= array(
                'uid'=>  $userid,
                'meta_key'=>$customFileds['value'][3],
                'meta_value'=>$customFileds['_width'],
  
              );
  
              $this->db->insert(db_prefix() . 'custom_fields', $insertData);

              $insertData= array(
                'uid'=>  $userid,
                'meta_key'=>$customFileds['value'][4],
                'meta_value'=>$customFileds['_actualWeight'],
  
              );
  
              $this->db->insert(db_prefix() . 'custom_fields', $insertData);

              $insertData= array(
                'uid'=>  $userid,
                'meta_key'=>$customFileds['value'][5],
                'meta_value'=>$customFileds['_chargeable'],
  
              );
  
              $this->db->insert(db_prefix() . 'custom_fields', $insertData);
       


    }

}