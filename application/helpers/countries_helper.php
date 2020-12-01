<?php

defined('BASEPATH') or exit('No direct script access allowed');

/**
 * Get all countries stored in database
 * @return array
 */
function get_all_countries()
{
    $countries = array(
"1" => array(
"name" => "United Arab Emirates",
"cities" => array(
"1" => array(
"name" => "Dubai",
"areas" => array(
"1" => "Dubai Area ABC",
"2" => "Dubai Area XYZ",
),
),
"2" => array(
"name" => "Abu Dubai",
"areas" => array(
"1" => "Abu Dubai Area ABC",
"2" => "Abu Dubai Area XYZ",
),
),
),
),
"2" => array(
"name" => "Sudia Arabia",
"cities" => array(
"1" => array(
"name" => "Jada",
"areas" => array(
"1" => "Jada Area ABC",
"2" => "Jada Area XYZ",
),
),
"2" => array(
"name" => "Riaz",
"areas" => array(
"1" => "Riaz Area ABC",
"2" => "Riaz Area XYZ",
),
),

),
),
);
return $countries;
    // return hooks()->apply_filters('all_countries', get_instance()->db->order_by('short_name', 'asc')->get(db_prefix().'countries')->result_array());
}
/**
 * Get country row from database based on passed country id
 * @param  mixed $id
 * @return object
 */

function get_cities()
{
    $cities = array(

        "1" => "Dub ABC",
        "2" => "Dub XYZ",
        "3" => "ABU ABC",
        "4" => "ABU XYZ",

    );
    return $cities;
}


function get_country($id)
{
    $CI = & get_instance();

    $country = $CI->app_object_cache->get('db-country-' . $id);

    if (!$country) {
        $CI->db->where('country_id', $id);
        $country = $CI->db->get(db_prefix().'countries')->row();
        $CI->app_object_cache->add('db-country-' . $id, $country);
    }

    return $country;
}
/**
 * Get country short name by passed id
 * @param  mixed $id county id
 * @return mixed
 */
function get_country_short_name($id)
{
    $country = get_country($id);
    if ($country) {
        return $country->iso2;
    }

    return '';
}
/**
 * Get country name by passed id
 * @param  mixed $id county id
 * @return mixed
 */
function get_country_name($id)
{
    $country = get_country($id);
    if ($country) {
        return $country->short_name;
    }

    return '';
}
