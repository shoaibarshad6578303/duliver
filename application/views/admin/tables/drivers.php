<?php

defined('BASEPATH') or exit('No direct script access allowed');

$this->ci->db->query("SET sql_mode = ''");

$aColumns = [
    
    db_prefix().'drivers.id as id',
    'name',
    'driver_code',
    'employee_code',
    'phone',
    db_prefix().'drivers.name as username',
    db_prefix().'drivers.id as action',
    
];

$sIndexColumn = 'id';
$sTable       = db_prefix().'drivers';
$where        = ['where status=1'];
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

    $row[] = $aRow['name'];

    $row[] = $aRow['driver_code'];

    $row[] = $aRow['employee_code'];

    $row[] = $aRow['phone'];

    $row[] = $aRow['username'];

    $row[] = '<a class="btn btn-sm btn-primary" href="drivers/delete/' . $aRow['id'] . '"> Delete </a>  <button type="button" data-student_id="'.$aRow['id'].'"  class="btn btn-success edit-driver" >Edit</button>';

    $output['aaData'][] = $row;
}

