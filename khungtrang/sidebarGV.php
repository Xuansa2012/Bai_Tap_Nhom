<style type="text/css">
    ul li a{
        text-decoration: none;
        color: white;
    }
    a:hover{
        text-decoration: none;
    }
</style>
<nav id="sidebar" style="width: 15%;">
    <div class="sidebar-header" style="color: white;">
        <div class="sidebar-header" style="color: white;">
                <?php if($img==""|| $img==null){?>
                    <img src="../images/img-01.png" height="150px" width="150px">
                <?php }else{?>
                    <img src="../<?php echo $img?>" height="150px" width="150px">
                <?php }?>
        </div>
        
    <ul class="list-unstyled components">
        <li><a href="../giaovien/themmon.php">Thêm môn học</a></li>
        <li><a href="../giaovien/QuanLyBaiTap.php">Quản lý bài tập</a></li>
        <li class="active">
            <a href="#homeSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle"><i class="fas fa-plus-square"></i>Quản lý môn </a>
            <ul class="collapse list-unstyled" id="homeSubmenu">
                <?php 
                    $sql="select * from monhoc where ma_nd='".$ma_nd."'";
                    $data=laydata($sql);
                    foreach($data as $monhoc){
                ?>
                <li>
                    <a href="ctmon.php?ma_mon=<?php echo $monhoc['ma_mon_hoc']?>"><i class="fas fa-user-tie"></i><?php echo $monhoc['ten_mon_hoc']?></a>
                </li>
               <?php }?>
            </ul>
        </li>
        <li>
            <a href="#pageSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">Quản lý bài tập</a>
            <ul class="collapse list-unstyled" id="pageSubmenu">
                <li>
                    <a href="qlNguoidung.php"><i class="fas fa-user-tie"></i>Bài tập về nhà </a>
                </li>
                <li>
                    <a href="qlMon.php"> <i class="fas fa-address-book"></i>Bài tập lớn</a>
                </li>
              <!--   <li>
                    <a href="#">Bài tập 2</a>
                </li> -->
            </ul>
        </li>
        <li><a href="../dangxuat.php">Đăng xuất</a></li>
       <!--  <li>
            <a href="#"><?php echo $_SESSION['taikhoan']?></a>
        </li> -->
    </ul>
</nav>