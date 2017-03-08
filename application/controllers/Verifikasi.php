<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Verifikasi extends CI_Controller {

	public function index(){
		$data['title'] = 'Verifikasi';
		$templates['contents'] = $this->load->view('pages/verifikasi/index', $data, TRUE);
		$this->load->view('master', $templates);

	}

	public function Aktif(){
		
		// aktif
		if (isset($_GET['m']) && isset($_GET['c']) && isset($_GET['d'])) {
			$cekUser = $this->db->get_where('user', array(
				'email' => base64_decode($_GET['m']),
				'code_verification' => base64_decode($_GET['c']),
			));
			if ($cekUser->num_rows() == 1) {
				$this->db->where('email', base64_decode($_GET['m']));
				$this->db->where('code_verification', base64_decode($_GET['c']));
				$update = $this->db->update('user', array(
					'verification' => 1,
					'date_verification' => base64_decode($_GET['d']),
				));
				redirect(base_url('register/1'));	
			}else{
				redirect(base_url('verifikasi?failed'));	
			}
		}else{
			redirect(base_url('verifikasi'));
		}
	}

}
