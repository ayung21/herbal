<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Home extends CI_Controller
{

	public function index()
	{
		$this->load->model('Transaksi');
		$data = array(
			'data'		=> $this->Transaksi->getAllDataToko(),
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

	public function createBarang()
	{
		$this->load->library('form_validation');

		$this->form_validation->set_rules('barang', 'Barang', 'is_unique[tbv_barang.nama_barang]', array(
			'is_unique'    => '%s sudah ada',
		));

		if ($this->form_validation->run() == FALSE) {
			$this->session->set_flashdata('error', form_error('barang'));
		} else {
			$this->load->model('MasterBarang');
			$args = $this->input->post();
			$this->MasterBarang->prosesCreateBarang($args);
		}
		return redirect($_SERVER['HTTP_REFERER']);
	}

	public function deleteBarang()
	{
		$this->load->model('MasterBarang');
		$id = $this->input->post('id');
		$this->MasterBarang->deleteBarang($id);
		echo json_encode('delete');
	}

	public function getDataBarang()
	{
		$this->load->model('MasterBarang');
		$id = $this->input->post('id');
		$data = $this->MasterBarang->getDataIdBarang($id);
		echo json_encode($data);
	}

	public function updateBarang()
	{
		$this->load->model('MasterBarang');
		$args = $this->input->post();
		$this->MasterBarang->prosesUpdateBarang($args);
		return redirect($_SERVER['HTTP_REFERER']);
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

	public function createKota()
	{
		$this->load->library('form_validation');

		$this->form_validation->set_rules('kota', 'Kota', 'is_unique[tbv_kota.kota]', array(
			'is_unique'    => '%s sudah ada',
		));

		if ($this->form_validation->run() == FALSE) {
			$this->session->set_flashdata('error', form_error('kota'));
		} else {
			$this->load->model('MasterKota');
			$args = $this->input->post();
			$this->MasterKota->prosesCreateKota($args);
		}
		return redirect($_SERVER['HTTP_REFERER']);
	}

	public function deleteKota()
	{
		$this->load->model('MasterKota');
		$id = $this->input->post('id');
		$this->MasterKota->deleteKota($id);
		echo json_encode('delete');
	}

	public function getDataKota()
	{
		$this->load->model('MasterKota');
		$id = $this->input->post('id');
		$data = $this->MasterKota->getDataIdKota($id);
		echo json_encode($data);
	}

	public function updateKota()
	{
		$this->load->model('MasterKota');
		$args = $this->input->post();
		$this->MasterKota->prosesUpdateKota($args);
		return redirect($_SERVER['HTTP_REFERER']);
	}

	public function listBarangToko()
	{
		$this->load->model('Transaksi');
		$data = array(
			'data'		=> $this->Transaksi->getDataToko(),
			'content'	=> 'list_barang_toko',
		);
		$this->load->view('components/main', $data);
	}

	public function listToko()
	{
		$this->load->model('MasterUser');
		$data = array(
			'data'		=> $this->MasterUser->getAllToko(),
			'content'	=> 'list_toko',
		);
		$this->load->view('components/main', $data);
	}

	public function validasiToko()
	{
		$this->load->model('MasterUser');
		$id = $this->input->post('id');
		$this->MasterUser->getValidasiToko($id);
		echo json_encode($id);
	}

	public function prosesCreateBarangToko()
	{
		$this->load->model(['MasterImage', 'Transaksi']);
		$args = $this->input->post();

		$insert = $this->Transaksi->insertBarangToko($args);

		copy('./uploads/temp/' . $args['file_temp'], './uploads/img/' . $args['file_temp']);
		unlink('./uploads/temp/' . $args['file_temp']);
		$this->MasterImage->insertImageBarangToko($args, $insert);

		return redirect($_SERVER['HTTP_REFERER']);
	}

	public function getDataToko()
	{
		$this->load->model(['Transaksi']);
		$id = $this->input->post('id');
		$data = $this->Transaksi->prosesGetTransaksi($id);
		echo json_encode($data);
	}

	public function prosesUpdateBarangToko()
	{
		$this->load->model(['MasterImage', 'Transaksi']);
		$args = $this->input->post();

		$this->Transaksi->updateBarangToko($args);

		if (!empty($args['file_temp'])) :
			copy('./uploads/temp/' . $args['file_temp'], './uploads/img/' . $args['file_temp']);
			unlink('./uploads/temp/' . $args['file_temp']);
			unlink('./uploads/img/' . $args['file_asli']);
			$this->MasterImage->updateImageBarangToko($args);
		endif;

		return redirect($_SERVER['HTTP_REFERER']);
	}
}
