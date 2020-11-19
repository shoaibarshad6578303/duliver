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
        $this->db->select('*')->from(db_prefix() . 'shipper_detail')->where("id.", $user_id);
        
        $query = $this->db->get();

        return $query->result_array();
        
    }

    public function edit_employees($id)
    {
        // print_r("working on");
        // exit;

        $this->db->select('*');
        $this->db->where('id',$id);
        $employees = $this->db->get(db_prefix() . 'shipper_detail');

        return $employees->result_array();
        // exit;


    }


}