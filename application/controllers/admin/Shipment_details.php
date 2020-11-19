<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Shipment_details extends AdminController {



public function __construct() {
parent::__construct();

$this->load->model('shipment_details_model');
}

public function index()
{

$data['title'] = _l('shipment_details');

$this->load->view('admin/shipment_details/manage', $data);

}
public function place_order()
{

$data['title'] = _l('Place Order');

$this->load->view('admin/shipment_details/place_order', $data);

}

public function operation_dashboard()
{

$data['title'] = _l('Orders');

$this->load->view('admin/shipment_details/operation_dashboard', $data);

}
}