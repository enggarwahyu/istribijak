<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
 
class Logged_investasi extends MX_Controller {

    function __construct(){
        $this->logged = new Logged();
    }
 
    public function index()
    {   

        !isset($_GET['action']) ? $_GET['action'] = 'manage' : false;

            switch ($_GET['action']) {
            case 'manage':
                $this->manage();
            break;
            case 'insert':
                $this->insert();
            break;
            default:
                $this->manage();
            break;
        }
    }


    function manage()
    {
        $data           = array(
            'base_url'  => base_url(),
            'js'        => '<script src="'.base_url().'source/js-menu/logged/logged_investasi.js"></script>'
            );
        $this->logged->main($data,'logged_investasi/section_investasi');
    }

    function insert(){
        $kategori            = $this->input->post('kategori');
        $jumlah           = $this->input->post('jumlah');

        if($kategori == '') {
            $error[] = '- Kategori belum diisi';
        }
        if($jumlah == '') {
            $error[] = '- Jumlah belum diisi';
        }

        if (isset($error)) {
            die('<div class="alert alert-danger alert-dismissable"><b>Konfirmasi Kesalahan</b>: <br />'.implode('<br />', $error).'</div>');
        }else{
            $query = "INSERT INTO tbl_belanja (
                                    username,
                                    id_belanja,
                                    jumlah,
                                    tanggal
                                    ) VALUES(
                                    '".$this->session->userdata('username')."',
                                    '3',
                                    '".$jumlah."',
                                    '29 November 2015'
                                    )";
            // die($query);
            $qins = $this->db->query($query);
            die("sukses");
        }
    }
}