<?php
define('host', 'localhost');
define('user', 'root');
define('pass', '');
define('db', 'quan_ly_hoc_tap');
$connect=mysqli_connect(host,user,pass,db);
if(!$connect){
	die('kết nối không thành công');
}
session_start();
$check='false';
$taikhoan=$password="";
if (isset($_POST['tk'])) {
	$taikhoan=$_POST['tk'];
}
if (isset($_POST['pass'])) {
	$password=$_POST['pass'];
}
if ($taikhoan!="" && $password!="") {
	$sql="select * from nguoidung where tai_khoan='".$taikhoan."' and mat_khau='".$password."'";
	$result=mysqli_query($connect,$sql);
	//var_dump($sql);
	if(mysqli_num_rows($result)>0){
		while ($row=mysqli_fetch_assoc($result)) {
			$_SESSION['taikhoan']=$row['tai_khoan'];
		}
		$check='true';
	}
	else{
		$check='false';
	}
}
echo $check;
?>