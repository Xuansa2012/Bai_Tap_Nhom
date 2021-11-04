<?php
require_once('../../data_sv.php');
$connect = mysqli_connect("localhost", "root", "", "qlsv"); 
mysqli_set_charset($connect,"utf8"); 
$output = '';  
$allowed_ext = array("csv");  
$extension = end(explode(".", $_FILES["employee_file"]["name"]));    
$file_data = fopen($_FILES["employee_file"]["tmp_name"], 'r');  
fgetcsv($file_data); 
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
	$str= mysqli_real_escape_string($connect, $row[0]);
	$arr=explode(";",$str);
	$hoTen = $arr[0];
	$gioiTinh = $arr[1];
	$ngaySinh = $arr[2];
	$diaChi= $arr[3];
	$email = $arr[4];
	$sdt=$arr[5];
	$anh = $arr[6];
	$phanloai=$arr[7];
	$mang = explode("/", $ngaySinh);
	if(count($mang)==3){
		$ngaySinh=$mang[2].'/'.$mang[1].'/'.$mang[0];
	}
	$sql="select * from nguoidung where email='".$arr[4]."'";
	$data=laydata($sql);
	$err="";
	if($data!=null && count($data)>0){
		$err="mail đã tồn tại";
		$check=false;
	}
	else{
		
	}
	$ma_pl="";
	$sql="select * from phanloai where ten_pl='".$arr[7]."'";
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
		$sql="insert into nguoidung values('".$ma_nd."','".$anh."','',N'".$hoTen."','".$ngaySinh."',N'".$gioiTinh."',N'".$diaChi."','".$email."','".$sdt."','".$ma_pl."')";
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
