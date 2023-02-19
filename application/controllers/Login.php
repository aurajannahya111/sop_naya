<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {
	
	public function index()
	{
		$this->load->view('template/login');
	}
	public function Login()
	{
		// session_start();

		$variable = $this->input->post();


		//cek login, terdaftar atau tidak
		if(isset($variable["username"])) {
		    $username = $variable['username'];
		    $password = $variable['password'];
		    
		    $limit = 1;
		    $offset = 0;
		    //cocokin dengan database, ada atau tidak datanya
				$result = $this->db->get_where('login', array('username' => $username, 'password' => $password), $limit, $offset)->result(); 
				if($this->db->affected_rows() > 0) {
					$_SESSION['log'] = 'True';
					//$this->session->set_userdata("userid") = $username;
					 
					redirect('/dashboard');
					return true;
				} else {
					// redirect('/login');
					$this->index();
					return true;
				}
				
				return false;
				
		}
	}
	    function keluar(){
		$this->session->sess_destroy();
		redirect(site_url('login'));
	}
	

}