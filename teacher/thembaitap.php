<?php require_once('../data_sv.php');
require_once('../khungtrang/sesion.php');
	$err_tenMon=$err_ngaySinh=$gioiTinh=$err_date =$err_moTa=$err_soDT=$err_KT="";
	$ten_bt=$ma_mon=$date=$ktGK=$ktCK=$moTa="";
	$err_img="";
	$target_dir = "tailieu/";
	if(isset($_FILES["uploadfile"]["name"])){
		$target_file = $target_dir . basename($_FILES["uploadfile"]["name"]);
		setcookie('file',$target_file,time()+24*60*60,"/");
	}
	else{
		$target_file="";
	}
	
	if(isset($_POST['ten_bt'])){
		$ten_bt=$_POST['ten_bt'];
	}
	if(isset($_POST['ten_mon'])){
		$ma_mon=$_POST['ten_mon'];
	}
	if(isset($_POST['date'])){
		$date=$_POST['date'];
	}
	if($ten_bt!="" && $ma_mon!="" && $date!="" ){
		$radom=rand_string(7);
		$ma_bt='bt-'.$radom;
		$file="";
		$mang = explode(".", $target_file);
		if(count($mang)<=1){
			$file="";
		}
		else{
			$file=$target_file;
		}
		$sql="insert into btvn values('".$ma_bt."','".$ten_bt."','".$ma_mon."','".$date."','tl','".$file."')";
		xuly($sql);
		header("location:index.php");
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
		<style type="text/css">
		.kc-form-input{
			margin-top: 20px;
		}
		.css_1hang{
			float: left;
		}
		.than{width: 100%;height: auto; margin-top: 40px;background-color: #FFFAF0;font-size: 20px;padding-left: 100px;padding-top: 20px;}
		
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
		body{
			font-size: 20px;
		}
	</style>
	<script type="text/javascript">
 		$(document).ready(function () {
 			$("#uploadImage").change(function(e) {
 				e.preventDefault();
 				var img=$('#uploadImage').val();
 				var img=img.slice(11);
 				$.ajax({  
					url:"xulyanh.php?img="+img,  
					type: "POST",
					/*data:  new FormData(this),
					contentType: false,
					cache: false,*/
	                success: function(a){ 
                    	$('#upload-done').html(a);
                  	}
              });
 			})
 			$("#imageMT").change(function(e) {
 				e.preventDefault();
 				var img=$('#imageMT').val();
 				var img=img.slice(11);
 				$.ajax({  
					url:"ajax/themanhMT.php?img="+img,  
					type: "POST",
					/*data:  new FormData(this),
					contentType: false,
					cache: false,*/
	                success: function(a){ 
                    	$('#pateImg').html(a);
                    	//alert(a);
                  	}
              });
 			})
 			
 		});
	</script>
</head>
<body>
	<div class="wrapper" style="position: absolute;position: absolute;top :0">
		<?php require_once('../khungtrang/sidebarGV.php')?>
		<div id="content" style="width: 85%;">
			<nav class="navbar navbar-expand-lg " style="background-color: #7386D5;width: 100%;height: 50px;position: absolute;top:0;left:0">
				<div class="container-fluid">
					<div class="navbar-header" style="position: absolute;:left: 0;">
						<a class="navbar-brand" href="index.php" style="color:black;"><i class="fas fa-home"></i> Trang chủ / Thêm bài tập</a>
					</div>    
					<div class="navbar-header" style="position: absolute;right: 0;">
						<a class="navbar-brand" href="#"style="color:black;"><i class="fas fa-user-tie"></i><?php echo $ho_ten?></a>
					</div>    
				</div>
			</nav>
			<div class="than">
				<form action="" id="form" method="post" enctype="multipart/form-data">	
					<div class="row">
						<div class="col-sm-3">
							<label for="hoTen" class="kc-form-input" style="margin-top: 10px;">Tên bài tập :</label>
						</div>
						<div class="col-sm-4">
							<input type="text" class="form-control" id="ten_bt" placeholder="Tên bài tập" name="ten_bt" value="<?php echo $ten_bt?>">
						</div>
						<div class="col-sm-5">
							<label for="hoTen" class="kc-form-input" style="margin-top: 10px;"></label>
						</div>
					</div>

					<div class="row kc-form-input" style="margin-top: 10px;">
						<div class="col-sm-3"><label for="hoTen" class="kc-form-input" style="margin-top: 10px;">Môn học:</label></div>
						<div class="col-sm-4">
							<select class="form-control" aria-label="Default select example" id="" name="ten_mon">
										<?php 
										$sql="select * from monhoc where ma_nd='".$ma_nd."'";
										$result=laydata($sql);
										foreach($result as $row) {
										?>
										<option value="<?php echo $row['ma_mon_hoc']?>"><?php echo $row['ten_mon_hoc']?></option>
										<?php }?>
									</select>
						</div>
						<div class="col-sm-5"><label for="hoTen" class="kc-form-input"></label></div>
					</div>

					<div class="row kc-form-input" style="margin-top: 10px;">
						<div class="col-sm-3"><label for="hoTen" class="kc-form-input" style="margin-top: 10px;">Hạn nộp</label>
						</div>
						<div class="col-sm-4" style="margin-left:-15px">
							<div class="form-check kc-form-input">
								<input type="date" class="form-control" id="hoTen" placeholder="" name="date" value="<?php echo $date?>">
							</div>
						</div>
						<div class="col-sm-5"><label for="hoTen" class="kc-form-input" style="margin-top: 10px;"><?php echo $err_date?></label></div>
					</div>

					<div class="row kc-form-input" style="margin-top: 10px;">
						<div class="col-sm-3"><label for="hoTen" class="kc-form-input" style="margin-top: 10px;"xam>Bài tập:</label></div>
						<div class="col-sm-4" style="margin-top: 10px"><input id="uploadfile" type="file"  name="uploadfile" value="<?php echo $target_file?>"/></div>
						<div class="col-sm-5"><label for="hoTen" class="kc-form-input">
						</label></div>
					</div>
					<div class="row kc-form-input" style="margin-top: 10px;">
						<div class="col-sm-3"></div>
						<div class="col-sm-4" id="upload-done" style="height: 100px;width: 100px;">
						</div>
						<div class="col-sm-5"></div>
					</div>
					<div class="row kc-form-input">
						<div class="col-sm-3"></div>
						<div class="col-sm-4"><button type="submit" id="submit" class="btn btn-primary" style="margin-top: 15px;">Submit</button></div>
						<div class="col-sm-5"></div>
					</div>
				</form>
			</div>
		</div>
	</div>
</body>
</html>