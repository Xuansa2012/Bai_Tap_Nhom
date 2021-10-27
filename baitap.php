<!DOCTYPE html>
<html>
<head>
	<title>Trang chủ | Education | Bài Tập</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

</head>
<body>
	<div class="container mt-5">
		
		<div class="card">
	  		<h5 class="card-header">TÊN MÔN HỌC</h5>
	  		<div class="card-body">
	    		<h5 class="card-title">TÊN BÀI TẬP</h5>
	    		<p class="card-text">
	    			<b>Opened :</b> Thursday, 23 September 2021 </br>
	        		<b>Due :</b> Sunday, 26 September 2021 
	    		</p>
	    		<form action="upload.php" method="post" enctype="multipart/form-data">
				  	<input type="file" name="fileToUpload" id="fileToUpload">
				</form>
				<br/>
	    		<button type="button" onclick="alert('Nộp thành công!')">Nộp</button>
	    	</div>
		</div>
	</div>
</body>
</html>
