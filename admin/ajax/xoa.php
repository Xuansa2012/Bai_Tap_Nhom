<?php 
$connect = mysqli_connect("localhost", "root", "", "qlsv");  
if(isset($_POST['ma_nd'])){
	$ma_nd=$_POST['ma_nd'];
	$sql="delete from luutru where ma_nd='".$ma_nd."'";
	mysqli_query($connect, $sql);
	$sql="delete from monhoc where ma_nd='".$ma_nd."'";
	mysqli_query($connect, $sql);
	$sql="delete from nguoidung where ma_nd='".$ma_nd."'";
	mysqli_query($connect, $sql);  
}
echo 'xóa sinh viên thành công';