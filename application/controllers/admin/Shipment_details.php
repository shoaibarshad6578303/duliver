<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Shipment_details extends AdminController {



    public function __construct()
    {
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

        $data['shippers']=$this->shipment_details_model->getShippers();

        $result = $this->shipment_details_model->get_generated_id();
        $id = (isset($result[0]['shipper_code'])) ? $result[0]['tracking_number'] : '';
        if ($id != '') {
            $memberid = $id;
            $num = preg_replace('/\D/', '', $memberid);
            $number=8;
            $data['tracking_number'] = sprintf($number, str_pad($num + 1, "6", "0", STR_PAD_LEFT));
        } else {
            $data['tracking_number'] = '8000001';
        }

        $data['countries'] = get_all_countries();

        $this->load->view('admin/shipment_details/place_order', $data);
    }

    public function operation_dashboard()
    {
        $data['title'] = _l('Orders');

        $this->load->view('admin/shipment_details/operation_dashboard', $data);
    }


    public function save_order()
    {
        
        $orderdata = array(
            'shipper_ref' => $this->input->post('shipper_ref', TRUE),
            'reference_number' => $this->input->post('reference_number', TRUE),
            'order_date' => $this->input->post('order_date', TRUE),
            'service_type' => $this->input->post('service_type', TRUE),
            'shipper_code' => $this->input->post('shipper_code', TRUE),
            'shipper_name' => $this->input->post('shipper_name', TRUE),
            'shipper_phone' => $this->input->post('shipper_phone', TRUE),
            'package_type' => $this->input->post('package_type', TRUE),
            'reciever_name' => $this->input->post('reciever_name    ', TRUE),
            'mobile_1' => $this->input->post('mobile_1', TRUE),
            'mobile_2' => $this->input->post('mobile_2', TRUE),

            'cod' => $this->input->post('cod', TRUE),
            'instruction' => $this->input->post('instruction', TRUE),
            'description' => $this->input->post('description', TRUE),
            'country_id' => $this->input->post('country_id    ', TRUE),
            'city' => $this->input->post('city', TRUE),
            'area' => $this->input->post('area', TRUE),

            'street' => $this->input->post('street', TRUE),
            'no_of_piece' => $this->input->post('no_of_piece', TRUE),
            'cod_status' => $this->input->post('cod_status', TRUE),
            'cod_amount' => $this->input->post('cod_amount    ', TRUE),
            'tracking_number' => $this->input->post('tracking_number   ', TRUE),

        );

        $this->shipment_details_model->save_orders($orderdata);

        redirect('admin/shipment_details/place_order');
    }

    public function edit_order(){
       
        $data['title'] = _l('Edit Order');

        $data['shippers']=$this->shipment_details_model->getShippers();

        $data['countries'] = get_all_countries();
        
        $data['edit']="edit";

        $data["place_orders"]= $this->shipment_details_model->getOrders();
     
        $this->load->view('admin/shipment_details/place_order', $data);
        
       
    }

    public function update_status(){
       
        $data['title'] = _l('Update Status');

        // $data['shippers']=$this->shipment_details_model->getShippers();

        // $data['countries'] = get_all_countries();
        
        // $data['edit']="edit";
     
        $this->load->view('admin/shipment_details/update_status', $data);
        

    }

    public function send_sms(){
       
        $data['title'] = _l('Send Sms');
     
        $this->load->view('admin/shipment_details/send_sms', $data);
        
    }

    public function uploading_shipments(){
        $data['title'] = _l('Place Order By Uploading');
        $this->load->view('admin/shipment_details/uploading_shipments', $data);
    }



    
}