<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Reminder extends CI_Controller {

	public function index()
	{	
		$this->load->helper('url');
		$this->load->model('reminder_model');
		$data['data_islam'] = $this->reminder_model->getData();
		$this->load->view('reminder', $data);
	}
}