<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends MX_Controller {
	function __construct()
	{
	  parent::__construct();
	}

	function index()
	{
		$data 			= array(
			'base_url' 	=> base_url(),
			'js' 		=> '<script src="'.base_url().'source/js-menu/login/login2.js"></script>'
			);
		$this->load->view('login/login',$data);
	}

	function verification()
	{
		$username 	= $this->input->post('username');
		$password 	= $this->input->post('password');

		if($username == '') {
          $error[] = '- Anda belum mengisi Username';
        }
        if($password == '') {
          $error[] = '- Anda belum mengisi Password';
        }

		$password_encrypt 	= md5($password);
		$query = $this->db->query("SELECT username, password 
								   FROM tbl_member
								   WHERE username = '".$username."' AND 
								   		 password = '".$password_encrypt."'");

		$num_rows 	= $query->num_rows();

        if (isset($error)) {
            die('<div class="alert alert-danger alert-dismissable"><b>Konfirmasi Kesalahan</b>: <br />'.implode('<br />', $error).'</div>');
        }elseif($num_rows > 0){
			$query 	= $this->db->query("SELECT * 
								   FROM tbl_member
								   WHERE username = '".$username."' AND 
								   		 password = '".$password_encrypt."'");
			$result = $query->row();

        	$newdata = array(
        		'username'  		=> $result->username,
		        'nama_ibu'  		=> $result->nama_ibu,
		        'email'				=> $result->email,
		        'logged_in' 		=> TRUE
			);

			$this->session->set_userdata($newdata);
			die("sukses");
        }else{
        	die('<div class="alert alert-danger alert-dismissable"><b>Konfirmasi Kesalahan</b>: <br />- Username atau Password salah</div>');
        }
	}
}