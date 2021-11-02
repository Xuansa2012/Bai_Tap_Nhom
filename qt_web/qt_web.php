<?php require_once ('../data_sv.php');?>
<!DOCTYPE html>
<html>
<head>
	<title>admin</title>
	<?php require_once('khungtrang/link.php')?>;
    <style type="text/css">
		.than{width: 100%;height: auto; margin-top: 40px;background-color: #FFFAF0;}
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
		<?php require_once('khungtrang/sidebar.php')?>;
		 <div id="content" style="width: 85%;">
			<nav class="navbar navbar-expand-lg " style="background-color: #7386D5;width: 100%;height: 50px;position: absolute;top:0;left:0">
				<div class="container-fluid">
					<div class="navbar-header" style="position: absolute;:left: 0;">
						<a class="navbar-brand" href="test1.php"><i class="fas fa-home"></i> Trang chủ</a>
					</div>    
					<div class="navbar-header" style="position: absolute;right: 0;">
						<a class="navbar-brand" href="#"><i class="fas fa-user-tie"></i> admin</a>
					</div>    
				</div>
			</nav>
			<div class="than">
				<form id="timkiem">
					<div class="row">
						<div class="col-sm-3">
							<div class="row">
								<div class="col-sm-5" style="margin-top: 10px;text-align: right;">Môn Học</div>
								<div class="col-sm-7">
									<select class="form-control" aria-label="Default select example" id="bolocMH" name="bolocMH">
										<option value="1">tất cả</option>
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
								<div class="col-sm-5" style="margin-top: 10px;text-align: right;">Giáo Viên</div>
								<div class="col-sm-7">
									<select class="form-control" aria-label="Default select example" id="bolocGV" name="bolocGV">
										<option value="1">tất cả</option>
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
								<div class="col-sm-5" style="margin-top: 10px;text-align: right;">Loại đề</div>
								<div class="col-sm-7">
									<select class="form-control" aria-label="Default select example" id="bolocLD" name="bolocLD">
										<option value="1">tất cả</option>
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
									<div class="col-sm-7" style="margin-left:-30px ;">Tìm Kiếm</div>
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
					        <th style="max-width: 40px;">Số TT</th>
					        <th>Tên Bài</th>
					        <th>Môn học</th>
					        <th>Giảng viên</th>
					        <th>Loại đề</th>
					        <th>Thời Gian Kết Thúc</th>
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
					    <tbody>
						    <tr>
						        <td><?php echo $stt++?></td>
						        <td><?php echo $monhoc['ten_bt']?></td>
						        <td><?php echo $monhoc['ten_mon_hoc']?></td>
						        <td><?php echo $monhoc['ho_ten']?></td>
						        <td><?php echo $monhoc['ten_ld']?></td>
						        <td><?php echo $ht?></td>
						        <td><i class="fas fa-eye" style="color: grey;"></i></td>
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