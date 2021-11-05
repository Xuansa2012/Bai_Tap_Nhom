<!DOCTYPE html>
<html lang="en">
<head>
	<title>Login V1</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>

	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">

	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
	<script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
	 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
 <script type="text/javascript">
      $(document).ready(function(){
          $("#dangnhap").on("submit",function(e){
            e.preventDefault();
            var taikhoan=$('#tk').val();
            var matkhau=$('#pw').val();
            /*var decimal=  /^(?=.*\d)(?=.*[a-z])(?=.*[A-Z])(?=.*[^a-zA-Z0-9])(?!.*\s).{6,12}$/;
            var a="^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[@$!%*?&])[A-Za-z\d@$!%*?&]{8,10}$";
            var paswd=  /^(?=.*[0-9])(?=.*[!@#$%^&*])[a-zA-Z0-9!@#$%^&*]{7,15}$/;*/
           //alert(taikhoan+" "+matkhau);
            if (taikhoan=="" && matkhau=="") {
              alert("Bạn phải nhập đầy đủ email và mật khẩu ");
            }else if(taikhoan==""){
              alert("Bạn phải nhập đầy đủ email");
            }else if( matkhau==""){
              alert("Bạn phải nhập đầy đủ mật khẩu ");
            }else if(matkhau.length<6 || matkhau.length>12){
              alert("mật khẩu phải có 6 đến 12 kí tự ");
            }else{
              $.ajax({
                url:'ajax/validate.php',
                method:'post',
                data:new FormData(this),  
                contentType:false,          // The content type used when sending data to the server.  
                cache:false,                // To unable request pages to be cached  
                processData:false,          // To send DOMDocument or non processed data file it is set to false    
                success: function(a){
                  if(a=='false'){
                    alert('Tài khoản và mật khẩu không tồn tại');
                  }
                  else if(a=='true'){
                   window.location="lienket.php";
                  }
                  else{
                    alert('có lỗi');
                  }
                }
              })
            }
          })
      })
    </script>
</head>
<body>
	
	<div class="limiter">
		<div class="container-login100" >
			<div class="wrap-login100" style="height: 500px;">
				<div class="login100-pic js-tilt" data-tilt style="margin-top:-100px">
					<img src="images/img-01.png" alt="IMG">
				</div>

				<form class="login100-form validate-form" style="margin-top:-100px" id="dangnhap">
					<span class="login100-form-title">
						Member Login
					</span>

					<div class="wrap-input100 validate-input" data-validate = " ">
						<input class="input100" type="text"name ="tk" id="tk" placeholder="taikhoan"> 
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fas fa-user"></i>
						</span>
					</div>

					<div class="wrap-input100 validate-input" data-validate = "Password is required">
						<input class="input100" type="password" name ="pass" id="pw" placeholder="Password">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-lock" aria-hidden="true"></i>
						</span>
					</div>
					
					<div class="container-login100-form-btn">
						<button type="submit"class="login100-form-btn">
							Login
						</button>
					</div>

					<div class="text-center p-t-12">
						<span class="txt1">
							Forgot
						</span>
						<a class="txt2" href="../student/senmail.php">
							Username / Password?
						</a>
					</div>

					
				</form>
			</div>
		</div>
	</div>
	
	

	
<!--===============================================================================================-->	
	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/tilt/tilt.jquery.min.js"></script>
	<script >
		$('.js-tilt').tilt({
			scale: 1.1
		})
	</script>
<!--===============================================================================================-->
	<script src="js/main.js"></script>

</body>
</html>