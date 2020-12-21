<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Delete extends CI_Controller {
	
	public function index()
	{
		$this->load->helper('url');
		if ($this->session->userdata('email') != '') {
				$this->load->model('delete_model');
				$data['data_user'] = $this->delete_model->getUser();
				$data['data_pengingat'] = $this->delete_model->getPengingat();
				$this->load->view('delete', $data);
		} else {
			redirect(base_url() . 'lp/login');
		}
	}

	public function deletePengingat()
	{
		$this->load->helper('url');
		$this->load->model('delete_model');
		$this->delete_model->deletePengingat();
		redirect(base_url() . 'profile');		
	}
}
