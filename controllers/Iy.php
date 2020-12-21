<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Iy extends CI_Controller {
	
	public function index()
	{
		$this->load->helper('url');

		if ($this->session->userdata('email') != '') {
				redirect(base_url() . 'profile');
		} else {
			$this->load->model('iy_model');
			$data['data_ti'] = $this->iy_model->getData();
			$this->load->view('iy_index', $data);
		}
	}
}
