<?php

class Stringclass {

    function money($string, $koma = true, $null = '0') {
        $string = number_format($string, 2, '.', ',');

        if (preg_match('/./', $string)) {
            $ex = explode('.', $string);
            $string = $ex[0];
        }

        $string = str_replace(',', '', $string);

        if ($koma === false)
            $money = number_format($string, 0, ',', '.');
        else
            $money = number_format($string, 2, ',', '.');

        if ($money == 0)
            $money = $null;

        return($money);
    }

    function terbilang($x) {
        if (preg_match("/-/i", $x)) {
            $x = str_replace('-', '', $x);
        }
        if (preg_match("/./i", $x)) {
            $x = explode('.', $x);
            $x = $x[0];
        }

        $abil = array("", "Satu", "Dua", "Tiga", "Empat", "Lima", "Enam", "Tujuh", "Delapan", "Sembilan", "Sepuluh", "Sebelas");
        if ($x < 12) {
            return " " . $abil[$x];
        } elseif ($x < 20) {
            return $this->terbilang($x - 10) . "belas";
        } elseif ($x < 100) {
            return $this->terbilang($x / 10) . " Puluh" . $this->terbilang($x % 10);
        } elseif ($x < 200) {
            return " Seratus" . $this->terbilang($x - 100);
        } elseif ($x < 1000) {
            return $this->terbilang($x / 100) . " Ratus" . $this->terbilang($x % 100);
        } elseif ($x < 2000) {
            return " Seribu" . $this->terbilang($x - 1000);
        } elseif ($x < 1000000) {
            return $this->terbilang($x / 1000) . " Ribu" . $this->terbilang($x % 1000);
        } elseif ($x < 1000000000) {
            return $this->terbilang($x / 1000000) . " Juta" . $this->terbilang($x % 1000000);
        } elseif ($x < 1000000000000) {
            return $this->terbilang($x / 1000000000) . " Miliar" . $this->terbilang($x % 1000000000);
        }
    }

    function getSynopsis($con, $nmfrase = '20') {
        $con = strip_tags($con);
        $bufPartCnt = array();
        $buddCnt = explode(" ", $con);
        for ($i = 0; $i <= $nmfrase; $i++) {
            $bufPartCnt[$i] = $buddCnt[$i];
        }
        $partCnt = implode(" ", $bufPartCnt);

        return ($con <> '') ? $partCnt . " ... " : "";
    }

    function clean($str){
        $str = htmlspecialchars($str);
        return($str);
    } // clean.

    function escape($str){
        if(is_array($str)){
            foreach($str as $key=>$value){
                $str[$key] = self::escape($value);
            }
        }else{
            $str = str_replace( array('\\','"','\''),
                                array('\\\\','\"','\\\''), 
                                $str);
        }
        return($str);
    } // escape.

    function sinopsis($string, $totalKata = 50){
        $text = strip_tags($string);        
        $text = preg_replace('!\s+!', ' ', $text);      

        $array_exploded = array();
        $explode_string = explode(' ', $text);
        
        for($i=0; $i < $totalKata; $i++){
            $array_exploded[$i] = $explode_string[$i];
        }
        
        $new_text = implode(' ', $array_exploded);
        
        if($text==''){
            $new_text = '';
        }else{
            $titik = ' ...';            
            if( count($explode_string) < $totalKata ){
                $titik = false;
            }

            $new_text = $new_text . $titik;
        }
          
        return( $new_text );
    } // sinopsis.

    function valText($str){
        $text = preg_replace('/\x{EF}\x{BF}\x{BD}/u', '', iconv(mb_detect_encoding($str), 'UTF-8', $str));
        return $text;
    }

    function inputUang($str){
        $text1 = str_replace('.',NULL,$str);
        $text2 = str_replace(',','.',$text1);
        return $text2;
    }

    function inputPersen($str){
        $text = str_replace(',','.',$str);
        return $text;
    }

    function outputPersen($str){
        if ($str == '0.00'){
        $text = '0';
        }else{
        $text = str_replace('.',',',$str);
        }
        return $text;
    }

    function uniqid(){
        $t = microtime(true);
        $micro = sprintf("%06d",($t - floor($t)) * 1000000);
        $id = date('YmdHis'.$micro );
        return($id);
    }
}

?>