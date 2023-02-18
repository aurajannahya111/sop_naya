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
		$data['treform'] = $this->db->query("SELECT COUNT(*) AS TotalRegisterform FROM register_form")->row();
		$data['tresop'] = $this->db->query("SELECT COUNT(*) AS TotalRegistersop FROM sop_header ")->row();

		$this->load->view('template/header', $data);
		$this->load->view('template/sidebar', $data);
		$this->load->view('dashboard', $data);
		$this->load->view('template/footer');
	
		// $this->db->select("count(*) as TotalRegisterform", false);
		// $q = $this->db->get()->result();

		// $d["treform2"] = $q; 

		// $this->load->view('dashboard', $d);
	}
	
}
