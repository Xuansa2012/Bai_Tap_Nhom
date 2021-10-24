<?php
define('host', 'localhost');
define('user', 'root');
define('pass', '');
define('db', 'quan_ly_hoc_tap');
$connect=mysqli_connect(host,user,pass,db);
mysqli_set_charset($connect,'utf8');
if(!$connect){
  die('kết nối không thành công');
}
$ma=$_POST['boloc'];
if($ma=='1'){
	$sql="select * from nguoidung, phanloai where nguoidung.ma_pl=phanloai.ma_pl";
}
else{
	$sql="select * from nguoidung, phanloai where nguoidung.ma_pl=phanloai.ma_pl and phanloai.ma_pl='".$ma."'";
}
?>
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
