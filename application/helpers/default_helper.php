<?php
if ( ! function_exists('element')) {

	function img_src($src,$path,$replace=""){
		$ci = &get_instance();

		$replace = ($replace) ? base_url().$replace : $ci->config->item('assets')."img/not-found.png";
		if(substr($path, -1)!='/') $path.='/';

		if ($src=='') {
			$img=$replace;	
		}else{
			if (file_exists($path.$src)) {
				$img=base_url().$path.$src;
			}else{
				$img=$replace;
			}
		}
		return $img;	
	}
	
	function convertDate($date,$format=''){
		if(!$date || $date == '0000-00-00 00:00:00' || $date=='0000-00-00') return '';
		
		$date = explode("-",$date);
		$tahun = $date[0];
		$bulan = $date[1];
		$tanggal = substr($date[2],0,2);	
		$jam = substr($date[2],3,11);	

		switch($bulan){
			case 1:
			$bulan_ind = "Januari";
			$bulan_ind_short = "Jan";
			break;
			case 2:
			$bulan_ind = "Februari";
			$bulan_ind_short = "Feb";
			break;
			case 3:
			$bulan_ind = "Maret";
			$bulan_ind_short = "Mar";
			break;
			case 4:
			$bulan_ind = "April";
			$bulan_ind_short = "Apr";
			break;
			case 5:
			$bulan_ind = "Mei";
			$bulan_ind_short = "Mei";
			break;
			case 6:
			$bulan_ind = "Juni";
			$bulan_ind_short = "Jun";
			break;
			case 7:
			$bulan_ind = "Juli";
			$bulan_ind_short = "Jul";
			break;
			case 8:
			$bulan_ind = "Agustus";
			$bulan_ind_short = "Agust";
			break;
			case 9:
			$bulan_ind = "September";
			$bulan_ind_short = "Sept";
			break;
			case 10:
			$bulan_ind = "Oktober";
			$bulan_ind_short = "Okt";
			break;
			case 11:
			$bulan_ind = "November";
			$bulan_ind_short = "Nov";
			break;
			case 12:
			$bulan_ind = "Desember";
			$bulan_ind_short = "Des";
			break;
			default :
			$bulan_ind = "";
			$bulan_ind_short = "";
			break;
		}

		switch($format){
			case "d/m/y": //"dd/mm/yyyy"
				$output = $tanggal.'/'.$bulan.'/'.$tahun;
				break;
			case "d-m-y": //dd-mm-yyyy
				$output = $tanggal.'-'.$bulan.'-'.$tahun;
				break;
			case "d m y": //"dd mmm yyyy"
				$output = $tanggal.' '.$bulan_ind.' '.$tahun;
				break;
			case "his":
				$output = $jam;
				break;
			case "dmy : his":
				$output = $tanggal.' '.$bulan_ind.' '.$tahun.' '.$jam;
				break;
			case "m y": //"mmm yyyy"
				$output = $bulan_ind.' '.$tahun;
				break;
			case "m": //"mmm"
				$output = $bulan_ind;
				break;
			case "dmy":
				$output = $tanggal.' '.$bulan_ind_short.' '.$tahun;
				break;
			case "ym":
				$output = $tahun.'-'.$bulan;
				break;
			case "url":
				$output = $bulan_ind.$tahun;
				break;
			case "jam":
				$output = substr($jam,0,5);
				break;		
			default :
				$output = $tanggal.' '.$bulan_ind.' '.$tahun;
				break;
		}	 
		
		if($tanggal=='00') $output = 'NULL';
		
		return $output;	   
	}
	
	function backend_url($param='') {
		$ci = &get_instance();
		if($param!=''){
			return $ci->config->item('backend_url').$param;
		}
		return $ci->config->item('backend_url');
	}

	function this_module($id) {
		$ci = &get_instance();
		if(!isset($id)){
			$this_module = $ci->uri->segment('2');
		}else{
			$this_module = $ci->uri->segment($id);
		}
		return $this_module;
	}
	
	function debug($data='Debug mode!'){
		echo "<!DOCTYPE html><pre>";
		print_r ($data);
		echo "</pre>";
		exit();
	}

	function jwt($token='',$encode=true){ 
		if(!$encode){
			try {
				return JWT::decode($token, "d3samadrapama" );
			} catch (Exception $e) {
				return '';	
			}
		}else{
			return JWT::encode($token, "d3samadrapama" ) ;
		}
	}

	function jdv_encrypt($string){
		$result = explode('.',jwt($string));
		return $result[1];
	}

	function getDay($date){
		$namaHari = date("l", strtotime($date));
		$translate = array(
			'Monday'	=> 'Senin',
			'Tuesday'	=> 'Selasa',
			'Wednesday'	=> 'Rabu',
			'Thursday'	=> 'Kamis',
			'Friday'	=> 'Jumat',
			'Saturday'	=> 'Sabtu',
			'Sunday'	=> 'Minggu',
		);
		$hari = $translate[$namaHari];
		return $hari;
	}

	function get_client_ip() {
		$ipaddress = '';
		if (getenv('HTTP_CLIENT_IP'))
			$ipaddress = getenv('HTTP_CLIENT_IP');
		else if(getenv('HTTP_X_FORWARDED_FOR'))
			$ipaddress = getenv('HTTP_X_FORWARDED_FOR');
		else if(getenv('HTTP_X_FORWARDED'))
			$ipaddress = getenv('HTTP_X_FORWARDED');
		else if(getenv('HTTP_FORWARDED_FOR'))
			$ipaddress = getenv('HTTP_FORWARDED_FOR');
		else if(getenv('HTTP_FORWARDED'))
		$ipaddress = getenv('HTTP_FORWARDED');
		else if(getenv('REMOTE_ADDR'))
			$ipaddress = getenv('REMOTE_ADDR');
		else
			$ipaddress = 'UNKNOWN';
		return $ipaddress;
	}

}

?>