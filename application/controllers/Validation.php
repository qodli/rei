<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Validation extends CI_Controller {

	public function index(){
		if ($this->input->post('email')) {
			$usr = $this->input->post('email');
		 	$query = $this->db->get_where("user", array('email' => $usr));
		 	if($query->num_rows() == 0){
	            echo 'true';
	        }else{
	            echo 'false';
	        }
	    }else{
	    	redirect(base_url('register'));
	    	// echo 'test';
	    }
	}

}

