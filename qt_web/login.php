<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <style>
  
  </style>
   </style>
    <script type="text/javascript">
      $(document).ready(function(){
          $("#dangnhap").on("submit",function(e){
            e.preventDefault();
            var taikhoan=$('#form1Example13').val();
            var matkhau=$('#form1Example23').val();
            /*var decimal=  /^(?=.*\d)(?=.*[a-z])(?=.*[A-Z])(?=.*[^a-zA-Z0-9])(?!.*\s).{6,12}$/;
            var a="^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[@$!%*?&])[A-Za-z\d@$!%*?&]{8,10}$";
            var paswd=  /^(?=.*[0-9])(?=.*[!@#$%^&*])[a-zA-Z0-9!@#$%^&*]{7,15}$/;*/
           //alert(taikhoan+" "+matkhau);
            if (taikhoan=="" && matkhau=="") {
              alert("Bạn phải nhập đầy đủ tài khoản và mật khẩu ");
            }else if(taikhoan==""){
              alert("Bạn phải nhập đầy đủ tài khoản");
            }else if( matkhau==""){
              alert("Bạn phải nhập đầy đủ mật khẩu ");
            }else if(taikhoan.length<=6 || taikhoan.length>12){
              alert("tài khoản phải có 6 đến 12 kí tự ");
            }else if(/[!@#$&*^%~+-/:;<>=,._\/"')(|]/.test(taikhoan)){
              alert("tài khoản ko đúng định dạng");
            }else if(matkhau.length<=6 || matkhau.length>12){
              alert("mật khẩu phải có 6 đến 12 kí tự ");
            }else{
              $.ajax({
                url:'validate.php',
                method:'post',
                data:new FormData(this),  
                contentType:false,          // The content type used when sending data to the server.  
                cache:false,                // To unable request pages to be cached  
                processData:false,          // To send DOMDocument or non processed data file it is set to false    
                success: function(a){
                  //window.location="https://quantrimang.com";
                  //alert(a);
                  if(a=='false'){
                    alert('Tài khoản và mật khẩu không tồn tại');
                  }
                  else if(a=='true'){
                   window.location="index.php";
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

    <div id="login" style="background-image: url(anhslide1.png);">
        <h3 class="text-center text-white pt-5">Login form</h3>
        <div class="container">
            <div id="login-row" class="row justify-content-center align-items-center">
                <div id="login-column" class="col-md-6">
                    <div id="login-box" class="col-md-12">
                        <form id="login-form" class="form" action="" method="post">
                            <h3 class="text-center text-info">Login</h3>
                            <div class="form-group">
                                <label for="username" class="text-info">Username:</label><br>
                                <input type="text" name="username" id="username" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="password" class="text-info">Password:</label><br>
                                <input type="text" name="password" id="password" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="remember-me" class="text-info"><span>Remember me</span> <span><input id="remember-me" name="remember-me" type="checkbox"></span></label><br>
                                <input type="submit" name="submit" class="btn btn-info btn-md" value="submit">
                            </div>
                            <div id="register-link" class="text-right">
                                <a href="#" class="text-info">Register here</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
