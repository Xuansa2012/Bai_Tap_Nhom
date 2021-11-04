<?php require_once('../data_sv.php');
require_once('../khungtrang/sesion.php');
?>
<!DOCTYPE html>
<html>
<head>
	<title>admin</title>
	 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>  
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />  
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
	<link rel="stylesheet" href="../css/style2.css">  
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
	body{
		font-size:20px;
	}
</style>
<script type="text/javascript">
	$(document).ready(function(){  
        	$('#from').on("submit", function(e){ 
        		e.preventDefault();
        		 $.ajax({  
                   url:"ajax/test12.php",  
                   method:"POST",  
                   data:new FormData(this),  
                   contentType:false,          // The content type used when sending data to the server.  
                   cache:false,                // To unable request pages to be cached  
                   processData:false,          // To send DOMDocument or non processed data file it is set to false    
                   success: function(a){   
                      $('#table').html(a); 
                      //alert(a);
                  }
              });
          	})
      	})
</script>
</head>
<body>
<div class="wrapper" style="position: absolute;position: absolute;top :0">
	<?php require_once('../khungtrang/sidebarGV.php')?>
	<div id="content" style="width: 85%;">
		<nav class="navbar navbar-expand-lg " style="background-color: #7386D5;width: 100%;height: 50px;position: absolute;top:0;left:0">
			<div class="container-fluid">
				<div class="navbar-header" style="position: absolute;:left: 0;">
					<a class="navbar-brand" href="giaovien.php" style="font-size: 20px;"><i class="fas fa-home"></i>  Trang chủ/ Thêm môn</a>
				</div>    
				<div class="navbar-header" style="position: absolute;right: 0;">
					<a class="navbar-brand" href="#"  style="font-size: 20px;"><i class="fas fa-user-tie"></i> <?php echo $ho_ten?></a>
				</div>    
			</div>
		</nav>
		<div class="than" style="width: 100%;height: auto; margin-top: 40px; background-color: #FAF0E6;">
			<form id="upload_csv" method="post" enctype="multipart/form-data" style="text-align: center;">  
				<div class="col-sm-6">
					<div class="row">
						<div class="col-sm-5" style="margin-top: 10px;text-align: right;"></div>
						<div class="col-sm-7">
							
						</div>
					</div>
				</div>
			</form>
			<div class="clear"></div>
			<div class="container-fluid" style="margin-top: 10px;">
				<form method="post" action="" id="from">
				    <table class="table table-hover" id="table">
				    <thead>
				      <tr>
				        <th style="max-width: 40px;">Số TT</th>
				        <th>Tên Môn</th>
				        <th><button type="button" onclick="checked()"></button></th>
				      </tr>
				    </thead>
				    <?php
				    	$i=1;
				    	$sql= "select * from monhoc,nguoidung,phanloai where nguoidung.ma_pl=phanloai.ma_pl and monhoc.ma_nd=nguoidung.ma_nd and nguoidung.ma_pl='admin'";
				    	$data=laydata($sql);
				    	foreach($data as $monhoc){
				    ?>
				    <tbody>
				    	<td><?php echo $i++?></td>
						<td><?php echo $monhoc['ten_mon_hoc']?></td>
						<th><input class="form-check-input" type="checkbox" id="check1" name="<?php echo $monhoc['ma_mon_hoc']?>" value="<?php echo $monhoc['ma_mon_hoc']?>"></th>
						<td style="min-width: 60px;"></td>
					</tbody>
					<?php }?>
				</table>
					<input type="submit" name="" value="Thêm">
				</form>
			</div>
		</div>
	</div>
</div>
</body>
</html>