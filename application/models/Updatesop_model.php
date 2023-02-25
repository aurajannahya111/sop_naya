<?php 
class Updatesop_model extends CI_Model{ 
	
	function get_data(){
		return $this->db->get('sop_header');
	}
}