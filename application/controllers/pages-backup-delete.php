<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pages extends CI_Controller {

	public function __construct(){
		parent:: __construct();
		$this->Validate_model->No_session();
		$this->Validate_model->Valid_register_home();
		$this->Validate_model->Verifikasi_akun();
		$this->load->model('Data_model');
		$this->load->model('Edit_model');

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
			$public = str_replace('-', '_', $params);

			$cekUser = $this->db->get_where('user', array(
				'email' => $this->session->userdata('email')
			));
			if ($params == 'view-all') {
				// code
			}else if ($params == 'perusahaan') {
				$data['getData'] = $this->db->get_where('perusahaan', array(
					'id_perusahaan' => $cekUser->first_row()->id_perusahaan
				));
				if ($this->input->post('edit')) {
					$this->Edit_model->$public();
				}

			}else if ($params == 'cabang') {
				$parseData = $this->Data_model->Cabang($cekUser);
				$data['getData'] = $parseData;
				
				// input
				if ($this->input->post('submit')) {
					$this->Data_model->Cabang_Add($cekUser);
				}// end input

				$data['edit'] = 0;
				// edit
				if (isset($_GET['type']) && $_GET['type'] == 'edit'){
					$getEdit = $this->db->get_where('cabang', array(
						'id_cabang' => $_GET['id'],
						'id_perusahaan' => $_GET['ip'],
					));
					$data['edit'] = 1;
					if ($getEdit->num_rows() == 1) {
						$data['getEdit'] = $getEdit->first_row();
						if ($this->input->post('edit')) {
							$this->Edit_model->$public();
						}
					}else{
						redirect(base_url('data/cabang'));
					}
				}// end edit

				// delete
				if (isset($_GET['type']) && $_GET['type'] == 'delete'){
					$getEdit = $this->db->get_where('cabang', array(
						'id_cabang' => $_GET['id'],
						'id_perusahaan' => $_GET['ip'],
					));
					
					if ($getEdit->num_rows() == 1) {
						$delete = $this->db->delete('cabang', array(
							'id_cabang' => $_GET['id'],
							'id_perusahaan' => $_GET['ip'],
						));
						redirect(base_url('data/cabang?delete-success'));
					}else{
						redirect(base_url('data/cabang'));
					}
				}
				// end delete

			}else if ($params == 'direksi') {

				$parseData = $this->Data_model->Direksi($cekUser);
				$data['getData'] = $parseData;
			
				if ($this->input->post('submit')) {
					$this->Data_model->Direksi_Add($cekUser);
				}

				// edit
				$data['edit'] = 0;
				if (isset($_GET['type']) && $_GET['type'] == 'edit'){
					$getEdit = $this->db->get_where('direksi', array(
						'id_direksi' => $_GET['id'],
						'id_perusahaan' => $_GET['ip'],
					));
					$data['edit'] = 1;
					if ($getEdit->num_rows() == 1) {
						$data['getEdit'] = $getEdit->first_row();
						if ($this->input->post('edit')) {
							$this->Edit_model->$public();
						}
					}else{
						redirect(base_url('data/direksi'));
					}
				}// end edit

				// delete
				if (isset($_GET['type']) && $_GET['type'] == 'delete'){
					$getEdit = $this->db->get_where('direksi', array(
						'id_direksi' => $_GET['id'],
						'id_perusahaan' => $_GET['ip'],
					));
					if ($getEdit->num_rows() == 1) {
						$delete = $this->db->delete('direksi', array(
							'id_direksi' => $_GET['id'],
							'id_perusahaan' => $_GET['ip'],
						));
						redirect(base_url('data/direksi?delete-success'));
					}else{
						redirect(base_url('data/direksi'));
					}
				}
				// end delete


			}else if ($params == 'komisaris') {
				$parseData = $this->Data_model->Komisaris($cekUser);
				$data['getData'] = $parseData;

				if ($this->input->post('submit')) {
					$this->Data_model->Komisaris_Add($cekUser);
				}
				// edit
				$data['edit'] = 0;
				if (isset($_GET['type']) && $_GET['type'] == 'edit'){
					$getEdit = $this->db->get_where('komisaris', array(
						'id_komisaris' => $_GET['id'],
						'id_perusahaan' => $_GET['ip'],
					));
					$data['edit'] = 1;
					if ($getEdit->num_rows() == 1) {
						$data['getEdit'] = $getEdit->first_row();
						if ($this->input->post('edit')) {
							$this->Edit_model->$public();
						}
					}else{
						redirect(base_url('data/komisaris'));
					}
				}// end edit

				// delete
				if (isset($_GET['type']) && $_GET['type'] == 'delete'){
					$getEdit = $this->db->get_where('komisaris', array(
						'id_komisaris' => $_GET['id'],
						'id_perusahaan' => $_GET['ip'],
					));
					if ($getEdit->num_rows() == 1) {
						$delete = $this->db->delete('komisaris', array(
							'id_komisaris' => $_GET['id'],
							'id_perusahaan' => $_GET['ip'],
						));
						redirect(base_url('data/komisaris?delete-success'));
					}else{
						redirect(base_url('data/komisaris'));
					}
				}
				// end delete

			}else if ($params == 'pemegang-saham') {
				$parseData = $this->Data_model->Pemegang_saham($cekUser);
				$data['getData'] = $parseData;

				if ($this->input->post('submit')) {
					$this->Data_model->Pemegang_saham_Add($cekUser);
				}

				// edit
				$data['edit'] = 0;
				if (isset($_GET['type']) && $_GET['type'] == 'edit'){
					$getEdit = $this->db->get_where('pemegang_saham', array(
						'id_pemegang_saham' => $_GET['id'],
						'id_perusahaan' => $_GET['ip'],
					));
					$data['edit'] = 1;
					if ($getEdit->num_rows() == 1) {
						$data['getEdit'] = $getEdit->first_row();
						if ($this->input->post('edit')) {
							$this->Edit_model->$public();
						}
					}else{
						redirect(base_url('data/pemegang-saham'));
					}
				}// end edit

				// delete
				if (isset($_GET['type']) && $_GET['type'] == 'delete'){
					$getEdit = $this->db->get_where('pemegang_saham', array(
						'id_pemegang_saham' => $_GET['id'],
						'id_perusahaan' => $_GET['ip'],
					));
					if ($getEdit->num_rows() == 1) {
						$delete = $this->db->delete('pemegang_saham', array(
							'id_pemegang_saham' => $_GET['id'],
							'id_perusahaan' => $_GET['ip'],
						));
						redirect(base_url('data/pemegang-saham?delete-success'));
					}else{
						redirect(base_url('data/pemegang-saham'));
					}
				}
				// end delete
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
			// redirect(base_url('data/view-all'));
			redirect(base_url('data/perusahaan'));
		}
	}


	public function Proyek($params = null, $subparams = null){
		$data['title'] = 'Proyek';
		$urlArray = array(
			'1' => 'list-proyek',
			'2' => 'nama-proyek',
			'3' => 'izin-prinsip',
			'4' => 'data-fisik',
			'5' => 'jasa-lainnya',
		);

		$subArray = array(
			'1' => 'add',
		);

		$cekUser = $this->db->get_where('user', array(
			'email' => $this->session->userdata('email')
		));

		if (in_array($params, $urlArray) && $params != null) {
			$data['subtitle'] = str_replace('-', ' ', $params);
			$public = str_replace('-', '_', $params);
			
			if ($params == 'list-proyek') {
				
				$this->db->select('*');
				$this->db->from('proyek_realestat');
				$this->db->where('proyek_realestat.id_perusahaan', $cekUser->first_row()->id_perusahaan);
				$this->db->join('izin_prinsip', 'izin_prinsip.id_proyek_realestat = proyek_realestat.id_proyek_realestat');
				// $this->db->join('data_fisik', 'data_fisik.id_proyek_realestat = proyek_realestat.id_proyek_realestat');
				$data['getData'] = $this->db->get();

			}else if ($params == 'nama-proyek') {
				$data['getData'] = $this->db->get_where('proyek_realestat', array(
					'id_perusahaan' => $cekUser->first_row()->id_perusahaan,
				));
				if ($this->input->post('submit')) {
					$insert = $this->db->insert('proyek_realestat', array(
						'id_perusahaan' => $cekUser->first_row()->id_perusahaan,
						'nama_proyek_realestat' => $this->input->post('nama_proyek_realestat'),
						'alamat_proyek_realestat' => $this->input->post('alamat_proyek_realestat'),
						'status_proyek_realestat' => $this->input->post('status_proyek_realestat'),
						'nama_pengembang' => $this->input->post('nama_pengembang'),
						'kesamaan_proyek' => $this->input->post('kesamaan_proyek'),
					));
					redirect(base_url('proyek/'.$params.'?success'));
				}

				// edit
				$data['edit'] = 0;
				if (isset($_GET['type']) && $_GET['type'] == 'edit'){
					$getEdit = $this->db->get_where('proyek_realestat', array(
						'id_proyek_realestat' => $_GET['id'],
						'id_perusahaan' => $_GET['ip'],
					));
					$data['edit'] = 1;
					if ($getEdit->num_rows() == 1) {
						$data['getEdit'] = $getEdit->first_row();
						if ($this->input->post('edit')) {
							$this->Edit_model->$public();
						}
					}else{
						redirect(base_url('proyek/'.$params));
					}
				}// end edit

				// delete
				if (isset($_GET['type']) && $_GET['type'] == 'delete'){
					$getEdit = $this->db->get_where('proyek_realestat', array(
						'id_proyek_realestat' => $_GET['id'],
						'id_perusahaan' => $_GET['ip'],
					));
					
					if ($getEdit->num_rows() == 1) {
						$delete = $this->db->delete('proyek_realestat', array(
							'id_proyek_realestat' => $_GET['id'],
							'id_perusahaan' => $_GET['ip'],
						));
						redirect(base_url('proyek/'.$params.'?delete-success'));
					}else{
						redirect(base_url('proyek/'.$params));
					}
				}
				// end delete


			}else if ($params == 'izin-prinsip') {
				$data['getData'] = $this->db->get_where('izin_prinsip', array(
					'id_perusahaan' => $cekUser->first_row()->id_perusahaan,
				));
				if ($this->input->post('submit')) {
					$cekProyek = $this->db->get_where('proyek_realestat', array(
						'id_proyek_realestat' => $this->input->post('id_proyek_realestat'),
						'id_perusahaan' => $cekUser->first_row()->id_perusahaan,
					));
					if ($cekProyek->num_rows() == 1) {
						$insert = $this->db->insert('izin_prinsip', array(
							'id_proyek_realestat' => $cekProyek->first_row()->id_proyek_realestat,
							'id_perusahaan' => $cekUser->first_row()->id_perusahaan,
							'nama_izinprinsip' => $this->input->post('nama_izinprinsip'),
							'no_izinprinsip' => $this->input->post('no_izinprinsip'),
							'tgl_izinprinsip' => $this->input->post('tgl_izinprinsip'),
							'pemberi_izinprinsip' => $this->input->post('pemberi_izinprinsip'),
						));
						redirect(base_url('proyek/'.$params.'?success'));
					}else{
						redirect(base_url('proyek/'.$params.'?failed'));
					}
				}

				// edit
				$data['edit'] = 0;
				if (isset($_GET['type']) && $_GET['type'] == 'edit'){
					$getEdit = $this->db->get_where('izin_prinsip', array(
						'id_izinprinsip' => $_GET['id'],
						'id_perusahaan' => $_GET['ip'],
					));
					$data['edit'] = 1;
					if ($getEdit->num_rows() == 1) {
						$data['getEdit'] = $getEdit->first_row();
						if ($this->input->post('edit')) {
							$this->Edit_model->$public();
						}
					}else{
						redirect(base_url('proyek/'.$params));
					}
				}// end edit

				// delete
				if (isset($_GET['type']) && $_GET['type'] == 'delete'){
					$getEdit = $this->db->get_where('izin_prinsip', array(
						'id_izinprinsip' => $_GET['id'],
						'id_perusahaan' => $_GET['ip'],
					));
					
					if ($getEdit->num_rows() == 1) {
						$delete = $this->db->delete('izin_prinsip', array(
							'id_izinprinsip' => $_GET['id'],
							'id_perusahaan' => $_GET['ip'],
						));
						redirect(base_url('proyek/'.$params.'?delete-success'));
					}else{
						redirect(base_url('proyek/'.$params));
					}
				}
				// end delete


			}else if ($params == 'data-fisik') {
				$data['getData'] = $this->db->get_where('data_fisik', array(
					'id_perusahaan' => $cekUser->first_row()->id_perusahaan,
				));
				if ($this->input->post('submit')) {
					$cekProyek = $this->db->get_where('proyek_realestat', array(
						'id_proyek_realestat' => $this->input->post('id_proyek_realestat'),
						'id_perusahaan' => $cekUser->first_row()->id_perusahaan,
					));
					if ($cekProyek->num_rows() == 1) {
						$insert = $this->db->insert('data_fisik', array(
							'id_proyek_realestat' => $cekProyek->first_row()->id_proyek_realestat,
							'id_perusahaan' => $cekUser->first_row()->id_perusahaan,
							'klasifikasi' => $this->input->post('klasifikasi'),
							'luasan_unit' => $this->input->post('luasan_unit'),
							'jumlah_unit' => $this->input->post('jumlah_unit'),
							'harga_jual' => $this->input->post('harga_jual'),
						));
						redirect(base_url('proyek/'.$params.'?success'));
					}else{
						redirect(base_url('proyek/'.$params.'?failed'));
					}
				}

				// edit
				$data['edit'] = 0;
				if (isset($_GET['type']) && $_GET['type'] == 'edit'){
					$getEdit = $this->db->get_where('data_fisik', array(
						'id_data_fisik' => $_GET['id'],
						'id_perusahaan' => $_GET['ip'],
					));
					$data['edit'] = 1;
					if ($getEdit->num_rows() == 1) {
						$data['getEdit'] = $getEdit->first_row();
						if ($this->input->post('edit')) {
							$this->Edit_model->$public();
						}
					}else{
						redirect(base_url('proyek/'.$params));
					}
				}// end edit

				// delete
				if (isset($_GET['type']) && $_GET['type'] == 'delete'){
					$getEdit = $this->db->get_where('data_fisik', array(
						'id_data_fisik' => $_GET['id'],
						'id_perusahaan' => $_GET['ip'],
					));
					
					if ($getEdit->num_rows() == 1) {
						$delete = $this->db->delete('data_fisik', array(
							'id_data_fisik' => $_GET['id'],
							'id_perusahaan' => $_GET['ip'],
						));
						redirect(base_url('proyek/'.$params.'?delete-success'));
					}else{
						redirect(base_url('proyek/'.$params));
					}
				}
				// end delete

			}else if ($params == 'jasa-lainnya') {
				$data['getData'] = $this->db->get_where('proyek_jasa', array(
					'id_perusahaan' => $cekUser->first_row()->id_perusahaan,
				));

				if ($this->input->post('submit')) {
					$insert = $this->db->insert('proyek_jasa', array(
						'id_perusahaan' => $cekUser->first_row()->id_perusahaan,
						'nama_jasa' => $this->input->post('nama_jasa'),
						'deskripsi_jasa' => $this->input->post('deskripsi_jasa'),
					));
					redirect(base_url('proyek/'.$params.'?success'));
				}	

				// edit
				$data['edit'] = 0;
				if (isset($_GET['type']) && $_GET['type'] == 'edit'){
					$getEdit = $this->db->get_where('proyek_jasa', array(
						'id_proyek_jasa' => $_GET['id'],
						'id_perusahaan' => $_GET['ip'],
					));
					$data['edit'] = 1;
					if ($getEdit->num_rows() == 1) {
						$data['getEdit'] = $getEdit->first_row();
						if ($this->input->post('edit')) {
							$this->Edit_model->$public();
						}
					}else{
						redirect(base_url('proyek/'.$params));
					}
				}// end edit

				// delete
				if (isset($_GET['type']) && $_GET['type'] == 'delete'){
					$getEdit = $this->db->get_where('proyek_jasa', array(
						'id_proyek_jasa' => $_GET['id'],
						'id_perusahaan' => $_GET['ip'],
					));
					
					if ($getEdit->num_rows() == 1) {
						$delete = $this->db->delete('proyek_jasa', array(
							'id_proyek_jasa' => $_GET['id'],
							'id_perusahaan' => $_GET['ip'],
						));
						redirect(base_url('proyek/'.$params.'?delete-success'));
					}else{
						redirect(base_url('proyek/'.$params));
					}
				}
				// end delete
			}


			

			if ($subparams == null) {
				$templates['contents'] = $this->load->view('pages/dashboard/proyek/'.$params, $data, TRUE);

			}else if (in_array($subparams, $subArray)) {
				$templates['contents'] = $this->load->view('pages/dashboard/proyek/'.$params.'-'.$subparams, $data, TRUE);
			}else{
				redirect(base_url('proyek/list-proyek'));
			}
			$this->load->view('pages/dashboard/master', $templates);
		}else{
			redirect(base_url('proyek/list-proyek'));
		}
	
	}


	public function Account(){
		$data['title'] = 'Account';
		$data['subtitle'] = $this->session->userdata('name');

		$data['getProfile'] = $this->db->get_where('user', array('email' => $this->session->userdata('email')));

		$templates['contents'] = $this->load->view('pages/dashboard/account/index', $data, TRUE);
		$this->load->view('pages/dashboard/master', $templates);

		// changePass
		if ($this->input->post('changePass')) {
			$this->Edit_pass();
		}// end changePass
		
		// edit profile
		if ($this->input->post('editProfile')) {
			$this->Edit_profile();
		}// end cedit profile

	}
	
	private function Edit_profile(){
		$cekPro = $this->db->get_where('user', array(
			'email' => $this->session->userdata('email')
		));
		if ($cekPro->num_rows() == 1 ) {

			$this->db->where('email', $this->session->userdata('email'));
			$this->db->update('user', array(
				'name' => $this->input->post('name'),
				'tlp' => $this->input->post('tlp'),
			));

			$sessionuser = array(
				'name' => $this->input->post('name'),
			);
			$this->session->set_userdata($sessionuser);

			redirect(base_url('account?success'));
			
		}else{
			redirect(base_url('account?failed'));
		}
	}


	private function Edit_pass(){
		$cekPass = $this->db->get_where('user', array(
			'password' => md5($this->input->post('currentpass')),
			'email' => $this->session->userdata('email')
		));
		if ($cekPass->num_rows() == 1 && $this->input->post('newpass') == $this->input->post('verifypass')) {

			$this->db->where('email', $this->session->userdata('email'));
			$this->db->where('password', md5($this->input->post('currentpass')));
			$this->db->update('user', array(
				'password' => md5($this->input->post('newpass'))
			));
			redirect(base_url('account?password-success'));
			
		}else{
			redirect(base_url('account?password-failed'));
		}
	}


	public function Info($params = null){
		$data['title'] = 'Info';
		$data['subtitle'] = 'Info';
		$templates['contents'] = $this->load->view('pages/dashboard/info/index', $data, TRUE);
		$this->load->view('pages/dashboard/master', $templates);
	}



	
}
