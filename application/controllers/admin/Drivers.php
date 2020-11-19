<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Drivers extends AdminController
{
    public function __construct() {
        parent::__construct();
        $this->load->model('drivers_model');  
    }

    public function index()
    {
        $data['title'] = 'drivers';
        $data['drivers']=$this->drivers_model->get();
         $this->load->view('admin/drivers/manage', $data);
    }

    public function table()
    {
        $this->app->get_table_data('drivers');
    }

    public function save(){

        // print_r('dirvers');
        // exit;

        $authdate = array(
            'firstname' => $this->input->post('name', TRUE),
            // 'lastname' => $this->input->post('last_name', TRUE),
            'email' => $this->input->post('user_name', TRUE),
            'password' => md5($this->input->post('password', TRUE)),
        );

        $driverdata=array(
            'driver_code'=>$this->input->post('driver_code', TRUE),
            'employee_code'=>$this->input->post('employee_code', TRUE),
            'name'=>$this->input->post('name', TRUE),
            'phone'=>$this->input->post('phone', TRUE),
            'city'=>$this->input->post('city', TRUE),
            'zone'=>$this->input->post('zone', TRUE),
        );

        $this->drivers_model->save_drivers( $authdate,$driverdata );

        redirect('admin/drivers');

    }

    public function delete($id){

        $this->drivers_model->delete_drivers($id);

        redirect('admin/drivers');
    }


    public function edit($id){

        $data['driver']=$this->drivers_model->edit_drivers($id);
        $data['title']='Driver Edit';

        $this->load->view('admin/drivers/driver_edit', $data);
    }

    

}

