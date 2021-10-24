<?php
session_start();
 define('host', 'localhost');
    define('user', 'root');
    define('pass', '');
    define('db', 'quan_ly_hoc_tap');
    $connect=mysqli_connect(host,user,pass,db);
    mysqli_set_charset($connect,'utf8');
    if(!$connect){
      die('kết nối không thành công');
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
   <link rel="stylesheet" type="text/css" href="icon/css/all.css">
   <script type="text/javascript">
     $(document).ready(function() {
    $("#form").change(function(e){
      e.preventDefault();
      var a=$("#boloc").val();
      //alert(a);
      $.ajax({  
                   url:"xuly.php",  
                   method:"POST",  
                   data:new FormData(this),  
                   contentType:false,          // The content type used when sending data to the server.  
                   cache:false,                // To unable request pages to be cached  
                   processData:false,          // To send DOMDocument or non processed data file it is set to false    
                   success: function(a){   
                       $('#table').html(a); 
                      //alert(a);
                  }
              });
    })
  })
   </script>
</head>
<body>

<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#"><i class="fas fa-user-tie"></i> <?php echo $_SESSION['taikhoan']?></a>
    </div>
    <ul class="nav navbar-nav">
      <li class="active"><a href="#">Home</a></li>
      <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">Page 1 <span class="caret"></span></a>
        <ul class="dropdown-menu">
          <li><a href="#">Page 1-1</a></li>
          <li><a href="#">Page 1-2</a></li>
          <li><a href="#">Page 1-3</a></li>
        </ul>
      </li>
      <li><a href="#">Page 2</a></li>
    </ul>
    <ul class="nav navbar-nav navbar-right">
      <!-- <li><a href="#"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li> -->
      <li><a href="#"><span class="glyphicon glyphicon-log-in"></span> Logout</a></li>
    </ul>
  </div>
</nav>
  
<div class="container">
	<div class="loc" style="width: 500px;height: 50px;"><form id="form">
		<select class="form-control" aria-label="Default select example" id="boloc" name="boloc">
		  <option value="1">tất cả</option>
		  
		  <?php 
		  	$sql="select * from phanloai";
        $result=mysqli_query($connect,$sql);
		  	while ($row=mysqli_fetch_assoc($result)) {
		  ?>
		  <option value="<?php echo $row['ma_pl']?>"><?php echo $row['ten_pl']?></option>
		<?php }?>
		</select>
  </form>
	</div>
 <!--  <h3>Right Aligned Navbar</h3>
  <p>The .navbar-right class is used to right-align navigation bar buttons.</p> -->
  <table class="table" id="table">
    <thead>
      <tr>
        <th>Họ Tên</th>
        <th>Ngày Sinh</th>
        <th>Giới Tính</th>
        <th>Địa Chỉ</th>
        <th>Email</th>
        <th>Số Điện Thoại</th>
        <th>Phân Loại</th>
      </tr>
    </thead>

    <tbody>
      <?php
    $sql="select * from nguoidung, phanloai where nguoidung.ma_pl=phanloai.ma_pl";
    $result=mysqli_query($connect,$sql);
    if(mysqli_num_rows($result)>0){
      $i=1;
      while ($row=mysqli_fetch_assoc($result)) {

    ?>
       <tr>
        <td><?php echo $row['ho_ten'];?></td>
        <td><?php echo $row['ngay_sinh'];?></td>
        <td><?php echo $row['gioi_tinh'];?></td>
        <td><?php echo $row['dia_chi'];?></td>
        <td><?php echo $row['email'];?></td>
        <td><?php echo $row['sdt'];?></td>
        <td><?php echo $row['ten_pl'];?></td>
         <!-- <td><a href="change.php?id=<?php echo $row['id'];?>"><i class="fas fa-edit"></i> </a></td> -->
        <!-- <td><a href="delete.php?id=<?php echo $row['id'];?>"><i class="fas fa-trash"></i> </a></td> -->
        <td><button style="border:0px;background-color: #fff; " onclick="suasv('<?php echo$row['id']?>')"><i class="fas fa-edit" style="color: red;"></i> </button></td>
        <td><button style="border:0px;background-color: #fff; " onclick="xoasv('<?php echo$row['id']?>')"><i class="fas fa-trash" style="color: red;"></i> </button></td>
      </tr>

    <?php
       $i++;
      }

    }
    ?>

     
      
    </tbody>
  </table>
</div>
<!-- <script type="text/javascript">
      function xoasv(id) {
        option=confirm('bạn có muốn xóa không')
        if(!option){
          return
        }
        console.log(id)
        $.post('xoa.php',{'id':id},function(data) {
          alert(data)
          location.reload()
        })
      }
      
    </script> -->
</body>
</html>
