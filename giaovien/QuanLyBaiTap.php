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
		 $(document).ready(function(){  
          $('#upload_csv').on("submit", function(e){ 
               e.preventDefault(); //form will not submitted 
               var a=$('#file').val();
               var file=a.slice(12);
               if(a){

                    if(a.indexOf('.pdf') > 0){
                          $.ajax({  
                               url:"ajax/dayfile.php?file="+file,     
                               success: function(a){
                                 $('#tailieu').html(a);
                                 //alert(a);
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
      });  
	</script>
</head>
<body>
	<div class="wrapper" style="position: absolute;position: absolute;top :0">
		<?php require_once('../khungtrang/sidebarGV.php')?>;
		<div id="content" style="width: 85%;">
			<nav class="navbar navbar-expand-lg " style="background-color: #7386D5;width: 100%;height: 50px;position: absolute;top:0;left:0">
				<div class="container-fluid">
					<div class="navbar-header" style="position: absolute;:left: 0;">
						<a class="navbar-brand" href="#"><i class="fas fa-home"></i> Trang chủ</a>
					</div>    
					<div class="navbar-header" style="position: absolute;right: 0;">
						<a class="navbar-brand" href="#"><i class="fas fa-user-tie"></i> <?php echo $ho_ten?></a>
					</div>    
				</div>
			</nav>
			<div class="than">
				<form id="upload_csv" method="post" enctype="multipart/form-data"> 
					<div class="row">
						<div class="col-md-3"></div>  
                 		<div class="col-md-5">  
                     		<input type="file" name="file" style="margin-top:15px;" id="file" />  
                 		</div>  
                     	<div class="col-md-3">  
                         	<input type="submit" name="upload" id="upload" value="Upload" style="margin-top:10px;" class="btn btn-info" />  
                     	</div>  
                 		<div style="clear:both"></div>  
					</div>
				</form>
				<div class="clear"></div>
				<div class="container-fluid" style="margin-top: 10px;">
				<?php 
					$sql="select * from monhoc,btvn where monhoc.ma_mon_hoc=btvn.ma_mon_hoc and ma_nd='".$ma_nd."'";
					$data=laydata($sql);
					foreach($data as $ds){?>
					<div class="card" style="background-color:#FAF0E6;margin-top: 10px;">
						<h5 class="card-header" style="background-color: #9932CC;">BÀI TẬP <?php echo $ds['ten_bt']?></h5>
						<div class="card-body">
							<h5 class="card-title">TÊN MÔN <?php echo $ds['ten_mon_hoc']?></h5>
							<p class="card-text">
								<b>Thời gian kết thúc :</b> <?php echo thoigian($ds['thoigian_kt'])?> </br>
							</p>            
						</div>
					</div>
				<?php }?>
				</div>
			</div>
		</div>
	</div>
</body>
</html>