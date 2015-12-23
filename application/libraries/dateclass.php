<?php
class DateClass{
		function IndonesianMonth($intMon){
			$intMon = (int) $intMon; 
			$arMon = array("","Januari","Februari","Maret","April","Mei","Juni","Juli","Agustus","September","Oktober","November","Desember");
				return $arMon[$intMon];
		}
		
		function IndonesianDay($intMon){
			$hari = array('Senin','Selasa','Rabu','Kamis','Jumat','Sabtu','Minggu');
			return $hari[$intMon];
		}		
		
		function SQLIndonesianDay($intMon){
			$hari = array('Minggu','Senin','Selasa','Rabu','Kamis','Jumat','Sabtu');
			return $hari[$intMon];
		}
				
		function IndonesianDate($sqldate,$delim=' '){	
			$intBln=substr($sqldate,5,2);	
			$bln = $this->IndonesianMonth($intBln);	
			
			return substr($sqldate,8,2).$delim.$bln.$delim.substr($sqldate,0,4);
		}
		
		function IndonesianDatetime($sqldate){	
			$intBln=substr($sqldate,5,2);	
			$bln = $this->IndonesianMonth($intBln);	
			
			return substr($sqldate,8,2).' '.$bln.' '.substr($sqldate,0,4).' '.substr($sqldate,11,8);
		}
		
		function hariini(){		
		return $this->IndonesianDay(@date("w")-1).', '.$this->IndonesianDate(@date("Y-m-d"));
		}
}
?>