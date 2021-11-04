<?php 
    require_once("../data_sv.php");
    require_once("../khungtrang/sesion.php");
    if(isset($_GET['ma_mon'])){
        $sql="select * from nguoidung,monhoc where nguoidung.ma_nd=monhoc.ma_nd and ma_mon_hoc='".$_GET['ma_mon']."'";
    $data=laydata($sql);
    $ten_mon="";
    $ten_gv="";
    foreach($data as $mon){
        $ten_mon=$mon['ten_mon_hoc'];
        $ten_gv=$mon['ho_ten'];
        $email=$mon['email'];
        $soDT=$mon['sdt'];
        $trong_so=$mon['trong_so'];
        $kiem_tra=$mon['kiem_tra'];
        $mo_ta=$mon['mo_ta'];
        $tailieu=$mon['tai_lieu'];
        $ma_mon=$mon['ma_mon_hoc'];
        setcookie('ma_mon',$ma_mon,time()+24*60*60,"/");
    }
    $arrKT=explode("-", $kiem_tra);
    $arrMT=explode(".", $mo_ta); 
    $arrTL=explode("*", $tailieu); 
    }
   
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/style2.css">
    <meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>


<script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>

 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">

     <style type="text/css">
            .than{width: 100%;height: auto; margin-top: 40px;}
        .khunganhMT{
            width: 100px;
            height: 110px;
            float: left;
            margin-left: 10px;
        }
        .imgMT{
            width: 100px;
            height: 100px;
        }
    .tb1{width: 100%;height:250px;}
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
    body{
        font-size: 20px;
    }
     </style>
     <script type="text/javascript">
      $(document).ready(function(){  
          $('#upload_csv').on("submit", function(e){ 
               e.preventDefault(); //form will not submitted 
               var a=$('#file').val();
               var file=a.slice(12);
               if(a){

                    if(a.indexOf('.pdf') > 0){
                          $.ajax({  
                               url:"ajax/dayfile.php?file="+file,     
                               success: function(a){
                                 $('#tailieu').html(a);
                                 //alert(a);
                              }
                          });
                         }
                          else{
                              alert("file ko đúng định dạng");
                          }  
               }else{
                    alert("bạn chưa chọn file");
               }
               
           }); 
      });  
     </script>
</head>

<body>
<div class="wrapper" style="position: absolute;position: absolute;top :0">
    <?php require_once('../khungtrang/sidebarGV.php')?>
        <!-- Sidebar  -->
    <div id="content" style="width:85%;">
<nav class="navbar navbar-expand-lg " style="background-color: #7386D5;width: 100%;height: 50px;position: absolute;top:0;left:0">
            <div class="container-fluid">
                <div class="navbar-header" style="position: absolute;:left: 0;">
                    <a class="navbar-brand" href="#" style="color:black;"><i class="fas fa-home"></i> Trang chủ</a>
                </div>    
                <div class="navbar-header" style="position: absolute;right: 0;">
                    <a class="navbar-brand" href="#"style="color:black;"><i class="fas fa-user-tie"></i> <?php echo $ho_ten?></a>
                </div>    
            </div>
</nav>

     <div class="than" style="width: 100%;height: auto; margin-top: 40px;background-color:#FAF0E6 ;">
    <div class="thanh">Giới thiệu môn học</div>
        <div class="row" style="margin-top:10px">
            <div class="col-sm-3">
                <?php if($img==""|| $img==null){?>
                    <img src="../images/img-01.png" height="250px">
                <?php }else{?>
                    <img src="../<?php echo $img?>" height="250px">
                <?php }?>
            </div>
            <div class="col-sm-7 khung" >
            <div class="khung-ten">Tên Môn <?php echo $ten_mon?></div>
            <div>Giảng viên : <?php echo $ten_gv?></div>
            <div>Email : <?php echo $email?></div>
            <div>Số điện thoại: <?php echo $soDT?></div>
            <div>Trọng số : <?php echo $trong_so?></div>
            <?php if($arrKT==2){?>
                <div>kiểm tra giữa kì: <?php echo $arrKT[0]?></div>
                <div>kiểm tra cuối kì: <?php echo $arrKT[1]?></div>
            <?php }?>
            </div>
        </div>
        <div style="margin-top:100px">
            <div class="thanh">Mô tả môn học</div>
            <?php
            for($i=0;$i<count($arrMT);$i++){
                echo '<div>- '.$arrMT[$i].'</div>';
            } 
            ?>
        </div>
         <div style="margin-top:100px" id="tailieu">
            <div class="thanh">Tài liệu</div>
            <?php
                for($i=0;$i<count($arrTL);$i++){
                    $a=$i+1;
                echo '<div><a href="taitailieu.php?maTL='.$arrTL[$i].'">-Tài liệu chương '.$a.'</a></div>';
            }
            ?>
        </div>
                <div style="margin-top:80px">
            <div class="thanh">Đẩy Tài liệu</div>
            <div style="margin-top: 20px"></div>
            <form id="upload_csv" method="post" enctype="multipart/form-data">  
            <div class="row" style="margin-left: 20px">
                 
                     <div class="col-md-4">  
                          <input type="file" name="file" style="margin-top:15px;" id="file" />  
                     </div>  
                     <div class="col-md-3">  
                          <input type="submit" name="upload" id="upload" value="Upload" style="margin-top:10px;" class="btn btn-info" />  
                     </div>  
                     <div style="clear:both"></div>  
                </div>
            </form>  
        </div>

        

    
</div>
</div>    

            
</div>

   

    
</body>

</html>