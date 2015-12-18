<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
 
class Logged_dashboard extends MX_Controller {

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
            default:
                $this->manage();
            break;
        }
    }

    function manage(){
        $username   = $this->session->userdata('username');

        //metro 1
        //start total income
        $query = "SELECT SUM(jumlah) AS jumlah_pendapatan FROM tbl_income 
                  WHERE username='".$username."'
                  AND MONTH(bulan) = '".date('m')."'";

        $query_income   = $this->db->query($query);
        $row_income     = $query_income->row();
        $total_income   = $row_income->jumlah_pendapatan;
        //end-total income 

        //start total belanja
        $query = "SELECT SUM(jumlah) AS jumlah_pengeluaran_belanja FROM tbl_belanja 
                  WHERE username='".$username."'
                  AND MONTH(tanggal) = '".date('m')."'";

        $query_belanja      = $this->db->query($query);
        $row_belanja        = $query_belanja->row();
        $total_belanja      = $row_belanja->jumlah_pengeluaran_belanja;

        $query = "SELECT SUM(jumlah) AS jumlah_pengeluaran_cicilan FROM tbl_cicilan 
                  WHERE username='".$username."'
                  AND MONTH(tanggal) = '".date('m')."'";

        $query_cicilan      = $this->db->query($query);
        $row_cicilan        = $query_cicilan->row();
        $total_cicilan      = $row_cicilan->jumlah_pengeluaran_cicilan;
        //end total belanja

        $total_pengeluaran  = (double)$total_cicilan + (double)$total_belanja;
        $sisa_income        = $total_income - $total_pengeluaran;

        $pembagi = (($total_pengeluaran+$sisa_income))*100;

        if ($pembagi == 0){
            $persentase_sisa_income                 = 0;
            $persentase_total_pengeluaran           = 0;
        }else{
            $persentase_sisa_income                 = (int)(($sisa_income/($total_pengeluaran+$sisa_income))*100);
            $persentase_total_pengeluaran           = (int)(($total_pengeluaran/($total_pengeluaran+$sisa_income))*100);
        }

        //end

        //start:pengeluaran terbesar
        $query = "SELECT MAX(tbl_belanja.jumlah) AS jumlah_pengeluaran_terbesar, 
                         id_belanja.nama_jenis_belanja AS nama_jenis_belanja 
                  FROM tbl_belanja,id_belanja 
                  WHERE tbl_belanja.username='".$username."' AND 
                        tbl_belanja.id_belanja = id_belanja.thisid_id_belanja
                  AND MONTH(tbl_belanja.tanggal) = '".date('m')."'";

        $query_belanja          = $this->db->query($query);
        $row                    = $query_belanja->row();
        $pengeluaran_terbesar   = (float)($row->jumlah_pengeluaran_terbesar);
        $nama_jenis_belanja     = ($row->nama_jenis_belanja);
        //end:pengeluaran_terbesar

        //START -- METRO 4
        //start total income
        $query = "SELECT SUM(jumlah) AS jumlah_pendapatan FROM tbl_income 
                  WHERE username='".$username."'
                  AND MONTH(bulan) = '10'";
        

        $query_income               = $this->db->query($query);
        $row_income                 = $query_income->row();
        $total_income_bulan_lalu    = $row_income->jumlah_pendapatan;
        //end-total income 

        //start total belanja
        $query = "SELECT SUM(jumlah) AS jumlah_pengeluaran_belanja FROM tbl_belanja 
                  WHERE username='".$username."'
                  AND MONTH(tanggal) = '10'";

        $query_belanja                  = $this->db->query($query);
        $row_belanja                    = $query_belanja->row();
        $total_belanja_bulan_lalu       = $row_belanja->jumlah_pengeluaran_belanja;

        $query = "SELECT SUM(jumlah) AS jumlah_pengeluaran_cicilan FROM tbl_cicilan 
                  WHERE username='".$username."'
                  AND MONTH(tanggal) = '10'";

        $query_cicilan                 = $this->db->query($query);
        $row_cicilan                   = $query_cicilan->row();
        $total_cicilan_bulan_lalu      = $row_cicilan->jumlah_pengeluaran_cicilan;
        //end total belanja
        $sisa_income_bulan_lalu        = $total_income_bulan_lalu - $total_pengeluaran_bulan_lalu;

        $persentase_sisa_income_bulan_lalu             = (int)(($sisa_income_bulan_lalu/($total_cicilan_bulan_lalu+$sisa_income_bulan_lalu+$total_belanja_bulan_lalu))*100);
        $persentase_total_cicilan_bulan_lalu           = (int)(($total_cicilan_bulan_lalu/($total_cicilan_bulan_lalu+$sisa_income_bulan_lalu+$total_belanja_bulan_lalu))*100);
        $persentase_total_belanja_bulan_lalu           = (int)(($total_belanja_bulan_lalu/($total_cicilan_bulan_lalu+$sisa_income_bulan_lalu+$total_belanja_bulan_lalu))*100);
        //end
        //END -- METRO 4

        $data     = array(
            'metro1_persentase_sisa_income'                 => $persentase_sisa_income,
            'metro1_persentase_total_pengeluaran'           => $persentase_total_pengeluaran,
            'metro1_sisa_income'                            => number_format($sisa_income),
            'metro1_total_pengeluaran'                      => number_format($total_pengeluaran),
            'metro1_pengeluaran_terbesar'                   => number_format($pengeluaran_terbesar),
            'metro1_nama_jenis_belanja'                     => $nama_jenis_belanja,
            'metro4_persentase_sisa_income_bulan_lalu'      => $persentase_sisa_income_bulan_lalu,
            'metro4_persentase_total_belanja_bulan_lalu'    => $persentase_total_belanja_bulan_lalu,
            'metro4_persentase_total_cicilan_bulan_lalu'    => $persentase_total_cicilan_bulan_lalu+1,
            'metro4_sisa_income_bulan_lalu'                 => number_format($sisa_income_bulan_lalu),
            'metro4_total_belanja_bulan_lalu'               => number_format($total_belanja_bulan_lalu),
            'metro4_total_cicilan_bulan_lalu'               => number_format($total_cicilan_bulan_lalu)
            );

        $this->logged->main($data,'logged/section');
        //
    }

}