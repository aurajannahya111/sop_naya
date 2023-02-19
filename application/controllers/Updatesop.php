<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class  Updatesop extends CI_Controller {

    public function __construct()
    {
       parent::__construct();
       $this->load->model('updatesop_model');
    }

	public function index()
	{
		$data['title']= 'Update SOP';
        $data['Updatesop']= $this->updatesop_model->get_data('trxsop_header')->result();

		$this->load->view('template/header', $data);
		$this->load->view('template/sidebar', $data);
		$this->load->view('Updatesop', $data);
		$this->load->view('template/footer');
	}
}

