<?php

defined('BASEPATH') or exit('No direct script access allowed');

$this->ci->db->query("SET sql_mode = ''");

$aColumns = [
    
    db_prefix().'shipment_detail_orders.id as id',
    'tracking_number',
    'shipper_ref',
    'order_date',
    'shipper_name',
    'mobile_1',
    'reciever_name',
    'status',
  
];

$sIndexColumn = 'id';
$sTable       = db_prefix().'shipment_detail_orders';
$where        = [];
// Add blank where all filter can be stored
$filter = [];
$join = [];

$result = data_tables_init($aColumns, $sIndexColumn, $sTable, $join, $where);

$output  = $result['output'];
$rResult = $result['rResult'];

foreach ($rResult as $aRow) {
    $row = [];

    // Bulk actions
    $row[] = '<div class="checkbox"><input type="checkbox" value="' . $aRow['id'] . '"><label></label></div>';
    // User id

    $row[] = $aRow['tracking_number'];

    $row[] = $aRow['shipper_ref'];

    $row[] = $aRow['shipper_name'];

    $row[] = 'null';

    $row[] = 'null';

    $row[] = $aRow['reciever_name'];

    $row[] = 'null';

    $row[] = 'null';

    // $status="";

    // if($aRow['status']==1){
    //     $status="To be ready";
    // } 

    // $row[] =  $status;
   
    $output['aaData'][] = $row;
}

