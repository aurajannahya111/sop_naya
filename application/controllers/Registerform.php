<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class  Registerform extends CI_Controller {

    public function __construct()
    {
       parent::__construct();
       $this->load->model('registerform_model');
    }

	public function index()
	{
		$data['title']= 'Register FORM';
        $data['registerform']= $this->registerform_model->get_data('register_form')->result();

		$this->load->view('template/header', $data);
		$this->load->view('template/sidebar', $data);
		$this->load->view('registerform', $data);
		$this->load->view('template/footer');

	}
    public function tambah()
    {
        $data['title']= 'Tambah Register FORM';

        $this->load->view('template/header', $data);
		$this->load->view('template/sidebar', $data);
		$this->load->view('tambah_registerform');
		$this->load->view('template/footer');	
    }
    function tambah_aksi(){
        $var = $this->input->post(); 
        
		$company = $var['company'];
		$unit = $var['unit'];
        $status = $var['status'];
		$departement = $var['departement'];
		$formulir_no = $var['formulir_no'];
        $formulir_date = $var['formulir_date'];
		$formulir_title = $var['formulir_title'];
		$eff_date = $var['eff_date'];
        $exp_date = $var['exp_date'];
		$Remarks = $var['Remarks'];
		
		$data = array(
			'company' => $company,
			'unit' => $unit,
			'status' => $status,
			'departement' => $departement,
			'formulir_no' => $formulir_no,
            'formulir_date' => $formulir_date,
			'formulir_title' => $formulir_title,
			'eff_date' => $eff_date,
            'exp_date' => $exp_date,
			'Remarks' => $Remarks,
		
		
		);

		$this->registerform_model->input_data($data,'register_form');
		redirect('registerform');
	}
    function hapus($formulir_no){
		$where = array('formulir_no' => $formulir_no);
		$this->registerform_model->hapus_data($where,'register_form');
		redirect('registerform');
	}
	function edit($formulir_no){
		$where = array('formulir_no' => $formulir_no);
		$data['register_form'] = $this->registerform_model->edit_data($where,'register_form')->result();
		
        $this->load->view('template/header', $data);
		$this->load->view('template/sidebar', $data);
		$this->load->view('v_editregisterform');
		$this->load->view('template/footer');	
	}
	function ubah_aksi(){
		$var = $this->input->post();

		$company = $var['company'];
		$unit = $var['unit'];
        $status = $var['status'];
		$departement = $var['departement'];
		$formulir_no = $var['formulir_no'];
        $formulir_date = $var['formulir_date'];
		$formulir_title = $var['formulir_title'];
		$eff_date = $var['eff_date'];
        $exp_date = $var['exp_date'];
		$Remarks = $var['Remarks'];
		 
		 $data = array(
			'company' => $company,
			'unit' => $unit,
			'status' => $status,
			'departement' => $departement,
			'formulir_no' => $formulir_no,
            'formulir_date' => $formulir_date,
			'formulir_title' => $formulir_title,
			'eff_date' => $eff_date,
            'exp_date' => $exp_date,
			'Remarks' => $Remarks,
			 
		 );
		 
		 $where = array (
			 'formulir_no' => $formulir_no
		 );
 
		 $this->registerform_model->ubah_data($where, $data,'register_form');
		 redirect('registerform');
	 }

	     
}
