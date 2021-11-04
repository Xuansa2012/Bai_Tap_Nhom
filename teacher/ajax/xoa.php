<?php 
require_once("../data_sv.php"); 
if(isset($_POST['ma_nd'])){
	$ma_nd=$_POST['ma_nd'];
	$sql="delete from nguoidung where ma_nd=".$ma_nd;
	xuly($sql);
}
echo 'xóa sinh viên thành công';