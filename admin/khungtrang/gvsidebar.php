<nav id="sidebar" style="width: 15%;">
            <div class="sidebar-header" style="color: white;">
                <img src="logo.png" height="100px" width="150px">
            </div>
            <ul class="list-unstyled components">
                <li class="active">
                    <a href="#homeSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle"><i class="fas fa-plus-square"></i>Quản lý môn </a>
                    <ul class="collapse list-unstyled" id="homeSubmenu">
                        <li>
                            <a href="themgiaovien.php"><i class="fas fa-user-tie"></i>môn 1</a>
                        </li>
                        <li>
                            <a href="themsinhvien.php"> <i class="fas fa-user"></i>môn 2</a>
                        </li>
                         <li>
                            <a href="themMonHoc.php"> <i class="fas fa-address-book"></i> Thêm môn</a>
                        </li>
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
               <!--  <li>
                    <a href="#"><?php echo $_SESSION['taikhoan']?></a>
                </li> -->
            </ul>
        </nav>