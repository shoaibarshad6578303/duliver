<?php

defined('BASEPATH') or exit('No direct script access allowed');

/*

Module Name: Bitsclan Theme

Description: Bitsclan Theme for Perfex CRM

Version: 1.0.0

Author: Bitsclan Solutions

Author URI: https://bitsclan.com/

Requires at least: 2.3.2

*/



define('BITSCLAN_THEME_MODULE_NAME', 'bitsclan_theme');

define('BITSCLAN_THEME_CSS', module_dir_path(BITSCLAN_THEME_MODULE_NAME, 'assets/css/theme_styles.css'));



$CI = &get_instance();



register_activation_hook(BITSCLAN_THEME_MODULE_NAME, 'bitsclan_theme_activation_hook');



function bitsclan_theme_activation_hook()

{

	require(__DIR__ . '/install.php');

}

$CI->load->helper(BITSCLAN_THEME_MODULE_NAME . '/bitsclan_theme');

