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

public function get_generated_id()
{
    $this->db->select('shipper_code')->from(db_prefix() . 'shipper_detail')->where('shipper_code !=','')->order_by("id", "desc")->limit(1);
    // $row = $this->db->select("employee_code")->where('employee_code !=','')->limit(1)->order_by('id',"ASC")->get(db_prefix() . 'employees')->row();

    $query = $this->db->get();

    return $query->result_array();
    
}


    public function get_user($user_id)
    {
        $this->db->select('*')->from(db_prefix() . 'contacts')->where("userid", $user_id);
        
        $query = $this->db->get();
        
        return $query->result_array();
        
    }

    public function edit_shipper_detail($id)
    {
        
        $this->db->select('*');
        $this->db->where('id',$id);
        $employees = $this->db->get(db_prefix() . 'shipper_detail');

        return $employees->result_array();
        // exit;

    }

    public function getEmployees(){

       $this->db->select("*")->where('employee_code !=','')->where('status !=',0)->order_by('id',"ASC")->from(db_prefix() . 'employees');
       $row = $this->db->get();
       
        return $row->result();
    }

    public function getDrivers(){

        $row = $this->db->select("*")->where('driver_code !=','' )->where('status !=',0)->order_by('id',"ASC")->get(db_prefix() . 'drivers');
        return $row->result();
    }

    public function delete_shipper_detail($id){
       
        $driverdata = array(
            'deleted'=>0
        );

        $this->db->where('id', $id);
        $this->db->update(db_prefix().'shipper_detail', $driverdata);

        $authdata = array(
            'deleted'=>0
        );

        $this->db->where('id', $id);
        $this->db->update(db_prefix().'contacts', $authdata );
        return;
    }

    //

    public function save_shippers($authdata, $shipperdata)
    {
        $this->db->insert(db_prefix() . 'shipper_detail', $shipperdata);
        $userid = $this->db->insert_id();
        $authdata['userid'] = $userid;

        // print_r( $authdata);exit;

        $this->db->insert(db_prefix() . 'contacts', $authdata);
        return;
    }

    public function update_shippers($authdata, $shipperdata)
    {
        $id = $shipperdata['id'];
        $this->db->where('id', $id);
        $this->db->update(db_prefix() . 'shipper_detail', $shipperdata);
        // $userid = $this->db->insert_id();
        // $authdate   ['userid'] = $userid;
        $this->db->where('id', $id);
        $this->db->update(db_prefix() . 'contacts', $authdata);
        return;
    }

    


    public function getShipperRates($id)
    {

        $row = $this->db->select("rate")->where('id =',$id )->get(db_prefix() . 'shipper_detail');
        return $row->result_array();


    }

    public function setShipperRates($id,$rates)
    {

        $update = array('rate' => json_encode($rates));
        $this->db->where('id', $id);
        $this->db->update(db_prefix() . 'shipper_detail',$update);
        return 'success';


    }
    


}