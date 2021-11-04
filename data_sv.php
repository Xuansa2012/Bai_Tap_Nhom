<?php 
	const host ="localhost";
	const user ="root";
	const pass ="";
	const data ="qlsv";
	function xuly($sql){
		$conn=new mysqli(host,user,pass,data);
		mysqli_set_charset($conn,"utf8");
		mysqli_query($conn,$sql);
		mysqli_close($conn);
	}
	function laydata($sql){
		$conn=new mysqli(host,user,pass,data);
		mysqli_set_charset($conn,"utf8");
		$result=mysqli_query($conn,$sql);
		$data=[];
		while ($row=mysqli_fetch_array($result)) {
			$data[]=$row;
		}
		mysqli_close($conn);
		return $data;
	}
	function fomat($date){
		$mang = explode("-", $date);
		$ngaySinh=$mang[2].'/'.$mang[1].'/'.$mang[0];
		return $ngaySinh;
	}
	function rand_string( $length ) {
		$chars = "0123456789";
		$size = strlen( $chars );
		$str ="";
		for( $i = 0; $i < $length; $i++ ) {
			$str .= $chars[ rand( 0, $size - 1 ) ];
		}
		return $str;
	}
	function thoigian($date){
		date_default_timezone_set("Asia/Ho_Chi_Minh");
		$dateNow=date("Y-m-d H:i:s");
		$diff = abs(strtotime($date)-strtotime($dateNow));
		$years = floor($diff / (365*60*60*24));
		$months = floor(($diff - $years * 365*60*60*24) / (30*60*60*24));
		$days = floor(($diff - $years * 365*60*60*24 - $months*30*60*60*24) / (60*60*24));
		$hours = floor(($diff - $years * 365*60*60*24 - $months*30*60*60*24 - $days*60*60*24) / (60*60));
		$minutes = floor(($diff - $years * 365*60*60*24 - $months*30*60*60*24 - $days*60*60*24 - $hours*60*60) / 60);
		$seconds = floor(($diff - $years * 365*60*60*24 - $months*30*60*60*24 - $days*60*60*24 - $hours*60*60 - $minutes*60));
		$ht=0;
		if($days>0){
			$ht="còn ".$days. " ngày";
		}
		else if($hours>0){
			$ht="còn ".$hours. " giờ";
		}
		else if($minutes>0){
			$ht="còn ".$minutes. " phút";
		}
		else if($seconds>0){
			$ht="còn ".$seconds. " giây";
		}
		return $ht;
	}
?>