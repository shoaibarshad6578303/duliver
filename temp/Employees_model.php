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

    public function get_generated_id()
    {
        $this->db->select('employee_code')->from(db_prefix() . 'employees')->where('employee_code !=','')->order_by("id", "desc")->limit(1);
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

    public function edit_employees($id)
    {
        // print_r("working on");
        // exit;

        $this->db->select('*');
        $this->db->where('id',$id);
        $employees = $this->db->get(db_prefix() . 'employees');

        return $employees->result_array();
        // exit;


    }

    public function save($employeedata, $authdate, $extras)
    {
        // print_r($employeedata);
        // exit;
        if($extras['edit'] == '1')
        {
            $this->db->where('id', $extras['id']);
            $this->db->update(db_prefix() . 'employees', $employeedata);
            $this->db->reset_query();
            $this->db->where('userid', $extras['id']);
            $this->db->update(db_prefix() . 'contacts', $authdate);

        }
        else
        {
            $this->db->insert(db_prefix() . 'employees', $employeedata);
            $this->db->insert(db_prefix() . 'contacts', $authdate);    
        }
        
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