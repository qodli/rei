<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pages extends CI_Controller {

	public function __construct(){
		parent:: __construct();
		$this->Validate_model->No_session();
		$this->Validate_model->Valid_register_home();
	}
	
	public function index(){		
		$data['title'] = 'Dashboard';
		$data['subtitle'] = 'Dashboard';

		$this->db->select('user.id, user.email, perusahaan.*');
		$this->db->from('user');
		$this->db->where('email', $this->session->userdata('email'));
		$this->db->join('perusahaan', 'perusahaan.id_user = user.id');
		$data['getData'] = $this->db->get();

		$templates['contents'] = $this->load->view('pages/dashboard/home', $data, TRUE);
		$this->load->view('pages/dashboard/master', $templates);
	}

	public function Data($params = null, $subparams = null){	
		$data['title'] = 'Data';
		$urlArray = array(
			'1' => 'view-all',
			'2' => 'perusahaan',
			'3' => 'cabang',
			'4' => 'direksi',
			'5' => 'komisaris',
			'6' => 'pemegang-saham',
		);
		$subArray = array(
			'1' => 'add',
		);


		if (in_array($params, $urlArray) && $params != null) {

			$data['subtitle'] = str_replace('-', ' ', $params);
			$cekUser = $this->db->get_where('user', array(
				'email' => $this->session->userdata('email')
			));
			if ($params == 'perusahaan') {
				$data['getData'] = $this->db->get_where('perusahaan', array(
					'id_perusahaan' => $cekUser->first_row()->id_perusahaan
				));

			}else if ($params == 'cabang') {
				$this->db->order_by('id_cabang', 'desc');
				$data['getData'] = $this->db->get_where('cabang', array(
					'id_perusahaan' => $cekUser->first_row()->id_perusahaan
				));
				// input
				if ($this->input->post('submit')) {
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
				// end input
				
			}else if ($params == 'direksi') {
				$this->db->order_by('id_direksi', 'desc');
				$data['getData'] = $this->db->get_where('direksi', array(
					'id_perusahaan' => $cekUser->first_row()->id_perusahaan
				));

				if ($this->input->post('submit')) {
					$insert = $this->db->insert('direksi', array(
						'id_perusahaan' => $cekUser->first_row()->id_perusahaan,
						'nama_direksi' => $this->input->post('nama_direksi'),
						'jabatan_direksi' => $this->input->post('jabatan_direksi'),
					));
					redirect(base_url('data/direksi?success'));
				}
			}else if ($params == 'komisaris') {
				$this->db->order_by('id_komisaris', 'desc');
				$data['getData'] = $this->db->get_where('komisaris', array(
					'id_perusahaan' => $cekUser->first_row()->id_perusahaan
				));

				if ($this->input->post('submit')) {
					$insert = $this->db->insert('komisaris', array(
						'id_perusahaan' => $cekUser->first_row()->id_perusahaan,
						'nama_komisaris' => $this->input->post('nama_komisaris'),
						'jabatan_komisaris' => $this->input->post('jabatan_komisaris'),
					));
					redirect(base_url('data/komisaris?success'));
				}
			}else if ($params == 'pemegang-saham') {
				$this->db->order_by('id_pemegang_saham', 'desc');
				$data['getData'] = $this->db->get_where('pemegang_saham', array(
					'id_perusahaan' => $cekUser->first_row()->id_perusahaan
				));
				if ($this->input->post('submit')) {
					$insert = $this->db->insert('pemegang_saham', array(
						'id_perusahaan' => $cekUser->first_row()->id_perusahaan,
						'nama_pemegang_saham' => $this->input->post('nama_pemegang_saham'),
					));
					redirect(base_url('data/pemegang-saham?success'));
				}
			}
			
			if ($subparams == null) {
				$templates['contents'] = $this->load->view('pages/dashboard/data/'.$params, $data, TRUE);
			}else if (in_array($subparams, $subArray)) {
				$templates['contents'] = $this->load->view('pages/dashboard/data/'.$params.'-'.$subparams, $data, TRUE);
			}else{
				redirect(base_url('data'));
			}


			$this->load->view('pages/dashboard/master', $templates);

			}else{
				redirect(base_url('data/view-all'));
			}
		}


	public function Proyek($params = null){		
		$data['title'] = 'Proyek';
		$urlArray = array(
			'1' => 'terdaftar',
			'2' => 'akan-datang',
		);

		if (in_array($params, $urlArray) && $params != null) {
			$data['subtitle'] = $params;
			if ($params == 'terdaftar') {
				$cekUser = $this->db->get_where('user', array('email' => $this->session->userdata('email')));
				$this->db->select('*');
				$this->db->from('user');
				$this->db->where('id', $cekUser->first_row()->id);
				$this->db->join('komite_perusahaan', 'komite_perusahaan.id_user = user.id');
				$data['getDb'] = $this->db->get();
			}

			$templates['contents'] = $this->load->view('pages/dashboard/proyek/'.$params, $data, TRUE);
			$this->load->view('pages/dashboard/master', $templates);
		}else{
			redirect(base_url('proyek/terdaftar'));
		}


	}



	
}
