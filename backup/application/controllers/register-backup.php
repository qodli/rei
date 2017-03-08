<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Register extends CI_Controller {

	public function __construct(){
		parent:: __construct();
		$this->load->model('Register_model');

	}

	public function Register($step = NULL){		
		
		$data['step'] = $this->uri->segment(2);

		$urlArray = array(
			'1' => '1',
			'2' => '2',
			'3' => '3',
			'4' => '4',
			'5' => '5',
			'6' => '6',
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
				$data['title'] = 'Biodata Perusahaan';
				if ($this->input->post('register')) {
					$cekUser = $this->db->get_where('user', array('email' => $this->session->userdata('email')));
					$this->db->where('email', $this->session->userdata('email'));
					$this->db->update('user', array('step_register' => $cekUser->first_row()->step_register + 1));
					redirect(base_url('register/'.$cekUser->first_row()->step_register.+1));
				}
				$templates['contents'] = $this->load->view('pages/register/register-1', $data, TRUE);
				$this->load->view('master', $templates);
			}
			if ($data['step'] == 2) {
				$this->Validate_model->Valid_register();
				$data['title'] = 'Biodata Perusahaan';
				if ($this->input->post('register')) {
					$cekUser = $this->db->get_where('user', array('email' => $this->session->userdata('email')));
					$this->db->where('email', $this->session->userdata('email'));
					$this->db->update('user', array('step_register' => $cekUser->first_row()->step_register + 1));
					redirect(base_url('register/'.$cekUser->first_row()->step_register.+1));
				}
				$templates['contents'] = $this->load->view('pages/register/register-2', $data, TRUE);
				$this->load->view('master', $templates);
			}

			if ($data['step'] == 3) {
				$this->Validate_model->Valid_register();
				$data['title'] = 'Rekomendasi ANggota REI';
				if ($this->input->post('register')) {
					$cekUser = $this->db->get_where('user', array('email' => $this->session->userdata('email')));
					$this->db->where('email', $this->session->userdata('email'));
					$this->db->update('user', array('step_register' => $cekUser->first_row()->step_register + 1));
					redirect(base_url('register/'.$cekUser->first_row()->step_register.+1));
				}
				$templates['contents'] = $this->load->view('pages/register/register-3', $data, TRUE);
				$this->load->view('master', $templates);
			}

			if ($data['step'] == 4) {
				$this->Validate_model->Valid_register();
				$data['title'] = 'Komite Perusahaan';
				if ($this->input->post('register')) {
					$cekUser = $this->db->get_where('user', array('email' => $this->session->userdata('email')));
					$this->db->where('email', $this->session->userdata('email'));
					$this->db->update('user', array('step_register' => $cekUser->first_row()->step_register + 1));
					redirect(base_url('register/'.$cekUser->first_row()->step_register.+1));
				}
				$templates['contents'] = $this->load->view('pages/register/register-4', $data, TRUE);
				$this->load->view('master', $templates);
			}

			if ($data['step'] == 5) {
				$this->Validate_model->Valid_register();
				$data['title'] = 'Rencana Proyek Tahun Berikutnya';
				if ($this->input->post('register')) {
					$cekUser = $this->db->get_where('user', array('email' => $this->session->userdata('email')));
					$this->db->where('email', $this->session->userdata('email'));
					$this->db->update('user', array('step_register' => $cekUser->first_row()->step_register + 1));
					redirect(base_url('register/'.$cekUser->first_row()->step_register.+1));
				}
				$templates['contents'] = $this->load->view('pages/register/register-5', $data, TRUE);
				$this->load->view('master', $templates);
			}

			// for ($i=1; $i < 7; $i++) { 
			// 	if ($data['step'] == $i) {
			// 		$this->Validate_model->Valid_register();
			// 		if ($this->input->post('register')) {
			// 			$cekUser = $this->db->get_where('user', array('email' => $this->session->userdata('email')));
			// 			$this->db->where('email', $this->session->userdata('email'));
			// 			$this->db->update('user', array('step_register' => $cekUser->first_row()->step_register + 1));
			// 			redirect(base_url('register/'.$cekUser->first_row()->step_register.+1));
			// 		}
			// 		$templates['contents'] = $this->load->view('pages/register/register-'.$i, $data, TRUE);
			// 		$this->load->view('master', $templates);
			// 	}
			// }

		}else{
			redirect(base_url());
		}

		
	}

}
