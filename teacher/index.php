<?php require_once ('../data_sv.php');
require_once('../khungtrang/sesion.php');
?>
<!DOCTYPE html>
<html>
<head>
	<title>Teacher</title>
	<?php require_once('../khungtrang/link.php')?>;
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
      			var loaide=$('#bolocLD').val();
      			 $.ajax({  
                   url:"ajax/boloc.php?monhoc="+monhoc+"&&bolocLD="+loaide,  
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
		<?php require_once('../khungtrang/sidebarGV.php')?>;
		 <div id="content" style="width: 85%;">
			<nav class="navbar navbar-expand-lg " style="background-color: #7386D5;width: 100%;height: 50px;position: absolute;top:0;left:0">
				<div class="container-fluid">
					<div class="navbar-header" style="position: absolute;:left: 0;">
						<a class="navbar-brand" href="index.php" style="font-size:20px;"><i class="fas fa-home"></i> Trang chủ</a>
					</div>    
					<div class="navbar-header" style="position: absolute;right: 0;">
						<a class="navbar-brand" href="#"><i class="fas fa-user-tie" style="font-size:20px;"></i><?php echo $ho_ten?></a>
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
										$sql="select * from monhoc,nguoidung where nguoidung.ma_nd=monhoc.ma_nd and email='".$email."'";
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
					        <th>số hs nộp bài</th>
					        <th>Loại đề</th>
					        <th>Thời Gian Kết Thúc</th>
					        <th></th>
					      </tr>
					    </thead>
					    <?php 
					    	$stt=1;
					    	$sql="select * from nguoidung,btvn,monhoc,loai_de where nguoidung.ma_nd=monhoc.ma_nd and monhoc.ma_mon_hoc=btvn.ma_mon_hoc and loai_de.ma_ld=btvn.ma_ld and email='".$email."'";
					    	$data=laydata($sql);
					    	foreach($data as $monhoc){
								$ht=thoigian($monhoc['thoigian_kt']);
					    ?>
					    <tbody>
						    <tr>
						        <td><?php echo $stt++?></td>
						        <td><?php echo $monhoc['ten_bt']?></td>
						        <td><?php echo $monhoc['ten_mon_hoc']?></td>
						        <td>
						        	<?php
						        	$sql="select DISTINCT ma_nd  from luutru where ma_bt='".$monhoc['ma_bt']."'";
						        	$data = laydata($sql);
						        	$tong=0;
						        	if($data!=null && count($data)>0){
						        		foreach($data as $luu){
						        			$tong++;
						        		}
						        	}

						        	echo $tong?>
						        </td>
						        <td><?php echo $monhoc['ten_ld']?></td>
						        <td><?php echo $ht?></td>
						        <td><a href="ctbtvn.php?ma_btvn=<?php echo $monhoc['ma_bt']?>"><i class="fas fa-eye" style="color: grey;"></i></a></td>
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