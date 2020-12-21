<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Profile extends CI_Controller {
	
	public function index()
	{
		$this->load->helper('url');
		if ($this->session->userdata('email') != '') {
				$this->load->model('profile_model');
				$data['data_user'] = $this->profile_model->getUser();
				$data['data_pengingat'] = $this->profile_model->getPengingat();
				$data['data_tipepengingat'] = $this->profile_model->getTipePengingat();
				$this->load->view('profile', $data);
		} else {
			redirect(base_url() . 'lp/login');
		}
	}

	function logout()
	{
		$this->session->unset_userdata('email');
		redirect(base_url() . 'lp/login');
	}
}
