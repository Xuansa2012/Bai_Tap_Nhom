<?php require_once('../data_sv.php');
require_once('../khungtrang/sesion.php');?>
<!DOCTYPE html>
<html>
<head>
	<title>admin</title>
	<?php require_once('../../khungtrang/link.php')?>
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
		 $('#upload_csv').on("submit", function(e){ 
           /*$('#upload').click(function(e){*/  
               e.preventDefault(); //form will not submitted 
               var a=$('#employee_file').val();
               if(a){

                    if(a.indexOf('.csv') > 0){
                          $.ajax({  
                               url:"nhapfileND.php",  
                               method:"POST",  
                               data:new FormData(this),  
                               contentType:false,          // The content type used when sending data to the server.  
                               cache:false,                // To unable request pages to be cached  
                               processData:false,          // To send DOMDocument or non processed data file it is set to false    
                               success: function(a){   
                                   alert(a);
                                  location.reload();
                              }
                          });
                         }
                          else{
                              alert("file ko đúng định dạng");
                          }  
               }else{
                    alert("bạn chưa chọn file");
               }
               
           });  
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
					<a class="navbar-brand" href="#"><i class="fas fa-home"></i> Trang chủ</a>
				</div>    
				<div class="navbar-header" style="position: absolute;right: 0;">
					<a class="navbar-brand" href="#"><i class="fas fa-user-tie"></i> admin</a>
				</div>    
			</div>
		</nav>
		<div class="than" style="width: 100%;height: auto; margin-top: 40px;">
			<div class="row">
				<div class="col-sm-3">
					<div class="row">
						<div class="col-sm-5" style="margin-top: 10px;text-align: right;">Giáo viên</div>
						<div class="col-sm-7">
							<select class="form-control" aria-label="Default select example" id="bolocND" name="bolocND">
								<option value="1">tất cả</option>
								<?php 
								$sql="select * from nguoidung where ma_pl='gv' or ma_pl='admin'";
								$result=laydata($sql);
								foreach($result as $row) {
								?>
								<option value="<?php echo $row['ma_nd']?>"><?php echo $row['ho_ten']?></option>
								<?php }?>
							</select>
						</div>
					</div>
				</div>
				<div class="col-sm-7"><form id="upload_csv" method="post" enctype="multipart/form-data">  
					<div class="row">
						<div class="col-sm-3" style="margin-top: 10px;text-align: right;">Nhập file</div>
						<div class="col-sm-6">
							<input type="file" name="employee_file" style="margin-top:5px;" id="employee_file" />  
						</div>
						<div class="col-md-3">  
                          <input type="submit" name="upload" id="upload" value="Upload" style="margin-top:5px;" class="btn btn-info" />  
                     	</div>  
					</div></form>
				</div>
			</div>
			<div class="clear"></div>
			<div class="container-fluid" style="margin-top: 10px;">
				<table class="table table-hover" id="table">
				    <thead>
				      <tr>
				        <th style="max-width: 40px;">Số TT</th>
				        <th>Tên Môn</th>
				        <th>Giáo viên</th>
				        <th>Sĩ Số</th>
				        <th style="max-width: 40px;"></th>
				      </tr>
				    </thead>
				    <?php
				    	$i=1;
				    	$sql= "select * from nguoidung,monhoc where nguoidung.ma_nd=monhoc.ma_nd";
				    	$data=laydata($sql);
				    	foreach($data as $mon){
				    ?>
				    <tbody>
						<td style="min-width: 60px;"><?php echo $i++?></td>
						<td><?php echo $mon['ten_mon_hoc']?></td>
						<td><?php echo $mon['ho_ten']?></td>
						<td><?php echo$mon['siso']?></td>
						<td><a href=""><i class="fas fa-eye"></i></a></td>
					</tbody>
					<?php }?>
				</table>
			</div>
		</div>
	</div>
</div>
</body>
</html>