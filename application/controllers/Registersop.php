<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class  Registersop extends CI_Controller {

    public function __construct()
    {
       parent::__construct();
       $this->load->model('registersop_model');
    }

	public function index()
	{
		$data['title']= 'Register SOP';
        $data['registersop']= $this->registersop_model->get_data('sop_header')->result();

		$this->load->view('template/header', $data);
		$this->load->view('template/sidebar', $data);
		$this->load->view('registersop', $data);
		$this->load->view('template/footer');

	}
	public function tambah()
    {
        $data['title']= 'Tambah Register FORM';

        $this->load->view('template/header', $data);
		$this->load->view('template/sidebar', $data);
		$this->load->view('tambah_registersop');
		$this->load->view('template/footer');	
    }
    function tambah_aksi(){
        $var = $this->input->post(); 
        
		$company = $var['company'];
		$unit = $var['unit'];
        $status = $var['status'];
		$departement = $var['departement'];
		$sop_no = $var['sop_no'];
        $sop_date = $var['sop_date'];
		$sop_title = $var['sop_title'];
		$eff_date = $var['eff_date'];
        $exp_date = $var['exp_date'];
		$Remarks = $var['Remarks'];
		
		$data = array(
			'company' => $company,
			'unit' => $unit,
			'status' => $status,
			'departement' => $departement,
			'sop_no' => $sop_no,
            'sop_date' => $sop_date,
			'sop_title' => $sop_title,
			'eff_date' => $eff_date,
            'exp_date' => $exp_date,
			'Remarks' => $Remarks,
		
		
		);

		$this->registersop_model->input_data($data,'sop_header');
		redirect('registersop');
	}
    
}