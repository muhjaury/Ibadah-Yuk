<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Lp extends CI_Controller {

	public function index()
	{	
		$this->load->helper('url');
		if ($this->session->userdata('email') != '') {
			redirect(base_url() . 'profile');
		} else {
			$this->load->view('lp');
		}	
	}

	public function login()
	{	
		if ($this->session->userdata('email') != '') {
			redirect(base_url() . 'profile');
		} else {
			$this->load->view('lp');
		}
	}

	function login_validation()
	{
		$this->load->helper('url');

		$this->load->library('form_validation');
		$this->form_validation->set_rules('email', 'Email', 'required');
		$this->form_validation->set_rules('password', 'Password', 'required');
		if ($this->form_validation->run()) {
			//true
			$email = $this->input->post('email');
			$password = $this->input->post('password');
			$agama = $this->input->post('agama');
			//model function
			$this->load->model('lp_model');
			if ($this->lp_model->can_login($email, $password, $agama)) 
			{
				$session_data = array(
						'email' => $email,
						'agama'	=> $agama
					);
				$this->session->set_userdata($session_data);
				redirect(base_url() . 'lp/enter');
			}
			else
			{
				$this->session->set_flashdata('error', 'Invalid Username and Password');
				redirect(base_url() . 'lp/login');
			}
		}
		else
		{
			//false
			$this->login();
		}
		
	}
	function enter()
	{
		if ($this->session->userdata('email') != '') {
			redirect(base_url() . 'profile');
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







