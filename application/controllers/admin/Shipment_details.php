<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Shipment_details extends AdminController {



    public function __construct()
    {
        parent::__construct();

        $this->load->helper(array('form', 'url'));
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

        $id = (isset($result[0]['tracking_number'])) ? $result[0]['tracking_number'] : '';
        if ($id != '') {
            $memberid = $id;
            $num = preg_replace('/\D/', '', $memberid);
            $number=8;
            $data['tracking_number'] = sprintf('%s', str_pad($num + 1, "6", "0", STR_PAD_LEFT));
        } else {
            $data['tracking_number'] = '8000001';
        }

        $data['countries'] = get_all_countries();

        $this->load->view('admin/shipment_details/place_order', $data);
    }

    
    public function table()
    {
       
        $this->app->get_table_data('dashboard_operations');
    }

    public function shipment_update_status()
    {
        $this->app->get_table_data('shipment_update_status');
    }



    public function operation_dashboard()
    {
        $data['title'] = _l('Orders');

        // $data['orders']= $this->shipment_details_model->all_orders();

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
            'no_of_piece' => $this->input->post('no_of_piece', TRUE),
            'cod_status' => $this->input->post('cod_status', TRUE),
            'cod_amount' => $this->input->post('cod_amount', TRUE),
            'tracking_number' => $this->input->post('tracking_number', TRUE),

        );

        $this->shipment_details_model->save_orders($orderdata);

        redirect('admin/shipment_details/place_order');
    }

    public function edit_order(){
       
        $data['title'] = _l('Edit Order');

        $data['shippers']=$this->shipment_details_model->getShippers();

        $data['countries'] = get_all_countries();
        
        $data['edit']="edit";

        // $data["place_orders"]= $this->shipment_details_model->getOrders();

        // print_r($data["place_orders"]);exit;
     
        $this->load->view('admin/shipment_details/place_order', $data);
 
    }

    public function get_order_data(){

        $data['title'] = _l('Edit Order');

        $id = $this->input->post('tracking_number', TRUE);

        $getId=$this->shipment_details_model->get_order_id( $id)[0];

        $data['edit']="edit";

        $data['idd']= $getId['id'];
        $data['id']=$id;


        $data["client"]= $this->shipment_details_model->getOrders($id)[0];
        
        //  print_r(  $data["client"]);exit;
        $data['shippers']=$this->shipment_details_model->getShippers();

        $data['countries'] = get_all_countries();
     
        $this->load->view('admin/shipment_details/place_order', $data);

    }

    public function update_order(){
      

        $orderdata = array(
            'id' => $this->input->post('id', TRUE),

            'shipper_ref' => $this->input->post('shipper_ref', TRUE),
            'reference_number' => $this->input->post('reference_number', TRUE),
            'order_date' => $this->input->post('order_date', TRUE),
            'service_type' => $this->input->post('service_type', TRUE),
            'shipper_code' => $this->input->post('shipper_code', TRUE),
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
            'no_of_piece' => $this->input->post('no_of_piece', TRUE),
            'cod_status' => $this->input->post('cod_status', TRUE),
            'cod_amount' => $this->input->post('cod_amount', TRUE),
            // 'tracking_number' => $this->input->post('tracking_number', TRUE),

        );

        $this->shipment_details_model->update_orders($orderdata);

        redirect('admin/shipment_details/place_order');
        // $orderdata =  $this->input->post();

        // // print_r( $orderdata );exit;

        // $this->Shipper_detail_model->update_orders( $orderdata);
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

        $data['shippers']=$this->shipment_details_model->getShippers();

        // print_r($data['shippers']);
        // exit();

        $this->load->view('admin/shipment_details/uploading_shipments', $data);
    }


    public function get_update_status_data(){

        $id = $this->input->post('id', TRUE);

        
        $data["orders"]= $this->shipment_details_model->get_update_status_data($id);


        $this->load->view('admin/shipment_details/update_status_table', $data);
    }

    public function update_status_again()
    {
       

        $updateData = $this->input->post();
        $this->shipment_details_model->update_status_again($updateData);

        redirect('admin/shipment_details/update_status');
    }

    public function do_upload()
    {

        $image = "";
        $config['upload_path'] = 'uploads/file';
        $config['allowed_types'] = 'csv';
        // $config['max_size'] = '100';
        // $config['max_width'] = '1024';
        // $config['max_height'] = '768';
        $config['overwrite'] = TRUE;
        $config['encrypt_name'] = FALSE;
        $config['remove_spaces'] = TRUE;
        if (!is_dir($config['upload_path'])) mkdir( $config['upload_path']);
        $this->load->library('upload', $config);
        if (!$this->upload->do_upload('image')) {
           echo $this->upload->display_errors();
        } else {

            $image = array('upload_data' => $this->upload->data());
            return base_url($config['upload_path'] . '/' . $image['upload_data']['file_name']);
        }
    }

    public function save_import_file(){

        $image = $this->do_upload();
        
        $myfile = fopen( $image , "r") or die("Unable to open file!");
     
        $place_orders=[];
        $i=0;
        while (($line = fgetcsv($myfile)) !== FALSE) {
          
            
            if($i>0){
                $place_orders['shipper_name'][]=$line[0];
                $place_orders['shipper_phone'][]=$line[1];
                $place_orders['reciever_name'][]=$line[2];
                $place_orders['description'][]=$line[3];
                $place_orders['instruction'][]=$line[4];
                $place_orders['no_of_pieces'][]= $line[5];
                $place_orders['amount'] []= $line[6];
            }
            $i++;
            // print_r($line[0]);
         }
         
      

        fclose($myfile);
        
        $data['place_orders']= $place_orders;

        // echo count($data['place_orders']['shipper_name']);
        // exit;

        // print_r( $data['place_orders']['shipper_name'][0]);
        // exit;

        

        $view=$this->load->view('admin/shipment_details/uploading_shipment_table',$data,true);
        print_r($view);exit;
        // return json_encode($place_orders);
        // redirect('admin/shipment_details/update_status');
    }

   
    // public function temp(){
    //     $image = $this->do_upload();
    //     echo $image;
    //     print_r($image); print_r("hello");exit;
    // }


    
}