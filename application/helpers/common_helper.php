<?php defined('BASEPATH') or exit('No direct script access allowed');

/**
 * Function Name
 *
 * Function Description
 *
 * @access	public
 * @param	type	name
 * @return	type	
 */
 
if (!function_exists('get_bus_rows')) {
   
    function get_bus_rows($param1='')
    {
         //get main CodeIgniter object
            $ci =& get_instance();

            $dataArray = $ci->Config_model->getBuses();
            if(!empty($dataArray)): foreach ($dataArray as  $value): 
            $getBusData[$value->bus_id] = $value->map_id;
            endforeach; endif;

            $dataArray = $ci->Config_model->getBusMap();
            if(!empty($dataArray)): foreach ($dataArray as  $value): 
            $getData[$value->map_id] = $value->rows;
            endforeach; endif;

            return $getData[$getBusData[$param1]];
    }
}

if (!function_exists('get_client_name')) {
   
    function get_client_name($param1='')
    {
         //get main CodeIgniter object
            $ci =& get_instance();

            $dataArray = $ci->Config_model->getClient();
            if(!empty($dataArray)): foreach ($dataArray as  $value): 
            $getData[$value->client_id] = $value->name;
            endforeach; endif;

            return $getData[$param1];
    }
}


if (!function_exists('get_client_name_from_bus')) {
   
    function get_client_name_from_bus($param1='')
    {
         //get main CodeIgniter object
            $ci =& get_instance();

            $dataArray = $ci->Config_model->getClient();
            if(!empty($dataArray)): foreach ($dataArray as  $value): 
            $getClientData[$value->client_id] = $value->name;
            endforeach; endif;

            $dataArray = $ci->Config_model->getBuses();
            if(!empty($dataArray)): foreach ($dataArray as  $value): 
            $getBusData[$value->bus_id] = $value->client_id;
            endforeach; endif;

            return $getClientData[$getBusData[$param1]];
    }
}


if (!function_exists('get_location_name')) {
   
    function get_location_name($param1='')
    {
         //get main CodeIgniter object
            $ci =& get_instance();

            $dataArray = $ci->Config_model->get();
            if(!empty($dataArray)): foreach ($dataArray as  $value): 
            $getData[$value->location_id] = $value->name;
            endforeach; endif;

            return $getData[$param1];
    }
}

if (!function_exists('get_bus_fare')) {
   
    function get_bus_fare($param1='')
    {
         //get main CodeIgniter object
            $ci =& get_instance();

            $dataArray = $ci->Config_model->getBuses();
            if(!empty($dataArray)): foreach ($dataArray as  $value): 
            $getData[$value->bus_id] = $value->business;
            endforeach; endif;

            return $getData[$param1];
    }
}

if (!function_exists('get_user_name')) {
   
    function get_user_name($param1='')
    {
         //get main CodeIgniter object
            $ci =& get_instance();

            $dataArray = $ci->User_model->get();
            if(!empty($dataArray)): foreach ($dataArray as  $value): 
            $getData[$value->user_id] = $value->first_name.' '.$value->last_name.' '.$value->other_name;
            endforeach; endif;

            return $getData[$param1];
    }
}


if (!function_exists('get_total_buses')) {
   
    function get_total_buses()
    {
         //get main CodeIgniter object
            $ci =& get_instance();

            $dataArray = $ci->Config_model->getBuses();
            if(!empty($dataArray)): foreach ($dataArray as  $value): 
            $getData = count($value);
            endforeach; endif;

            return $getData;
    }
}


if (!function_exists('check_booking_availability')) {
   
    function check_booking_availability($param1='',$param2='')
    {
         //get main CodeIgniter object
            $ci =& get_instance();

            $dataArray = $ci->Config_model->getBooking();
            if(!empty($dataArray)): foreach ($dataArray as  $value): 
            $getData[$value->seat_id][$value->departure_date] = "X";
            endforeach; endif;

          return $getData[$param1][$param2];
    }
}

if (!function_exists('seats_left')) {
   
    function seats_left($param1='',$param2='')
    {
         //get main CodeIgniter object
            $ci =& get_instance();

            $dataArray = $ci->Config_model->getBooking();
            if(!empty($dataArray)): foreach ($dataArray as  $value): 
            $getData[$value->bus_id][$value->departure_date] += 1;
            endforeach; endif;

            $dataArrayB = $ci->Config_model->getBuses();
            if(!empty($dataArrayB)): foreach ($dataArrayB as  $value): 
             $getBusData[$value->bus_id] = $value->no_of_seats;
            endforeach; endif;

          return $getBusData[$param1] - $getData[$param1][$param2];
    }
}