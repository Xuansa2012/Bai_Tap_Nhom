<?php
require_once ('../data_sv.php');
require_once('../khungtrang/sesion.php');
$check=false;
$ma_nd_sv="";
if(isset($_GET['ma_nd'])){
	$ma_nd=$_GET['ma_nd'];
	$sql="select * from nguoidung,phanloai where nguoidung.ma_pl=phanloai.ma_pl and ma_nd='".$ma_nd."'";
	$data=laydata($sql);
	if($data!=null && count($data)>0){
		$ho_ten_sv=$data[0]['ho_ten'];
		$gioiTinh_sv=$data[0]['gioi_tinh'];
		$img_sv=$data[0]['anh'];
		$ma_pl_sv=$data[0]['ma_pl'];
		$diaChi_sv=$data[0]['dia_chi'];
		$ngaySinh_sv=fomat($data[0]['ngay_sinh']);
		$email_sv=$data[0]['email'];
		$sdt_sv=$data[0]['sdt'];
		$ten_pl_sv=$data[0]['ten_pl'];
		$ma_nd_sv=$data[0]['ma_nd'];
		$check=true;      
	}
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
					<a class="navbar-brand" href="#"><i class="fas fa-home"></i> Trang ch??? <?php if($check==false){echo '-> Trang c?? nh??n';}?></a>
				</div>    
				<div class="navbar-header" style="position: absolute;right: 0;">
					<a class="navbar-brand" href="#"><i class="fas fa-user-tie"></i> <?php echo $ho_ten?></a>
				</div>    
			</div>
		</nav>
		<div class="than">
			<div class="row">
				<div class="col-sm-3">
					<?php if($img==""|| $img==null){?>
                    	<img src="images/img-01.png" height="250px">
                	<?php }else{?>
                    	<img src="<?php echo $img?>" height="250px">
                	<?php }?>
				</div>
				<div class="col-sm-7 khung" >
					<div class="khung-ten"><?php echo $ho_ten_sv?></div>
					<div>Gi???i t??nh: <?php echo $gioiTinh_sv?></div>
					<div>Qu?? Qu??n: <?php echo $diaChi_sv?></div>
					<div>Ng??y Sinh: <?php echo $ngaySinh_sv?></div>
					<div>Email: <?php echo $email_sv?></div>
					<div>S??? ??i???n tho???i li??n h???: <?php echo $sdt_sv?></div>
					<div>Ngh??? nghi???p: <?php echo $ten_pl_sv?></div>
				</div>
			</div>
			<div class="clear"></div>
			<div class="row">
				<div class="col-sm-4">
					<a href="suathongtin.php?ma_nd=<?php echo $ma_nd_sv?>"><button class="btn btn-success">S???a Th??ng tin sinh vi??n</button></a>
				</div>
				<div class="col-sm-4">
					<?php 
						$mang = explode("-", $ma_nd_sv);
						$ct=0;
						if($mang[0]=='gv'){
							$ct=1;
						}
						else{
							$ct=0;
						}
						echo'<button class="btn btn-danger" onclick="xoasv('.$mang[1].','.$ct.')">X??a Th??ng tin sinh vi??n</button>';
						?>
				</div>
				<div class="col-sm-4">
					<a href="sqlNguoidung.php"><button class="btn btn-success">Tr??? v???</button></a>
				</div>
			</div>
			<div class="clear"></div>
			<div class="row">
				
			</div>
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
		option=confirm('b???n c?? mu???n x??a kh??ng')
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