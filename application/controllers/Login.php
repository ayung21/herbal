<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Login extends CI_Controller
{

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

	public function validationDaftarAkun()
	{
		$args = $this->input->post();
		$this->load->library('form_validation');

		if (isset($args['email'])) {
			$this->form_validation->set_rules('email', 'Email', 'required|valid_email', array(
				'required'    => '%s masih kosong',
				'valid_email' => '%s tidak valid.'
			));
		} else if (isset($args['telp'])) {
			$this->form_validation->set_rules('telp', 'Telp', 'required|min_length[11]|max_length[13]|numeric', array(
				'required'    => '%s masih kosong',
				'min_length'  => '%s terlalau pendek.',
				'max_length'  => '%s terlalau panjang.',
				'numeric'  	  => '%s tidak sesuai.',
			));
		} else if (isset($args['password'])) {
			$this->form_validation->set_rules('password', 'Password', 'required', array(
				'required'    => '%s masih kosong',
			));
		} else if (isset($args['password_repeat'])) {
			$this->form_validation->set_rules('password_repeat', 'Password', 'required|matches['.$args['password_utama'].']', array(
				'required'    => '%s masih kosong',
				'matches'  	  => '%s tidak sama.',
			));
		}

		if ($this->form_validation->run() == FALSE) {
			echo json_encode(
				array(
					'st'  => 'salah',
					'msg' => form_error($args['name'])
				)
			);
		} else {
			echo json_encode(
				array(
					'st'  => 'benar'
				)
			);
		}
	}
}
