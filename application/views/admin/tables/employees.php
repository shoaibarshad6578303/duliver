<?php

defined('BASEPATH') or exit('No direct script access allowed');

$this->ci->db->query("SET sql_mode = ''");



$aColumns = [
   
    db_prefix().'employees.id as id',
    'employee_code',
    'first_name',
    'mobile_number',
    'job_title_id',
    'work_email',
    'gender',
    'address_line_1',
    db_prefix().'employees.id as action',
];




$sIndexColumn = 'id';
$sTable       = db_prefix().'employees';
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

    $row[] = $aRow['employee_code'];

    $row[] = $aRow['first_name'];

    $row[] = $aRow['mobile_number'];

    $row[] = $aRow['job_title_id'];

    $row[] = $aRow['work_email'];

    $row[] = $aRow['gender'];

    $row[] = $aRow['address_line_1'];
    // $row[] = $aRow['action'];

    $row[] = '<a class="btn btn-sm btn-primary" href="employees/delete/' . $aRow['id'] . '"> Delete </a> <a class="btn btn-sm btn-success ml-1" href="employees/edit/' . $aRow['id'] . '"> Edit </a>';
    // '<div class="checkbox"><input type="checkbox" value="' . $aRow['id'] . '"><label></label></div>';
    $output['aaData'][] = $row;
}
