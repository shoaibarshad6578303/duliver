<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Users_model extends App_Model
{
   
    public function __construct()
    {
         parent::__construct();
    }

    public function get()
    {
      
        $users = $this->db->get(db_prefix().'users');
        
        // print_r($users);
        // exit;

        if ($users->num_rows() > 0) {
            return $users->result();
        }
    }


    
}