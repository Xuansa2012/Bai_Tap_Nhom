<?php 
    require_once("../../data_sv.php");
    require_once("../../khungtrang/sesion.php");
    if(isset($_COOKIE['ma_mon'])){
    	$ma_mon=$_COOKIE['ma_mon'];
    	$sql="select* from monhoc where ma_mon_hoc = '".$_COOKIE['ma_mon']."'";
    	$file="tailieu/".$_GET['file'];
		$data=laydata($sql);
		$data_file="";
		if($data!=null && count($data)>0){
			$data_file=$data[0]['tai_lieu'];
		}
		$data_file.='*'.$file;
		$sql="update monhoc set tai_lieu='".$data_file."' where ma_mon_hoc='".$ma_mon."'";
		xuly($sql);
	}?>
<div style="margin-top:10px" id="tailieu">
	<?php 
			$sql="select* from monhoc where ma_mon_hoc = '".$ma_mon."'";
			$data=laydata($sql);
			if($data!=null && count($data)>0){
				$tailieu=$data[0]['tai_lieu'];
			}
			$arrTL=explode("*", $tailieu); 
	?>
    <div class="thanh">Tài liệu</div>
    <?php
        for($i=0;$i<count($arrTL);$i++){
            $a=$i+1;
        echo '<div><a href="taitailieu.php?maTL='.$arrTL[$i].'">-Tài liệu chương '.$a.'</a></div>';
    }
    ?>
</div>
    