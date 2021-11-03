   
<!DOCTYPE html>
<html>
<head>
	<title>admin</title>
	<?php require_once('khungtrang/link.php')?>;
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
		.clear{
			width: 100%;
			height: 10px;
		}
	</style>
	<script type="text/javascript">
		$(document).ready(function() {
    		$("#nguoidung").click(function(e){
      			e.preventDefault();
      			 $.ajax({  
                   url:"ajax/nguoidung.php",  
                   method:"POST",  
                   success: function(a){   
                       $('#hello').html(a); 
                      //alert(a);
                  }
              })
      		})
      		$("#monhoc").click(function(e){
      			e.preventDefault();
      			 $.ajax({  
                   url:"ajax/monhoc.php",  
                   method:"POST",  
                   success: function(a){   
                       $('#hello').html(a); 
                      //alert(a);
                  }
              })
      		})
    	})
	</script>
</head>
<body>
	<div class="wrapper" style="position: absolute;">
		<?php require_once('khungtrang/sidebar.php')?>;
        <button type="button" id="sidebarCollapse" class="btn btn-info"style=" background-color: #7386D5;position: absolute;z-index: 999;left: 20%;" id="icon-trai" onclick="suazoom()">
            <i class="fas fa-align-left"></i>                
        </button>
	    <div id="content" style="width: 85%;">
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
								<button type="button" id="nguoidung">
									<div class="nhan"><i class="fas fa-user" style=""></i></div>
									<br>
									Người dùng
								</button>
							</div>
							<div class="nguoidung">
								<button type="button" id="monhoc">
									<div class="nhan"><i class="fas fa-book-open"></i></div>
									<br>
									Môn học
								</button>
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

				</div>
				<div class="clear"></div>
				<div id="hello">
					
				</div>
			</div>
	    </div>
    </div>
 
</body>
</html>