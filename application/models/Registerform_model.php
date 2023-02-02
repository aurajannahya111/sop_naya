<?php 
class Registerform_model extends CI_Model{ 
	
	function get_data(){
		return $this->db->get('register_form');
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
	function ubah_data($where,$data,$table){
		$this->db->where($where);
		$this->db->update($table,$data);
	}
}