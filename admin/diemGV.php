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
    </style>
</head>

<body>

    <div class="wrapper">
        <!-- Sidebar  -->
        <div class="header">
            <nav id="sidebar">
                <div class="sidebar-header">
                    <img src="images/logo-small.png" height="50px" width="70px">
                     <p style="color: white;">Công nghệ web</p>
                </div>

                <ul class="list-unstyled components">
                    <li>
                        <a href="QLySV.php">Quản Lý Sinh Viên</a>
                    </li>
                    <li>
                        <a href="btvn.php">Bài Tập</a>
                    </li>
                    <li>
                        <a href="#pageSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">Bài tập lớn </a>
                        <ul class="collapse list-unstyled" id="pageSubmenu">
                            <li>
                                <a href="BTL.php">Bài tập lớn</a>
                            </li>
                            <li>
                                <a href="yeucau.php">Yêu cầu chung</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="diemGV.php">Điểm</a>
                    </li>
                </ul>
            </nav>
        </div>

        <!-- Page Content  -->
        <div id="content">

            <nav class="navbar navbar-light bg-light" style="margin-top: -50px">
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
            </nav>

            <br/>
            <br/>
           <table class="table">
              <thead>
                <tr>
                  <th>STT</th>
                  <th>Họ và Tên</th>
                  <th>Điểm BTL</th>
                  <th>Điểm BTVN</th>
                </tr>
              </thead>
              <tbody>
                     
                <tr class="success">
                  <td>1</td>
                  <td>Nguyễn Văn A</td>
                  <td>-</td>      
                  <td>-</td>
                
                <tr class="danger">
                  <td>2</td>
                  <td>Nguyễn Văn B</td>
                  <td>-</td>
                  <td>-</td>

                  <tr>
                 
                  
                </tr> 
                  <tr class="info">
                  <td>3</td>
                  <td>Nguyễn Văn C</td>
                  <td>-</td>
                  <td>-</td>
                </tr>
                <tr class="warning">
                  <td>4</td>
                  <td>Nguyễn Văn D</td>
                  <td>-</td>
                  <td>-</td>
                </tr>

                
              </tbody>
            </table>

            <br/>

             <section >
  <div class="container my-5 py-5">
    <div class="row d-flex ">
      <div class="col-md-12 col-lg-10 col-xl-8" >
        <div class="card">
    
          <div class="card-footer py-3 border-0" style="background-color: #f8f9fa;">
            <div class="d-flex flex-start w-100">
              <img
                class="rounded-circle shadow-1-strong me-3"
                src="https://mdbootstrap.com/img/Photos/Avatars/img%20(19).jpg"
                alt="avatar"
                width="40"
                height="40"
              />
              <div class="form-outline w-100">
                <textarea
                  class="form-control"
                  id="textAreaExample"
                  rows="4"
                  style="background: #fff;"
                ></textarea>
                <label class="form-label" for="textAreaExample">What is your question?</label>
              </div>
            </div>
            <div class="d-flex justify-content-between mt-3" style="float: right;">

                  <button type="button" class="btn ">
                    Send <i class="fas fa-long-arrow-alt-right ms-1"></i>
                  </button>

                </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

            
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