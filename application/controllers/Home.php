<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function index()
	{
		$data = array(
			'content'	=> 'home',
		);
		$this->load->view('components/main', $data);
	}

	public function homePenjualan()
	{
		$data = array(
			'content'	=> 'penjualan',
		);
		$this->load->view('components/main', $data);
	}
}
