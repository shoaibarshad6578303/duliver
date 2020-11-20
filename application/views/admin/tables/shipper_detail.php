<?php

defined('BASEPATH') or exit('No direct script access allowed');


$this->ci->db->query("SET sql_mode = ''");

$aColumns = [
   
    db_prefix().'shipper_detail.id as id',
    'shipper_code',
    'trade_name',
    'commercial_name',
    'contact_1',
    'trade_licence_no',
    'email',
    db_prefix().'shipper_detail.id as action',
];

$sIndexColumn = 'id';
$sTable       = db_prefix().'shipper_detail';
$where        = ['where deleted = 1'];
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

    $row[] = $aRow['shipper_code'];

    $row[] = $aRow['trade_name'];

    $row[] = $aRow['commercial_name'];

    $row[] = $aRow['contact_1'];

    $row[] = $aRow['trade_licence_no'];

    $row[] = $aRow['email'];
   
    $row[] = '<a class="btn btn-sm btn-primary" href="shipper_detail/delete/' . $aRow['id'] . '"> Delete </a> <a class="btn btn-sm btn-success ml-1" href="shipper_detail/edit/' . $aRow['id'] . '"> Edit </a>';
    
    
    $output['aaData'][] = $row;
}
