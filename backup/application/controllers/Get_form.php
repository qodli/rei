<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Get_form extends CI_Controller {

	public function Form_home(){
		$this->load->view('pages/get_form/form-home');
	}

}
