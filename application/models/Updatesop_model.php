<?php 
class Updatesop_model extends CI_Model{ 
	
	function get_data(){
		return $this->db->get('trxsop_header');
	}
	function input_data($data,$table)
	{
		$this->db->insert($table,$data);
	}
	public function hapus_data($where, $table){
	    $this->db->where($where);
		$this->db->delete($table);
	}
	public function getLastId()
	{
		$query = $this->db->query("SELECT trx_no FROM trxsop_header order by trx_no desc limit 1");		
		return $query;
	}
	public function show($where)
	{
		$query = $this->db->query("SELECT sh.*, rf.* FROM sop_header sh INNER JOIN sop_detail sd ON sh.sop_no = sd.sop_no INNER JOIN register_form rf ON sd.form_no = rf.formulir_no WHERE sh.sop_no = $where;");
		return $query;
	}
	function edit_data($where,$table){
		return $this->db->get_where($table,$where);
	}
	function ubah_data($where,$data,$table){
		$this->db->where($where);
		$this->db->update($table,$data);
	}
}
