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
	function ambil_data_detail($formulir_no) {
	
		$this->db->select('k.*, b.id AS `id_barang`, b.nama AS `nama_barang`, kd.id AS `id_detail`, kd.jumlah, kd.harga, p.id AS `id_pembeli` , p.nama AS `nama_pembeli`');
			$this->db->from('keluar_detail kd');
			$this->db->join('barang b', 'b.id = kd.id_barang');
			$this->db->join('keluar k', 'k.id = kd.id_keluar');
			$this->db->join('pembeli p', 'p.id = k.id_pembeli');
			$this->db->where('k.id', $formulir_no);
			
			return $this->db->get();
		
	  }
		
		function input_data($data){ 
					/**
			 * validate ID Barang
			 */
			
			// NOTHING TODO VALIDATED BY FOREING KEY ON DATABASE
			
			if($this->db->insert($this->tableName,$data)){
			
				/**
				 * update stok
				 */
				// $this->m_barang->reduceStok($data['idbarang'], $data['jumlah']);
				return true;
			} else {
				return false;
			}
		} 
}