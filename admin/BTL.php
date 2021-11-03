<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <title>Trang chủ | Education</title>

    <!-- Bootstrap CSS CDN -->
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
    
    <style type="text/css">
        .tm:hover{box-shadow: 5px 5px 5px 5px #AAA;}
        .than{width: 100%;height: auto;margin-top: -30px;background-color: #FFFAF0;}
  
    </style>
</head>

<body>

    <div class="wrapper">
       <!-- Sidebar  -->
        <nav id="sidebar">
            <div class="sidebar-header" style="color: white;">
                <img src="cnweb.png" height="70px" width="150px">
                <!-- <p style="color: white;"><?php echo $ten_mon?></p> -->
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
                    <a href="diem.php">Điểm quá trình</a>
                </li>
            </ul>
        </nav>
        </div>

        <!-- Page Content  -->
        <div id="content">

           <nav class="navbar navbar-expand-lg " style="background-color: #7386D5;height: 50px;margin-top: -40px;margin-left: -40px;width: 1110px;">
                
                <div class="container-fluid">

                    <button type="button" id="sidebarCollapse" class="btn btn-info"style="margin-left: -25px; background-color: #7386D5">
                        <i class="fas fa-align-left"></i>                
                    </button>
                    <div class="navbar-header" style="margin-left: -80px;">
      <a class="navbar-brand" href="#"><i class="fas fa-user-tie"></i>Người dùng</a>
    </div>
                    
                     <button class="btn btn-dark d-inline-block d-lg-none ml-auto" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <i class="fas fa-align-justify"></i>
                    </button>
                </div>
            </nav>
          <br/>
            <div class="than" >
     <h5 class="card-header" style="background-color: #9932CC;">ĐĂNG KÍ BÀI TẬP LỚN</h5>
     
      <br/>
      <table class="table">

      <thead>
        <tr>
          <th scope="col">STT</th>
          <th scope="col">Nhóm</th>
          <th scope="col">Đề tài</th>
          <th scope="col">Thành viên</th>
        </tr>
      </thead>

      <tbody>
        <tr>  
          <td>1</td>
          <td>1</td>
          <td>Xây dựng website cá nhân cho giáo viên</td>
           <td>tên tv</td>
        </tr>

        <tr>        
          <td>2</td>
          <td>2</td>
          <td>Xây dựng website cựu sinh viên Viện CNTT-TT</td>
        </tr>

        <tr>         
          <td>3</td>
          <td>3</td>
          <td>Xây dựng website giới thiệu và đặt sách trực tuyến</td>
        </tr>

        <tr>       
          <td>4</td>
          <td>4</td>
          <td>Xây dựng website hỗ trợ quản lý học tập</td>
        </tr>

      </tbody>
    </table>

    </div>
    
        </div>   
    </div>

    <<!-- script type="text/javascript">
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
    </script> -->
</body>

</html>