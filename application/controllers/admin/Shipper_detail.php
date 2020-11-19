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

$data = array();
$data['title'] = _l('Add Shipper');

$this->load->view('admin/shipper_detail/add', $data);

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