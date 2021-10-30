<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <title>Collapsible sidebar using Bootstrap 4</title>

    <!-- Bootstrap CSS CDN -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
    <!-- Our Custom CSS -->
    <link rel="stylesheet" href="style2.css">
    <!-- Scrollbar Custom CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/malihu-custom-scrollbar-plugin/3.1.5/jquery.mCustomScrollbar.min.css">

    <!-- Font Awesome JS -->
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/solid.js" integrity="sha384-tzzSw1/Vo+0N5UhStP3bvwWPq+uvzCMfrN1fEFe+xBmv1C/AtVX5K0uZtmcHitFZ" crossorigin="anonymous"></script>
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/fontawesome.js" integrity="sha384-6OIrr52G08NpOFSZdxxz1xdNSndlD4vdcf/q2myIUVO0VsqaGHJsB0RaBE01VTOY" crossorigin="anonymous"></script>
</head>

<body>
    
    <div class="wrapper">
        <!-- Sidebar  -->
        <nav id="sidebar">
            <div class="sidebar-header" style="color: white;">
                <img src="unnamed.png" height="70px" width="150px">
                <p style="color: white;">Trí tuệ nhân tạo</p>
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
                    <a href="#pageSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">Bài tập về nhà  </a>
                    <ul class="collapse list-unstyled" id="pageSubmenu">
                        <li>
                            <a href="#">Bài tập 1</a>
                        </li>
                        <li>
                            <a href="#">Bài tập 2</a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="#">Điểm quá trình</a>
                </li>
            </ul>
        </nav>
    <div id="content" style="">
<nav class="navbar navbar-expand-lg " style="background-color: #7386D5;height: 40px;margin-top: -40px;margin-left: -40px;width: 1110px;">
                
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

      <div class="dt1">
    <div class="thanh">Giới thiệu môn học</div>
    <div class="tb1">
        <div class="anh"><img src="tt1.png" style="width: 100%;height: 100%;"></div>
        <div class="text"style="margin-top: 50px;">•Email giảng viên :nvnam@tlu.edu.vn  <br>
• Trọng số môn học 50-50.<br>
• Kiểm tra giữa kì : tuần 7.</div>
    </div>
    <div class="tb1">
        <div class="anh" style="width: 400px;">
            • Trong khóa học này, chúng ta sẽ trải qua các kiến thức bao gồm:<br>
• Giải quyết vấn đề bằng tìm kiếm.<br>
• Giải quyết bài toán bằng logic mệnh đề,suy diễn
• Cây trò chơi
</div>
        <div class="anh2" style="width: 350px;"><img src="tt2.png" style="width: 100%;height: 100%"></div>
    </div>
    <div class="tb1">
        <div class="anh3"><img src="AnhAI2.png" style="width: 100%;height: 100%"></div>
        <div class="text">• Phát triển các thuật toán bắt chước theo lí luận từng bước mà con người sử dụng khi giải quyết các câu đố hoặc đưa ra các phương pháp loại trừ logic.
            <br>
• Chia thành hai trường phái tư duy: Trí tuê nhân tạo truyền thống và trí tuệ tính toán..<br>
• Lớp học sẽ bao gồm các Buổi học Lý thuyết + Thực hành</div>
    </div>
</div>
</div>    
<style type="text/css">
   .dt1{width: 1060px;height:500px;background-color: #FAF0E6;margin-top: -20px;margin-left: -10px;}
    .thanh{width: 1060px;height: 40px;background-color: #6A5ACD;padding-top: 8px;padding-left: 10px;color: white;}  
    .tb1{width: 1060px;height: 200px;background-color:#FAF0E6}
    .anh{width: 350px;height: 150px;margin-top:20px;margin-left: 130px; float: left;}
    .anh2{width: 350px;height: 150px;margin-top:20px;margin-left: 130px; float: left;}
    .anh3{width: 350px;height: 150px;margin-top:20px;margin-left: 130px; float: left;}
    .text{width: 400px;height: 150px;margin-top:20px;margin-left: 50px;float: left ;font-size: 15px;}
</style>
            
</div>

   

    
</body>

</html>