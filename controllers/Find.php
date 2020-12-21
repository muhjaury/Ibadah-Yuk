<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Find extends CI_Controller {

	public function index()
	{	
		$this->load->helper('url');
		if ($this->session->userdata('email') != '') {
				$this->load->model('find_model');
				$data['data_ti'] = $this->find_model->getData();
				$data['data_user'] = $this->find_model->getUser();
				$this->load->view('find', $data);
		} else {
			redirect(base_url() . 'lp/login');
		}
		
	}

	public function aksi()
	{	

	}

}
