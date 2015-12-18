<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Signup extends MX_Controller {
	function __construct()
	{
	  parent::__construct();
	}

	function index()
	{
		$data 			= array(
			'base_url' 	=> base_url(),
			'js' 		=> '<script src="'.base_url().'source/js-menu/signup/signup.js"></script>'
			);
		$this->load->view('signup/signup',$data);
	}

	function verification()
	{
		$nama 	 			= $this->input->post('nama');
		$username 			= $this->input->post('username');
		$password 			= $this->input->post('password');
		$ulangi_password 	= $this->input->post('ulangi_password');
		$email			 	= $this->input->post('email');

        if($nama == '') {
          $error[] = '- Anda belum mengisi Nama';
        }
        if($username == '') {
          $error[] = '- Anda belum mengisi Username';
        }
        if($password == '') {
          $error[] = '- Anda belum mengisi Password';
        }
        if($ulangi_password == '') {
          $error[] = '- Anda belum mengisi Ketik Ulang Password';
        }
        if($email == '') {
          $error[] = '- Anda belum mengisi email';
        }
                
        if (isset($error)) {
            die('<div class="alert alert-danger alert-dismissable"><b>Konfirmasi Kesalahan</b>: <br />'.implode('<br />', $error).'</div>');
        }else{
        	$password_encrypt 	= md5($password);
        	$qins = $this->db->query("INSERT INTO tbl_member (
        							nama_ibu,
        							username,
        							password,
        							email
        							) VALUES(
        							'".$nama."',
        							'".$username."',
        							'".$password_encrypt."',
        							'".$email."'
        							)");
			die("sukses");
        }
	}
}