<?php defined('BASEPATH') or exit('No direct script access allowed');

class Employees extends AdminController
{
    public function __construct()
    {
        parent::__construct();
        $this->load->helper(array('form', 'url'));
        $this->load->model('employees_model');
    }

    public function index()
    {

        $data['employees'] = $this->employees_model->get();
        $data['title'] = 'employees';

        $this->load->view('admin/employees/manage', $data);
    }

    public function table()
    {
        $this->app->get_table_data('employees');
    }


    public function employee()
    {
        $data['title'] = 'employees';
        $result = $this->employees_model->get_generated_id();
        $id = (isset($result[0]['employee_code'])) ? $result[0]['employee_code'] : '';
        if ($id != '') {
            $memberid = $id;
            $num = preg_replace('/\D/', '', $memberid);
            $data['employee_code'] = sprintf('Emp%s', str_pad($num + 1, "6", "0", STR_PAD_LEFT));
        } else {
            $data['employee_code'] = 'Emp000001';
        }
        $data['countries'] = get_all_countries();
    
        $this->load->view('admin/employees/employee', $data);
    }

    public function save()
    {
        $image = $this->do_upload();

        $extras = array(
            'edit' => $this->input->post('edit', TRUE),
            'id' => $this->input->post('user_id', TRUE),
        );

        $employeedata = array(
            'employee_code' => $this->input->post('employee_code_orginal', TRUE),
            'first_name' => $this->input->post('frist_name', TRUE),
            'middle_name' => $this->input->post('middle_name', TRUE),
            'last_name' => $this->input->post('last_name', TRUE),
            'dob' => $this->input->post('dob', TRUE),
            'marital_status' => $this->input->post('marital_status', TRUE),
            'gender' => $this->input->post('gender', TRUE),
            'nationality_id' => $this->input->post('nationality_id', TRUE),
            'passport_number' => $this->input->post('passport_number', TRUE),
            'passport_expiry_date' => $this->input->post('passport_expiry_date', TRUE),
            'immigration_status' => $this->input->post('immigration_status', TRUE),
            'emirates_id' => $this->input->post('emirate_id', TRUE),
            'others_id' => $this->input->post('other_id', TRUE),
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

        if ($employeedata['image'] == "") unset($employeedata['image']);

        $authdate = array(
            'userid' => $this->input->post('user_id', TRUE),
            'firstname' => $this->input->post('frist_name', TRUE),
            'lastname' => $this->input->post('last_name', TRUE),
            'user_name' => $this->input->post('user_name', TRUE),
            'user_role' => $this->input->post('user_role', TRUE),
            'password' => md5($this->input->post('password', TRUE)),
        );
        $data['employees'] = $this->employees_model->save($employeedata, $authdate, $extras);

        if ($extras['edit'] == '1') {
            redirect('admin/employees/edit/' . $extras['id'], 'refresh');
        } else {
            redirect('admin/employees', 'refresh');
        }
    }

    public function do_upload()
    {

        $image = "";
        $config['upload_path'] = 'uploads/employees';
        $config['allowed_types'] = 'gif|jpg|png';
        // $config['max_size'] = '100';
        // $config['max_width'] = '1024';
        // $config['max_height'] = '768';
        $config['overwrite'] = TRUE;
        $config['encrypt_name'] = FALSE;
        $config['remove_spaces'] = TRUE;
        if (!is_dir($config['upload_path'])) mkdir( $config['upload_path']);
        $this->load->library('upload', $config);
        if (!$this->upload->do_upload('image')) {
            //
        } else {

            $image = array('upload_data' => $this->upload->data());
            return base_url($config['upload_path'] . '/' . $image['upload_data']['file_name']);
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

    public function edit($id)
    {
        // echo "edit";
        // exit;

        $data['data'] = $this->employees_model->edit_employees($id);
        $data['client'] = $data['data'][0];
        $user_details = $this->employees_model->get_user($id);
        $data['client']['user_name'] = $user_details[0]['user_name'];
        $data['client']['password'] = $user_details[0]['password'];
        $data['client']['user_role'] = $user_details[0]['user_role'];
        $data['title'] = 'employees';
        $data['employee_code'] = $data['client']['employee_code'];
        $data['countries'] = get_all_countries();

        // print_r('sss');
        // exit;
        $this->load->view('admin/employees/employee', $data);
        // $this->load->view('admin/employees/manage', $data);
    }
}
