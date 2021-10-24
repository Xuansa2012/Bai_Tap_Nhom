
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" type="text/css" href="icon/css/all.css">
    <style type="text/css">
    	form{margin-top: 100px;}
      
}
    </style>
    <script type="text/javascript">
      $(document).ready(function(){
          $("#dangnhap").on("submit",function(e){//
            e.preventDefault();
            var taikhoan=$('#form1Example13').val();
            var matkhau=$('#form1Example23').val();
            var decimal=  /^(?=.*\d)(?=.*[a-z])(?=.*[A-Z])(?=.*[^a-zA-Z0-9])(?!.*\s).{6,12}$/;
            var a="^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[@$!%*?&])[A-Za-z\d@$!%*?&]{8,10}$";
            var paswd=  /^(?=.*[0-9])(?=.*[!@#$%^&*])[a-zA-Z0-9!@#$%^&*]{7,15}$/;
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
            }else if(taikhoan.length<=6 || taikhoan.length>12){
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
                   window.location="hello.php";
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
<section class="vh-100">
  <div class="container py-5 h-100">
    <div class="row d-flex align-items-center justify-content-center h-100">
      <div class="col-md-8 col-lg-7 col-xl-6">
        <img src="anh1.png" style="width: 400px;height: 300px;margin-top: 30px;margin-left: 50px;">
      </div>
      <div class="col-md-7 col-lg-5 col-xl-5 offset-xl-1">
        <form method="POST" id="dangnhap">
          <!-- Email input -->
          <div class="form-outline mb-4 "/>
           
          	<label class="form-label" for="form1Example13">Tài khoản</label>
            <input type="text" name ="tk" id="form1Example13" class="form-control form-control-lg" />
            
          </div>

          <!-- Password input -->
          <div class="form-outline mb-4">
          	<label class="form-label" for="form1Example23">Password</label>
            <input type="password" name ="pass" id="form1Example23" class="form-control form-control-lg" />
            
          </div>

          <div class="d-flex justify-content-around align-items-center mb-4">
            <!-- Checkbox -->
            <div class="form-check">
              <input
                class="form-check-input"
                type="checkbox"
                value=""
                id="form1Example3"
                checked
              />
              <label class="form-check-label" for="form1Example3"> Remember me </label>
            </div>
            <a href="#!">Forgot password?</a>
          </div>

          <!-- Submit button -->
          <button type="submit" class="btn btn-primary btn-lg btn-block" style="margin-top: 10px;">Đăng nhập</button>

          
          </div>
        </form>
      </div>
    </div>
  </div>
</section>
</body>
</html>