<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Login extends CI_Controller
{

	public function index()
	{
		if (!empty(auth())) :
			return redirect('Home');
		else :
			$this->load->view('login');
		endif;
	}

	public function prosesLogin()
	{
		$this->load->model('MasterUser');
		$args = $this->input->post();

		$cek1 = $this->MasterUser->cekLoginEmail($args);

		if ($cek1->num_rows() > 0) {
			if (password_verify($args['password'], $cek1->row()->password)) {
				$arr_session = array(
					'login'	=> TRUE,
					'data'	=> $cek1->row()
				);
				$this->session->set_userdata($arr_session);
				return redirect('Home');
			} else {
				$this->session->set_flashdata('error', 'email atau password salah');
				return redirect($_SERVER['HTTP_REFERER']);
			}
		} else {
			$this->session->set_flashdata('error', 'email atau password salah');
			return redirect($_SERVER['HTTP_REFERER']);
		}
	}

	public function daftar()
	{
		if (!empty(auth())) :
			return redirect('Home');
		else :
			$this->load->view('daftar');
		endif;
	}

	public function formDataDiriToko()
	{
		if (!empty(auth())) :
			return redirect('Home');
		else :
			$data = array(
				'content'	=> 'form_datadiri_toko',
			);
			$this->load->view('components/main', $data);
		endif;
	}

	public function updateDataDiriToko()
	{
		if (!empty(auth())) :
			return redirect('Home');
		else :
			$data = array(
				'content'	=> 'update_datadiri_toko',
			);
			$this->load->view('components/main', $data);
		endif;
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

	public function tester()
	{
		// $this->load->model('MasterKota');
		// print_r($this->MasterKota->getAllDataKota());
		// $this->load->view('tester');
		// print_r(FCPATH);
		// copy(FCPATH . '/uploads/temp/tempyO0C8RHU9bWS34BQ-2021-09-14_22:16:51.png', FCPATH . '/uploads/img/tempyO0C8RHU9bWS34BQ-2021-09-14_22:16:51.png');
		// copy('./uploads/temp/tempAKPCdr8sZVcg5GTq-2021-09-15_10:09:13.png', './uploads/img/tempAKPCdr8sZVcg5GTq-2021-09-15_10:09:13.png');
		// print_r(kota());
		// foreach(kota() as $row):
		// 	print_r($row->id_kota);
		// endforeach;
	}

	public function uploadImageTemp()
	{
		$temp = $this->input->post('temp');
		if (!empty($temp)) {
			unlink('./uploads/temp/' . $temp);
		}

		$config['upload_path']          = './uploads/temp/';
		$config['allowed_types']        = 'gif|jpg|png|jpeg';
		$config['file_name']			= 'temp' . random_string('alnum', 16) . '-' . date('Y-m-d H:i:s');

		$this->load->library('upload', $config);

		if (!$this->upload->do_upload('images')) {
			echo json_encode('gagal');
		} else {
			$data = $this->upload->data();
			echo json_encode(
				array(
					'img' => $data['file_name']
				)
			);
		}
	}

	public function prosesInputDatadiri()
	{
		$this->load->model(['MasterUser', 'MasterImage']);
		$args = $this->input->post();
		// update image
		if (!empty($args['file_temp'])) :
			unlink('./uploads/img/' . $args['file_asli']);
			$this->MasterImage->insertImage($args);
			copy('./uploads/temp/' . $args['file_temp'], './uploads/img/' . $args['file_temp']);
			unlink('./uploads/temp/' . $args['file_temp']);
		endif;
		$this->MasterUser->updateDataToko($args);
		$data = $this->MasterUser->getIdToko(user()->id_user);
		$this->session->unset_userdata('data');
		$this->session->set_userdata('data', $data);
		return redirect('Home');
	}

	public function logout()
	{
		session_destroy();
		return redirect('Home');
	}
}
