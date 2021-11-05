<?php require_once('../data_sv.php');
require_once('../khungtrang/sesion.php');
?>
<!DOCTYPE html>
<html>
<head>
	<title>admin</title>
	 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>  
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
	<script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>  
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
	<link rel="stylesheet" href="../css/style2.css">  
	<style type="text/css">
	.than{width: 100%;height: auto; margin-top: 40px;background-color: #FFFAF0;font-size: 20px;padding-top: 20px;}
		body{font-size: 20px;}
	
</style>
<script type="text/javascript">
	$(document).ready(function(){  
          $('#upload_csv').on("submit", function(e){ 
           /*$('#upload').click(function(e){*/  
               e.preventDefault(); //form will not submitted 
               var a=$('#employee_file').val();
               if(a){

                    if(a.indexOf('.csv') > 0){
                          $.ajax({  
                               url:"ajax/ts.php",  
                               method:"POST",  
                               data:new FormData(this),  
                               contentType:false,          // The content type used when sending data to the server.  
                               cache:false,                // To unable request pages to be cached  
                               processData:false,          // To send DOMDocument or non processed data file it is set to false    
                               success: function(a){
                                 $('#table').html(a);
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
	<?php require_once('../khungtrang/sidebar.php')?>
	<div id="content" style="width: 85%;">
		<nav class="navbar navbar-expand-lg " style="background-color: #7386D5;width: 100%;height: 50px;position: absolute;top:0;left:0">
			<div class="container-fluid">
				<div class="navbar-header" style="position: absolute;:left: 0;">
					<a class="navbar-brand" href="index.php" style="font-size: 20px;"><i class="fas fa-home"></i> Trang chủ/ nhập file người dùng</a>
				</div>    
				<div class="navbar-header" style="position: absolute;right: 0;">
					<a class="navbar-brand" href="#" style="font-size: 20px;"><i class="fas fa-user-tie"></i> admin</a>
				</div>    
			</div>
		</nav>
		<div class="than" style="width: 100%;height: auto; margin-top: 40px;">
			<form id="upload_csv" method="post" enctype="multipart/form-data" style="text-align: center;">  
				<div class="row">
					<div class="col-md-3">  
						<br />  
						<label style="text-align:left;">Mời chọn file</label>  
					</div>  
					<div class="col-md-4">  
						<input type="file" name="employee_file" style="margin-top:15px;" id="employee_file" />  
					</div>  
					<div class="col-md-5">  
						<input type="submit" name="upload" id="upload" value="Upload" style="margin-top:10px;" class="btn btn-info" />  
					</div>  
					<div style="clear:both"></div>  
				</div>
			</form>
			<div class="clear"></div>
			<div class="container-fluid" style="margin-top: 10px;">
				<table class="table table-hover" id="table">
				    
				</table>
			</div>
		</div>
	</div>
</div>
</body>
</html>