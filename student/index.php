<?php 
require_once ('../data_sv.php');
require_once('../khungtrang/sesion.php');
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
		.than{width: 100%;height: auto; margin-top: 40px;background-color: #FFFAF0;font-size: 20px;}
		body{
			font-size: 20px;
		}
		
	</style>
	<script type="text/javascript">
		$(document).ready(function() {
    		$("#bolocMH").change(function(e){
      			e.preventDefault();
      			var mon=$('#bolocMH').val();
      			 $.ajax({  
                   url:"ajax/bolocMH.php?mon="+mon,  
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
      		$("#bolocGV").change(function(e){
      			e.preventDefault();
      			var mon=$('#bolocGV').val();
      			 $.ajax({  
                   url:"ajax/bolocGV.php?gv="+mon,  
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
      		$("#bolocLD").change(function(e){
      			e.preventDefault();
      			var mon=$('#bolocLD').val();
      			 $.ajax({  
                   url:"ajax/bolocLD.php?ld="+mon,  
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
      		$("#timkiem").on('submit',function(e){
      			e.preventDefault();
      			var monhoc=$('#bolocMH').val();
      			var giaovien=$('#bolocGV').val();
      			var loaide=$('#bolocLD').val();
      			 $.ajax({  
                   url:"ajax/boloc.php?monhoc="+monhoc+"&&giaovien="+giaovien+"&&bolocLD="+loaide,  
                   /*method:"POST",
                   data:  new FormData(this),
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
		<?php require_once('../khungtrang/sidebarSV.php')?>

		 <div id="content" style="width: 85%;">
			<nav class="navbar navbar-expand-lg " style="background-color: #7386D5;width: 100%;height: 50px;position: absolute;top:0;left:0">
				<div class="container-fluid">
					<div class="navbar-header" style="position: absolute;:left: 0;">
						<a class="navbar-brand" href="index.php"style="color: black;font-size: 20px;"><i class="fas fa-home"></i> Trang ch???</a>
					</div>    
					<div class="navbar-header" style="position: absolute;right: 0;">
						<a class="navbar-brand" href="#"style="color: black;font-size: 20px;"><i class="fas fa-user-tie"></i> <?php echo $ho_ten?></a>
					</div>    
				</div>
			</nav>
			<div class="than">
				<form id="timkiem">
					<div class="row">
						<div class="col-sm-3">
							<div class="row">
								<div class="col-sm-5" style="margin-top: 10px;text-align: right;">M??n H???c</div>
								<div class="col-sm-7">
									<select class="form-control" aria-label="Default select example" id="bolocMH" name="bolocMH">
										<option value="1">t???t c???</option>
										<?php 
										$sql="select * from monhoc";
										$result=laydata($sql);
										foreach($result as $row) {
										?>
										<option value="<?php echo $row['ma_mon_hoc']?>"><?php echo $row['ten_mon_hoc']?></option>
										<?php }?>
									</select>
								</div>
							</div>
						</div>
						<div class="col-sm-3">
							<div class="row">
								<div class="col-sm-5" style="margin-top: 10px;text-align: right;">Gi??o Vi??n</div>
								<div class="col-sm-7">
									<select class="form-control" aria-label="Default select example" id="bolocGV" name="bolocGV">
										<option value="1">t???t c???</option>
										<?php 
										$sql="select * from nguoidung where ma_pl='gv'";
										$result=laydata($sql);
										foreach($result as $row) {
										?>
										<option value="<?php echo $row['ma_nd']?>"><?php echo $row['ho_ten']?></option>
										<?php }?>
									</select>
								</div>
							</div>
						</div>
						<div class="col-sm-3">
							<div class="row">
								<div class="col-sm-5" style="margin-top: 10px;text-align: right;">Lo???i ?????</div>
								<div class="col-sm-7">
									<select class="form-control" aria-label="Default select example" id="bolocLD" name="bolocLD">
										<option value="1">t???t c???</option>
										<?php 
										$sql="select * from loai_de";
										$result=laydata($sql);
										foreach($result as $row) {
										?>
										<option value="<?php echo $row['ma_ld']?>"><?php echo $row['ten_ld']?></option>
										<?php }?>
									</select>
								</div>
							</div>
						</div>
						<div class="col-sm-3">
							<button type="submit" class="btn btn-info">
								<div class="row">
									<div class="col-sm-5"><i class="fas fa-search"></i></div>
									<div class="col-sm-7" style="margin-left:-30px ;">T??m Ki???m</div>
								</div>
							</button>
						</div>
					</div>
				</form>
				<div class="clear"></div>
				<div class="container-fluid" style="margin-top: 10px;">
					<table class="table table-hover" id="table">
					    <thead>
					      <tr>
					        <th style="max-width: 40px;">S??? TT</th>
					        <th>T??n B??i</th>
					        <th>M??n h???c</th>
					        <th>Gi???ng vi??n</th>
					        <th>Lo???i ?????</th>
					        <th>Th???i Gian K???t Th??c</th>
					        <th></th>
					      </tr>
					    </thead>
					    <?php 
					    	$stt=1;
					    	$sql="select * from nguoidung,btvn,monhoc,loai_de where nguoidung.ma_nd=monhoc.ma_nd and monhoc.ma_mon_hoc=btvn.ma_mon_hoc and loai_de.ma_ld=btvn.ma_ld";
					    	date_default_timezone_set("Asia/Ho_Chi_Minh");
					    	$dateNow=date("Y-m-d H:i:s");
					    	$data=laydata($sql);
					    	foreach($data as $monhoc){
								$diff = abs(strtotime($monhoc['thoigian_kt'])-strtotime($dateNow));
								$years = floor($diff / (365*60*60*24));
								$months = floor(($diff - $years * 365*60*60*24) / (30*60*60*24));
								$days = floor(($diff - $years * 365*60*60*24 - $months*30*60*60*24) / (60*60*24));
								$hours = floor(($diff - $years * 365*60*60*24 - $months*30*60*60*24 - $days*60*60*24) / (60*60));
								$minutes = floor(($diff - $years * 365*60*60*24 - $months*30*60*60*24 - $days*60*60*24 - $hours*60*60) / 60);
								$seconds = floor(($diff - $years * 365*60*60*24 - $months*30*60*60*24 - $days*60*60*24 - $hours*60*60 - $minutes*60));
								$ht=0;
								if($days>0){
									$ht="c??n ".$days. " ng??y";
								}
								else if($hours>0){
									$ht="c??n ".$hours. " gi???";
								}
								else if($minutes>0){
									$ht="c??n ".$minutes. " ph??t";
								}
								else if($seconds>0){
									$ht="c??n ".$seconds. " gi??y";
								}
					    ?>
					    <tbody>
						    <tr>
						        <td><?php echo $stt++?></td>
						        <td><?php echo $monhoc['ten_bt']?></td>
						        <td><?php echo $monhoc['ten_mon_hoc']?></td>
						        <td><?php echo $monhoc['ho_ten']?></td>
						        <td><?php echo $monhoc['ten_ld']?></td>
						        <td><?php echo $ht?></td>
						        <td><a href="thongTinBT.php?maBT=<?php echo $monhoc['ma_bt']?>"><i class="fas fa-eye" style="color: grey;"></i></td>
						     </tr>
					    </tbody>
						<?php }?>
					</table>
				</div>
			</div>
		</div>
	</div>
</body>
</html>