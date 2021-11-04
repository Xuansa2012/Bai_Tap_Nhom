<?php
require_once ('../data_sv.php');
require_once('../khungtrang/sesion.php');
$check=false;
$ma_nd_sv="";
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
	<title>admin</title>
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
		.than{width: 100%;height: auto; margin-top: 40px;}
		.dt1{width: 100%;height:250px;}
		.container{width: 100%;height: 200px;background-color: #FAF0E6;float: left}
		.thanh{width: 100%;height: 40px;background-color: #6A5ACD;padding-top: 8px;padding-left: 10px;color: white;}
		.nguoidung{width: 20%;height: 150px;background-color: #DCDCDC;margin-top: 20px;margin-left: 40px;float: left;text-align: center;border: 1px;
			border-radius: 10px;}
		.nguoidung:hover{box-shadow: 5px 5px 5px 5px #AAA;}
		.nhan{width: 100px;height: 50px;margin: 0 auto;margin-top: 30px;font-size: 50px;padding-top: -10px;}
		.chu{width: 100%;height: 40px;background-color: #6A5ACD;padding-left: 10px;padding-top: 8px;color: white;}
		.bang{width: 100%;height: 200px;}
		.clear{
			width: 100%;
			height: 10px;
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
					<a class="navbar-brand" href="#"><i class="fas fa-home"></i> Trang chủ <?php if($check==false){echo '-> Trang cá nhân';}?></a>
				</div>    
				<div class="navbar-header" style="position: absolute;right: 0;">
					<a class="navbar-brand" href="#"><i class="fas fa-user-tie"></i> <?php echo $ho_ten?></a>
				</div>    
			</div>
		</nav>
		<div class="than">
			<div class="thanh">Mô tả</div>
			<div>
				<div>Tên đề bài : <?php echo $ten_bt?></div>
				<div>Tên môn: <?php echo $ten_mon?></div>
				<div>thời gian: <?php echo $ht?></div>
				<?php echo '<div><a href="taitailieu.php?maTL='.$debai.'">xem đề bài tại đây</a></div>'?>
				<div>Lưu ý (*): nộp chậm 1 ngày trừ 1 điểm / tổng điểm</div>
			</div>
			<div class="thanh">Danh sách học sinh</div>
				<table class="table table-hover" id="table">
				    <thead>
				      <tr>
				        <th style="max-width: 40px;">Số TT</th>
				        <th>Sinh Viên</th>
				        <th>Trạng Thái</th>
				        <th>Điểm</th>
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
				    		$sql="select * from nguoidung,luutru where nguoidung.ma_nd=luutru.ma_nd and luutru.ma_nd='".$ds['ma_nd']."'";
				    		$data=laydata($sql);
				    		if($data!=null && count($data)>0){
				    			echo 'Hoàn Thành';
				    		}
				    		else{
				    			echo 'chưa nộp';
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
<script type="text/javascript">
	function xoasv(ma_nd,a) {
		option=confirm('bạn có muốn xóa không')
		if(!option){
			return
		}
		var ma="";
		if(a==1){
			ma="gv-"+ma_nd;
		}
		else{
			ma="sv-"+ma_nd;
		}
		$.post('ajax/xoa.php',{'ma_nd':ma},function(data) {
			alert(data)
			 window.location="qlNguoidung.php";
		})
	}
</script>
</body>
</html>