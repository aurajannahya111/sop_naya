<?php
defined('BASEPATH') OR exit('No direct script access allowed');

include_once BASEPATH."helpers/IdGenerator.php";

class ApiRegistersop extends CI_Controller {

	function __construct(){ 
		parent::__construct(); 
		$this->load->model('sop_header');
	}

	public function getdetail($formulir_title)
	{
		$result = $this->registersop_model->ambil_data_detail($formulir_title)->result(); 
		echo json_encode($result);
	}

	
}