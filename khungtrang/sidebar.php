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
                <?php if($img==""|| $img==null){?>
                    <img src="../images/macdinh.png" style="width: 150px;height: 150px;">
                <?php }else{?>
                    <img src="../<?php echo $img?>" height="150px" width="150px">
                <?php }?>
            </div>
            <ul class="list-unstyled components">
                <li class="active">
                    <a href="#homeSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle"><i class="fas fa-plus-square"></i> Thêm</a>
                    <ul class="collapse list-unstyled" id="homeSubmenu">
                        <li>
                            <a href="themgiaovien.php"><i class="fas fa-user-tie"></i>Thêm Giáo Viên</a>
                        </li>
                        <li>
                            <a href="themsinhvien.php"> <i class="fas fa-user"></i>Thêm Sinh Viên</a>
                        </li>
                        <li>
                            <a href="themMonHoc.php"> <i class="fas fa-address-book"></i>Thêm môn</a>
                        </li>

                    </ul>
                </li>
                <li>
                    <a href="#pageSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">Quản lý</a>
                    <ul class="collapse list-unstyled" id="pageSubmenu">
                        <li>
                            <a href="qlNguoidung.php"><i class="fas fa-user-tie"></i> Người dùng</a>
                        </li>
                        <li>
                            <a href="qlMon.php"> <i class="fas fa-address-book"></i>môn</a>
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