<?php

defined('BASEPATH') or exit('No direct script access allowed');

use app\services\ValidatesContact;

class Shippers extends ClientsController
{
    /**
     * @since  2.3.3
     */
    use ValidatesContact;

    public function __construct()
    {
        parent::__construct();

        hooks()->do_action('after_clients_area_init', $this);
        $this->load->model('shippers/shippers_model');
    }

    public function index()
    {

        $data['is_home'] = true;
        $this->load->model('reports_model');
        $data['payments_years'] = $this->reports_model->get_distinct_customer_invoices_years();

        $data['project_statuses'] = $this->projects_model->get_project_statuses();
        $data['title']            = get_company_name(get_client_user_id());

         
        
        $data['countries'] = get_all_countries();

        // print_r( $data['countries']);exit;

        $this->data($data);
        $this->view('shippers/home');
        $this->layout();
    }

    public function save_order()
    {

    //    $data=$this->input->post();
    //    print_r($data);exit;


    //    $customFields =   array(
    //       '_sender_full_address'=> $this->input->post('_sender_full_address', TRUE),
    //       '_cash'=> $this->input->post('_cash', TRUE),
    //       '_width'=> $this->input->post('_width', TRUE),
    //       '_height'=> $this->input->post('_height', TRUE),
    //       '_actualWeight'=> $this->input->post('_actualWeight', TRUE),
    //       '_chargeable'=> $this->input->post('_chargeable', TRUE),
    //       '_uid'=>''
    //    );

       $customFields['_sender_full_address'] = $this->input->post('_sender_full_address', TRUE);
       $customFields['value'][0] = '_sender_full_address';

       $customFields['_cash'] = $this->input->post('_cash', TRUE);
       $customFields['value'][1] = '_cash';
       $customFields['_height'] = $this->input->post('_height', TRUE);
       $customFields['value'][2] = '_height';

       $customFields['_width'] = $this->input->post('_width', TRUE);
       $customFields['value'][3] = '_width';
       
       $customFields['_actualWeight'] = $this->input->post('_actualWeight', TRUE);
       $customFields['value'][4] = '_actualWeight';

       $customFields['_chargeable'] = $this->input->post('_chargeable', TRUE);
       $customFields['value'][5] = '_chargeable';


    //    $customFields['_uid'] = '';


        $orderdata = array(
            'shipper_ref' => $this->input->post('shipper_ref', TRUE),
            // 'reference_number' => $this->input->post('reference_number', TRUE),
            'order_date' => $this->input->post('order_date', TRUE),
            'service_type' => $this->input->post('service_type', TRUE),
            // 'shipper_code' => $this->input->post('shipper_code', TRUE),
            'shipper_name' => $this->input->post('shipper_name', TRUE),
            'shipper_phone' => $this->input->post('shipper_phone', TRUE),
            'package_type' => $this->input->post('package_type', TRUE),
            'reciever_name' => $this->input->post('reciever_name', TRUE),
            'mobile_1' => $this->input->post('mobile_1', TRUE),
            'mobile_2' => $this->input->post('mobile_2', TRUE),

            'cod' => $this->input->post('cod', TRUE),
            'instruction' => $this->input->post('instruction', TRUE),
            'description' => $this->input->post('description', TRUE),
            'country_id' => $this->input->post('country_id', TRUE),
            'city' => $this->input->post('city', TRUE),
            'area' => $this->input->post('area', TRUE),

            'street' => $this->input->post('street', TRUE),
            // 'no_of_piece' => $this->input->post('no_of_piece', TRUE),
            // 'cod_status' => $this->input->post('cod_status', TRUE),
            'cod_amount' => $this->input->post('cod_amount', TRUE),
            'tracking_number' =>   '',
        );

        $this->shippers_model->save_order($orderdata,  $customFields );

        // print_r("value is inserted");
        // exit;

        redirect('shippers/index');


    }

    public function shipments()
    {
        $data['title'] = _l('Orders');
        $this->data($data);
        $this->view('shippers/shipments');
        $this->layout();
    }
    
    public function upload_orders()
    {
        $data['title'] = _l('Upload Orders');
        $this->data($data);
        $this->view('shippers/upload_orders');
        $this->layout();
    }
}