<?php 
require_once ('../data_sv.php');
require_once('../khungtrang/sesion.php');
$ma_bt=$_GET['maBT'];
	$sql="select * from nguoidung,btvn,monhoc,loai_de where nguoidung.ma_nd=monhoc.ma_nd and monhoc.ma_mon_hoc=btvn.ma_mon_hoc and loai_de.ma_ld=btvn.ma_ld and btvn.ma_bt='".$ma_bt."'";
	$data=laydata($sql);
	if($data!=null && count($data)>0){
		$ten_bt=$data[0]['ten_bt'];
		$ten_mon=$data[0]['ten_mon_hoc'];
		$ten_gv=$data[0]['ho_ten'];
		$thoi_gian=$data[0]['thoigian_kt'];
		$de_bai=$data[0]['de_bai'];
		setcookie('ma_bt',$ma_bt,time()+24*60*60,"/");
	}
	date_default_timezone_set("Asia/Ho_Chi_Minh");
	$dateNow=date("Y-m-d H:i:s");
	$diff = abs(strtotime($thoi_gian)-strtotime($dateNow));
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
		.than{width: 100%;height: auto; margin-top: 40px;background-color: #FFFAF0;font-size: 20px ;}
		body{
			font-size: 20px;
		}
		
		.container{width: 100%;height: 200px;background-color: #FAF0E6;float: left}
		.thanh{width: 100%;height: 40px;background-color: #6A5ACD;padding-top: 8px;padding-left: 10px;color: white;margin-top: 50px;}
		
	</style>
</head>
<body>
<div class="wrapper" style="position: absolute;position: absolute;top :0">
	<?php require_once('../khungtrang/sidebarSV.php')?>

	<div id="content" style="width: 85%;">
		<nav class="navbar navbar-expand-lg " style="background-color: #7386D5;width: 100%;height: 50px;position: absolute;top:0;left:0">
			<div class="container-fluid">
				<div class="navbar-header" style="position: absolute;:left: 0;">
					<a class="navbar-brand" href="index.php"style="color: black;font-size: 20px;"><i class="fas fa-home"></i> Trang chủ / Bài tập <?php echo $ten_bt?></a>
				</div>    
				<div class="navbar-header" style="position: absolute;right: 0;">
					<a class="navbar-brand" href="#"style="color: black;font-size: 20px;"><i class="fas fa-user-tie"></i> <?php echo $ho_ten?></a>
				</div>    
			</div>
		</nav>
		<div class="than">
			<div>Bài tập <?php echo $ten_bt?></div>
			<br>
			<div>Môn học <?php echo $ten_mon?></div>
			<br>
			<div>Giáo viên <?php echo $ten_gv?></div>
			<br>
			<div>Hạn làm bài <?php echo $ht?></div>
			<?php echo '<div style="margin-left:500px;font-size:25px;"><a href="taitailieu.php?maTL='.$de_bai.'">Đề bài</a></div>';?>
			<div>Lưu ý sinh viên nộp muộn 1 ngày bị trừ 1 điểm</div>
			  <div class="thanh" >Nộp bài</div>
			   <form id="upload_csv" method="post" enctype="multipart/form-data">  
            		<div class="row" style="margin-left: 20px">
                 
                     <div class="col-md-4">  
                          <input type="file" name="file" style="margin-top:15px;" id="file" />  
                     </div>  
                     <div class="col-md-3">  
                          <input type="submit" name="upload" id="upload" value="Upload" style="margin-top:10px;" class="btn btn-info" />  
                     </div>  
                     <div style="clear:both"></div>  
                </div>
            	</form>
            	 <div class="thanh">Trạng thái </div>
            	 <div id="pate">
            	 <?php $sql ="select * from luutru,nguoidung where nguoidung.ma_nd=luutru.ma_nd and ma_bt='".$ma_bt."' and nguoidung.ma_nd='".$ma_nd."'";
            	 	$data=laydata($sql);
            	 	if($data!=null && count($data)>0){
						 $lan=0;
            	 		echo '<div>Đã nộp</div>';
            	 		foreach($data as $ds){
							 $lan++;
            	 			echo '<div><a href="taitailieu.php?maTL='.$ds['bai_lam'].'">bài làm lần '.$lan.'</a></div>';	
            	 		}
            	 		
            	 	}?>
            	 </div>
			</div>
</div>
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
                                 $('#pate').html(a);
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
</script>
</body>
</html>