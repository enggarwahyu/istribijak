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
			$menu   = $this->menu();
        		$data   = array(
            		'menu_admin'    => $menu['menu_admin'],
            		'active_menu'   => $menu['active_menu'],
            );
		}
	}


	function logged_view(){
		$data = array();

		$menu = $this->menu();

		switch ($_GET['menu']) {
			case 'dashboard':
				$title = 'DASHBOARD';
                $this->load->module('logged_dashboard');
                $this->logged_dashboard->index();
				break;
			case 'al_penghasilan':
				$title = 'ALOKASI PENGHASILAN';
                $this->load->module('logged_al_penghasilan');
                $this->logged_al_penghasilan->index();
				break;
			case 'al_pengeluaran':
				$title = 'ALOKASI PENGELUARAN';
                $this->load->module('logged_al_pengeluaran');
                $this->logged_al_pengeluaran->index();
				break;
			case 'lap_keuangan':
				$title = 'LAPORAN KEUANGAN';
                $this->load->module('logged_lap_keuangan');
                $this->logged_al_pengeluaran->index();
				break;
			case 'pro_keuangan':
				$title = 'PROYEKSI KEUANGAN';
                $this->load->module('logged_pro_keuangan');
                $this->logged_pro_pengeluaran->index();
				break;
            case 'logout':

                    $user_data = $this->session->all_userdata();
                        foreach ($user_data as $key => $value) {
                            if ($key != 'session_id' && $key != 'ip_address' && $key != 'user_agent' && $key != 'last_activity') {
                                $this->session->unset_userdata($key);
                            }
                        }
                    $this->session->sess_destroy();
                    redirect('default_controller');
                break;
			case 'panduan':
				$title = 'Panduan';
                $this->load->module('logged_panduan');
                $this->logged_panduan->index();
				break;					
			default:
				$title = 'DASHBOARD';
                $this->load->module('logged_dashboard');
                $this->logged_dashboard->index();
				break;
		}
	}

	public function menu(){
		if ($this->session->userdata('logged_in') == TRUE){
			$menu = array(
				'dashboard' => 'Dashboard',
				'al_penghasilan' => array('Alokasi Penghasilan',
					array(
						'gaji' => 'Gaji',
                        'pensiunan' => 'Pensiunan',
                        'investasi' => 'Investasi',
                        'lainnya' => 'Lainnya',
						),true),
				'al_pengeluaran' => array('Alokasi Pengeluaran',
					array(
						'gaji' => 'Gaji',
                        'pensiunan' => 'Pensiunan',
						),truw),
				'lap_keuangan' => 'Laporan Keuangan',
				'pro_keuangan' => 'Proyeksi Keuangan',
				'panduan' => 'Panduan',
				'logout' => 'Log Out');
		}

		    foreach ($menu as $key => $value) {
            //$title = $value;
            $link = base_url().'index.php/logged&amp;menu=' . $key;

            if (is_array($value)) {
            	if ($menu == $_GET['menu']){
            		$active = 'class="active"'
            	}else{
            		$active = NULL;
            	}
                $html .= '<li class="sub-menu">';
                $html .= '<a href="'.$link.'" '.$active.'>
                          		<i class="fa fa-sign-in"></i>
                          		<span>Alokasi Penghasilan</span>
                      		</a>';
                $html .= '<ul class="sub">';

                if ($value[2] == true) {
                    foreach ($value[1] as $skey => $svalue) {
                        if (is_array($svalue)) {
                            $titleSub = $svalue[0];
                        } else {
                            $titleSub = $svalue;
                        }
                        if (is_array($svalue)) {
                            $link = '';
                        } else {
                            $link = 'href="'.base_url().'index.php/admin&menu=' . $skey . '"';
                        }

                        if ($titleSub == 'divider') {
                            $html .= '<li class="divider" style="margin-top:0px;margin-bottom:0px"></li>';
                        } else {
                            $html .= '<li>';
                            $html .= '<a ' . $link . '>' . $titleSub . '</a>';
                            // if ($svalue[2] == true) {
                            //     if (is_array($svalue)) {
                            //         $html .= '<ul class="dropdown-menu">';
                            //         foreach ($svalue[1] as $sskey => $ssvalue) {
                            //             $link = ROOTDIR . '?mode=admin&amp;menu=' . $sskey;
                            //             if ($ssvalue == 'divider') {
                            //                 $html .= '<li class="divider" style="margin-top:0px;margin-bottom:0px"></li>';
                            //             } else {
                            //                 $html .= '<li><a href="' . $link . '">' . $ssvalue . '</a></li>';
                            //             }
                            //         }
                            //         $html .= '</ul>';
                            //     }
                            // } else {
                                
                            // }
                            $html .= '</li>';
                        }
                    }
                }

                $html .= '</ul>';
                $html .= '</li>';
            }
        }

        return $html;

		// $menu_admin = '';

		// foreach ($menu as $key => $value) {
		// 	if ($key == $_GET['menu']){
		// 		$class = "active treeview";
		// 		$active_menu = $value;
		// 	}else{
		// 		$class = NULL;
		// 	}
		// 	$menu_admin .= '
		// 	<li class="'.$class.'">
  //             <a href="admin?menu='.$key.'">
  //               <i class="fa fa-book"></i> 
  //                 <span>'.$value.'</span>
  //             </a>
  //           </li>';	# code...
		// }

		// return array(
		// 	'menu_admin' => $menu_admin,
		// 	'active_menu' => $active_menu 
		// 	);
	}

    public function main($data,$content,$view)
    {
        $this->load->view('logged/top');
        $this->load->view('logged/header');
        $this->load->view('logged/aside',$this->menu());
        $this->load->view($view,$content);
        $this->load->view('logged/footer');
        $this->load->view('logged/bottom');
    }
}