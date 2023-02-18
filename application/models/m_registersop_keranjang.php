<?php 
class M_registersop_keranjang extends CI_Model{ 
	
	function get_data(){
		return $this->db->get('sop_detail_keranjang');
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

    public function bersihkan($table)
    {
        $this->db->query("DELETE FROM ".$table."");
    }

	public function get_nosop()
	{
		$query = $this->db->query("SELECT sop_no,form_no,form_title FROM sop_detail order by form_title desc limit 1");
		// $value = $query[0]->form_no;
		return $query;
	}
}