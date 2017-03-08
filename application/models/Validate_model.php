<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Validate_model extends CI_Model {

	
	public function Session(){
		if ($this->session->userdata('email') == TRUE) {
			redirect(base_url());
		}
	}
	public function No_session(){
		if ($this->session->userdata('email') == FALSE) {
			redirect(base_url('login'));
		}
	}


	public function Valid_register(){
		if ($this->session->userdata('email') == TRUE) {
			$getUser = $this->db->get_where('user', array('email' => $this->session->userdata('email')));
			if ($this->uri->segment(2) != $getUser->first_row()->step_register) {
				redirect(base_url('register/'.$getUser->first_row()->step_register));
			}else if ($getUser->first_row()->step_register == 4) {
				redirect(base_url());
			}
		}else{
			redirect(base_url());
		}

		

	}


	public function Valid_register_home(){
		if ($this->session->userdata('email') == TRUE) {
			$getUser = $this->db->get_where('user', array('email' => $this->session->userdata('email')));
			if ($getUser->first_row()->step_register != 4) {
				redirect(base_url('register/'.$getUser->first_row()->step_register));
			}
		}else{
			redirect(base_url());
		}
	}



	public function Verifikasi_akun(){
		if ($this->session->userdata('email') == TRUE) {
			$getUser = $this->db->get_where('user', array('email' => $this->session->userdata('email')));
			if ($getUser->first_row()->verification == 0) {
				redirect(base_url('verifikasi'));
			}
		}else{
			redirect(base_url());
		}
	}









	

}
