<?php require_once('../data_sv.php');
require_once('../khungtrang/sesion.php');
?>
<!DOCTYPE html>
<html>
<head>
	<title>admin</title>
	<?php require_once('../khungtrang/link.php')?>
	<style type="text/css">
	.than{width: 100%;height: auto; margin-top: 40px;background-color: #FFFAF0;font-size: 20px;padding-top: 20px;}
		body{font-size: 20px;}

</style>
<script type="text/javascript">
	$(document).ready(function() {
    	$("#bolocND").change(function(e){
			e.preventDefault();
			var nd=$('#bolocND').val();
			$.ajax({  
			url:"ajax/bolocND.php?nd="+nd,  
			method:"POST",
			/*data:  new FormData(this),
			contentType: false,
			cache: false,*/  
			success: function(a){   
				$('#table').html(a);
				//alert(a);
				}
			})
		})
	})
</script>
</head>
<body>
<div class="wrapper" style="position: absolute;position: absolute;top :0">
	<?php require_once('../khungtrang/sidebar.php')?>
	<div id="content" style="width: 85%;">
		<nav class="navbar navbar-expand-lg " style="background-color: #7386D5;width: 100%;height: 50px;position: absolute;top:0;left:0">
			<div class="container-fluid">
				<div class="navbar-header" style="position: absolute;:left: 0;">
					<a class="navbar-brand" href="index.php"><i class="fas fa-home"></i> Trang chủ/người dùng</a>
				</div>    
				<div class="navbar-header" style="position: absolute;right: 0;">
					<a class="navbar-brand" href="#"><i class="fas fa-user-tie"></i> admin</a>
				</div>    
			</div>
		</nav>
		<div class="than" style="width: 100%;height: auto; margin-top: 40px;">
			<div class="row">
				<div class="col-sm-6">
					<div class="row">
						<div class="col-sm-5" style="margin-top: 10px;text-align: right;">Người dùng</div>
						<div class="col-sm-7">
							<select class="form-control" aria-label="Default select example" id="bolocND" name="bolocND">
								<option value="1">tất cả</option>
								<?php 
								$sql="select * from phanloai where ma_pl!='admin'";
								$result=laydata($sql);
								foreach($result as $row) {
								?>
								<option value="<?php echo $row['ma_pl']?>"><?php echo $row['ten_pl']?></option>
								<?php }?>
							</select>
						</div>
					</div>
				</div>
				<div class="col-sm-6">
					<div class="row">
						<div class="col-sm-6">
							
						</div>
						<div class="col-md-3">  
                          <a href="nhapNguoiDung.php"><input type="submit" name="upload" id="upload" value="Upload" style="margin-top:5px;" class="btn btn-info" />  </a>
                     	</div>  
					</div>
				</div>
			</div>
			<div class="clear"></div>
			<div class="container-fluid" style="margin-top: 10px;">
				<table class="table table-hover" id="table">
				    <thead>
				      <tr>
				        <th style="max-width: 40px;">Số TT</th>
				        <th>Tên người dùng</th>
				        <th>Loai người dùng</th>
				        <th>Email</th>
				        <th>năm sinh</th>
				        <th></th>
				      </tr>
				    </thead>
				    <?php
				    	$i=1;
				    	$sql= "select * from nguoidung,phanloai where nguoidung.ma_pl=phanloai.ma_pl and nguoidung.ma_pl!='admin'";
				    	$data=laydata($sql);
				    	foreach($data as $nguoidung){
				    ?>
				    <tbody>
						<td style="min-width: 60px;"><?php echo $i++?></td>
						<td><?php echo $nguoidung['ho_ten']?></td>
						<td><?php echo $nguoidung['ten_pl']?></td>
						<td><?php echo $nguoidung['email']?></td>
						<td><?php

								echo $date=fomat($nguoidung['ngay_sinh']);
							?>
								
						</td>
						<td><a href="thongtinNguoidung.php?ma_nd=<?php echo $nguoidung['ma_nd']?>"><i class="fas fa-eye" style="color: grey;"></i></td>
					</tbody>
					<?php }?>
				</table>
			</div>
		</div>
	</div>
</div>
</body>
</html>