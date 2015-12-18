<?php
error_reporting(E_ALL^E_NOTICE);
defined('BASEPATH') OR exit('No direct script access allowed');

class Logged extends MX_Controller {

	function __construct()
	{
	  parent::__construct();
	  $this->load->module('logged');
	}

	function index()
	{
		//mencegah akses ilegal url 
		if ($this->session->userdata('logged_in') <> TRUE){
			$this->load->view('errors/500');
		}else{
			$this->logged_view();
		}
	}


	function logged_view(){
		$data = array();

		switch ($_GET['menu']) {
			case 'dashboard':
				$title = 'DASHBOARD';
                $this->load->module('logged_dashboard');
                $this->logged_dashboard->index();
				break;
            //--alokasi penghasilan
            case 'gaji':
                $title = 'GAJI';
                $this->load->module('logged_gaji');
                $this->logged_gaji->index();
                break;
            case 'pensiunan':
                $title = 'PENSIUNAN';
                $this->load->module('logged_pensiunan');
                $this->logged_pensiunan->index();
                break;
            case 'investasi':
                $title = 'INVESTASI';
                $this->load->module('logged_investasi');
                $this->logged_investasi->index();
                break;
            case 'lainnya':
                $title = 'LAINNYA';
                $this->load->module('logged_lainnya');
                $this->logged_lainnya->index();
                break;
            //end-alokasi penghasilan
            //--alokasi pengeluaran
            case 'belanja':
                $title = 'GAJI';
                $this->load->module('logged_belanja');
                $this->logged_belanja->index();
                break;
            case 'tagihan':
                $title = 'TAGIHAN';
                $this->load->module('logged_tagihan');
                $this->logged_tagihan->index();
                break;
            //end-alokasi pengeluaran
			case 'lap_keuangan':
				$title = 'LAPORAN KEUANGAN';
                $this->load->module('logged_laporankeu');
                $this->logged_laporankeu->index();
				break;
			case 'pro_keuangan':
				$title = 'PROYEKSI KEUANGAN';
                $this->load->module('logged_pro_keuangan');
                $this->logged_pro_pengeluaran->index();
				break;
			case 'panduan':
				$title = 'Panduan';
                $this->load->module('logged_panduan');
                $this->logged_panduan->index();
				break;
            case 'logout':
                $user_data = $this->session->all_userdata();
                    foreach ($user_data as $key => $value) {
                        if ($key != 'username' && $key != 'nama_ibu' && $key != 'alamat' && $key != 'email'  && $key != 'logged_in') {
                            $this->session->unset_userdata($key);
                        }
                    }
                $this->session->sess_destroy();
                redirect(base_url().'login');                                                                 
                break;					
			default:
				$title = 'DASHBOARD';
                $this->load->module('logged_dashboard');
                $this->logged_dashboard->index();
				break;
		}
	}

    public function main($data,$view)
    {
        $this->load->view('logged/top');
        $this->load->view('logged/header');
        $this->load->view('logged/aside');
        $this->load->view($view,$data);
        $this->load->view('logged/footer');
        $this->load->view('logged/bottom');
    }
}