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
        // echo "edit";
        // exit;

       $data['data']=$this->Shipper_detail_model->edit_shipper_detail($id);
       $data['client']=$data['data'][0];
       $user_details = $this->Shipper_detail_model->get_user($id);
       $data['client']['user_name'] = $user_details[0]['user_name'];
       $data['client']['password'] = $user_details[0]['password'];
       $data['title']='Edit Shipper';
       $data['shipper_code'] = $data['client']['shipper_code'];
        $data['countries'] = get_all_countries();

    //    print_r('sss');
    //    exit;
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

}