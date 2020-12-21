<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class About extends CI_Controller {
	
	public function index()
	{
		$this->load->helper('url');
		$this->load->model('about_model');
		$data['data_user'] = $this->about_model->getUser();
		$this->load->view('about', $data);
	}
}
