<?php
require_once ('../data_sv.php');
require_once('../khungtrang/sesion.php');

if(isset($_GET['ma_btvn'])){
	$ma_btvn=$_GET['ma_btvn'];
	$sql="select * from monhoc,btvn where monhoc.ma_mon_hoc=btvn.ma_mon_hoc and ma_bt='".$ma_btvn."'";
	$data=laydata($sql);
	if($data!=null && count($data)>0){
		$ten_mon=$data[0]['ten_mon_hoc'];
		$ten_bt=$data[0]['ten_bt'];
		$thoi_gian_kt=$data[0]['thoigian_kt'];
		$debai=$data[0]['de_bai'];
	}
	$ht=thoigian($thoi_gian_kt);
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Teacher</title>
	  <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/style2.css">
    <meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>


<script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>

 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
    <style type="text/css">
		.than{width: 100%;height: auto; margin-top: 40px;background-color:#FAF0E6 ;}
		
		.container{width: 100%;height: 200px;background-color: #FAF0E6;float: left}
		.thanh{width: 100%;height: 40px;background-color: #6A5ACD;padding-top: 8px;padding-left: 10px;color: white;}
		
		body{
			font-size: 20px;
		}
	</style>
</head>
<body>
<div class="wrapper" style="position: absolute;position: absolute;top :0">
	<?php require_once('../khungtrang/sidebarGV.php')?>
	<div id="content" style="width: 85%;">
		<nav class="navbar navbar-expand-lg " style="background-color: #7386D5;width: 100%;height: 50px;position: absolute;top:0;left:0">
			<div class="container-fluid">
				<div class="navbar-header" style="position: absolute;:left: 0;">
					<a class="navbar-brand" href="index.php" style="color:black"><i class="fas fa-home"></i> Trang ch??? </a>
				</div>    
				<div class="navbar-header" style="position: absolute;right: 0;">
					<a class="navbar-brand" href="#"style="color: black;"><i class="fas fa-user-tie"></i> <?php echo $ho_ten?></a>
				</div>    
			</div>
		</nav>
		<div class="than">
			<div class="thanh">M?? t???</div>
			<div style="padding-left: 100px;">
				<div>T??n ????? b??i : <?php echo $ten_bt?></div>
				<br>
				<div>T??n m??n: <?php echo $ten_mon?></div>
				<br>
				<div>Th???i gian: <?php echo $ht?></div>
				<br>
				<?php echo '<div><a href="taitailieu.php?maTL='.$debai.'">xem ????? b??i t???i ????y</a></div>'?>
				<div>L??u ?? (*): n???p ch???m 1 ng??y tr??? 1 ??i???m / t???ng ??i???m</div>
			</div>
			<div class="thanh" style="margin-top:40px">Danh s??ch h???c sinh</div>
				<table class="table table-hover" id="table">
				    <thead>
				      <tr>
				        <th style="max-width: 40px;">S??? TT</th>
				        <th>Sinh Vi??n</th>
				        <th>Tr???ng Th??i</th>
				        <th>??i???m</th>
				      </tr>
				    </thead>
				    <?php 
				    	$sql ="select * from nguoidung where ma_pl='sv'";
				    	$data=laydata($sql);
				    	$i=1;
				    	foreach($data as $ds){
				    ?>
				    <tbody>
				    	<td><?php echo $i++?></td>
				    	<td><?php echo $ds['ho_ten']?></td>
				    	<td><?php 
				    		$sql="select * from nguoidung,luutru where nguoidung.ma_nd=luutru.ma_nd and luutru.ma_nd='".$ds['ma_nd']."' and ma_bt='".$ma_btvn."'";
				    		$data=laydata($sql);
				    		if($data!=null && count($data)>0){
				    			echo 'Ho??n Th??nh';
				    		}
				    		else{
				    			echo 'ch??a n???p';
				    		}
				    		?>
				    			
				    	</td>
				    	<td></td>
				    </tbody>
				<?php }?>
				</table>
		</div>
	</div>
</div>
<style type="text/css">
	.khung-ten{
		width: 100%;
		font-size: 24px;
		text-align: center;
		margin-bottom: 10px;
		padding-top: 15px;
	}
	.khung{
		width: 100%;
		font-size: 18px;
		margin-left: 30px;
		line-height: 30px;
		margin-top: 10px;
		height: auto;
		background-color: #FFDACO;
		margin-bottom: 20px;
	}
</style>

</body>
</html>