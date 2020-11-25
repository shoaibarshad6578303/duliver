<?php

defined('BASEPATH') or exit('No direct script access allowed');


$this->ci->db->query("SET sql_mode = ''");

$aColumns = [
   
    db_prefix().'shipper_detail.id as id',
    'shipper_code',
    'trade_name',
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


    $row[] = $aRow['shipper_code'];

    $row[] = $aRow['trade_name'];

    $row[] = '<a id="' . $aRow['id'] . '" class="btn btn-primary rate_modal">Rate</a>';

   

    $output['aaData'][] = $row;
}
