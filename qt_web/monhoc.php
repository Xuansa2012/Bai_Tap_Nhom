<!DOCTYPE html>
<html>
<head>
	<title>môn học</title>

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
		.than{width: 912px;height: auto;}
		.dt1{width: 912;height:250px;}
		.chu{width: 912px;height: 40px;background-color: #6A5ACD;padding-left: 10px;padding-top: 8px;color: white;}
		.loc{width: 900px;height: 40px;margin-top: 10px;margin-left: 8px;}
		.bang{width: 912px;height: 200px;margin-top: 10px;}
	</style>
</head>
<body>
 <?php require_once('khungtrang/link.php');?>
 <?php require_once('khungtrang/sidebar.php');?>
<!--  <?php require_once('khungtrang/menutren.php');?> -->
 <div class="than">
 	<div class="dt1">
 <div class="chu">Môn học</div>
 <div class="loc" style="">
        <form id="form">
            <select class="form-control" aria-label="Default select example" id="boloc" name="boloc">
                <option value="1">Tất cả</option>
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
 <div  class="bang">
 	<table class="table table-striped">
    <thead>
      <tr>
        <th>Số TT</th>
        <th>Mã môn</th>
        <th>Tên môn </th>
        <th>Giảng viên</th>
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