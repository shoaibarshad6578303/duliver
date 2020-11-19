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

    public function getEmployees(){

        $row = $this->db->select("id,employee_code,first_name,last_name,middle_name,phone_number")->where('employee_code !=','')->order_by('id',"ASC")->get(db_prefix() . 'employees');
        return $row->result();
    }

    public function get_generated_id()
    {
        $this->db->select('driver_code')->from(db_prefix() . 'drivers')->where('driver_code !=','')->order_by("id", "desc")->limit(1);
        // $row = $this->db->select("employee_code")->where('employee_code !=','')->limit(1)->order_by('id',"ASC")->get(db_prefix() . 'employees')->row();
        $query = $this->db->get();

        return $query->result_array();
        
    }

    public function save_drivers($authdate, $driversdata)
    {
       
      
        $this->db->insert(db_prefix() . 'drivers', $driversdata);
        $userid = $this->db->insert_id();
        $authdate   ['userid'] = $userid;
        $this->db->insert(db_prefix() . 'contacts', $authdate);
        return;
    }


    public function delete_drivers($id){
       
        $driverdata = array(
            'status'=>0
        );

        $this->db->where('id', $id);
        $this->db->update(db_prefix().'drivers', $driverdata);

        $authdata = array(
            'deleted'=>0
        );

        $this->db->where('id', $id);
        $this->db->update(db_prefix().'contacts', $authdata );
        return;

    }

    public function get_user($user_id)
    {
        $this->db->select('*')->from(db_prefix() . 'contacts')->where("userid", $user_id);
        
        $query = $this->db->get();

       

        return $query->result_array();
        
    }

    public function update_drivers($authdate, $driversdata){

        $id=$driversdata['id'];
        $this->db->where('id', $id);
        $this->db->update(db_prefix().'drivers', $driversdata);

        $this->db->where('userid', $id);
        $this->db->update(db_prefix().'contacts', $authdate);
        return;
         
    }

    // public function edit_drivers($id)
    // {
    //     $this->db->select('*');
    //     $this->db->where('id',$id);
    //    return $this->db->get(db_prefix().'drivers');
    // }

    public function edit_drivers($id)
    {
        $this->db->select('*');
        $this->db->where('id',$id);
        $driver=$this->db->get(db_prefix().'drivers');
        // print_r($driver);
        // exit;
    //    if ($driver->num_rows() > 0) {

        return $driver->result_array();
    //   }
    }

    
}