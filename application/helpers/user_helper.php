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

    function longitude(){
        $x = '<input type="text" id="demo">';
        echo '<script>
        var x = document.getElementById("demo")

        function getLocation() {
            if (navigator.geolocation) {
                navigator.geolocation.getCurrentPosition(showPosition);
            } else { 
                x.innerHTML = "Geolocation is not supported by this browser.";
            }
        }

        function showPosition(position) {
        x.innerHTML = "Latitude: " + position.coords.latitude + 
        "<br>Longitude: " + position.coords.longitude;
        }
        </script>';
        return $x;
    }
}
