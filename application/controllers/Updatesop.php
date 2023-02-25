<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class  Updatesop extends CI_Controller {

    public function __construct()
    {
       parent::__construct();
    //    $this->load->model('updatesop_model');
       $this->load->model('m_registersop_detail');
       $this->load->model('registersop_model');
    }

	public function index($sop_no)
	{
		$where = array('sop_no' => $sop_no);
		$data['title']= 'Update SOP';
        $data['sop']= $this->registersop_model->edit_data($where,'sop_header')->result();

		$this->load->view('template/header', $data);
		$this->load->view('template/sidebar', $data);
		$this->load->view('Updatesop', $data);
		$this->load->view('template/footer');
	}
}

