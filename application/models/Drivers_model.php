<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Drivers_model extends App_Model
{
   
    public function __construct()
    {
         parent::__construct();
    }

    public function get()
    {
        // echo "hello";
        // exit;

        // $this->db->select('u.*,d.*');
        // $this->db->from(db_prefix() . 'users u');
        // $this->db->join(db_prefix() . 'drivers d', 'u.id = d.user_id', 'inner');
        // $users = $this->db->get();
        //  echo db_prefix().'drivers';
        //  exit;

        $this->db->select('*');
        $this->db->where('status',1);
        $drivers = $this->db->get(db_prefix().'drivers');

        // print_r($drivers->result()); 
        // exit;
       
        if ($drivers->num_rows() > 0) {
            return $drivers->result();
        }
    }

    public function save_drivers($authdate, $driversdata){
        $this->db->insert(db_prefix() . 'drivers', $driversdata);
        $this->db->insert(db_prefix() . 'contacts', $authdate);

        return ;
    }


    public function delete_drivers($id){
       
        $driverdata = array(
            'status'=>0
        );

        $this->db->where('id', $id);
        $this->db->update(db_prefix().'drivers', $driverdata);

        return;

    }

    public function edit_drivers($id)
    {
        $this->db->select('*');
        $this->db->where('id',$id);
       return $this->db->get(db_prefix().'drivers');
    }

    
}