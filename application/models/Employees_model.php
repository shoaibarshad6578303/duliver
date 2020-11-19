<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Employees_model extends App_Model
{
   
    public function __construct()
    {
         parent::__construct();

    }

    public function get()
    {
        $this->db->select('*');
        $this->db->where('status',1);
        $employees = $this->db->get(db_prefix() . 'employees');

        // if ($employees->num_rows() > 0) {
        //     return $employees->result();
        // }

        // print_r($employees->result());
        // exit;
    }

    public function edit_employees($id)
    {
        // print_r("working on");
        // exit;

        $this->db->select('*');
        $this->db->where('id',$id);
        $employees = $this->db->get(db_prefix() . 'employees');

        $employees->result();
        // exit;


    }

    public function save($employeedata, $authdate)
    {
        // print_r($employeedata);
        // exit;

        $this->db->insert(db_prefix() . 'employees', $employeedata);
        $this->db->insert(db_prefix() . 'contacts', $authdate);

        // print_r($this->db->insert_id);
        // exit;
        return ;
        // $this->db->insert_id;
    }

    public function delete_employees($id)
    {

        $employeedata = array(
            'status'=>0
        );

        // print_r($id);
        // exit;
        
        $this->db->where('id', $id);
        $this->db->update(db_prefix().'employees', $employeedata);
         
        // return;
    
    }



    
}