<style type="text/css">
    ul li a{
        text-decoration: none;
        color: white;
    }
    a:hover{
        text-decoration: none;
    }
    .sidebar-header img{
        width: 150px;
    }
</style>
<nav id="sidebar" style="width: 15%;">
    <div class="sidebar-header" style="color: white;">
        <div class="sidebar-header" style="color: white;">
                <?php if($img==""|| $img==null){?>
                    <img src="../images/macdinh.png" style="width: 150px;">
                <?php }else{?>
                    <img src="../<?php echo $img?>" style="width: 150px;">
                <?php }?>
        </div>
        
    <ul class="list-unstyled components">
        <li><a href="../giaovien/themmon.php">Thêm môn học</a></li>
        <li><a href="../giaovien/thembaitap.php">Thêm Bài Tập</a></li>

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
        
          
        <li><a href="../dangxuat.php">Đăng xuất</a></li>
       <!--  <li>
            <a href="#"><?php echo $_SESSION['taikhoan']?></a>
        </li> -->
    </ul>
</nav>