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
			'active'	=> 'home'
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
			'active'	=> 'master-barang'
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
			'active'	=> 'master-kota'
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
			'active'	=> 'list-barang-toko'
		);
		$this->load->view('components/main', $data);
	}

	public function listToko()
	{
		$this->load->model('MasterUser');
		$data = array(
			'data'		=> $this->MasterUser->getAllToko(),
			'content'	=> 'list_toko',
			'active'	=> 'list-toko'
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

	public function deleteDataToko()
	{
		$this->load->model(['Transaksi']);
		$id = $this->input->post('id');
		$this->Transaksi->prosesDeleteDataToko($id);
		echo json_encode('sukses');
	}

	public function perhitungan()
	{
		$awal_latitude 	= -7.327451;
		$awal_longitude = 112.731177;
		
		$W	= 0.5;
		$c1	= 0.8;
		$c2	= 0.8;
		$v1	= 0;
		$R1	= 0.4;
		$R2	= 0.2;

		if ($this->db->table_exists('partikel')) {
			$this->db->query("DROP TEMPORARY TABLE partikel");
		}
		if ($this->db->table_exists('perhitungan')) {
			$this->db->query("DROP TEMPORARY TABLE perhitungan");
		}
		if ($this->db->table_exists('hasilperhitungan')) {
			$this->db->query("DROP TEMPORARY TABLE hasilperhitungan");
		}
		if ($this->db->table_exists('updatepartikel')) {
			$this->db->query("DROP TEMPORARY TABLE updatepartikel");
		}
		if ($this->db->table_exists('euclideanpartikel')) {
			$this->db->query("DROP TEMPORARY TABLE euclideanpartikel");
		}
		if ($this->db->table_exists('Gbest')) {
			$this->db->query("DROP TEMPORARY TABLE Gbest");
		}

		$this->load->model(['MasterUser', 'TableTemporary']);
		$data = $this->MasterUser->getAllToko();
		$this->TableTemporary->createTableTemporaryPartikel();
		foreach ($data as $row) {
			$this->TableTemporary->insertTemporaryPartikel(substr($row->longitude, 0, -5) . rand(0, 99999), substr($row->latitude, 0, -5) . rand(0, 99999));
		}
		$get = $this->TableTemporary->selectPartikel();
		$this->TableTemporary->createTableTemporaryPerhitungan();
		$this->TableTemporary->createTableTemporaryEuclideanPartikel();
		$this->TableTemporary->createTableTemporaryHasil();
		$this->TableTemporary->createTableTemporaryUpdatePartikel();
		$this->TableTemporary->createTableTemporaryGbest();
		for ($i = 0; $i < $get->num_rows(); $i++) {
			foreach ($data as $row) {
				$latitude  = round(exp(pow($row->latitude - $get->result()[$i]->latitude, 2)), 6);
				$longitude = round(exp(pow($row->longitude - $get->result()[$i]->longitude, 2)), 6);
				$this->TableTemporary->hasil_perhitungan($row->nama_toko, "0" . substr($latitude, 1), "0" . substr($longitude, 1), ($i + 1),$get->result()[$i]->latitude,$get->result()[$i]->longitude);
			}
			$getHasil = $this->TableTemporary->getDataHasilTerkecil($i + 1);
			$this->TableTemporary->insertHasilPerPartikel($getHasil);
		}
		$terkecil = $this->TableTemporary->selectHasilTerkecil();
		for ($i = 0; $i < $get->num_rows(); $i++) {
			$baris1_1 = $W * 0;
			$baris1_2 = $c1 * $R1;
			$baris1_3 = ($awal_latitude - $get->result()[$i]->latitude) * $baris1_2;
			$baris1_4 = ($awal_longitude - $get->result()[$i]->longitude) * $baris1_3;
			
			$baris2_2 = $c2 * $R2;
			$baris2_3 = ($awal_latitude - $terkecil->latitude_partikel) * $baris2_2;
			$baris2_4 = ($awal_longitude - $terkecil->longitude_partikel) * $baris2_2;
			
			$this->TableTemporary->insertHasilUpdatePartikel($get->result()[$i]->latitude + $baris2_3, $get->result()[$i]->longitude + $baris2_4, $i+1);
		}
		$getUpdate = $this->TableTemporary->selectUpdatePartikel();
		for ($i = 0; $i < $getUpdate->num_rows(); $i++) {
			foreach ($data as $row) {
				$this->TableTemporary->insertHasilEuclideanPartikel($row->nama_toko,round(pow(($row->latitude - $getUpdate->result()[$i]->latitude), 2),6),round(pow(($row->longitude - $getUpdate->result()[$i]->longitude), 2),6),round(sqrt((pow(($row->latitude - $getUpdate->result()[$i]->latitude), 2) + pow(($row->longitude - $getUpdate->result()[$i]->longitude), 2))),6), $i+1);
			}
		}

		for ($i = 0; $i < $get->num_rows(); $i++) {
			$getGbest = $this->TableTemporary->getDataGbestTerkecil($i + 1);
			$this->TableTemporary->insertGbestPerPartikel($getGbest,$get->result()[$i]->latitude,$get->result()[$i]->longitude);
		}
		$hasil 				 	= $this->TableTemporary->selectHasilPerhitunganTerakhir();
		$hasilUpdatePartikel 	= $this->TableTemporary->selectHasilUpdatePartikel();
		$hasilEuclideanPartikel = $this->TableTemporary->selectHasilEuclideanPartikel();
		$hasilGbest 			= $this->TableTemporary->selectHasilGbest();
		// echo json_encode($hasil);
		// echo "<br>";
		// echo "<br>";
		// echo json_encode($terkecil);
		// echo "<br>";
		// echo "<br>";
		// echo json_encode($hasilUpdatePartikel);
		// echo "<br>";
		// echo "<br>";
		// echo json_encode($hasilEuclideanPartikel);
		echo json_encode($get->result());
		echo "<br>";
		echo "<br>";
		echo json_encode($hasilGbest);
	}

}
