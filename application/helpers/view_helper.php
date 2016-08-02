<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');
if (!function_exists("load_view")){
    /**
     * This helper can be used to load a view directly into a view file
     * @param string $viewName
     * @param array $data
         * @author Francesco Laurita
     */
    function load_view($viewName,$data = array()){
 
        $CI = & get_instance();
 
        $content = $CI->load->view($viewName,$data,true);
 
        return $content;
    }
}
?>