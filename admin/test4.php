<?php
require_once('../data_sv.php');
$check="";
			if(isset($_POST['ma'])){
				$ma_sv=$_POST['ma'];
			
			$sql="select * from nguoidung where ma_nd='".$ma_sv."'";
			$data=laydata($sql);
			if($data!=null && count($data)>0){
				$check=true;
			}
			else{
				$check=false;
			}
		}
		var_dump($check)
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body>
<form method="POST" action="">
	<input type="text" name="ma">
	<input type="submit" name="">
</form>
</body>
</html>