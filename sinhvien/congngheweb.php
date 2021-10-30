<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<body>
  <?php require_once('khungtrang/header.php');?>
    
    <div class="wrapper">
        <!-- Sidebar  -->
        <nav id="sidebar">
            <div class="sidebar-header" style="color: white;">
                <img src="cnweb.png" height="70px" width="150px">
                <p style="color: white;">Công nghệ web</p>
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
        <div class="anh"><img src="pic1.png" style="width: 100%;height: 100%;"></div>
        <div class="text"style="margin-top: 50px;">•Email giảng viên :tkdung@gmail.com.<br>
• Trọng số môn học 40-60.<br>
• Kiểm tra giữa kì : tuần 6.</div>
    </div>
    <div class="tb1">
        <div class="anh" style="width: 400px;">
            • Trong khóa học này, chúng ta sẽ trải qua các kiến thức bao gồm:<br>
• Quản lý source code và làm việc nhóm với GIT.<br>
• Phát triển Web phía Front End: Thiết kế website với HTML, CSS, JavaScript , Jquery, Responsive, Bootstrap,
dàn layout từ Photoshop
</div>
        <div class="anh2" style="width: 350px;"><img src="pic2.png" style="width: 100%;height: 100%"></div>
    </div>
    <div class="tb1">
        <div class="anh3"><img src="pic3.png" style="width: 100%;height: 100%"></div>
        <div class="text">• Phát triển Web phía Back End:Lập trình Web động với PHP & MySQL.
            <br>
• Xây dựng CSDL, triển khai một ứng dụng Web hoàn chỉnh (gồm Front End & Back End).<br>
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