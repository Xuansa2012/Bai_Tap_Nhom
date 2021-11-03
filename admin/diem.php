<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <?php require_once('khungtrang/link.php');?>
    <style type="text/css">
        .tm:hover{box-shadow: 5px 5px 5px 5px #AAA;}
        .than{width: 100%;height: auto;margin-top: 50px;background-color: #FFFAF0;}
    </style>
</head>

<body>

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
                        <a class="navbar-brand" href="#"><i class="fas fa-user-tie"></i>Người dùng</a>
                    </div>    
                </div>
            </nav>
            <div class="than">
             <h5 class="card-header" style="background-color: #9932CC;">BẢNG ĐIỂM BÀI TẬP</h5>
              <br/>
              <table class="table table-striped">
                <thead>
                  <tr>
                    <th scope="col">STT</th>
                    <th scope="col">Đề bài</th>
                    <th scope="col">Điểm</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <th scope="row">1</th>
                    <td>Thiết kế fontend cho nhà hàng</td>
                    <td>-</td>
                  
                  </tr>
                  <tr>
                    <th scope="row">2</th>
                    <td>Xây dựng website hỗ trợ quản lý học tập</td>
                    <td>-</td>
                  </tr>
                
                </tbody>
              </table>
              <h5 class="card-header" style="background-color: #9932CC;margin-top: 150px;"> ĐIỂM QUÁ TRÌNH</h5>
              <br/>
              <table class="table table-striped">
                <thead>
                  <tr>
                    <th scope="col">STT</th>
                    <th scope="col">Điểm chuyên cần</th>
                    <th scope="col">Điểm phát biểu</th>
                    <th scope="col">Điểm bài tập hàng ngày</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <!-- <th scope="row">1</th>
                    <td>Thiết kế fontend cho nhà hàng</td>
                    <td>-</td> -->
                  
                  </tr>
                  <tr>
                   <!--  <th scope="row">2</th>
                    <td>Xây dựng website hỗ trợ quản lý học tập</td>
                    <td>-</td> -->
                  </tr>
                
                </tbody>
              </table>

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