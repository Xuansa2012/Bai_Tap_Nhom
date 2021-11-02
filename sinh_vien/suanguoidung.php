<?php
	

?>
<!DOCTYPE html>
<html>
<head>
	<title>admin</title>
	<?php require_once('khungtrang/link.php')?>;
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
		.than{width: 100%;height: 300px; margin-top: 40px;background-color: black;padding-left: 70px;}

	</style>

</head>
<body>
	<div class="wrapper" style="position: absolute;position: absolute;top :0">
		<?php require_once('khungtrang/sidebar.php')?>
		<div id="content" style="width: 85%;">
			<nav class="navbar navbar-expand-lg " style="background-color: #7386D5;width: 100%;height: 50px;position: absolute;top:0;left:0">
				<div class="container-fluid">
					<div class="navbar-header" style="position: absolute;:left: 0;">
						<a class="navbar-brand" href="test1.php"><i class="fas fa-home"></i> Trang chủ / Thêm Giáo Viên</a>
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
									echo '<img src="'.$target_file.'">';
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