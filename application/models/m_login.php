<?php
class m_login extends CI_Model{
	  function ambil_data(){
	  	    return $this->db->get('login');
	  	}
		  