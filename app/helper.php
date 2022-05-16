<?php

if(!function_exists('p')){
    function p($data){
        echo "<pre>";
        print_r($data);
        echo "</pre>";
        die;
    }
}
if(!function_exists('get_formatted_date')){
    function get_formatted_date($data, $format){
        $formattedDate = date($format,strtotime($data));
        return $formattedDate;
    }
}