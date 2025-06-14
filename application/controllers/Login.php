<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Login extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('auth_model');
	}

	public function index()
	{
		$this->load->view('login/view');
	}

	public function auth()
	{
		$username = $this->input->post('username');
		$password = md5($this->input->post('password'));
		if ($this->auth_model->login($username, $password)) {
			$response = array(
				'status' => 1,
				'message' => 'Berhasil login',
			);
		} else {
			$response = array(
				'status' => 2,
				'message' => 'Data Tidak Ditemukan',
			);
		}
		echo json_encode($response);
	}

	public function logout()
	{
		$this->load->model('auth_model');
		$this->auth_model->logout();
		redirect(site_url('login'));
	}
}
