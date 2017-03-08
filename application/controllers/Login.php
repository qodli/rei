<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	public function __construct(){
		parent:: __construct();
		
	}

	public function Login(){		
		$this->Validate_model->Session();
		$data['title'] = 'Login';

		if ($this->input->post('login')) {
			$cekUser = $this->db->get_where('user', array(
				'email' => $this->input->post('email'),
				'password' => md5($this->input->post('password')),
			));

			if ($cekUser->num_rows() == 1) {
				$sessionuser = array(
					'id' => $cekUser->first_row()->id,
					'name' => $cekUser->first_row()->name,
					'email' => $cekUser->first_row()->email,
					'company' => $cekUser->first_row()->company,
				);
				$this->session->set_userdata($sessionuser);

				// status login
				$this->db->where('email', $cekUser->first_row()->email);
				$this->db->update('user', array('status_login' => 1, 'latest_login' => date('Y-m-d H:i:s')));
				redirect(base_url());


			}else{
				redirect(base_url('login?failed'));
			}
		}



		$templates['contents'] = $this->load->view('pages/login', $data, TRUE);
		$this->load->view('master', $templates);
	}

	public function Logout(){
		$this->db->where('email', $this->session->userdata('email'));
		$this->db->update('user', array('status_login' => 0));
		$this->session->sess_destroy();
		redirect(base_url('login'));
	}
	


}





