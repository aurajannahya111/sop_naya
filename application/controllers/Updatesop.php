<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class  Updatesop extends CI_Controller {

    public function __construct()
    {
       parent::__construct();
       $this->load->model('updatesop_model');
       $this->load->model('m_updatesop_keranjang');
   

    }

	public function index()
	{
		$data['title']= 'Update SOP';
        $data['updatesop']= $this->updatesop_model->get_data('trxsop_header')->result();

		$this->load->view('template/header', $data);
		$this->load->view('template/sidebar', $data);
		$this->load->view('Updatesop', $data);
		$this->load->view('template/footer');
	}
	public function tambah()
    {
		
        $data['title']= 'Tambah Register SOP';
		$data['forms'] = $this->updatesop_model->get_data('trxsop_header')->result();
		$data['keranjangs'] = $this->m_updatesop_keranjang->get_data()->result();
		$result = $this->updatesop_model->getLastId()->result();
		if (count($result) <= 0) {
			$data['number_trxno'] = 1;
		} else {
			$data['number_trxno'] = $result[0]->trx_no + 1;
		}
        $this->load->view('template/header', $data);
		$this->load->view('template/sidebar', $data);
		$this->load->view('tambah_updatesop');
		$this->load->view('template/footer');
    }
	function tambah_aksi(){
        $var = $this->input->post();

		$company = $var['company'];
		$unit = $var['unit'];
        $trx_no = $var['trx_no'];
		$trx_type = $var['trx_type'];
		$sop_no = $var['sop_no'];
        $status = $var['status'];
		$departement = $var['departement'];
		$trx_date = $var['trx_date'];
        $sop_date = $var['sop_date'];
		$sop_title = $var['sop_date'];
		$eff_date= $var['sop_date'];
		$exp_date= $var['sop_date'];
		$Remarks = $var['Remarks'];
		$review_date = $var['Remarks'];

		
		$data = array(
			'company' => $company,
			'unit' => $unit,
			'trx_no' =>$trx_no,
			'trx_type' =>$trx_type,
			'status' => $status,
			'departement' => $departement,
			'trx_date' => $trx_date,
			'sop_no' => $sop_no,
            'sop_date' => $sop_date,
			'sop_title' => $sop_title,
			'eff_date' => $eff_date,
            'exp_date' => $exp_date,
			'Remarks' => $Remarks,
			'review_date' => $review_date,

		);

		$this->updatesop_model->input_data($data,'trxsop_header');

		$detail = $this->m_updatesop_keranjang->get_data()->result();
		$no_trx = $this->updatesop_model->getLastId()->result()[0]->trx_no;
		foreach ($detail as $value) {
			$detailData = array(
				'trx_no' => $no_trx,
				'form_no' => $value->form_no,
				'form_title' => $value->form_title,
			);
			$this->m_updatesop_detail->input_data($detailData, 'trxsop_detail');
		}
		redirect('updatesop');
	}
	function hapus($trx_no){
		$where = array('trx_no' => $trx_no);
		$this->updatesop_model->hapus_data($where,'trxsop_header');
		redirect('updatesop');
	}
	public function addSopKeranjang()
	{
		$form = $this->input->get();

		$data = array(
			'form_no' => $form['no'],
			'form_title' => $form['title']
		);
		$this->m_updatesop_keranjang->input_data($data, 'trxsop_detail_keranjang');
		return redirect('updatesop/tambah');
	}
}

