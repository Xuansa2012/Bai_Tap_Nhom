<!DOCTYPE html>
<html>
<head>
    <title>admin</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
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
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
    <!-- Our Custom CSS -->
    <link rel="stylesheet" href="style2.css">
    <!-- Scrollbar Custom CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/malihu-custom-scrollbar-plugin/3.1.5/jquery.mCustomScrollbar.min.css">
    <!-- Font Awesome JS -->
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/solid.js" integrity="sha384-tzzSw1/Vo+0N5UhStP3bvwWPq+uvzCMfrN1fEFe+xBmv1C/AtVX5K0uZtmcHitFZ" crossorigin="anonymous"></script>
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/fontawesome.js" integrity="sha384-6OIrr52G08NpOFSZdxxz1xdNSndlD4vdcf/q2myIUVO0VsqaGHJsB0RaBE01VTOY" crossorigin="anonymous"></script>
    <!-- jQuery CDN - Slim version (=without AJAX) -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <!-- Popper.JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>
    <!-- Bootstrap JS -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>
    <!-- jQuery Custom Scroller CDN -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/malihu-custom-scrollbar-plugin/3.1.5/jquery.mCustomScrollbar.concat.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <style type="text/css">
        .than{width: 100%;height: auto; margin-top: 40px;}
.dt1{width: 100%;height:250px;}
        .container{width: 100%;height: 200px;background-color: #FAF0E6;float: left}
        .thanh{width: 100%;height: 40px;background-color: #6A5ACD;padding-top: 8px;padding-left: 10px;color: white;}
        .nguoidung{width: 20%;height: 150px;background-color: #DCDCDC;margin-top: 20px;margin-left: 40px;float: left;text-align: center;border: 1px;
            border-radius: 10px;}
        .nguoidung:hover{box-shadow: 5px 5px 5px 5px #AAA;}
        .nhan{width: 100px;height: 50px;margin: 0 auto;margin-top: 30px;font-size: 50px;padding-top: -10px;}
        .chu{width: 100%;height: 40px;background-color: #6A5ACD;padding-left: 10px;padding-top: 8px;color: white;}
        .bang{width: 100%;height: 200px;}
    </style>
</head>
<body>
    <div class="wrapper" style="position: absolute;">
        <nav id="sidebar" style="width: 20%;">
            <div class="sidebar-header" style="color: white;">
                <img src="logo.png" height="100px" width="150px">
            </div>
            <ul class="list-unstyled components">
                <li class="active">
                    <a href="#homeSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">Quản lý người dùng</a>
                    <ul class="collapse list-unstyled" id="homeSubmenu">
                        <li>
                            <a href="#">Danh sách người dùng</a>
                        </li>
                        <!-- <li>
                            <a href="#">Môn 2</a>
                        </li> -->
                    </ul>
                </li>
                <!-- <li class="active">
                    <a href="#homeSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">Quản lý môn học</a>
                    <ul class="collapse list-unstyled" id="homeSubmenu">
                        <li>
                            <a href="#">Danh sách môn h</a>
                        </li>
                        <li>
                            <a href="#">Môn 2</a>
                        </li>
                    </ul>
                </li> -->
                <li>
                    <a href="#pageSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">Quản lý môn học </a>
                    <ul class="collapse list-unstyled" id="pageSubmenu">
                        <li>
                            <a href="#">Danh sách môn học</a>
                        </li>
                      <!--   <li>
                            <a href="#">Bài tập 2</a>
                        </li> -->
                    </ul>
                </li>
                <li>
                    <a href="#pageSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">Quản lý môn khoa </a>
                    <ul class="collapse list-unstyled" id="pageSubmenu">
                        <li>
                            <a href="#">Danh sách khoa</a>
                        </li>
                      <!--   <li>
<a href="#">Bài tập 2</a>
                        </li> -->
                    </ul>
                </li>
                <li>
                    <a href="#pageSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">Quản lý phòng ban </a>
                    <ul class="collapse list-unstyled" id="pageSubmenu">
                        <li>
                            <a href="#">Danh sách phòng ban</a>
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
        <button type="button" id="sidebarCollapse" class="btn btn-info"style=" background-color: #7386D5;position: absolute;z-index: 999;left: 20%;" id="icon-trai" onclick="suazoom()">
            <i class="fas fa-align-left"></i>                
        </button>
        <div id="content" style="width: 80%;">
            <nav class="navbar navbar-expand-lg " style="background-color: #7386D5;width: 100%;height: 50px;position: absolute;top:0;left:0">
                <div class="container-fluid">
                    
                    <div class="navbar-header" style="position: absolute;right: 0;">
                        <a class="navbar-brand" href="#"><i class="fas fa-user-tie"></i> admin</a>
                    </div>    
                    <button class="btn btn-dark d-inline-block d-lg-none ml-auto" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <i class="fas fa-align-justify"></i>
                    </button>
                </div>
            </nav>
            <div class="than">
                <div class="dt1">
                    <div class="thanh">Tổng quan</div>
                    <div class="container">
                            <div class="nguoidung">
                                <div class="nhan"><i class="fas fa-user" style=""></i></div>
                                <br>
                                Người dùng
                            </div>
                            <div class="nguoidung">
                                <div class="nhan"><i class="fas fa-book-open"></i></div>
                                <br>
                                Môn học
                            </div>
                        <div class="nguoidung">
                            <div class="nhan"><i class="fas fa-list-alt"></i></div>
                            <br>
                            Phòng ban 
                        </div>
                        <div class="nguoidung">
                            <div class="nhan"><i class="fas fa-briefcase"></i></div>
                            <br>
                            Khoa
                        </div>
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
                    <?php 
        $list_odd = array(1,3,5,7);
        $list_odd[]=9;
        echo $list_odd[4];
    ?>
                </div>
            </div>
        </div>
    </div>
 
</body>
</html>