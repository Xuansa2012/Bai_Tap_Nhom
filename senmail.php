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
                	if(a==true){
                		alert("emai kh??ng t???n t???i");
                	}
                	else{
                		alert("Th??nh c??ng! vui l??ng ki???m tra mail c???a b???n");
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
								<p class="text" style="margin-left: 100px;">B???n vui l??ng ??i???n th??ng tin b??n d?????i</p>
                               <br>
                                <div class="control">
                                    <input name="email" type="email" class="form-control" placeholder="Vui l??ng ??i???n email c?? nh??n c???a b???n" value="">
                                </div>

                            </div>
                                 <br>
                            <button type="submit" class="btn btn-info"><i class="fas fa-envelope-square"></i> G???i y??u c???u</button>
                       
                            <div class="message">
                            Vui l??ng nh???p ?????a ch??? email m?? b???n ???? ????ng k?? v???i nh?? tr?????ng. M???t Email s??? t??? ?????ng g???i v??o h???p th?? ??i???n t??? c???a b???n, h??y theo c??c h?????ng d???n trong email ????? thi???t l???p l???i m???t kh???u.
                            Quan tr???ng: N???u b???n kh??ng th??? t??m th???y email trong h???p th?? ?????n, vui l??ng ki???m tra trong c??c th?? m???c th?? r??c/spam/junk/qu???ng c??o.
                            </div>
                            <br>
                            <a href="dn.php" class=""><button type="button" class="btn btn-primary" class="bt" style="width: 100px;margin-left: 340px;">Tr??? v???</button></a>
                        </form>
		</div>
	</div>
</body>
</html>