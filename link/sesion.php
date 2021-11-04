<?php 
session_start();
$email="";
if(isset($_SESSION['email'])){
	$email=$_SESSION['email'];
	$sql="select * from nguoidung where email='".$email."'";
	$data=laydata($sql);
	if($data!=null && count($data)>0){
		$ho_ten=$data[0]['ho_ten'];
		$img=$data[0]['anh'];
		$ma_pl=$data[0]['ma_pl']; 
		$ma_nd=$data[0]['ma_nd'];  
		$email=$data[0]['email'];     
	}
}
else{
	header('location:../dn.php');
}
?>