<?php 
require_once('../data_sv.php');
function rand_string( $length ) {
		$chars = "0123456789";
		$size = strlen( $chars );
		$str ="";
		for( $i = 0; $i < $length; $i++ ) {
			$str .= $chars[ rand( 0, $size - 1 ) ];
		}
		return $str;
	}
$conn=new mysqli(host,user,pass,data);
$output = '';  
$allowed_ext = array("csv");  
$extension = end(explode(".", $_FILES["employee_file"]["name"]));    
$file_data = fopen($_FILES["employee_file"]["tmp_name"], 'r');  
fgetcsv($file_data);  
while($row = fgetcsv($file_data))  
{
	$ma="";
	$hoTen = mysqli_real_escape_string($conn, $row[0]);  
	$diaChi = mysqli_real_escape_string($con, $row[1]);  
	$gioiTinh = mysqli_real_escape_string($conn, $row[2]);  
	$email = mysqli_real_escape_string($conn, $row[3]);  
	$ngaySinh = mysqli_real_escape_string($conn, $row[4]);
	$soDT = mysqli_real_escape_string($conn, $row[6]);
	$img = mysqli_real_escape_string($conn, $row[7]);
	$ten_pl = mysqli_real_escape_string($conn, $row[8]);
	$sql="select * from phanloai where ten_pl=N'".$ten_pl."'";
	$data=laydata($sql);
	$ma_pl="";
	if($data!=null && count($data)>0){
		foreach($data as $phanloai){
			$ma_pl=$['ma_pl'];
		}
	}
	if($ma_pl=='sv'){
		$ma='sv-'.$radom;
	}
	else{
		$ma='gv-'.$radom;
	}
	$sql="insert into nguoidung values('".$ma."','".$img."','','','".$hoTen."','".$ngaySinh."','".$gioiTinh."','".$diaChi."','".$email."','".$soDT."','".$ma_pl."')";
	mysqli_query($connect, $query);  
}
echo 'err';      
