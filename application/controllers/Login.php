<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	public function index()
	{
		$this->load->view('login');
	}

	public function daftar()
	{
		$this->load->view('daftar');
	}

	public function formDataDiriToko()
	{
		$data = array(
			'content'	=> 'form_datadiri_toko',
		);
		$this->load->view('components/main', $data);
	}

}
