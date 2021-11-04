<?php 
require_once ('data_sv.php');
session_start();

if(isset($_SESSION['email'])){
	$email=$_SESSION['email'];
	$sql="select * from nguoidung where email='".$email."'";
	$data=laydata($sql);
	if($data!=null && count($data)>0){
		$pl=$data[0]['ma_pl'];
		if($pl=='admin'){
			header('location:admin/index.php');
		}else if($pl=='gv'){
			header('location:giaovien/giaovien.php');
		}else{
			header('location:sinhvien/sinhvien.php');
		}
	}
}

?>