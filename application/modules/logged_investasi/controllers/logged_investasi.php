<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
 
class Logged_investasi extends MX_Controller {

    function __construct(){
        $this->logged = new Logged();
        $this->load->library('dateclass');
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
            case 'delete':
                $this->delete();
            break;
            default:
                $this->manage();
            break;
        }
    }


    function manage()
    {
        $query = "SELECT * FROM tbl_income 
                  WHERE username = '".$this->session->userdata('username')."' AND 
                        id_income = '3' AND 
                        MONTH(bulan) = '".date('m')."'
                  ORDER BY bulan ASC";

        $q      = $this->db->query($query);

        $no = 1;
        foreach ($q->result_array($q) as $row) {
            $data .= "<tr>
                        <td style='text-align:center'>".$no."</td>
                        <td style='text-align:center'>Rp ".number_format($row['jumlah'],0,',','.').",-</td>
                        <td style='text-align:center'>".$this->dateclass->IndonesianDate($row['bulan'])."</td>
                        <td style='text-align:center'>
                        <a class='btn btn-success btn-xs' href='#' title='Edit'>
                            <i class='fa fa-edit'></i> Edit
                        </a>
                        <a class='btn btn-danger btn-xs' data-href='logged?menu=investasi&action=delete&id=".$row['thisid_income']."' data-toggle='modal' data-target='#confirm-delete'><i class='fa fa-times'></i> Delete</a></td>
                      </tr>";
            $no++;
        }

        $data           = array(
            'base_url'      => base_url(),
            'bulantahun'    => $this->dateclass->IndonesianMonth(date("m"))." ".date("Y"),
            'data'          => $data,
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