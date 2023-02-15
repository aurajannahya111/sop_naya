<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

	function __construct(){ 
		parent::__construct(); 
		$this->load->model('registerform_model');
	}

	public function index()
	{

		$data['title']= 'Dashboard';

		$this->load->view('template/header', $data);
		$this->load->view('template/sidebar', $data);
		$this->load->view('dashboard', $data);
		$this->load->view('template/footer');

		$info['treform'] = $this->db->query("SELECT COUNT(*) AS TotalRegisterform FROM register_form")->row();
        $this->load->view('dashboard', $info);
		
		
	}
}
