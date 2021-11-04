<?php 
require_once ('../data_sv.php');
require_once('../khungtrang/sesion.php');
$ma_bt=$_GET['maBT'];
	$sql="select * from nguoidung,btvn,monhoc,loai_de where nguoidung.ma_nd=monhoc.ma_nd and monhoc.ma_mon_hoc=btvn.ma_mon_hoc and loai_de.ma_ld=btvn.ma_ld and btvn.ma_bt='".$ma_bt."'";
	$data=laydata($sql);
	if($data!=null && count($data)>0){
		$ten_bt=$data[0]['ten_bt'];
		$ten_mon=$data[0]['ten_mon_hoc'];
		$ten_gv=$data[0]['ho_ten'];
		$thoi_gian=$data[0]['thoigian_kt'];
		$de_bai=$data[0]['de_bai'];
	}
	date_default_timezone_set("Asia/Ho_Chi_Minh");
	$dateNow=date("Y-m-d H:i:s");
	$diff = abs(strtotime($thoi_gian)-strtotime($dateNow));
	$years = floor($diff / (365*60*60*24));
	$months = floor(($diff - $years * 365*60*60*24) / (30*60*60*24));
	$days = floor(($diff - $years * 365*60*60*24 - $months*30*60*60*24) / (60*60*24));
	$hours = floor(($diff - $years * 365*60*60*24 - $months*30*60*60*24 - $days*60*60*24) / (60*60));
	$minutes = floor(($diff - $years * 365*60*60*24 - $months*30*60*60*24 - $days*60*60*24 - $hours*60*60) / 60);
	$seconds = floor(($diff - $years * 365*60*60*24 - $months*30*60*60*24 - $days*60*60*24 - $hours*60*60 - $minutes*60));
	$ht=0;
	if($days>0){
		$ht="còn ".$days. " ngày";
	}
	else if($hours>0){
		$ht="còn ".$hours. " giờ";
	}
	else if($minutes>0){
		$ht="còn ".$minutes. " phút";
	}
	else if($seconds>0){
		$ht="còn ".$seconds. " giây";
	}
?>
<!DOCTYPE html>
<html>
<head>
	<title>admin</title>
	<?php require_once('../khungtrang/link.php')?>;
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
	<?php require_once('../khungtrang/sidebar.php')?>
	<div id="content" style="width: 85%;">
		<nav class="navbar navbar-expand-lg " style="background-color: #7386D5;width: 100%;height: 50px;position: absolute;top:0;left:0">
			<div class="container-fluid">
				<div class="navbar-header" style="position: absolute;:left: 0;">
					<a class="navbar-brand" href="#"><i class="fas fa-home"></i> Trang chủ / Bài tập <?php echo $ten_bt?></a>
				</div>    
				<div class="navbar-header" style="position: absolute;right: 0;">
					<a class="navbar-brand" href="#"><i class="fas fa-user-tie"></i> <?php echo $ho_ten?></a>
				</div>    
			</div>
		</nav>
		<div class="than">
			<div>Bài tập <?php echo $ten_bt?></div>
			<div>Môn học <?php echo $ten_mon?></div>
			<div>Giáo viên <?php echo $ten_gv?></div>
			<div>Hạn làm bài <?php echo $ht?></div>
			<div>đề bài</div>
			<?php 
				if($de_bai==null || $de_bai==""){
					$sql="select * from ct_btvn where ma_bt='".$ma_bt."'";
					$data=laydata($sql);
					foreach($data as $ct){
				?>
				<div><?php echo $ct['cau_hoi']?>: <?php echo $ct['de_bai']?></div>
				<?php }}else{?>
				<embed src="<?php echo $de_bai?>" type="application/pdf"   height="1000px" width="100%">
				<?php }?>
		</div>
</div>
</body>
</html>