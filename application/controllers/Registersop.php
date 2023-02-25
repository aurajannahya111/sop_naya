<?php
defined('BASEPATH') OR exit('No direct script access allowed');

// require 'vendor/autoload.php';

use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;

class  Registersop extends CI_Controller {
    public function __construct()
    {
       parent::__construct();
       $this->load->model('registersop_model');
       $this->load->model('registerform_model');
       $this->load->model('m_registersop_keranjang');
       $this->load->model('m_registersop_detail');
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
		// Kosongkan Keranjang
		if (isset($_GET['bersih'])) {			
			$this->m_registersop_keranjang->bersihkan('sop_detail_keranjang');
			redirect('registersop/tambah');
		}
        $data['title']= 'Tambah Register SOP';
		$data['forms'] = $this->registerform_model->get_data('register_form')->result();
		$data['keranjangs'] = $this->m_registersop_keranjang->get_data()->result();
		$result = $this->registersop_model->getLastId()->result();
		if (count($result) <= 0) {
			$data['number_sop'] = 1;
		} else {
			$data['number_sop'] = $result[0]->sop_no + 1;
		}
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

		$detail = $this->m_registersop_keranjang->get_data()->result();
		$no_sop = $this->registersop_model->getLastId()->result()[0]->sop_no;
		foreach ($detail as $value) {
			$detailData = array(
				'sop_no' => $no_sop,
				'form_no' => $value->form_no,
				'form_title' => $value->form_title,
			);
			$this->m_registersop_detail->input_data($detailData, 'sop_detail');
		}
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

	public function addSopKeranjang()
	{
		$form = $this->input->get();

		$data = array(
			'form_no' => $form['no'],
			'form_title' => $form['title']
		);
		$this->m_registersop_keranjang->input_data($data, 'sop_detail_keranjang');
		return redirect('registersop/tambah');
	}

	public function deleteKeranjang($id)
	{
		$where = array('id' => $id);
		$this->m_registersop_keranjang->hapus_data($where,'sop_detail_keranjang');

		return redirect('registersop/tambah');
	}

	public function excel()
	{
		$data = $this->m_registersop_keranjang->get_data()->result();
		return var_dump($data);
		$spreadsheet = new Spreadsheet();

        // Set document properties
        $spreadsheet->getProperties()
            ->setCreator('Mister Kodet')
            ->setLastModifiedBy('Mister Kodet')
            ->setTitle("judul excel")
            ->setSubject("subjek excel")
            ->setDescription("descripsi excel")
            ->setKeywords('office 2007 openxml php')
            ->setCategory('Excel');

        $rowNumber = 2;
		foreach ($data as $value) {
			var_dump($value);
			if ($rowNumber == 2) {
                $isiB = 'Nama';
                $isiC = 'Alamat';
                $isiD = 'No. Telepon';
                $isiE = 'Email';
                $isiF = 'Tanggal Gabung';
            } else {               
                $isiB = $data->nama;
                $isiC = $data->nama;
                $isiD = $data->nama;
                $isiE = $data->nama;
                $isiF = $data->nama;

				echo $data->nama;
				return;

				// Add some data
				$spreadsheet->setActiveSheetIndex(0)
					->setCellValue('B'.$rowNumber, $isiB)
					->setCellValue('C'.$rowNumber, $isiC)
					->setCellValue('D'.$rowNumber, $isiD)
					->setCellValue('E'.$rowNumber, $isiE)
					->setCellValue('F'.$rowNumber, $isiF);
		
				$rowNumber += 1;
            }
		}
        // Rename worksheet
        $spreadsheet->getActiveSheet()->setTitle('Laporan Kodet');

        // Set active sheet index to the first sheet, so Excel opens this as the first sheet
        $spreadsheet->setActiveSheetIndex(0);

        // Redirect output to a client’s web browser (Xlsx)
        header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
        header('Content-Disposition: attachment;filename="laporan-data-pelanggan.xlsx"');
        header('Cache-Control: max-age=0');
        // If you're serving to IE 9, then the following may be needed
        header('Cache-Control: max-age=1');

        // If you're serving to IE over SSL, then the following may be needed
        header('Expires: Mon, 26 Jul 1997 05:00:00 GMT'); // Date in the past
        header('Last-Modified: ' . gmdate('D, d M Y H:i:s') . ' GMT'); // always modified
        header('Cache-Control: cache, must-revalidate'); // HTTP/1.1
        header('Pragma: public'); // HTTP/1.0

        $writer = new xlsx($spreadsheet);
        $writer->save('php://output');
        exit;
	}

	public function show($no_sop)
	{
		$data['title']= 'SOP Detail';
		$data['details'] = $this->registersop_model->show($no_sop)->result();
		$this->load->view('template/header', $data);
		$this->load->view('template/sidebar', $data);
		$this->load->view('registersop_detail');
		$this->load->view('template/footer');
	}

	public function edit($sop_no)
	{
		if (isset($_GET['n'])) {
			$details = $this->registersop_model->getDetail($sop_no)->result();
			foreach ($details as $key => $detail) {
				$detail = array(
					'sop_no' => $detail->sop_no,
					'form_no' => $detail->form_no,
					'form_title' => $detail->form_title
				);
				$this->m_registersop_keranjang->input_data($detail, 'sop_detail_keranjang');
			}
		} else {
			$this->m_registersop_keranjang->bersihkan('sop_detail_keranjang');
			redirect('registersop/edit/'.$sop_no);
		}
		$where = array('sop_no' => $sop_no);
		$data['title']= 'Update SOP';
        $data['sop']= $this->registersop_model->edit_data($where,'sop_header')->result();
		// $data['keranjangs'] = $this->m_registersop_keranjang->get_data()->result();
		$data['forms'] = $this->registerform_model->get_data('register_form')->result();
		$data['details'] = $this->m_registersop_keranjang->get_data()->result();

		$this->load->view('template/header', $data);
		$this->load->view('template/sidebar', $data);
		$this->load->view('Updatesop', $data);
		$this->load->view('template/footer');
	}

	public function edit_addSopkeranjang()
	{
		$form = $this->input->get();
		
		$data = array(
			'form_no' => $form['no'],
			'form_title' => $form['title']
		);
		$this->m_registersop_keranjang->input_data($data, 'sop_detail_keranjang');
		return redirect("registersop/edit/".$form['sop_no']."?n");
	}

	public function update()
	{
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

		$detail = $this->m_registersop_keranjang->get_data()->result();
		$no_sop = $this->registersop_model->getLastId()->result()[0]->sop_no;
		foreach ($detail as $value) {
			$detailData = array(
				'sop_no' => $no_sop,
				'form_no' => $value->form_no,
				'form_title' => $value->form_title,
			);
			$this->m_registersop_detail->input_data($detailData, 'sop_detail');
		}
		redirect('registersop');
	}
}