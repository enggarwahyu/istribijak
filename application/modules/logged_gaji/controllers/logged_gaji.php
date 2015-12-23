<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
 
class Logged_gaji extends MX_Controller {

    function __construct(){
        $this->logged = new Logged();
        $this->load->library('dateclass');
        $this->load->library('stringclass');
    }
 
    public function index()
    {	

        !isset($_GET['action']) ? $_GET['action'] = 'manage' : false;

            switch ($_GET['action']) {
            case 'manage':
                $this->manage();
            break;
            case 'auth':
                $this->auth();
            break;
            case 'edit':
                $this->edit();
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
                        id_income = '1' AND 
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
                        <a class='btn btn-success btn-xs' href='logged?menu=gaji&action=edit&id=".$row['thisid_income']."' title='Ubah'>
                            <i class='fa fa-edit'></i> Ubah
                        </a>
                        <a class='btn btn-danger btn-xs' data-href='logged?menu=gaji&action=delete&id=".$row['thisid_income']."' data-toggle='modal' data-target='#confirm-delete'><i class='fa fa-times'></i> Hapus</a></td>
                      </tr>";
            $no++;
        }

        $data           = array(
            'base_url'  => base_url(),
            'bulantahun'   => $this->dateclass->IndonesianMonth(date("m"))." ".date("Y"),
            'data'      => $data,
            'js'        => '<script src="'.base_url().'source/js-menu/logged/logged_gaji.js"></script>'
            );
        $this->logged->main($data,'logged_gaji/section_gaji');
    }

    function edit()
    {
        $id                 = $this->input->get('id');
        $username           = $this->session->userdata('username');

            $query  = "SELECT * FROM tbl_income 
                      WHERE username = '".$this->session->userdata('username')."' AND
                            thisid_income = '".$id."'";

            $q      = $this->db->query($query);
            foreach ($q->result_array($q) as $r) {
                $jumlah     = $r['jumlah'];
                $tanggal    = $r['bulan'];
            }

            $data = array(
                );

        $data           = array(
            'base_url'  => base_url(),
            'jumlah'    => number_format($jumlah,0,',','.'),
            'id'        => $id,
            'tanggal'   => $tanggal,
            'js'        => '<script src="'.base_url().'source/js-menu/logged/logged_gaji.js"></script>'
            );
        $this->logged->main($data,'logged_gaji/section_edit_gaji');
    }

    function insert(){
        $jumlah            = $this->input->post('jumlah');
        $tanggal           = $this->input->post('tanggal');

        if($jumlah == '') {
            $error[] = '- Jumlah Gaji belum diisi';
        }
        if($tanggal == '') {
            $error[] = '- Tanggal belum diisi';
        }

        if (isset($error)) {
            die('<div class="alert alert-danger alert-dismissable"><b>Konfirmasi Kesalahan</b>: <br />'.implode('<br />', $error).'</div>');
        }else{
            $query = "INSERT INTO tbl_income (
                                    username,
                                    id_income,
                                    jumlah,
                                    bulan
                                    ) VALUES(
                                    '".$this->session->userdata('username')."',
                                    '1',
                                    '".$jumlah."',
                                    '".$tanggal."'
                                    )";
            // die($query);
            $qins = $this->db->query($query);
            die("sukses");
        }
    }

    function delete(){
        $id                 = $this->input->get('id');
        $username           = $this->session->userdata('username');

            $query = "DELETE FROM tbl_income 
                      WHERE username = '".$this->session->userdata('username')."' AND
                            thisid_income = '".$id."'";
            // die($query);
            $qins = $this->db->query($query);

        die("<meta http-equiv='refresh' content='0;URL=logged?menu=gaji'>");
    }

    function auth(){
        if ($_POST['auth'] == 'ubah'){
            $id                 = $this->input->post('id');
            $jumlah             = $this->input->post('jumlah');
            $tanggal            = $this->input->post('tanggal');

            if($jumlah == '') {
                $error[] = '- Jumlah Gaji belum diisi';
            }
            if($tanggal == '') {
                $error[] = '- Tanggal belum diisi';
            }

            $jumlah     = $_POST['jumlah'];;
            $tanggal    = $_POST['tanggal'];

            if (isset($error)) {
                die('<div class="alert alert-danger alert-dismissable"><b>Konfirmasi Kesalahan</b>: <br />'.implode('<br />', $error).'</div>');
            }else{
            $query = "UPDATE tbl_income 
                      SET jumlah = '".$this->stringclass->inputUang($jumlah)."', 
                          bulan = '".$tanggal."' 
                      WHERE thisid_income='".$id."'";

            $qins = $this->db->query($query);
            die("sukses");
            }

            echo "<meta http-equiv='refresh' content='0;URL=logged?menu=gaji'>";
        }elseif($_POST['auth'] == 'tambah'){
            $jumlah            = $this->input->post('jumlah');
            $tanggal           = $this->input->post('tanggal');

            if($jumlah == '') {
                $error[] = '- Jumlah Gaji belum diisi';
            }
            if($tanggal == '') {
                $error[] = '- Tanggal belum diisi';
            }

            if (isset($error)) {
                die('<div class="alert alert-danger alert-dismissable"><b>Konfirmasi Kesalahan</b>: <br />'.implode('<br />', $error).'</div>');
            }else{
                $query = "INSERT INTO tbl_income (
                                        username,
                                        id_income,
                                        jumlah,
                                        bulan
                                        ) VALUES(
                                        '".$this->session->userdata('username')."',
                                        '1',
                                        '".$jumlah."',
                                        '".$tanggal."'
                                        )";
                // die($query);
                $qins = $this->db->query($query);
                die("sukses");
            }
        }
    }
}