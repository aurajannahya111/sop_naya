<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Updatesop extends CI_Controller {

    public function __construct()
    {
       parent::__construct();
       $this->load->model('updatesop_model');
       $this->load->model('m_updatesop_keranjang');
	   $this->load->model('m_updatesop_detail');


    //    $this->load->model('updatesop_model');
       $this->load->model('m_registersop_detail');
       $this->load->model('registersop_model');
       $this->load->model('registerform_model');
    }

	public function index()
	{
		// $where = array('sop_no' => $sop_no);
		$data['title']= 'Update SOP';
        $data['updatesop']= $this->updatesop_model->get_data('trxsop_header')->result();
        // $data['sop']= $this->registersop_model->edit_data($where,'sop_header')->result();

		$this->load->view('template/header', $data);
		$this->load->view('template/sidebar', $data);
		$this->load->view('Updatesop', $data);
		$this->load->view('template/footer');
	}
	public function tambah()
    {
		
        $data['title']= 'Tambah Update SOP';
		$data['forms'] = $this->registerform_model->get_data('register_form')->result();
		$data['keranjangs'] = $this->m_updatesop_keranjang->get_data()->result();
		$result = $this->updatesop_model->getLastId()->result();
		if (count($result) <= 0) {
			$data['number_trxno'] = 1;
		} else {
			$data['number_trxno'] = $result[0]->trx_no + 1;
		}
		$data['sops'] = $this->updatesop_model->get_data()->result();

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
		$review_date = $var['review_date'];

		
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
	public function deleteKeranjang($id)
	{
		$where = array('id' => $id);
		$this->m_updatesop_keranjang->hapus_data($where,'trxsop_detail_keranjang');

		return redirect('updatesop/tambah');
	}
	public function show($trx_no)
	{
		$data['title']= 'SOP Detail';
		$data['details'] = $this->updatesop_model->show($trx_no)->result();
		$this->load->view('template/header', $data);
		$this->load->view('template/sidebar', $data);
		$this->load->view('updatesop_detail');
		$this->load->view('template/footer');
	}

	public function edit($trx_no)
	{
		if (isset($_GET['b'])) {
			$details = $this->updatesop_model->getDetail($trx_no)->result();
			foreach ($details as $key => $detail) {
				$detail = array(
					'trx_no' => $detail->trx_no,
					'form_no' => $detail->form_no,
					'form_title' => $detail->form_title
				);
				$this->m_updatesop_keranjang->input_data($detail, 'trxsop_detail_keranjang');
			}
			return redirect("updatesop/edit/$trx_no");
		} elseif (isset($_GET['bersih'])) {
			$this->m_updatesop_keranjang->bersihkan('trxsop_detail_keranjang');
			redirect("updatesop/edit/$trx_no?b");
		}
		$where = array('trx_no' => $trx_no);
		$data['title']= 'Update SOP';
        $data['sop']= $this->updatesop_model->edit_data($where,'trxsop_header')->result();
		$data['forms'] = $this->updatesop_model->get_data('trxsop_header')->result();
		$data['details'] = $this->m_updatesop_keranjang->get_data()->result();

		$this->load->view('template/header', $data);
		$this->load->view('template/sidebar', $data);
		$this->load->view('edit_updatesop', $data);
		$this->load->view('template/footer');
	}

	public function edit_addSopkeranjang()
	{
		$form = $this->input->get();
		
		$data = array(
			'trx_no' => $form['trx_no'],
			'form_no' => $form['no'],
			'form_title' => $form['title']
		);
		$this->m_updatesop_keranjang->input_data($data, 'trxsop_detail_keranjang');
		return redirect("updatesop/edit/".$form['trx_no']."");
	}

	public function update()
	{
		$var = $this->input->post();

		$trx_no = $var['trx_no'];
		$trx_date = $var['trx_date'];
        $trx_type = $var['trx_type'];
		$sop_no = $var['sop_no'];
		$sop_no = $var['sop_no'];
        $sop_date = $var['sop_date'];
		$sop_title = $var['sop_title'];
		$company = $var['company'];
        $unit = $var['unit'];
		$departement = $var['departement'];
		$sop_date = $var['sop_date'];
		$remarks = $var['remarks'];
		$eff_date = $var['eff_date'];
		$exp_date = $var['exp_date'];
		$sop_date = $var['sop_date'];
		$review_date = $var['review_date'];

		$data = array(
			'trx_no' => $trx_no,
			'trx_date' => $trx_date,
			'trx_type' => $trx_type,
			'sop_no' => $sop_no,
			'sop_title' => $sop_title,
            'sop_date' => $sop_date,
			'sop_title' => $sop_title,
			'company' => $company,
            'unit' => $unit,
			'departement' => $departement,
			'sop_date' => $sop_date,
			'remarks' => $remarks,
			'eff_date' => $eff_date,
			'exp_date' => $exp_date,
			'review_date' => $review_date,
		);		
		
		$where = array (
			'trx_no' => $trx_no
		);

		$this->updatesop_model->ubah_data($where, $data,'trxsop_header');

		$this->m_updatesop_detail->hapus_data($where,'trxsop_detail');
		$detail = $this->m_updatesop_keranjang->get_data()->result();
		foreach ($detail as $value) {
			$detailData = array(
				'trx_no' => $value->trx_no,
				'form_no' => $value->form_no,
				'form_title' => $value->form_title,
			);
			$this->m_updatesop_detail->input_data($detailData, 'trxsop_detail');
			$this->m_updatesop_keranjang->hapus_data(['id'=>$value->id], 'trxsop_detail_keranjang');
		}
		redirect('updatesop');
	}

	public function delete_editKeranjang($id)
	{
		$where = array('id' => $id);
		$this->m_updatesop_keranjang->hapus_data($where, 'trxsop_detail_keranjang');
		if (isset($_GET['sop'])) {
			$no_trx = $_GET['sop'];
		}
		return redirect("updatesop/edit/$no_trx");
	}
}