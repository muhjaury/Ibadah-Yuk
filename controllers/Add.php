<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Add extends CI_Controller {
	
	public function index()
	{
		$this->load->helper('url');
		if ($this->session->userdata('email') != '') {
				$this->load->model('add_model');
				$data['data_user'] = $this->add_model->getUser();
				$data['data_tipepengingat'] = $this->add_model->getTipePengingat();
				$this->load->view('add', $data);
		} else {
			redirect(base_url() . 'lp/login');
		}
	}

	public function addPengingat()
	{
		$this->load->helper('url');
		$this->load->model('add_model');
		$this->add_model->addPengingat();
		redirect(base_url() . 'profile');		
	}
}
