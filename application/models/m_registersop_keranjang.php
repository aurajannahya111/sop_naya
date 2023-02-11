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
}