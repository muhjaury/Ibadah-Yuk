<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Info extends CI_Controller {
	
	public function index()
	{
		$this->load->helper('url');
		if ($this->session->userdata('email') != '') {
				$this->load->model('info_model');
				$data['data_user'] = $this->info_model->getUser();
				$this->load->view('info', $data);
		} else {
			redirect(base_url() . 'lp/login');
		}
}
}