<?php
	require_once('../data_sv.php');
	require_once('../khungtrang/sesion.php');
	$err_hoTen=$err_ngaySinh=$gioiTinh=$err_diaChi=$err_email=$err_soDT="";
	
	$hoTen=$ngaySinh=$gioiTinh=$diaChi=$soDT=$email=$target_file="";
	if(isset($_GET['ma_nd'])){
		$ma_nd=$_GET['ma_nd'];
		$sql="select * from nguoidung,phanloai where nguoidung.ma_pl=phanloai.ma_pl and nguoidung.ma_nd='".$ma_nd."'";
		$data=laydata($sql);
		if($data!=null && count($data)>0){
			$hoTen=$data[0]['ho_ten'];
			$gioiTinh=$data[0]['gioi_tinh'];
			$target_file=$data[0]['anh'];
			$mapl=$data[0]['ma_pl'];
			$diaChi=$data[0]['dia_chi'];
			$ngaySinh=$data[0]['ngay_sinh'];
			$email=$data[0]['email'];
			$soDT=$data[0]['sdt'];
			$ten_pl=$data[0]['ten_pl'];
			$ma_nd=$data[0]['ma_nd'];
			$check=true;      
		}
	}
if(isset($_POST['hoTen']) && isset($_POST['ngaySinh']) && isset($_POST['diaChi']) && isset($_POST['email']) && isset($_POST['soDT'])){
	if(isset($_POST['hoTen'])){
		$hoTen=$_POST['hoTen'];
		if($hoTen==""){
			$err_hoTen="bạn phải nhập tên giáo viên";
		}
		else{
			$err_hoTen="";
		}
	}
	if(isset($_POST['ngaySinh'])){
		$ngaySinh=$_POST['ngaySinh'];
		if($ngaySinh==""){
			$err_ngaySinh="bạn phải nhập ngày sinh";	
		}
		else{
			$err_ngaySinh="";
		}
	}
	if(isset($_POST['gioiTinh'])){
		$gioiTinh=$_POST['gioiTinh'];
	}
	if(isset($_POST['diaChi'])){
		$diaChi=$_POST['diaChi'];
		if($diaChi==""){
			$err_diaChi="bạn phải nhập địa chỉ";
		}
		else{
			$err_diaChi="";
		}
	}
	if(isset($_POST['email'])){
		$email=$_POST['email'];
		if($email==""){
			$err_email="bạn phải nhập email giáo viên";
		}else{
			$sql= "select * from nguoidung where email='".$email."' and ma_nd!='".$ma_nd."'";
			$data=laydata($sql);
			if($data!=null && count($data)>0){
				$err_email="email đã tồn tại";
			}else{
				$err_email="";
			}
		}
	}
	if(isset($_POST['soDT'])){
		$soDT=$_POST['soDT'];
		if($soDT==""){
			$err_soDT="bạn phải nhập sdt";
		}else{
			$sql= "select * from nguoidung where sdt='".$soDT."' and ma_nd!='".$ma_nd."'";
			$data=laydata($sql);
			if($data!=null && count($data)>0){
				$err_soDT="số điện thoại đã tồn tại đã tồn tại";
			}else{
				$err_soDT="";
			}
		}
	}
	$err_img="";
	$target_dir = "images/";
	if(isset($_FILES["uploadImage"]["name"])){
		$target_file = $target_dir . basename($_FILES["uploadImage"]["name"]);
		setcookie('img',$target_file,time()+24*60*60,"/");
	}
	else{
		$target_file="";
	}
	if(isset($_COOKIE['img'])){
		$mang = explode(".", $target_file);
		if(count($mang)<=1){
			$target_file=$_COOKIE['img'];
		}
	}
	if($hoTen!="" && $ngaySinh!=="" && $diaChi!="" && $email!="" && $soDT!=""){
		$radom=rand_string(7);
		$ma_sv='gv-'.$radom;
		$img="";
		$mang = explode(".", $target_file);
		if(count($mang)<=1){
			$img="";
		}
		else{
			$img=$target_file;
		}
		$sql="update nguoidung set anh='".$img."',ho_ten=N'".$hoTen."',ngay_sinh='".$ngaySinh."',gioi_tinh='".$gioiTinh."',dia_chi='".$diaChi."',email='".$email."',sdt='".$soDT."' where ma_nd='".$ma_nd."'";
		xuly($sql);
		$a='?ma_nd='.$ma_nd;
		header("location:thongtinNguoidung.php".$a);
	}
}

?>
<!DOCTYPE html>
<html>
<head>
	<title>admin</title>
	<?php require_once('../khungtrang/link.php')?>;
<style type="text/css">
		.kc-form-input{
			margin-top: 10px;
		}
		.css_1hang{
			float: left;
		}
		img{
			height: 100px;
		}
		.than{width: 100%;height: auto; margin-top: 40px;font-size: 20px; background-color: #FFFAF0;padding-left: 150px;}
		body{font-size: 20px;}
	</style>
	<script type="text/javascript">
 		$(document).ready(function () {
 			$("#uploadImage").change(function(e) {
 				e.preventDefault();
 				var img=$('#uploadImage').val();
 				var img=img.slice(11);
 				$.ajax({  
					url:"ajax/xulyanh.php?img="+img,  
					type: "POST",
					/*data:  new FormData(this),
					contentType: false,
					cache: false,*/
	                success: function(a){ 
                    	$('#upload-done').html(a);
                  	}
              });
 			})
 		});
	</script>
</head>
<body>
	<div class="wrapper" style="position: absolute;position: absolute;top :0">
		<?php require_once('../khungtrang/sidebar.php')?>
		<div id="content" style="width: 85%;">
			<nav class="navbar navbar-expand-lg " style="background-color: #7386D5;width: 100%;height: 50px;position: absolute;top:0;left:0">
				<div class="container-fluid">
					<div class="navbar-header" style="position: absolute;:left: 0;">
						<a class="navbar-brand" href="#"><i class="fas fa-home"></i> Trang chủ / Thêm Giáo Viên</a>
					</div>    
					<div class="navbar-header" style="position: absolute;right: 0;">
						<a class="navbar-brand" href="#"><i class="fas fa-user-tie"></i> admin</a>
					</div>    
				</div>
			</nav>
			<div class="than">
				<form action="" id="form" method="post" enctype="multipart/form-data">	
					<div class="row">
						<div class="col-sm-3">
							<label for="hoTen" class="kc-form-input">Họ Tên Sinh Viên (*) :</label>
						</div>
						<div class="col-sm-4">
							<input type="text" class="form-control" id="hoTen" placeholder="Họ Tên Giáo Viên" name="hoTen" value="<?php echo $hoTen?>">
						</div>
						<div class="col-sm-5">
							<label for="hoTen" class="kc-form-input"><?php echo $err_hoTen?></label>
						</div>
					</div>

					<div class="row kc-form-input">
						<div class="col-sm-3"><label for="hoTen" class="kc-form-input">Ngày Sinh:</label></div>
						<div class="col-sm-4"><input type="date" class="form-control" id="ngaySinh" placeholder="Enter Ngày Sinh" name="ngaySinh" value="<?php echo $ngaySinh?>"></div>
						<div class="col-sm-5"><label for="hoTen" class="kc-form-input"><?php echo $err_ngaySinh?></label></div>
					</div>

					<div class="row kc-form-input">
						<div class="col-sm-3"><label for="hoTen" class="kc-form-input">Giới Tính:</label></div>
						<?php if($gioiTinh=="" || $gioiTinh=="Nam"){?>
						<div class="col-sm-2">
							<div class="form-check kc-form-input">
								<input type="radio" class="form-check-input" id="gt_nam" name="gioiTinh" value="Nam" checked>Nam
								<label class="form-check-label" for="radio1"></label>
							</div>
						</div>
						<div class="col-sm-2">
							<div class="form-check kc-form-input">
								<input type="radio" class="form-check-input" id="gt_nam" name="gioiTinh" value="Nữ">Nữ
								<label class="form-check-label" for="radio1"></label>
							</div>
						</div>
						<?php }else{?>
						<div class="col-sm-2">
							<div class="form-check kc-form-input">
								<input type="radio" class="form-check-input" id="gt_nam" name="gioiTinh" value="Nam">Nam
								<label class="form-check-label" for="radio1"></label>
							</div>
						</div>
						<div class="col-sm-2">
							<div class="form-check kc-form-input">
								<input type="radio" class="form-check-input" id="gt_nam" name="gioiTinh" value="Nữ" checked>Nữ
								<label class="form-check-label" for="radio1"></label>
							</div>
						</div>
						<?php }?>
						<div class="col-sm-5"><label for="hoTen" class="kc-form-input"></label></div>
					</div>

					<div class="row kc-form-input">
						<div class="col-sm-3"><label for="hoTen" class="kc-form-input">Địa Chỉ:</label></div>
						<div class="col-sm-4"><input type="text" class="form-control" id="diaChi" placeholder="Địa Chỉ" name="diaChi" value="<?php echo $diaChi?>"></div>
						<div class="col-sm-5"><label for="hoTen" class="kc-form-input"><?php echo $err_diaChi ?></label></div>
					</div>

					<div class="row kc-form-input">
						<div class="col-sm-3"><label for="hoTen" class="kc-form-input">Email:</label></div>
						<div class="col-sm-4"><input type="Email" class="form-control" id="email" placeholder="Enter eamil" name="email" value="<?php echo $email?>"></div>
						<div class="col-sm-5"><label for="hoTen" class="kc-form-input"><?php echo $err_email?></label></div>
					</div>

					<div class="row kc-form-input">
						<div class="col-sm-3"><label for="hoTen" class="kc-form-input">Số điện thoại:</label></div>
						<div class="col-sm-4"><input type="text" class="form-control" id="soDT" placeholder="Enter Ngày Sinh" name="soDT" value="<?php echo $soDT?>"></div>
						<div class="col-sm-5"><label for="hoTen" class="kc-form-input"><?php echo $err_soDT?></label></div>
					</div>
					<div class="row kc-form-input">
						<div class="col-sm-3"><label for="hoTen" class="kc-form-input">Ảnh đại diện:</label></div>
						<div class="col-sm-4" style="margin-top: 10px"><input id="uploadImage" type="file" accept="image/*" name="uploadImage" value="<?php echo $target_file?>"/></div>
						<div class="col-sm-5"><label for="hoTen" class="kc-form-input">
						</label></div>
					</div>
					<div class="row kc-form-input">
						<div class="col-sm-3"></div>
						<div class="col-sm-4" id="upload-done" style="height: 100px;width: 100px;">
							<?php 
								$mang = explode(".", $target_file);
								if(count($mang)>1){
									echo '<img src="../'.$target_file.'">';
								}
							?>
						</div>
						<div class="col-sm-5"></div>
					</div>
					<div class="row kc-form-input">
						<div class="col-sm-2"></div>
						<div class="col-sm-4"><button type="submit" id="submit" class="btn btn-primary" style="margin-top: 15px;">Submit</button></div>
						<div class="col-sm-5"></div>
					</div>
				</form>
			</div>
		</div>
	</div>
</body>