<?php 
class Registersop_model extends CI_Model{ 
	
	function get_data(){
		return $this->db->get('register_sop');
	}
}