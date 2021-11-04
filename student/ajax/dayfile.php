<?php 
    require_once("../../data_sv.php");
    require_once("../../khungtrang/sesion.php");
    if(isset($_COOKIE['ma_bt'])){
          $ma_bt=$_COOKIE['ma_bt'];
          $file="tailieu/".$_GET['file'];
          date_default_timezone_set("Asia/Ho_Chi_Minh");
          $dateNow=date("Y-m-d H:i:s");
          $sql="insert into luutru values('','".$ma_bt."','".$ma_nd."','".$file."','".$dateNow."','')";
          //$sql="update monhoc set tai_lieu='".$data_file."' where ma_mon_hoc='".$ma_mon."'";
          xuly($sql);
          }
     ?>
      <div id="pate">
                <?php $sql ="select * from luutru,nguoidung where nguoidung.ma_nd=luutru.ma_nd and ma_bt='".$ma_bt."'";
                    $data=laydata($sql);
                    if($data!=null && count($data)>0){
                         echo '<div>đã nộp</div>';
                         foreach($data as $ds){
                              echo '<div><a href="taitailieu.php?maTL=../giaovien/'.$ds['bai_lam'].'">đề bài</a></div>';     
                         }
                         
                    }?>
                </div>

    