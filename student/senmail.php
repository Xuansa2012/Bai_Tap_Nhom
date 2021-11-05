<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
	<style type="text/css">
		.wrapper{background-color: orange;}
		.thanh{width: 100%;height: 50px;background-color:#FFF8DC;text-align: center;padding-top: 10px;color:blue; }
		/*.thanh img{width: 50px;height: 40px;}*/
		.content{float: left;width: 100%;height: auto;background-color: #F8F8FF;}
		.left{
			width: 40%;
			height: 450px;
			background-color: #F8F8FF;
			float: left;
			margin:50px 20px 50px 80px;
			border: 1px;
			border-radius: 10px;
		}
		.left:hover{box-shadow: 5px 5px 5px 5px #AAA;}
		.right{
			width: 40%;
			height: 450px;
			background-color:#F8F8FF;
			float: left;
			margin:50px 50px 50px;
			border: 1px;
			border-radius: 10px;
		}
		.right:hover{box-shadow: 5px 5px 5px 5px #AAA;}
		.form-control{margin-left: 40px;width: 400px;}
		button{width: 400px;margin-top: 10px;margin-left: 40px;}
		.message{background-color: #FFF8DC;margin-top: 30px;width: 400px;margin-left: 40px;}
		.bt{width: 100px; margin-left: 250px;background-color: blue;}
	</style>
	<script type="text/javascript">
		$(document).ready(function(){
          $("#senmail").on("submit",function(e){
          	e.preventDefault();
          	 $.ajax({
                url:'xl-senmail.php',
                method:'post',
                data:new FormData(this),  
                contentType:false,          // The content type used when sending data to the server.  
                cache:false,                // To unable request pages to be cached  
                processData:false,          // To send DOMDocument or non processed data file it is set to false    
                success: function(a){
                	if(a=="true"){
                		alert("mail ko tồn tại");
                	}
                	else{
                		alert("thành công");
                	}
                }
          })
      })
      })
	</script>
</head>
<body>
<div class="wrapper">
	<div class="thanh">	
	
	</div>
	<div class="content">
		<div class="left">
			<img class="login-image" src="https://hoc24.vn/assets/img/illustrations/login/login.svg" alt="" style="height: auto;">
		</div>
		<div class="right">
			<div class="field">
				<br>     
				<form method="POST" id="senmail"> 
								<p class="text" style="margin-left: 100px;">Bạn vui lòng điền thông tin bên dưới</p>
                               <br>
                                <div class="control">
                                    <input name="email" type="email" class="form-control" placeholder="Vui lòng điền email của trường đã cấp" value="">
                                </div>

                            </div>
                                 <br>
                            <button type="submit" class="btn btn-info"><i class="fas fa-envelope-square"></i> Gửi yêu cầu</button>
                       
                            <div class="message">
                            Vui lòng nhập địa chỉ email mà bạn đã đăng kí với nhà trường. Một Email sẽ tự động gửi vào hộp thư điện tử của bạn, hãy theo các hướng dẫn trong email để thiết lập lại mật khẩu.
                            Quan trọng: Nếu bạn không thể tìm thấy email trong hộp thư đến, vui lòng kiểm tra trong các thư mục thư rác/spam/junk/quảng cáo.
                            </div>
                            <br>
                            <a href="dn.php" class=""><button type="button" class="btn btn-primary" class="bt" style="width: 100px;margin-left: 340px;">Trở về</button></a>
                        </form>
		</div>
	</div>
</body>
</html>