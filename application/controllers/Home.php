<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

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

	public function listBarangToko(){
		$data = array(
			'content'	=> 'list_barang_toko',
		);
		$this->load->view('components/main', $data);
	}
	public function listToko(){
		$data = array(
			'content'	=> 'list_toko',
		);
		$this->load->view('components/main', $data);
	}
}
