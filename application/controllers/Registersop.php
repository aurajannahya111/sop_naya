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
	function hapus($sop_no){
		$where = array('sop_no' => $sop_no);
		$this->registersop_model->hapus_data($where,'sop_header');
		redirect('registersop');
	}
	public function tambahdetailsop() {

		// query insert
        // variabel form tambah detail
		$variable = $this->input->post();

		$sop_no = $variable["sop_no"];
		$formulir_no = $variable["formulir_no"];
		$formulir_title = $variable["formulir_title"];
		
		$data = array(
			'sop_no' => $sop_no,
			'formulir_no' => $formulir_no,
			'formulir_title' => $formulir_title,
		);

		$this->registersop_model->input_data($data, 'registersop');
		redirect('registersop');
	}
	public function tambahdatadetail() {

		// query insert
        // variabel form tambah detail
		$variable = $this->input->post();
		$id_masuk = $variable["id_masuk"];
		$idbarang = $variable["idbarang"];
		$nama_barang = $variable["nama_barang"];
		$jumlah = $variable["jumlah"];
		$harga= $variable["harga"];
		$tanggal = $variable["tanggal"];
		
		$data = array(
			'id_masuk' => $id_masuk,
			'idbarang' => $idbarang,
			'nama_barang' => $nama_barang,
			'jumlah' => $jumlah,
			'harga' => $harga,
			'tanggal' => $tanggal,
		);

		$status = $this->m_masuk->input_data($data, 'masuk');
		
		if($status) {
			/**
			 * todo add, conditional if success insert
			 */
			header('location:masuk_edit');
		} else {
			/**
			 * todo add, conditional if failed
			 */
		}
	}
	
	
    
}