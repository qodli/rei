<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Edit_model extends CI_Model {

	public function __construct(){
		parent:: __construct();
		if (isset($_GET['type']) && $_GET['type'] == 'edit') {
			$cekUser = $this->db->get_where('user', array(
				'id_perusahaan' => $_GET['ip'],
				'email' => base64_decode($_GET['m']),
			));
			if ($cekUser->num_rows() == 0) {
				redirect(base_url());	
			}
		}

	}
	public function perusahaan(){
		$cekUser = $this->db->get_where('user', array('email' => $this->session->userdata('email')));
		$this->db->where('id_perusahaan', $cekUser->first_row()->id_perusahaan);
		$this->db->update('perusahaan', array(
			'no_anggota_rei' => $this->input->post('no_anggota_rei'),
			'nama_perusahaan' => $this->input->post('nama_perusahaan'),
			'alamat_perusahaan' => $this->input->post('alamat_perusahaan'),
			'rt_rw' => $this->input->post('rt_rw'),
			'kelurahan_desa' => $this->input->post('kelurahan_desa'),
			'kecamatan' => $this->input->post('kecamatan'),
			'kota_kabupaten' => $this->input->post('kota_kabupaten'),
			'kodepos' => $this->input->post('kodepos'),
			'rei_provinsi' => $this->input->post('rei_provinsi'),
			'nama_rei_daerah' => $this->input->post('nama_rei_daerah'),
			'email_perusahaan' => $this->input->post('email_perusahaan'),
			'telp_perusahaan' => $this->input->post('telp_perusahaan'),
			'fax_perusahaan' => $this->input->post('fax_perusahaan'),
			'npwp_perusahaan' => $this->input->post('npwp_perusahaan'),
			'website_perusahaan' => $this->input->post('website_perusahaan'),
			'jenis_bidang_usaha_perusahaan' => $this->input->post('jenis_bidang_usaha_perusahaan'),
		));
		redirect(base_url('data/perusahaan?edit-success'));
	}

	public function cabang(){
		
		
			$this->db->where('id_cabang', $_GET['id']);
			$this->db->where('id_perusahaan', $_GET['ip']);
			$this->db->update('cabang', array(
				'nama_cabang' => $this->input->post('nama_cabang'),
				'alamat_cabang' => $this->input->post('alamat_cabang'),
				'npwp_cabang' => $this->input->post('npwp_cabang'),
				'website_cabang' => $this->input->post('website_cabang'),
				'email_cabang' => $this->input->post('email_cabang'),
				'telp_cabang' => $this->input->post('telp_cabang'),
				'fax_cabang' => $this->input->post('fax_cabang'),
				'bid_usaha_cabang' => $this->input->post('bid_usaha_cabang'),
			));
			redirect(base_url('data/cabang?edit-success'));

		
	}
	
	

	public function direksi(){

		$this->db->where('id_direksi', $_GET['id']);
		$this->db->where('id_perusahaan', $_GET['ip']);
		$this->db->update('direksi', array(
			'nama_direksi' => $this->input->post('nama_direksi'),
			'jabatan_direksi' => $this->input->post('jabatan_direksi'),
		));
		redirect(base_url('data/direksi?edit-success'));
	}


	public function komisaris(){

		$this->db->where('id_komisaris', $_GET['id']);
		$this->db->where('id_perusahaan', $_GET['ip']);
		$this->db->update('komisaris', array(
			'nama_komisaris' => $this->input->post('nama_komisaris'),
			'jabatan_komisaris' => $this->input->post('jabatan_komisaris'),
		));
		redirect(base_url('data/komisaris?edit-success'));
	}

	public function pemegang_saham(){
		$this->db->where('id_pemegang_saham', $_GET['id']);
		$this->db->where('id_perusahaan', $_GET['ip']);
		$this->db->update('pemegang_saham', array(
			'nama_pemegang_saham' => $this->input->post('nama_pemegang_saham'),
		));
		redirect(base_url('data/pemegang_saham?edit-success'));
	}
	
	public function jasa_lainnya(){
		$this->db->where('id_proyek_jasa', $_GET['id']);
		$this->db->where('id_perusahaan', $_GET['ip']);
		$this->db->update('proyek_jasa', array(
			'nama_jasa' => $this->input->post('nama_jasa'),
			'deskripsi_jasa' => $this->input->post('deskripsi_jasa'),
		));
		redirect(base_url('proyek/jasa-lainnya?edit-success'));
	}


	public function nama_proyek(){
		$this->db->where('id_proyek_realestat', $_GET['id']);
		$this->db->where('id_perusahaan', $_GET['ip']);
		$this->db->update('proyek_realestat', array(
			'nama_proyek_realestat' => $this->input->post('nama_proyek_realestat'),
			'alamat_proyek_realestat' => $this->input->post('alamat_proyek_realestat'),
			'status_proyek_realestat' => $this->input->post('status_proyek_realestat'),
			'nama_pengembang' => $this->input->post('nama_pengembang'),
			'kesamaan_proyek' => $this->input->post('kesamaan_proyek'),
		));
		redirect(base_url('proyek/nama-proyek?edit-success'));
	}


	public function izin_prinsip(){
		$this->db->where('id_izinprinsip', $_GET['id']);
		$this->db->where('id_perusahaan', $_GET['ip']);
		$this->db->update('izin_prinsip', array(
			'nama_izinprinsip' => $this->input->post('nama_izinprinsip'),
			'no_izinprinsip' => $this->input->post('no_izinprinsip'),
			'tgl_izinprinsip' => $this->input->post('tgl_izinprinsip'),
			'pemberi_izinprinsip' => $this->input->post('pemberi_izinprinsip'),
		));
		redirect(base_url('proyek/izin-prinsip?edit-success'));
	}

	public function data_fisik(){
		$this->db->where('id_data_fisik', $_GET['id']);
		$this->db->where('id_perusahaan', $_GET['ip']);
		$this->db->update('data_fisik', array(
			'klasifikasi' => $this->input->post('klasifikasi'),
			'luasan_unit' => $this->input->post('luasan_unit'),
			'jumlah_unit' => $this->input->post('jumlah_unit'),
			'harga_jual' => $this->input->post('harga_jual'),
		));
		redirect(base_url('proyek/data-fisik?edit-success'));
	}








}
