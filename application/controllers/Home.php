<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Home extends CI_Controller
{

	public function index()
	{
		$this->load->model('Transaksi');
		$this->load->library('pagination');

		//konfigurasi pagination
        $config['base_url'] = base_url().'Home/index/';
        $config['total_rows'] = $this->db->count_all('tbv_transaksi'); //total row
        $config['per_page'] = 10;  //show record per halaman
        $config["uri_segment"] = 3;  // uri parameter
        $choice = $config["total_rows"] / $config["per_page"];
        // $config["num_links"] = floor($choice);

		$config['next_link'] = 'Selanjutnya';
		$config['prev_link'] = 'Sebelumnya';
		$config['first_link'] = 'Awal';
		$config['last_link'] = 'Akhir';
		$config['full_tag_open'] = '<ul class="pagination">';
		$config['full_tag_close'] = '</ul>';
		$config['num_tag_open'] = '<li>';
		$config['num_tag_close'] = '</li>';
		$config['cur_tag_open'] = '<li class="active"><a href="#">';
		$config['cur_tag_close'] = '</a></li>';
		$config['prev_tag_open'] = '<li>';
		$config['prev_tag_close'] = '</li>';
		$config['next_tag_open'] = '<li>';
		$config['next_tag_close'] = '</li>';
		$config['last_tag_open'] = '<li>';
		$config['last_tag_close'] = '</li>';
		$config['first_tag_open'] = '<li>';
		$config['first_tag_close'] = '</li>';

		$this->pagination->initialize($config);
        $from = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;
 
		$total = $this->Transaksi->getTotakllAllDataToko();

		$data['data']    = $this->Transaksi->getAllDataToko($config["per_page"], $from);
		$data['content'] = 'penjualan';
		$data['height' ] = height($total);
		$data['active']  = 'home';

		$data['pagination'] = $this->pagination->create_links();
		// $data = array(
		// 	'data'		 => $this->Transaksi->getAllDataToko($config["per_page"], $from),
		// 	'content'	 => 'penjualan',
		// 	'height' 	 => height($total),
		// 	'active'	 => 'home',
		// 	'pagination' => $this->pagination->create_links()
		// );
		$this->load->view('components/main', $data);
	}
	
	public function detail_penjualan($id){
		$this->load->model('Transaksi');
		$data = array(
			'data'		=> $this->Transaksi->getDetailBarang($id),
			'content'	=> 'detail_penjualan',
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
		if (empty(auth())) :
			return redirect('Home');
		else :
			$this->load->model('MasterBarang');
			$data = array(
				'data'		=> $this->MasterBarang->getAllDataBarang(),
				'content'	=> 'master_barang',
				'active'	=> 'master-barang'
			);

			$this->load->view('components/main', $data);
		endif;
	}

	public function createBarang()
	{
		if (empty(auth())) :
			return redirect('Home');
		else :
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
		endif;
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
		if (empty(auth())) :
			return redirect('Home');
		else :
			$this->load->model('MasterKota');
			$data = array(
				'data'		=> $this->MasterKota->getAllDataKota(),
				'content'	=> 'master_kota',
				'active'	=> 'master-kota'
			);

			$this->load->view('components/main', $data);
		endif;
	}

	public function createKota()
	{
		if (empty(auth())) :
			return redirect('Home');
		else :
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
		endif;
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
		if (empty(auth())) :
			return redirect('Home');
		else :
			$this->load->model('Transaksi');
			$data = array(
				'data'		=> $this->Transaksi->getDataToko(),
				'content'	=> 'list_barang_toko',
				'active'	=> 'list-barang-toko'
			);
			$this->load->view('components/main', $data);
		endif;
	}

	public function listToko()
	{
		if (empty(auth())) :
			return redirect('Home');
		else :
			$this->load->model('MasterUser');
			$data = array(
				'data'		=> $this->MasterUser->getAllToko(),
				'content'	=> 'list_toko',
				'active'	=> 'list-toko'
			);
			$this->load->view('components/main', $data);
		endif;
	}

	public function getDataLatLong(){
		$this->load->model(['MasterUser']);
		$id = $this->input->post('id');
		$data = $this->MasterUser->getIdDetailToko($id);
		echo json_encode($data);
	}
	
	public function prosesUpdateLatLong(){
		$this->load->model(['MasterUser']);
		$args = $this->input->post();
		$data = $this->MasterUser->updateLatLong($args);
		return redirect($_SERVER['HTTP_REFERER']);
	}

	public function Pencarian()
	{
		$data = array(
			'content'	=> 'pencarian_toko',
			'active'	=> 'pencarian-toko'
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
		$args = $this->input->post();
		// $awal_latitude  = -7.327451;
		// $awal_longitude = 112.731177;
		$awal_latitude 	= $args['latitude'];
		$awal_longitude = $args['longitude'];
		
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
				$latitude  = round(exp(pow((float)$row->latitude - (float)$get->result()[$i]->latitude, 2)), 6);
				$longitude = round(exp(pow((float)$row->longitude - (float)$get->result()[$i]->longitude, 2)), 6);
				$this->TableTemporary->hasil_perhitungan($row->nama_toko, "0" . substr($latitude, 1), "0" . substr($longitude, 1), ($i + 1), (float)$get->result()[$i]->latitude, (float)$get->result()[$i]->longitude);
			}
			$getHasil = $this->TableTemporary->getDataHasilTerkecil($i + 1);
			$this->TableTemporary->insertHasilPerPartikel($getHasil);
		}
		$terkecil = $this->TableTemporary->selectHasilTerkecil();
		for ($i = 0; $i < $get->num_rows(); $i++) {
			$baris1_1 = $W * 0;
			$baris1_2 = $c1 * $R1;
			$baris1_3 = ($awal_latitude - (float)$get->result()[$i]->latitude) * $baris1_2;
			$baris1_4 = ($awal_longitude - (float)$get->result()[$i]->longitude) * $baris1_3;
			
			$baris2_2 = $c2 * $R2;
			$baris2_3 = ($awal_latitude - $terkecil->latitude_partikel) * $baris2_2;
			$baris2_4 = ($awal_longitude - $terkecil->longitude_partikel) * $baris2_2;

			$this->TableTemporary->insertHasilUpdatePartikel((float)$get->result()[$i]->latitude + $baris2_3, (float)$get->result()[$i]->longitude + $baris2_4, $i + 1);
		}
		$getUpdate = $this->TableTemporary->selectUpdatePartikel();
		for ($i = 0; $i < $getUpdate->num_rows(); $i++) {
			foreach ($data as $row) {
				$this->TableTemporary->insertHasilEuclideanPartikel($row->nama_toko, round(pow(((float)$row->latitude - (float)$getUpdate->result()[$i]->latitude), 2), 6), round(pow(((float)$row->longitude - (float)$getUpdate->result()[$i]->longitude), 2), 6), round(sqrt((pow(((float)$row->latitude - (float)$getUpdate->result()[$i]->latitude), 2) + pow(((float)$row->longitude - (float)$getUpdate->result()[$i]->longitude), 2))), 6), $i + 1);
			}
		}

		for ($i = 0; $i < $get->num_rows(); $i++) {
			$getGbest = $this->TableTemporary->getDataGbestTerkecil($i + 1);
			$this->TableTemporary->insertGbestPerPartikel($getGbest, $get->result()[$i]->latitude, $get->result()[$i]->longitude);
		}
		// $hasil 				 	= $this->TableTemporary->selectHasilPerhitunganTerakhir();
		// $hasilUpdatePartikel 	= $this->TableTemporary->selectHasilUpdatePartikel();
		// $hasilEuclideanPartikel = $this->TableTemporary->selectHasilEuclideanPartikel();
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
		// echo json_encode($get->result());
		// echo "<br>";
		// echo "<br>";
		echo json_encode($hasilGbest);
	}

	public function insertTranskasi()
	{
		$this->load->model(['Transaksi','MasterUser','MasterBarang']);
		// $image_barang01 = "https://www.static-src.com/wcsstore/Indraprastha/images/catalog/full//92/MTA-7451803/qnc_jelly_gamat_qnc_jelly_gamat_-_original_-_produk_bersertifikasi_bpom_-_halal_mui_full04_t3xzqxda.jpg ";
		// $image_barang02 = "https://d2qjkwm11akmwu.cloudfront.net/products/204601_29-12-2019_20-56-12.jpg ";
		// $image_barang03 = "https://images.tokopedia.net/img/cache/500-square/VqbcmM/2020/12/27/c3b797cc-2da1-4617-a6cd-b002e7ed7a46.jpg ";
		// $image_barang04 = "https://d2qjkwm11akmwu.cloudfront.net/products/142921_27-8-2019_13-11-26.jpg ";
		// $image_barang05 = "https://cf.shopee.co.id/file/3cc40a7b1cc8fe6b4a33b67afa71711f ";
		// $image_barang06 = "https://cf.shopee.co.id/file/208845c8b8f6f1973d5195c60b140c94 ";
		// $image_barang07 = "https://cf.shopee.co.id/file/a78ef0b59aa3ae5bc4dca72d1c5e8f8e ";
		// $image_barang08 = "https://cf.shopee.co.id/file/345e709e7417bd234a64fea5a3f395a5 ";
		// $image_barang09 = "https://images.tokopedia.net/img/cache/500-square/VqbcmM/2021/4/10/f37cf57c-d6c4-4904-be8a-aadbc64cd158.jpg ";
		// $image_barang10 = "https://cf.shopee.co.id/file/88cc46a0e7a6bd23fbdd6a182129d34a ";
		// $image_barang11 = "https://cf.shopee.co.id/file/c1795e0342534f3b9ad01f1bb4bb1aa6 ";
		// $image_barang12 = "https://cf.shopee.co.id/file/eebe508f33a860cf25e58b70f160709f ";
		// $image_barang13 = "https://www.google.com/url?sa=i&url=https%3A%2F%2Fwww.bukalapak.com%2Fp%2Fkesehatan-2359%2Fkesehatan-telinga%2Falat-bantu-dengar%2F48yp613-jual-berkhasiat-earplus-obat-herbal-telinga-berair-bernanah-termurah-sih&psig=AOvVaw1e4-xADTaOYvk0LrDXQgDc&ust=1647057098311000&source=images&cd=vfe&ved=0CAsQjRxqFwoTCMjm4P2TvfYCFQAAAAAdAAAAABAT ";
		// $image_barang14 = "https://www.static-src.com/wcsstore/Indraprastha/images/catalog/full//102/MTA-1563699/ash-shihhah_ash-shihhah-original-multi-khasiat-kapsul-ekstrak-daun-binahong--60-kapsul-_full03.jpg ";
		// $image_barang15 = "https://s3.bukalapak.com/img/38500952742/large/data.jpeg ";
		// $image_barang16 = "https://cf.shopee.co.id/file/d19e7162011dd55d178a8d43af31900f ";
		// $image_barang17 = "https://images.tokopedia.net/img/cache/500-square/VqbcmM/2021/2/24/b1f9a53e-eb4b-4c9d-82ec-cb5185d3101b.jpg ";
		// $image_barang18 = "https://cf.shopee.co.id/file/0010cb088c621c4eb59715aa1fa73e0f ";
		// $image_barang19 = "https://www.static-src.com/wcsstore/Indraprastha/images/catalog/full//99/MTA-2379285/naturafit_naturatik-50-kapsul-obat-asam-urat--nyeri-sendi---rematik-alami_full03.jpg ";

		$toko = $this->MasterUser->getAllToko();
		// print_r(count($toko));

		// echo "<br>";
		// die();
		// id_transaksi	'fk_user'
			// 'fk_barang'
			// 'harga'
			// 'diskon'
			// 'date_created'
			// deleted_by	date_deleted
			// image_name	fk_transaksi	fk_user
		for ($i=0; $i < count($toko); $i++) { 

			$banyak_barang = rand(10,19);
			$banyak = $this->db->query("select * from barang ORDER BY RAND() LIMIT ".$banyak_barang."")->result();
			$harga = $this->db->query("select * from pengurangan ORDER BY RAND()")->row();
			foreach ($banyak as $key) {
				// print_r($key->harga + $harga->harga);
				$data = array(
					'fk_user'	 	=> $i+1,
					'fk_barang' 	=> $key->id,
					'harga'			=> $key->harga + $harga->harga,
					'diskon'		=> 0,
					'date_created'	=> date('Y-m-d H:i:s')
				);
				$this->db->insert('tbt_transkasi', $data);
				$insert_id = $this->db->insert_id();

				$image = array(
					'image_name'	=> $key->image,
					'fk_transaksi' 	=> $insert_id,
					'fk_user'		=> $i+1,
				);
				$this->db->insert('tbm_image', $image);
				// echo "<br>";
			}

			// print_r($banyak_barang);
			// for ($k=0; $k < $banyak_barang; $k++) { 
			// 	print_r($k);
			// 	echo "<br>";
			// }
			// echo "<br>";
			// die();
			// print_r($i+1);
			
		}
	}
}
