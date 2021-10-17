<?php if (!defined('BASEPATH')) exit('No direct script access allowed');
if (!function_exists('auth')) {
    function auth()
    {
        $ci = &get_instance();
        $ci->load->library('session');

        return $ci->session->userdata('login');
    }
}
