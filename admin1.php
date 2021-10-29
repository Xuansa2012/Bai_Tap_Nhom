<!DOCTYPE html>
<html>
<head>
	<title>admin</title>

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
	<style type="text/css">
		.than{width: 1050px;height: auto;}
		.dt1{width: 1050px;height:250px;}
		.container{width: 500px;height: 200px;background-color: #FAF0E6;float: left}
		.thanh{width: 1050px;height: 40px;background-color: #6A5ACD;padding-top: 8px;padding-left: 10px;color: white;}
		.nguoidung{width: 200px;height: 150px;background-color: #DCDCDC;margin-top: 20px;margin-left: 40px;float: left;text-align: center;border: 1px;
			border-radius: 10px;}
		.nguoidung:hover{box-shadow: 5px 5px 5px 5px #AAA;}
		.monhoc{width: 200px;height: 150px;background-color: #DCDCDC;margin-top: 20px;margin-left: 45px;float: left;text-align: center;border: 1px;
			border-radius: 10px;}
		.monhoc:hover{box-shadow: 5px 5px 5px 5px #AAA;}
		.phongban{width: 200px;height: 150px;background-color: #DCDCDC;margin-top: 20px;margin-left: 45px;float: left;text-align: center;border: 1px;
			border-radius: 10px;}
		.phongban:hover{box-shadow: 5px 5px 5px 5px #AAA;}
		.khoa{width: 200px;height: 150px;background-color: #DCDCDC;margin-top: 20px;margin-left:45px;float: left;text-align: center;border: 1px;
			border-radius: 10px;}
		.khoa:hover{box-shadow: 5px 5px 5px 5px #AAA;}
		.nhan{width: 100px;height: 50px;margin: 0 auto;margin-top: 30px;font-size: 50px;padding-top: -10px;}
		.chu{width: 1050px;height: 40px;background-color: #6A5ACD;padding-left: 10px;padding-top: 8px;color: white;}
		.bang{width: 1050px;height: 200px;}
	</style>
</head>
<body>
 <?php require_once('khungtrang/header.php');?>
 <?php require_once('khungtrang/nav.php');?>
 <?php require_once('khungtrang/menutren.php');?>
 <div class="than">
 	<div class="dt1">
 <div class="thanh">Tổng quan</div>
 <div class="container">
 	<div class="nguoidung">
 		<div class="nhan"><i class="fas fa-user" style=""></i></div>
 		<br>
 		Người dùng
 	</div>
 	<div class="monhoc">
 		<div class="nhan"><i class="fas fa-book-open"></i></div>
 		<br>
 	Môn học</div>
 	<div class="phongban">
 		<div class="nhan"><i class="fas fa-list-alt"></i></div>
 		<br>
 	Phòng ban </div>
 	<div class="khoa">
 		<div class="nhan"><i class="fas fa-briefcase"></i></div>
 		<br>
 	Khoa</div>
 </div>
</div>
 <div class="chu">Người dùng gần đây</div>
 <div  class="bang">
 	<table class="table table-striped">
    <thead>
      <tr>
        <th>Số TT</th>
        <th>Họ tên</th>
        <th>Email</th>
        <th>Ngày truy cập</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>John</td>
        <td>Doe</td>
        <td>john@example.com</td>
        <td>19/10/2021</td>
      </tr>
      <tr>
        <td>Mary</td>
        <td>Moe</td>
        <td>mary@example.com</td>
        <td>22/10/2021</td>
      </tr>
      <tr>
        <td>July</td>
        <td>Dooley</td>
        <td>july@example.com</td>
        <td>23/10/2021</td>
      </tr>
    </tbody>
  </table>
 </div>
 
</div>
</body>
</html>