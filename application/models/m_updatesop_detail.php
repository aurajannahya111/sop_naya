<?php 
class M_updatesop_detail extends CI_Model{ 
	
	function get_data(){
		return $this->db->get('trxsop_detail');
	}
	function input_data($data,$table)
	{
		$this->db->insert($table,$data);
	}
	public function hapus_data($where, $table){
	    $this->db->where($where);
		$this->db->delete($table);
	}
	function edit_data($where,$table){
		return $this->db->get_where($table,$where);
	}
}