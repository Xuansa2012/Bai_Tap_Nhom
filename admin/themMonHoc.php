<?php require_once('../data_sv.php');
require_once('../khungtrang/sesion.php');
	$err_tenMon=$err_ngaySinh=$gioiTinh=$err_trongSo =$err_moTa=$err_soDT=$err_KT="";
	
	$tenMon=$trongSo1=$trongSo2=$ktGK=$ktCK=$moTa="";
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
	if(isset($_POST['tenMon'])){
		if($_POST['tenMon']==""){
			$err_tenMon="bạn phải nhập tên môn học";
		}
		else{
			$sql= "select * from monhoc where ten_mon_hoc=N'".$$_POST['tenMon']."'";
			$data=laydata($sql);
			if($data!=null && count($data)>0){
				$err_tenMon="email đã tồn tại";
			}else{
				$err_tenMon="";
				$tenMon=$_POST['tenMon'];
			}
		}
	}
	$ma_nd="";
	if(isset($_POST['giaoVien'])){
		if($_POST['giaoVien']==1){
			$ma_nd='admin';
		}
		else{
			$ma_nd=$_POST['giaoVien'];
		}
	}else
	{
		$ma_nd='admin';
	}
	if(isset($_POST['trongSo1']) && isset($_POST['trongSo2'])){
		$trongSo1=$_POST['trongSo1'];
		$trongSo2=$_POST['trongSo2'];
		if($trongSo2=="" && $trongSo1==""){
			$err_trongSo="bạn phải nhập đầy đủ 2 trọng số";
		}
		else if($trongSo2==""){
			$err_trongSo="bạn phải nhập trọng số 2";
		}
		else if($trongSo1==""){
			$err_trongSo="bạn phải nhập trọng số 1";
		}
		else{
			$err_trongSo="";
		}
	}
	if(isset($_POST['ktGK']) && isset($_POST['ktCK'])){
		$ktGK=$_POST['ktGK'];
		$ktCK=$_POST['ktCK'];
		if($ktGK=="" && $ktCK==""){
			$err_KT="bạn phải nhập đầy đủ 2 giá trị ";
		}
		else if($ktGK==""){
			$err_KT="bạn phải nhập tuần kiểm tra cuối kì";
		}
		else if($ktCK==""){
			$err_KT="bạn phải nhập tuần kiểm tra giữa kì";
		}
		else{
			$err_KT="";
		}
	}
	if(isset($_POST['moTa'])){
		$moTa=$_POST['moTa'];
	}
	if($tenMon!="" && $ma_nd!="" && $trongSo1!="" && $trongSo2!="" && $ktGK!="" && $ktCK!=""){
		$radom=rand_string(7);
		$ma_mh='mh-'.$radom;
		$img="";
		$trong_so=$trongSo1." - ".$trongSo2;
		$kiem_tra=$ktGK." - ".$ktCK;
		$mang = explode(".", $target_file);
		if(count($mang)<=1){
			$img="";
		}
		else{
			$img=$target_file;
		}
		$sql="insert into monhoc values('".$ma_mh."','".$tenMon."','".$ma_nd."','0','".$trong_so."','".$kiem_tra."','".$moTa."','".$img."','')";
		xuly($sql);
		header("location:qlMon.php");
	}
?>
<!DOCTYPE html>
<html>
<head>
	<title>admin</title>
	<?php require_once('../khungtrang/link.php')?>;
	<style type="text/css">
		<style type="text/css">
		.kc-form-input{
			margin-top: 20px;
		}
		.css_1hang{
			float: left;
		}
		img{
			height: 100px;
		}
		.than{width: 100%;height: auto; margin-top: 40px;}
		.khunganhMT{
			width: 100px;
			height: 110px;
			float: left;
			margin-left: 10px;
		}
		.imgMT{
			width: 100px;
			height: 100px;
		}
		.than{width: 100%;height: auto; margin-top: 40px;background-color: #FFFAF0;font-size: 20px;padding-left: 100px;padding-top: 20px;}
		body{font-size: 20px}
	
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
						<a class="navbar-brand" href="#"><i class="fas fa-home"></i> Trang chủ / Thêm Môn Học</a>
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
							<label for="hoTen" class="kc-form-input" style="margin-top: 10px;">Tên Môn (*) :</label>
						</div>
						<div class="col-sm-4">
							<input type="text" class="form-control" id="tenMon" placeholder="Tên Môn" name="tenMon" value="<?php echo $tenMon?>">
						</div>
						<div class="col-sm-5">
							<label for="hoTen" class="kc-form-input" style="margin-top: 10px;"><?php echo $err_tenMon?></label>
						</div>
					</div>

					<div class="row kc-form-input" style="margin-top: 10px;">
						<div class="col-sm-3"><label for="hoTen" class="kc-form-input" style="margin-top: 10px;">Giáo Viên:</label></div>
						<div class="col-sm-4">
							<select class="form-control" aria-label="Default select example" id="" name="giaoVien">
										<option value="1">không</option>
										<?php 
										$sql="select * from nguoidung where ma_pl='gv'";
										$result=laydata($sql);
										foreach($result as $row) {
										?>
										<option value="<?php echo $row['ma_nd']?>"><?php echo $row['ho_ten']?></option>
										<?php }?>
									</select>
						</div>
						<div class="col-sm-5"><label for="hoTen" class="kc-form-input"></label></div>
					</div>

					<div class="row kc-form-input" style="margin-top: 10px;">
						<div class="col-sm-3"><label for="hoTen" class="kc-form-input" style="margin-top: 10px;">trọng số:</label>
						</div>
						<div class="col-sm-2">
							<div class="form-check kc-form-input">
								<input type="text" class="form-control" id="hoTen" placeholder="Trọng số đầu" name="trongSo1" value="<?php echo $trongSo1?>">
							</div>
						</div>
						<div class="col-sm-2">
							<div class="form-check kc-form-input">
								<input type="text" class="form-control" id="hoTen" placeholder="Trọng số sau" name="trongSo2" value="<?php echo $trongSo2?>">
							</div>
						</div>
						<div class="col-sm-5"><label for="hoTen" class="kc-form-input" style="margin-top: 10px;"><?php echo $err_trongSo?></label></div>
					</div>

					<div class="row kc-form-input" style="margin-top: 10px;">
						<div class="col-sm-3"><label for="hoTen" class="kc-form-input" style="margin-top: 10px;">Kiểm Tra:</label>
						</div>
						<div class="col-sm-2">
							<div class="form-check kc-form-input">
								<input type="text" class="form-control" id="hoTen" placeholder="Giữa kì" name="ktGK" value="<?php echo $ktGK?>">
							</div>
						</div>
						<div class="col-sm-2">
							<div class="form-check kc-form-input">
								<input type="text" class="form-control" id="hoTen" placeholder="Cuối kì" name="ktCK" value="<?php echo $ktCK?>">
							</div>
						</div>
						<div class="col-sm-5"><label for="hoTen" class="kc-form-input" style="margin-top: 10px;"><?php echo $err_KT?></label></div>
					</div>
					<div class="row kc-form-input" style="margin-top: 10px;">
						<div class="col-sm-3"><label for="hoTen" class="kc-form-input" style="margin-top: 10px;"xam>Ảnh đại diện:</label></div>
						<div class="col-sm-4" style="margin-top: 10px"><input id="uploadImage" type="file" accept="image/*" name="uploadImage" value="<?php echo $target_file?>"/></div>
						<div class="col-sm-5"><label for="hoTen" class="kc-form-input">
						</label></div>
					</div>
					<div class="row kc-form-input" style="margin-top: 10px;">
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
					<div class="row kc-form-input" style="margin-top: 10px;">
						<div class="col-sm-3">
							<label for="hoTen" class="kc-form-input" style="margin-top: 10px;"xam>Mô Tả:</label>
						</div>
						<div class="col-sm-4">
							<textarea class="form-control" name="moTa" value=""><?php echo $moTa?>
							</textarea>
							(các mô tả cách nhau bởi dấu chấm)
						</div>
						<div class="col-sm-5">
							<label for="hoTen" class="kc-form-input"><?php echo $err_moTa?></label>
						</div>
					</div>
					<div class="row kc-form-input">
						<div class="col-sm-2"></div>
						<div class="col-sm-4"><button type="submit" id="submit" class="btn btn-primary" style="margin-top: 15px;margin-left:100px;">Thêm</button></div>
						<div class="col-sm-5"></div>
					</div>
				</form>
				
			</div>
		</div>
	</div>
</body>
</html>