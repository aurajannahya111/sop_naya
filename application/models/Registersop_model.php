<?php 
class Registersop_model extends CI_Model{ 
	
	function get_data(){
		return $this->db->get('sop_header');
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

	public function show($where)
	{
		$query = $this->db->query("SELECT sh.*, rf.* FROM sop_header sh INNER JOIN sop_detail sd ON sh.sop_no = sd.sop_no INNER JOIN register_form rf ON sd.form_no = rf.formulir_no WHERE sh.sop_no = $where;");
		return $query;
	}

	public function getLastId()
	{
		$query = $this->db->query("SELECT sop_no FROM sop_header order by sop_no desc limit 1");		
		return $query;
	}
}