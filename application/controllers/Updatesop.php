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
        $data['updatesop']= $this->updatesop_model->get_data('trxsop_header')->result();

		$this->load->view('template/header', $data);
		$this->load->view('template/sidebar', $data);
		$this->load->view('Updatesop', $data);
		$this->load->view('template/footer');
	}
	public function tambah()
    {
		
		// Kosongkan Keranjang
		if (isset($_GET['bersih'])) {			
			$this->m_updatesop_keranjang->bersihkan('sop_detail_keranjang');
			redirect('updatesop/tambah');
		}
        $data['title']= 'Tambah Register SOP';
		$data['form'] = $this->updatesop_model->get_data('trxsop_header')->result();
		
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
}

