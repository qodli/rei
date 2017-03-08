<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Register_model extends CI_Model {

	public function __construct(){
		parent:: __construct();
	}


	public function Register(){
		$cekUser = $this->db->get_where('user', array(
			'email' => $this->input->post('email')
		));
		if ($cekUser->num_rows() == 0) {
			$insert = $this->db->insert('user', array(
				'nama' => $this->input->post('name'),
				'email' => $this->input->post('email'),
				'password' => md5($this->input->post('password')),
				'tlp' => $this->input->post('tlp'),
				'log_login' => date('Y-m-d H:i:s'),
				'step_register' => 1,
				'code_verification' => substr(md5(uniqid(mt_rand(), true)), 0, 50),
				'verification' => 0,
				'date_verification' => date('Y-m-d H:i:s'),
			));

			$sessionuser = array(
				'name' => $this->input->post('name'),
				'email' =>  $this->input->post('email'),
			);

			$this->session->set_userdata($sessionuser);
			// redirect(base_url('register/1'));
			redirect(base_url('verifikasi'));
		}else{
			redirect(base_url('register?email-tersedia'));
		}

	}	


	public function Register_1(){

		$cekUser = $this->db->get_where('user', array('email' => $this->session->userdata('email')));
		$inputDB = $this->db->insert('perusahaan', array(
			'id_user' => $cekUser->first_row()->id_user,
			'nama_perusahaan' => implode('|', $this->input->post('nama_perusahaan')),
			'skala_pengembang' => implode('|', $this->input->post('skala_pengembang')),
			'kota' => $_POST[kota],
			'provinsi' => $_POST[provinsi],
			'dpd_rei' => implode('|', $this->input->post('dpd_rei')),
			'alamat' => implode('|', $this->input->post('alamat')),
			'rtrw' => implode('|', $this->input->post('rtrw')),
			'kelurahan' => implode('|', $this->input->post('kelurahan')),
			'kecamatan' => implode('|', $this->input->post('kecamatan')),
			'kodepos' => implode('|', $this->input->post('kodepos')),
			'npwp' => implode('|', $this->input->post('npwp')),
			'tlp' => implode('|', $this->input->post('tlp')),
			'fax' => implode('|', $this->input->post('fax')),
			'email' => implode('|', $this->input->post('email')),


			
		));

		sleep(3);
		$cekPerusahaan = $this->db->get_where('perusahaan', array('id_user' => $cekUser->first_row()->id));
		$this->db->where('email', $this->session->userdata('email'));
		$this->db->update('user', array(
			'step_register' => $cekUser->first_row()->step_register + 1, 
			'id_perusahaan' => $cekPerusahaan->first_row()->id_perusahaan,
		));
		redirect(base_url('register/'.$cekUser->first_row()->step_register.+1));

	}	


	public function Register_2(){

		// $this->db->select('user.id, user.email, perusahaan.id_perusahaan');
		// $this->db->from('user');
		// $this->db->where('email', $this->session->userdata('email'));
		// $this->db->join('perusahaan', 'perusahaan.id_user = user.id');
		$getUser = $this->db->get_where('user', array(
			'email' => $this->session->userdata('email'),
		));

		$inputDireksi = $this->db->insert('direksi', array(
			'id_perusahaan' => $getUser->first_row()->id_perusahaan,
			'nama_direksi' => implode('|', $this->input->post('nama_direksi')),
			'jabatan_direksi' => implode('|', $this->input->post('jabatan_direksi')),
		));
		$inputkomisaris = $this->db->insert('komisaris', array(
			'id_perusahaan' => $getUser->first_row()->id_perusahaan,
			'nama_komisaris' => implode('|', $this->input->post('nama_komisaris')),
			'jabatan_komisaris' => implode('|', $this->input->post('jabatan_komisaris')),
		));

		$inputSaham = $this->db->insert('pemegang_saham', array(
			'id_perusahaan' => $getUser->first_row()->id_perusahaan,
			'nama_pemegang_saham' => implode('|', $this->input->post('klasifikasi_perusahaan')),
		));




		$this->db->where('id_perusahaan', $getUser->first_row()->id);
		$this->db->update('perusahaan', array(
			'klasifikasi_perusahaan' => implode('|', $this->input->post('klasifikasi_perusahaan')),
		));


		$cekUser = $this->db->get_where('user', array('email' => $this->session->userdata('email')));
		$this->db->where('email', $this->session->userdata('email'));
		$this->db->update('user', array('step_register' => $cekUser->first_row()->step_register + 1));
		redirect(base_url('register/'.$cekUser->first_row()->step_register.+1));


	}

	public function Register_3(){
		// $this->db->select('user.id, user.email, perusahaan.id_perusahaan');
		// $this->db->from('user');
		// $this->db->where('email', $this->session->userdata('email'));
		// $this->db->join('perusahaan', 'perusahaan.id_user = user.id');
		// $getUser = $this->db->get();
		$getUser = $this->db->get_where('user', array(
			'email' => $this->session->userdata('email'),
		));


		$cekUser = $this->db->get_where('user', array('email' => $this->session->userdata('email')));
		$inputDB = $this->db->insert('pemberi_rekomendasi', array(
			'id_perusahaan' => $getUser->first_row()->id_perusahaan,
			'nama_perusahaan_pemberi_rekomendasi_1' => $this->input->post('nama_perusahaan_pemberi_rekomendasi_1'),
			'nama_perusahaan_pemberi_rekomendasi_2' => $this->input->post('nama_perusahaan_pemberi_rekomendasi_2'),
		));

		$this->db->where('email', $this->session->userdata('email'));
		$this->db->update('user', array('step_register' => $cekUser->first_row()->step_register + 1));
		redirect(base_url('register/'.$cekUser->first_row()->step_register.+1));
	}

	public function Register_4(){
		$getUser = $this->db->get_where('user', array(
			'email' => $this->session->userdata('email'),
		));

		
		$cekUser = $this->db->get_where('user', array('email' => $this->session->userdata('email')));


		$this->db->where('email', $this->session->userdata('email'));
		$this->db->update('user', array('step_register' => $cekUser->first_row()->step_register + 1));
		redirect(base_url('register/'.$cekUser->first_row()->step_register.+1));

	}

	// public function Register_4(){
	// 	$cekUser = $this->db->get_where('user', array('email' => $this->session->userdata('email')));
	// 	$inputDB = $this->db->insert('komite_perusahaan', array(
	// 		'id_user' => $cekUser->first_row()->id,
	// 		'DP_nama_proyek' => $this->input->post('DP_nama_proyek'),
	// 		'DP_alamat_proyek' => $this->input->post('DP_alamat_proyek'),
	// 		'DP_rt_rw' => $this->input->post('DP_rt_rw'),
	// 		'DP_kelurahan_desa' => $this->input->post('DP_kelurahan_desa'),
	// 		'DP_kecamatan' => $this->input->post('DP_kecamatan'),
	// 		'DP_kota_kabupaten' => $this->input->post('DP_kota_kabupaten'),
	// 		'DP_kode_pos' => $this->input->post('DP_kode_pos'),
	// 		'DP_provinsi' => $this->input->post('DP_provinsi'),
	// 		'status_proyek' => $this->input->post('status_proyek'),
	// 		'PP_status' => $this->input->post('PP_status'),
	// 		'PP_nama_pengembang' => $this->input->post('PP_nama_pengembang'),
			
	// 		'IP_nama_izin' => implode('|', $this->input->post('IP_nama_izin')),
	// 		'IP_no_izin' => implode('|', $this->input->post('IP_no_izin')),
	// 		'IP_date' => implode('|', $this->input->post('IP_date')),
	// 		'IP_keluarkan' => implode('|', $this->input->post('IP_keluarkan')),
			
	// 		'RTB_RU_luasan' => implode('|', $this->input->post('RTB_RU_luasan')),
	// 		'RTB_RU_jml_unit' => implode('|', $this->input->post('RTB_RU_jml_unit')),
	// 		'RTB_RU_harga' => implode('|', $this->input->post('RTB_RU_harga')),
			
	// 		'RTB_RK_luasan' => implode('|', $this->input->post('RTB_RK_luasan')),
	// 		'RTB_RK_jml_luasan' => implode('|', $this->input->post('RTB_RK_jml_luasan')),
	// 		'RTB_RK_harga' => implode('|', $this->input->post('RTB_RK_harga')),
			
			
	// 		'RS_RSU_luasan' => implode('|', $this->input->post('RS_RSU_luasan')),
	// 		'RS_RSU_jml_unit' => implode('|', $this->input->post('RS_RSU_jml_unit')),
	// 		'RS_RSU_harga' => implode('|', $this->input->post('RS_RSU_harga')),
	// 		'RS_RSK_luasan' => implode('|', $this->input->post('RS_RSK_luasan')),
	// 		'RS_RSK_jml_unit' => implode('|', $this->input->post('RS_RSK_jml_unit')),
	// 		'RS_RSK_harga' => implode('|', $this->input->post('RS_RSK_harga')),
			
	// 		'PPPK_UPK_luasan' => implode('|', $this->input->post('PPPK_UPK_luasan')),
	// 		'PPPK_UPK_jml_unit' => implode('|', $this->input->post('PPPK_UPK_jml_unit')),
	// 		'PPPK_UPK_harga' => implode('|', $this->input->post('PPPK_UPK_harga')),
	// 		'PPPK_UPT_luasan' => implode('|', $this->input->post('PPPK_UPT_luasan')),
	// 		'PPPK_UPT_jml_unit' => implode('|', $this->input->post('PPPK_UPT_jml_unit')),
	// 		'PPPK_UPT_harga' => implode('|', $this->input->post('PPPK_UPT_harga')),
	// 		'PPPK_UP_luasan' => implode('|', $this->input->post('PPPK_UP_luasan')),
	// 		'PPPK_UP_jml_unit' => implode('|', $this->input->post('PPPK_UP_jml_unit')),
	// 		'PPPK_UP_harga' => implode('|', $this->input->post('PPPK_UP_harga')),
	// 		'PPPK_KI_luasan' => implode('|', $this->input->post('PPPK_KI_luasan')),
	// 		'PPPK_KI_jml_unit' => implode('|', $this->input->post('PPPK_KI_jml_unit')),
	// 		'PPPK_KI_harga' => implode('|', $this->input->post('PPPK_KI_harga')),

	// 	));

	// 	$this->db->where('email', $this->session->userdata('email'));
	// 	$this->db->update('user', array('step_register' => $cekUser->first_row()->step_register + 1));
	// 	redirect(base_url('register/'.$cekUser->first_row()->step_register.+1));

	// }

	// public function Register_5(){
	// 	$cekUser = $this->db->get_where('user', array('email' => $this->session->userdata('email')));
	// 	$inputDB = $this->db->insert('komite_perusahaan_berikutnya', array(
	// 		'id_user' => $cekUser->first_row()->id,
	// 		'DP_nama_proyek' => $this->input->post('DP_nama_proyek'),
	// 		'DP_alamat_proyek' => $this->input->post('DP_alamat_proyek'),
	// 		'DP_rt_rw' => $this->input->post('DP_rt_rw'),
	// 		'DP_kelurahan_desa' => $this->input->post('DP_kelurahan_desa'),
	// 		'DP_kecamatan' => $this->input->post('DP_kecamatan'),
	// 		'DP_kota_kabupaten' => $this->input->post('DP_kota_kabupaten'),
	// 		'DP_kode_pos' => $this->input->post('DP_kode_pos'),
	// 		'DP_provinsi' => $this->input->post('DP_provinsi'),
	// 		'proyek_dimulai' => $this->input->post('proyek_dimulai'),
	// 		'proyek_selesai' => $this->input->post('proyek_selesai'),
	// 		'PP_status' => $this->input->post('PP_status'),
	// 		'PP_nama_pengembang' => $this->input->post('PP_nama_pengembang'),
			
	// 		'IP_nama_izin' => implode('|', $this->input->post('IP_nama_izin')),
	// 		'IP_no_izin' => implode('|', $this->input->post('IP_no_izin')),
	// 		'IP_date' => implode('|', $this->input->post('IP_date')),
	// 		'IP_keluarkan' => implode('|', $this->input->post('IP_keluarkan')),
			
	// 		'RTB_RU_luasan' => implode('|', $this->input->post('RTB_RU_luasan')),
	// 		'RTB_RU_jml_unit' => implode('|', $this->input->post('RTB_RU_jml_unit')),
	// 		'RTB_RU_harga' => implode('|', $this->input->post('RTB_RU_harga')),
			
	// 		'RTB_RK_luasan' => implode('|', $this->input->post('RTB_RK_luasan')),
	// 		'RTB_RK_jml_luasan' => implode('|', $this->input->post('RTB_RK_jml_luasan')),
	// 		'RTB_RK_harga' => implode('|', $this->input->post('RTB_RK_harga')),
			
	// 		'RS_RSU_luasan' => implode('|', $this->input->post('RS_RSU_luasan')),
	// 		'RS_RSU_jml_unit' => implode('|', $this->input->post('RS_RSU_jml_unit')),
	// 		'RS_RSU_harga' => implode('|', $this->input->post('RS_RSU_harga')),
			
	// 		'RS_RSK_luasan' => implode('|', $this->input->post('RS_RSK_luasan')),
	// 		'RS_RSK_jml_unit' => implode('|', $this->input->post('RS_RSK_jml_unit')),
	// 		'RS_RSK_harga' => implode('|', $this->input->post('RS_RSK_harga')),
			
	// 		'PPPK_UPK_luasan' => implode('|', $this->input->post('PPPK_UPK_luasan')),
	// 		'PPPK_UPK_jml_unit' => implode('|', $this->input->post('PPPK_UPK_jml_unit')),
	// 		'PPPK_UPK_harga' => implode('|', $this->input->post('PPPK_UPK_harga')),
	// 		'PPPK_UPT_luasan' => implode('|', $this->input->post('PPPK_UPT_luasan')),
	// 		'PPPK_UPT_jml_unit' => implode('|', $this->input->post('PPPK_UPT_jml_unit')),
	// 		'PPPK_UPT_harga' => implode('|', $this->input->post('PPPK_UPT_harga')),
	// 		'PPPK_UP_luasan' => implode('|', $this->input->post('PPPK_UP_luasan')),
	// 		'PPPK_UP_jml_unit' => implode('|', $this->input->post('PPPK_UP_jml_unit')),
	// 		'PPPK_UP_harga' => implode('|', $this->input->post('PPPK_UP_harga')),
	// 		'PPPK_KI_luasan' => implode('|', $this->input->post('PPPK_KI_luasan')),
	// 		'PPPK_KI_jml_unit' => implode('|', $this->input->post('PPPK_KI_jml_unit')),
	// 		'PPPK_KI_harga' => implode('|', $this->input->post('PPPK_KI_harga')),

	// 	));

	// 	$this->db->where('email', $this->session->userdata('email'));
	// 	$this->db->update('user', array('step_register' => $cekUser->first_row()->step_register + 1));
	// 	redirect(base_url('register/'.$cekUser->first_row()->step_register.+1));

	// }






}
