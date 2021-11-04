<?php 
    require_once("../../data_sv.php");
    require_once("../../khungtrang/sesion.php");
    if(isset($_COOKIE['ma_mon'])){
    	$ma_mon=$_COOKIE['ma_mon'];
    	$sql="select* from monhoc where ma_mon_hoc = '".$_COOKIE['ma_mon']."'";
    	$file="tailieu/".$_GET['file'];
		$data=laydata($sql);
		$ma_bt='bt-'.rand_string(7);
		$date=$_GET['date'];
		$sql="insert into btvn values('".$ma_bt."','','".$ma_nd."','".$date."','tl','".$file."')";
		xuly($sql);
	}echo $sql;
	}?>
  