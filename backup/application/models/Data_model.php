<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Data_model extends CI_Model {



	public function Cabang($cekUser){
		
		$this->db->order_by('id_cabang', 'desc');
		$parseData = $this->db->get_where('cabang', array(
			'id_perusahaan' => $cekUser->first_row()->id_perusahaan
		));

		return $parseData;
	}
	public function Cabang_Add($cekUser){
		$insert = $this->db->insert('cabang', array(
			'id_perusahaan' => $cekUser->first_row()->id_perusahaan,
			'nama_cabang' => $this->input->post('nama_cabang'),
			'alamat_cabang' => $this->input->post('alamat_cabang'),
			'npwp_cabang' => $this->input->post('npwp_cabang'),
			'website_cabang' => $this->input->post('website_cabang'),
			'email_cabang' => $this->input->post('email_cabang'),
			'telp_cabang' => $this->input->post('telp_cabang'),
			'fax_cabang' => $this->input->post('fax_cabang'),
			'bid_usaha_cabang' => $this->input->post('bid_usaha_cabang'),
		));
		redirect(base_url('data/cabang?success'));
	}

	public function Direksi($cekUser){
		
		$this->db->order_by('id_direksi', 'desc');
		$parseData = $this->db->get_where('direksi', array(
			'id_perusahaan' => $cekUser->first_row()->id_perusahaan
		));

		return $parseData;
	}
	public function Direksi_Add($cekUser){
		$insert = $this->db->insert('direksi', array(
			'id_perusahaan' => $cekUser->first_row()->id_perusahaan,
			'nama_direksi' => $this->input->post('nama_direksi'),
			'jabatan_direksi' => $this->input->post('jabatan_direksi'),
		));
		redirect(base_url('data/direksi?success'));
	}


	public function Komisaris($cekUser){
		
		$this->db->order_by('id_komisaris', 'desc');
		$parseData = $this->db->get_where('komisaris', array(
			'id_perusahaan' => $cekUser->first_row()->id_perusahaan
		));

		return $parseData;
	}
	public function Komisaris_Add($cekUser){
		$insert = $this->db->insert('komisaris', array(
			'id_perusahaan' => $cekUser->first_row()->id_perusahaan,
			'nama_komisaris' => $this->input->post('nama_komisaris'),
			'jabatan_komisaris' => $this->input->post('jabatan_komisaris'),
		));
		redirect(base_url('data/komisaris?success'));
	}

	public function Pemegang_saham($cekUser){
		
		$this->db->order_by('id_pemegang_saham', 'desc');
		$parseData = $this->db->get_where('pemegang_saham', array(
			'id_perusahaan' => $cekUser->first_row()->id_perusahaan
		));

		return $parseData;
	}
	public function Pemegang_saham_Add($cekUser){
		$insert = $this->db->insert('pemegang_saham', array(
			'id_perusahaan' => $cekUser->first_row()->id_perusahaan,
			'nama_pemegang_saham' => $this->input->post('nama_pemegang_saham'),
		));
		redirect(base_url('data/pemegang-saham?success'));
	}









}
