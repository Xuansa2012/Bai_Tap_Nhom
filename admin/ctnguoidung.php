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
		.than{width: 100%;height: 500px; margin-top: 40px;background-color: #FFFAF0;padding-left: 50px;}
		.anhdaidien{width:250px;height: 300px; background-color: red;float: left;}
		.anh{width: 250px;height: 250px;margin-top: 50px;background-color: green;}
		.gt{width: 700px;height: 300px;background-color: pink;float: left;margin-left: 20px;margin-top: 10px;}
		.sua{width: 200px;height: 50px;margin-top: 350px;margin-left: 200px;}
		.xoa{width: 200px;height: 50px;margin-top: -50px;margin-left: 320px;}
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
				<div class="anhdaidien">
					<div class="anh"><a href=""></a></div>
				</div>
				<div class="gt">
					<div class="sua"><a href="suanguoidung.php"><button type="submit"class="btn btn-primary"style="width: 100px;">Sửa</button></a></div>
					<div class="xoa"><a href="xoanguoidung.php"><button type="submit"class="btn btn-primary"style="width: 100px;">Xoá</button></a></div>
				</div>
				
			</div>
		</div>
	</div>
</body>