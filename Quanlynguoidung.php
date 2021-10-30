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
    if(!$_SESSION){
      header("location:dn.php");
    }
    require_once('khungtrang/header.php');
?>

        <!-- Sidebar  -->
        <?php require_once('khungtrang/nav.php');?>
        <!-- Page Content  -->
        <?php require_once('khungtrang/menutren.php');?>
<style type="text/css">
    .dt1{width: 1050px;height:500px;background-color: #FAF0E6}
    .thanh{width: 1050px;height: 40px;background-color: #6A5ACD;padding-top: 8px;padding-left: 10px;color: white;}
    .loc{width: 1030px;height: 40px;margin-top: 10px;margin-left: 8px;}
    .bang{width: 1050px;height: 200px;margin-top: 20px;}
</style>
            
<div class="container"style="margin-left: -15px;">
    <div class="dt1">
    <div class="thanh">Danh sách người dùng</div>
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
 <!--  <h3>Right Aligned Navbar</h3>
  <p>The .navbar-right class is used to right-align navigation bar buttons.</p> -->
   <div  class="bang">
    <table class="table table-striped" id="table">
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
       <!--  <td><button style="border:0px;background-color: #fff; " onclick="suasv('<?php echo$row['id']?>')"><i class="fas fa-edit" style="color: red;"></i> </button></td>
        <td><button style="border:0px;background-color: #fff; " onclick="xoasv('<?php echo$row['id']?>')"><i class="fas fa-trash" style="color: red;"></i> </button></td> -->
         <td><a href=""><i class="fas fa-eye"></i></a></td>
        </tr>
            <?php
            $i++;
            }

            }
            ?>
    </tbody>
</table>
</div>
</div>
</div>
<?php require_once('khungtrang/footer.php');?>
            