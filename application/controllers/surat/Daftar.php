<?php
class Daftar extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('penduduk_model');
	}

	public function index()
	{
		if ($this->session->userdata('hak') != 'admin') {
			redirect('auth');
		}

		$data['title'] = 'Surat';
		$this->load->view('template/header', $data);
		$this->load->view('template/menu', $data);
		$this->load->view('surat/daftar');
		$this->load->view('template/footer');
	}
	
}