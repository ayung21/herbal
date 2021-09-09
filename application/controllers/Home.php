<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Home extends CI_Controller
{

	public function index()
	{
		$data = array(
			'content'	=> 'penjualan',
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

	public function masterBarang()
	{
		$this->load->model('MasterBarang');
		$data = array(
			'data'		=> $this->MasterBarang->getAllDataBarang(),
			'content'	=> 'master_barang',
		);

		$this->load->view('components/main', $data);
	}

	public function masterKota()
	{
		$this->load->model('MasterKota');
		$data = array(
			'data'		=> $this->MasterKota->getAllDataKota(),
			'content'	=> 'master_kota',
		);

		$this->load->view('components/main', $data);
	}

	public function createKota(){
		$this->load->library('form_validation');
		
		$this->form_validation->set_rules('kota', 'Kota', 'is_unique[tbv_kota.kota]', array(
			'is_unique'    => '%s sudah ada',
		));
		
		if ($this->form_validation->run() == FALSE) {
			$this->session->set_flashdata('error', form_error('kota'));
		}else{
			$this->load->model('MasterKota');
			$args = $this->input->post();
			$this->MasterKota->prosesCreateKota($args);
		}
		return redirect($_SERVER['HTTP_REFERER']);
	}

	public function deleteKota(){
		$this->load->model('MasterKota');
		$id = $this->input->post('id');
		$this->MasterKota->deleteKota($id);
		echo json_encode('delete');
	}

	public function getDataKota(){
		$this->load->model('MasterKota');
		$id = $this->input->post('id');
		$data = $this->MasterKota->getDataIdKota($id);
		echo json_encode($data);
	}

	public function updateKota(){
		$this->load->model('MasterKota');
		$args = $this->input->post();
		$this->MasterKota->prosesUpdateKota($args);
		return redirect($_SERVER['HTTP_REFERER']);
	}

	public function listBarangToko()
	{
		$data = array(
			'content'	=> 'list_barang_toko',
		);
		$this->load->view('components/main', $data);
	}
	public function listToko()
	{
		$data = array(
			'content'	=> 'list_toko',
		);
		$this->load->view('components/main', $data);
	}
}
