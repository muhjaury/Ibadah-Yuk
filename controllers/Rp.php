<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Rp extends CI_Controller {

	public function index()
	{	
		$this->load->helper('url');
		if ($this->session->userdata('email') != '') {
				redirect(base_url() . 'profile');
		} else {
			$this->load->view('rp');
		}
	}

	public function action()
	{	
		$this->load->helper('url');
		$this->load->model('rp_model');
		$this->rp_model->regUser();

		$email = $this->input->post('emailreg');
		$session_data = array(
						'email' => $email
					);
		$this->session->set_userdata($session_data);
		redirect(base_url() . 'lp/enter');
	}
}
