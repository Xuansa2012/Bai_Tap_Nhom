<?php 
require_once('../../data_sv.php');
require_once('../../khungtrang/sesion.php');
function rand_string( $length ) {
		$chars = "0123456789";
		$size = strlen( $chars );
		$str ="";
		for( $i = 0; $i < $length; $i++ ) {
			$str .= $chars[ rand( 0, $size - 1 ) ];
		}
		return $str;
	}
$connect = mysqli_connect("localhost", "root", "", "qlsv"); 
mysqli_set_charset($connect,"utf8"); 
$output = '';  
$allowed_ext = array("csv");  
$extension = end(explode(".", $_FILES["employee_file"]["name"]));    
$file_data = fopen($_FILES["employee_file"]["tmp_name"], 'r');  
fgetcsv($file_data); 
$err=true;
$check=true;
echo '<table class="table table-hover" id="table">';
echo '
	 <thead>
		<tr>
		<th style="max-width: 40px;">Số TT</th>
		<th>Tên người dùng</th>
		<th>Email</th>
		<th>trạng thái</th>
		<th>ghi chú</th>
		<th></th>
		</tr>
	</thead>
	';
	$i=1;
while($row = fgetcsv($file_data))  
{  	
	$mang= mysqli_real_escape_string($connect, $row[1]);
	$hoTen = mysqli_real_escape_string($connect, $row[1]);
	$gioiTinh = mysqli_real_escape_string($connect, $row[2]);
	$ngaySinh = mysqli_real_escape_string($connect, $row[3]);
	$mang = explode("/", $ngaySinh);
	if(count($mang)==3){
		$ngaySinh=$mang[2].'/'.$mang[1].'/'.$mang[0];
	}
	
	$diaChi = mysqli_real_escape_string($connect, $row[4]);
	$email = mysqli_real_escape_string($connect, $row[5]);  
	$soDT = mysqli_real_escape_string($connect, $row[6]);
	$soDT="0".$soDT;
	$img = mysqli_real_escape_string($connect, $row[7]); 
	$ten_pl = mysqli_real_escape_string($connect, $row[8]);
	$sql="select * from nguoidung where email='".$email."'";
	$data=laydata($sql);
	$err="";
	if($data!=null && count($data)>0){
		$err="mail đã tồn tại";
		$check=false;
	}
	else{
		
	}
	$ma_pl="";
	$sql="select * from phanloai where ten_pl='".$ten_pl."'";
	$data=laydata($sql);
	if($data!=null && count($data)>0){
		$ma_pl=$data[0]['ma_pl'];
	}
	else{
		$check=false;
		if($err==""){
			$err="tên phân loại ko tồn tại";
		}
		else{
			$err=$err.", tên phân loại ko tồn tại";
		}
	}
	if($err==""){
		$trangthai="✔";
		$err="Thành công";
		$bol=true;
		$ma_nd =""; 
		$radom=rand_string(7);
		if($ma_pl=='gv'){
			$ma_nd='gv-'.$radom;
		}
		else{
			$ma_nd="sv-".$radom;
		}
		$sql="insert into nguoidung values('".$ma_nd."','".$img."','',N'".$hoTen."','".$ngaySinh."',N'".$gioiTinh."',N'".$diaChi."','".$email."','".$soDT."','".$ma_pl."')";
		mysqli_query($connect, $sql);
	}
	else{
		$trangthai="❌";
	}
	echo'<tbody>
		<td style="min-width: 60px;">'.$i++.'</td>
		<td>'.$hoTen.'</td>
		<td>'.$email.'</td>
		<td style="padding-left:30px">'.$trangthai.'</td>
		<td>'.$err.'</td>
		<td></td>
	</tbody>';
}
echo '</table>';
?>