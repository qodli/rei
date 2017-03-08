<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Register extends CI_Controller {

	public function __construct(){
		parent:: __construct();
		$this->load->model('Register_model');
		
	}

	public function index($step = NULL){		
		
		$data['step'] = $this->uri->segment(2);

		$urlArray = array(
			'1' => '1',
			'2' => '2',
			'3' => '3',
			'4' => '4',
			// '5' => '5',
			// '6' => '6',
		);

		if (in_array($data['step'], $urlArray) || $data['step'] == NULL) {
			if ($data['step'] == NULL) {
				$data['title'] = 'Daftar Akun';
				if ($this->input->post('register')) {
					$this->Register_model->register();
				}
				$templates['contents'] = $this->load->view('pages/register/register', $data, TRUE);
				$this->load->view('master', $templates);
			}

			if ($data['step'] == 1) {
				$this->Validate_model->Valid_register();
				$this->Validate_model->Verifikasi_akun();
				$data['title'] = 'Biodata Perusahaan';
				if ($this->input->post('register')) {
					$this->Register_model->register_1();
				}
				$templates['contents'] = $this->load->view('pages/register/register-1', $data, TRUE);
				$this->load->view('master', $templates);
			}
			if ($data['step'] == 2) {
				$this->Validate_model->Valid_register();
				$this->Validate_model->Verifikasi_akun();
				$data['title'] = 'Biodata Perusahaan';
				if ($this->input->post('register')) {
					$this->Register_model->register_2();
				}

				$templates['contents'] = $this->load->view('pages/register/register-2', $data, TRUE);
				$this->load->view('master', $templates);
			}

			if ($data['step'] == 3) {
				$this->Validate_model->Valid_register();
				$this->Validate_model->Verifikasi_akun();
				$data['title'] = 'Rekomendasi Anggota REI';
				if ($this->input->post('register')) {
					$this->Register_model->register_3();
				}
				$templates['contents'] = $this->load->view('pages/register/register-3', $data, TRUE);
				$this->load->view('master', $templates);
			}

			if ($data['step'] == 4) {
				$this->Validate_model->Valid_register();
				// $data['title'] = 'Komite Perusahaan';
				$data['title'] = 'SCAN DATA';
				if ($this->input->post('register')) {
					$this->Register_model->register_4();
				}
				$templates['contents'] = $this->load->view('pages/register/register-4', $data, TRUE);
				$this->load->view('master', $templates);
			}

			// if ($data['step'] == 5) {
			// 	$this->Validate_model->Valid_register();
			// 	$data['title'] = 'Rencana Proyek Tahun Berikutnya';
			// 	if ($this->input->post('register')) {
			// 		$this->Register_model->register_5();
			// 	}
			// 	$templates['contents'] = $this->load->view('pages/register/register-5', $data, TRUE);
			// 	$this->load->view('master', $templates);
			// }


		}else{
			redirect(base_url());
		}

		
	}


}
