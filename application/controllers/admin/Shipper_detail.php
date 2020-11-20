<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Shipper_detail extends AdminController {



public function __construct() {
parent::__construct();

$this->load->model('Shipper_detail_model');
}

public function index()
{

$shipper_detail = $this->Shipper_detail_model->get_all_entries();
$data = array();
$data['shipper_detail'] = $shipper_detail;
$data['title'] = _l('shipper_details');

$this->load->view('admin/shipper_detail/manage', $data);

}

public function add()
{
    $data['employees']=$this->Shipper_detail_model->getEmployees();

    $data['drivers']=$this->Shipper_detail_model->getDrivers();

    $result = $this->Shipper_detail_model->get_generated_id();
    $id = (isset($result[0]['shipper_code']))?$result[0]['shipper_code']:'';
    if($id != '')

    {
        $memberid = $id;
        $num = preg_replace('/\D/', '',$memberid);
        $data['shipper_code'] = sprintf('Spr%s', str_pad($num + 1, "6", "0", STR_PAD_LEFT));
    }
    else
    {
        $data['shipper_code'] = 'Spr000001';
    }
    $data['countries'] = get_all_countries();
	$data['title'] = _l('Add Shipper');

    $this->load->view('admin/shipper_detail/add', $data);
}


public function edit($id){

    $data['employees']=$this->Shipper_detail_model->getEmployees();
    $data['drivers']=$this->Shipper_detail_model->getDrivers();
        // echo "edit";
        // exit;
        
       $data['data']=$this->Shipper_detail_model->edit_shipper_detail($id);
       $data['client']=$data['data'][0];
      
       $user_details = $this->Shipper_detail_model->get_user($id);
       $data['client']['user_name'] = $user_details[0]['user_name'];
       $data['client']['password'] = $user_details[0]['password'];
       $data['title']='Edit Shipper';
       $data['shipper_code'] = $data['client']['shipper_code'];
       $data['id']=$id;
       $data['countries'] = get_all_countries();
       
       $this->load->view('admin/shipper_detail/add', $data);
    //    $this->load->view('admin/employees/manage', $data);
    }

public function table()
{

 $this->app->get_table_data('shipper_detail');

}
public function rate_table()
{

   $this->app->get_table_data('shipper_detail_rate');

}

public function rate()
{

$data = array();
$data['title'] = _l('Shipper Rate');

$this->load->view('admin/shipper_detail/rate', $data);

}

public function do_upload()
{

    $image = "";
    $config['upload_path'] = 'uploads/shipper_detail';
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

    public function save_shipper()
    {

        $image = $this->do_upload();

        $authdata = array(
            // 'firstname' => $this->input->post('name', TRUE),
            // 'lastname' => $this->input->post('last_name', TRUE),
            'user_name' => $this->input->post('user_name', TRUE),
            'password' => md5($this->input->post('password', TRUE)),
            'userid' => ''
        );

        $shipperdata = array(
            'shipper_code' => $this->input->post('shipper_code', TRUE),
            'trade_name' => $this->input->post('trade_name', TRUE),
            'commercial_name' => $this->input->post('commercial_name', TRUE),
            'email' => $this->input->post('email', TRUE),
            'contact_1' => $this->input->post('contact_1', TRUE),
            'contact_2' => $this->input->post('contact_2', TRUE),
            'trade_licence_no' => $this->input->post('trade_licence_no', TRUE),
            'country_id' => $this->input->post('country_id', TRUE),
            'employee' => $this->input->post('employee', TRUE),
            'driver' => $this->input->post('driver', TRUE),
            'image' => $image,
            'user_status' => $this->input->post('user_status', TRUE),
        );

        $this->Shipper_detail_model->save_shippers($authdata, $shipperdata);

        redirect('admin/shipper_detail');
    }

    public function update_shipper()
    {

       

        $image = $this->do_upload();

        $authdata = array(

            // 'firstname' => $this->input->post('name', TRUE),
            // 'lastname' => $this->input->post('last_name', TRUE),
            'user_name' => $this->input->post('user_name', TRUE),
            'password' => md5($this->input->post('password', TRUE)),
            // 'userid' => ''
        );

        $shipperdata = array(
            'id' => $this->input->post('id', TRUE),
            'shipper_code' => $this->input->post('shipper_code', TRUE),
            'trade_name' => $this->input->post('trade_name', TRUE),
            'commercial_name' => $this->input->post('commercial_name', TRUE),
            'email' => $this->input->post('email', TRUE),
            'contact_1' => $this->input->post('contact_1', TRUE),
            'contact_2' => $this->input->post('contact_2', TRUE),
            'trade_licence_no' => $this->input->post('trade_licence_no', TRUE),
            'country_id' => $this->input->post('country_id', TRUE),
            'employee' => $this->input->post('employee', TRUE),
            'driver' => $this->input->post('driver', TRUE),
            'image' => $image,
            'user_status' => $this->input->post('user_status', TRUE), 
        );


        $this->Shipper_detail_model->update_shippers($authdata, $shipperdata);

        redirect('admin/shipper_detail');
    }

    public function delete($id){

        $this->Shipper_detail_model->delete_shipper_detail($id);

        redirect('admin/shipper_detail');
    }
}