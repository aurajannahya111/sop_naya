<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Registersop extends CI_Controller {

	public function index()
	{
		$data['title']= 'Register SOP';

		$this->load->view('template/header', $data);
		$this->load->view('template/sidebar', $data);
		$this->load->view('registersop', $data);
		$this->load->view('template/footer');

	}
}