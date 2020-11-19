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
];

$sIndexColumn = 'id';
$sTable       = db_prefix().'shipper_detail';
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

    $row[] = $aRow['shipper_code'];

    $row[] = $aRow['trade_name'];

    $row[] = $aRow['commercial_name'];

    $row[] = $aRow['contact_1'];

    $row[] = $aRow['trade_licence_no'];

    $row[] = $aRow['email'];
   

    $output['aaData'][] = $row;
}
