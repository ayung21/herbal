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
		// Google Geocoding API Key
		$apiKey  = 'AIzaSyDlIBXc3vKsxdRWAi6aD_60r9C7E7_d7RI';
		$address = urlencode( '1600 Amphitheatre Pkwy, Mountain View, CA 94043' );
		$url     = "https://maps.googleapis.com/maps/api/geocode/json?address={$address}&key={$apiKey}";
		// echo "https://maps.googleapis.com/maps/api/geocode/json?address={$address}&key={$apiKey}";
		// print_r($url);
		// die();
		$resp    = json_decode( file_get_contents( $url ), true );

		// Latitude and Longitude (PHP 7 syntax)
		$lat    = $resp['results'][0]['geometry']['location']['lat'] ?? '';
		$long   = $resp['results'][0]['geometry']['location']['lng'] ?? '';
		print_r($resp);
		print_r($long);
		// echo json_encode(user());
		// $data = array(
		// 	'content'	=> 'form_datadiri_toko',
		// );
		// $this->load->view('components/main', $data);
		// $this->load->view('latlot');
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
			$this->form_validation->set_rules('password_utama', 'password_utama', 'required');
			$this->form_validation->set_rules('password_repeat', 'Password', 'required|matches[password_utama]', array(
				'required'   => '%s masih kosong',
				'matches'    => '%s tidak sama.',
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

	public function daftarAkun()
	{
		$this->load->library('form_validation');

		$this->form_validation->set_rules('email', 'Email', 'required|valid_email', array(
			'required'    => '%s masih kosong',
			'valid_email' => '%s tidak valid.'
		));
		$this->form_validation->set_rules('telp', 'Telp', 'required|min_length[11]|max_length[13]|numeric', array(
			'required'    => '%s masih kosong',
			'min_length'  => '%s terlalau pendek.',
			'max_length'  => '%s terlalau panjang.',
			'numeric'  	  => '%s tidak sesuai.',
		));
		$this->form_validation->set_rules('password', 'Password', 'required', array(
			'required'    => '%s masih kosong',
		));
		$this->form_validation->set_rules('password_repeat', 'Password', 'required|matches[password]', array(
			'required'   => '%s masih kosong',
			'matches'    => '%s tidak sama.',
		));


		if ($this->form_validation->run() == FALSE) {
			$this->session->set_flashdata('error', 'silahkan ulangi daftar');
			return redirect('Login/daftar');
		} else {
			$this->load->model('MasterUser');
			$args = $this->input->post();

			$insert = $this->MasterUser->insertUser($args);
			$data   = $this->MasterUser->getIdToko($insert);

			$arr_session = array(
				'login'	=> TRUE,
				'data'	=> $data
			);

			$this->session->set_userdata($arr_session);

			return redirect('Login/formDataDiriToko');
		}
	}
}
