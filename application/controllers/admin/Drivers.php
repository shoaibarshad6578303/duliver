<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Drivers extends AdminController
{
    public function __construct() {
        parent::__construct();
        $this->load->model('drivers_model');  
         $this->load->model('employees_model');  
         	$this->load->helper('form');
    }

    public function index()
    {
        $data['title'] = 'drivers';
        $data['drivers']=$this->drivers_model->get();

        $result = $this->drivers_model->get_generated_id();
        $id = (isset($result[0]['driver_code']))?$result[0]['driver_code']:'';
        if($id != '')

        {
            $memberid = $id;
            $num = preg_replace('/\D/', '',$memberid);
            $data['driver_code'] = sprintf('DR%s', str_pad($num + 1, "4", "0", STR_PAD_LEFT));
        }
        else
        {
            $data['driver_code'] = 'DR0001';
        }
        $data['employees']=$this->drivers_model->getEmployees();
     
        $this->load->view('admin/drivers/manage', $data);
    }

    public function table()
    {
        $this->app->get_table_data('drivers');
    }


    public function save(){

        // $this->form_validation->set_rules('user_name', 'User Name', 'trim|required|valid_email|is_unique[tblcontacts.user_name]');
        // // $this->form_validation->set_rules('city', 'email', 'trim|required|valid_email|is_unique[tblcontacts.user_name]');
        // $this->form_validation->set_rules('password_confirm', 'password confirm', 'required|matches[password]');
        // $this->form_validation->set_error_delimiters('<div class="error">', '</div>');
       
        // if ($this->form_validation->run() == false) {
        //     redirect('admin/drivers');
        // }
        // else{
            $authdate = array(
                
                'firstname' => $this->input->post('name', TRUE),
                // 'lastname' => $this->input->post('last_name', TRUE),
                'user_name' => $this->input->post('user_name', TRUE),
                'password' => md5($this->input->post('password', TRUE)),
                'userid'=>''
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
        // }
       
      

    }

    public function delete($id){

        $this->drivers_model->delete_drivers($id);

        redirect('admin/drivers');
    }

    // public function edit($id){

    //     $data['driver']=$this->drivers_model->edit_drivers($id);
    //     $data['title']='Driver Edit';

    //     $this->load->view('admin/drivers/driver_edit', $data);
    // }

    public function edit(){

        $id=$this->input->post('id', TRUE);
     
        $data['data']=$this->drivers_model->edit_drivers($id);
        $data['client']=$data['data'][0];
        $user_details = $this->drivers_model->get_user($id);

       
        $data['client']['user_name'] = $user_details[0]['user_name'];
        // $data['client']['password'] = $user_details[0]['password'];
        // $data['client']['user_role'] = $user_details[0]['user_role'];
        $data['title']='employees';
        $data['employee_code'] = $data['client']['employee_code'];
       
        $this->load->view('admin/drivers/driver_edit', $data);
    }


    public function update(){
        
        $authdate = array(
            'firstname' => $this->input->post('name', TRUE),
            // 'lastname' => $this->input->post('last_name', TRUE),
            'user_name' => $this->input->post('user_name', TRUE),
            'password' => md5($this->input->post('password', TRUE)),
        );

        $driverdata=array(
            'driver_code'=>$this->input->post('driver_code', TRUE),
            // 'employee_code'=>$this->input->post('employee_code', TRUE),
            'name'=>$this->input->post('name', TRUE),
            'phone'=>$this->input->post('phone', TRUE),
            'city'=>$this->input->post('city', TRUE),
            'zone'=>$this->input->post('zone', TRUE),
            'id'=>$this->input->post('id', TRUE),
        );

        $this->drivers_model->update_drivers( $authdate,$driverdata );

        redirect('admin/drivers');
    }

    

}

