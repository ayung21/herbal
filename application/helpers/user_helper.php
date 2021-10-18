<?php if (!defined('BASEPATH')) exit('No direct script access allowed');
if (!function_exists('user')) {
    function user()
    {
        $ci = &get_instance();
        $ci->load->library('session');

        $user = $ci->session->userdata();
        return $user['data'];
    }

    function toko()
    {
        $ci = &get_instance();
        $ci->load->library('session');

        $user = $ci->session->userdata();
        return $user['toko'];
    }

    function kota(){
        $ci = &get_instance();
        $ci->load->model('MasterKota');
        $data = $ci->MasterKota->getAllDataKota();
        return $data;
    }

    function barang(){
        $ci = &get_instance();
        $ci->load->model('MasterBarang');
        $data = $ci->MasterBarang->getAllDataBarang();
        return $data;
    }

    function mobile(){
        $ci = &get_instance();
        $ci->load->library('Mobile_Detect');
        $data = new Mobile_Detect;
        return $data->isMobile();
    }
}
