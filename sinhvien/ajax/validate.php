<?php
define('host', 'localhost');
define('user', 'root');
define('pass', '');
define('db', 'qlsv');
$connect=mysqli_connect(host,user,pass,db);
if(!$connect){
	die('kết nối không thành công');
}
session_start();
$check='false';
$email=$password="";
if (isset($_POST['tk'])) {
	$email=$_POST['tk'];
}
if (isset($_POST['pass'])) {
	$password=$_POST['pass'];
}
if ($email!="" && $password!="") {
	$sql="select * from nguoidung where email='".$email."' and mat_khau='".$password."'";
	$result=mysqli_query($connect,$sql);
	//var_dump($sql);
	if(mysqli_num_rows($result)>0){
		$_SESSION['email']=$email;
		$check='true';
	}
	else{
		$check='false';
	}
}
echo $check;
?>