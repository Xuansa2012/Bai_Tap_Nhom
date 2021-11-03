<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <title>Trang chủ | Education</title>

    <?php require_once('khungtrang/link.php');?>
    
    <style type="text/css">
        .tm:hover{box-shadow: 5px 5px 5px 5px #AAA;}
    </style>
</head>

<body>

    

        <!-- Page Content  -->
        <div id="content">
                <!-- Sidebar  -->
        <nav id="sidebar">
            <div class="sidebar-header" style="color: white;">
                <img src="cnweb.png" height="70px" width="150px">
             <!--    <p style="color: white;"><?php echo $ten_mon?></p> -->
            </div>

            <ul class="list-unstyled components">
                <li class="active">
                    <a href="#homeSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">Môn học</a>
                    <ul class="collapse list-unstyled" id="homeSubmenu">
                        <li>
                            <a href="#">Giới thiệu môn</a>
                        </li>
                        <li>
                            <a href="#">Giáo trình và tài liệu</a>
                        </li>
                    </ul>
                </li>
                <!-- <li class="active">
                    <a href="#homeSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">Bài tập về nhà</a>
                    <ul class="collapse list-unstyled" id="homeSubmenu">
                        <li>
                            <a href="#">Chủ đề 1</a>
                        </li>
                        <li>
                            <a href="#">Chủ đề 2</a>
                        </li>
                    </ul>
                </li> -->
                <li>
                    <a href="#pageSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">Bài tập   </a>
                    <ul class="collapse list-unstyled" id="pageSubmenu">
                        <li>
                            <a href="btvn.php">Bài tập về nhà</a>
                        </li>
                        <li>
                            <a href="BTL.php">Bài tập lớn</a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="#">Điểm quá trình</a>
                </li>
            </ul>
        </nav>
                <nav class="navbar navbar-expand-lg " style="background-color: #7386D5;width: 100%;height: 50px ;position: absolute;top:0;left:0">
                <div class="container-fluid">
                    <div class="navbar-header" style="position: absolute;:left: 0;">
                        <a class="navbar-brand" href=""><i class="fas fa-home"></i></a>
                    </div>    
                    <div class="navbar-header" style="position: absolute;right: 0;">
                        <a class="navbar-brand" href="#"><i class="fas fa-user-tie"></i> admin</a>
                    </div>    
                </div>
            </nav>
            <!-- <nav class="navbar navbar-light bg-light" style="margin-top: -50px">
              <div class="container-fluid">

                <button type="button" id="sidebarCollapse" class="btn btn-info">
                    <i class="fas fa-align-left"></i>                   
                </button>

                <div class="dropdown">
                <button class="btn btn-default dropdown-toggle" type="button" data-toggle="dropdown" >
                    <i class="fa fa-bell" aria-hidden="true" style="font-size: 20px"></i>
                    <i class="fa fa-user-circle" aria-hidden="true" style="font-size: 25px"></i>
                    <span>Tên người dùng</span> 
                <span class="caret" style="padding-left: 30px"></span></button>
                    <ul class="dropdown-menu" style="padding-left: 20px">
                      <li><a href="#">Thông tin tài khoản</a></li>
                      <li><a href="#">Đổi mật khẩu</a></li>
                      <li class="divider"></li>
                      <li><a href="#">Thoát</a></li>
                    </ul>
              </div>

              </div>
            </nav> -->

            <br/>
            <div class="card" style="background-color:#FAF0E6;">
                <h5 class="card-header" style="background-color: #9932CC;">BÀI TẬP SỐ 1</h5>
                <div class="card-body">
                    <h5 class="card-title">TÊN BÀI TẬP</h5>
                    <p class="card-text">
                        <b>Opened :</b> Thursday, 23 September 2021 </br>
                        <b>Due :</b> Sunday, 26 September 2021 
                    </p>            
                </div>
            </div>
                <br/>
            <div class="card" style="background-color:#FAF0E6;">
                <h5 class="card-header" style="background-color: #9932CC;">BÀI TẬP SỐ 2</h5>
                <div class="card-body">
                    <h5 class="card-title">TÊN BÀI TẬP</h5>
                    <p class="card-text">
                        <b>Opened :</b> Thursday, 23 September 2021 </br>
                        <b>Due :</b> Sunday, 26 September 2021 
                    </p>            
                </div>
            </div>
            
        </div>   
    </div>

    <script type="text/javascript">
        $(document).ready(function () {
            $("#sidebar").mCustomScrollbar({
                theme: "minimal"
            });

            $('#sidebarCollapse').on('click', function () {
                $('#sidebar, #content').toggleClass('active');
                $('.collapse.in').toggleClass('in');
                $('a[aria-expanded=true]').attr('aria-expanded', 'false');
            });
        });
    </script>
</body>

</html>