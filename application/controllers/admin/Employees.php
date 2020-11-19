<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Employees extends AdminController
{
    public function __construct()
    {
            parent::__construct();
            $this->load->helper(array('form', 'url'));
            $this->load->model('employees_model');  
    }
     
    public function index(){

        $data['employees']=$this->employees_model->get();
        $data['title']='employees';
       
        $this->load->view('admin/employees/manage', $data);
    }

    public function table()
    {
        $this->app->get_table_data('employees');
    }

    public function employee(){
        $data['title']='employees';
        $this->load->view('admin/employees/employee', $data);
    }

    public function save(){

    $image = $this->do_upload();

    $employeedata =array(
        'employee_code' => $this->input->post('employee_code', TRUE),
        'first_name' => $this->input->post('first_name', TRUE),
        'middle_name' => $this->input->post('middle_name', TRUE),
        'last_name' => $this->input->post('last_name', TRUE),
        'dob' => $this->input->post('dob', TRUE),
        'marital_status' => $this->input->post('marital_status', TRUE),
        'gender' => $this->input->post('gender', TRUE),
        'nationality_id' => $this->input->post('nationality_id', TRUE),
        'passport_number' => $this->input->post('passport_number', TRUE),
        'passport_expiry_date' => $this->input->post('passport_expiry_date', TRUE),
        'immigration_status' => $this->input->post('immigration_status', TRUE),
        'emirates_id' => $this->input->post('emirates_id', TRUE),
        'others_id' => $this->input->post('others_id', TRUE),
        'license_no' => $this->input->post('license_no', TRUE),

        'immigration_expiry_date' => $this->input->post('immigration_expiry_date', TRUE),
        'phone_number' => $this->input->post('phone_number', TRUE),
        'mobile_number' => $this->input->post('mobile_number', TRUE),
        'emergency_phone' => $this->input->post('emergency_phone', TRUE),
        'work_email' => $this->input->post('work_email', TRUE),
        'private_email' => $this->input->post('private_email', TRUE),
        'city' => $this->input->post('city', TRUE),
        'country_id' => $this->input->post('country_id', TRUE),
        'zip' => $this->input->post('zip', TRUE),
        'address_line_1' => $this->input->post('address_line_1', TRUE),
        'address_line_2' => $this->input->post('address_line_2', TRUE),
        'job_title_id' => $this->input->post('job_title_id', TRUE),
        'employeement_status' => $this->input->post('employeement_status', TRUE),
        'department_id' => $this->input->post('department_id', TRUE),
        

        'join_date' => $this->input->post('join_date', TRUE),
        'confirmation_date' => $this->input->post('confirmation_date', TRUE),
        'termination_date' => $this->input->post('termination_date', TRUE),
        'user_status' => $this->input->post('user_status', TRUE),
        'image' => $image,



    );
       

        
    $authdate = array(
        'firstname' => $this->input->post('first_name', TRUE),
        'lastname' => $this->input->post('last_name', TRUE),
        'email' => $this->input->post('user_name', TRUE),
        'password' => md5($this->input->post('password', TRUE)),
    );
        
        $this->load->model('employees_model');
        $data['employees']=$this->employees_model->save($employeedata, $authdate);

        $data['title']='employees';
        $this->load->view('admin/employees/employee', $data);
    }

    public  function do_upload()
    {
        $config['upload_path'] = 'assets/images/employees';
        $config['allowed_types'] = 'gif|jpg|png';
        $config['max_size'] = '100';
        $config['max_width']  = '1024';
        $config['max_height']  = '768';
        $config['overwrite'] = TRUE;
        $config['encrypt_name'] = FALSE;
        $config['remove_spaces'] = TRUE;
        if (!is_dir($config['upload_path'])) die("THE UPLOAD DIRECTORY DOES NOT EXIST");
        $this->load->library('upload', $config);
        if (!$this->upload->do_upload('image')) {
            // echo 'error';
        } else {

            return array('upload_data' => $this->upload->data());
        }
    }

    public function delete($id)
    {

       $this->employees_model->delete_employees($id);
      
        $this->session->set_flashdata('message', 'Record has been deleted');

        // print_r("abc");
        // exit;
        redirect('admin/employees');

    }

    public function edit($id){
        // echo "edit";
        // exit;

       $data['employees']=$this->employees_model->edit_employees($id);
       $data['title']='employees';

       $data['id']=$id;

    //    print_r('sss');
    //    exit;
        $this->load->view('admin/employees/employee', $data);
    //    $this->load->view('admin/employees/manage', $data);
    }

}