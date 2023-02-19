<?php 
class Updatesop_model extends CI_Model{ 
	
	function get_data(){
		return $this->db->get('trxsop_header');
	}
}