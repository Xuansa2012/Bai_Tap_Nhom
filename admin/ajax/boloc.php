<?php 
require_once('../../data_sv.php');
require_once('../../khungtrang/sesion.php');
$ld=$_GET['bolocLD'];
$gv=$_GET['giaovien'];
$mon=$_GET['monhoc'];
$sql="";
if($ld==1 && $gv==1 && $mon==1){
	$sql="select * from nguoidung,btvn,monhoc,loai_de where nguoidung.ma_nd=monhoc.ma_nd and monhoc.ma_mon_hoc=btvn.ma_mon_hoc and loai_de.ma_ld=btvn.ma_ld";
}
else if($ld==1 && $gv==1){
	$sql="select * from nguoidung,btvn,monhoc,loai_de where nguoidung.ma_nd=monhoc.ma_nd and monhoc.ma_mon_hoc=btvn.ma_mon_hoc and loai_de.ma_ld=btvn.ma_ld and monhoc.ma_mon_hoc='".$mon."'";
}
else if($ld==1 && $mon==1){
	$sql="select * from nguoidung,btvn,monhoc,loai_de where nguoidung.ma_nd=monhoc.ma_nd and monhoc.ma_mon_hoc=btvn.ma_mon_hoc and loai_de.ma_ld=btvn.ma_ld and nguoidung.ma_nd='".$gv."'";
}
else if($gv==1 && $mon==1){
	$sql="select * from nguoidung,btvn,monhoc,loai_de where nguoidung.ma_nd=monhoc.ma_nd and monhoc.ma_mon_hoc=btvn.ma_mon_hoc and loai_de.ma_ld=btvn.ma_ld and loai_de.ma_ld='".$ld."'";
}
else if($ld==1){
	$sql="select * from nguoidung,btvn,monhoc,loai_de where nguoidung.ma_nd=monhoc.ma_nd and monhoc.ma_mon_hoc=btvn.ma_mon_hoc and loai_de.ma_ld=btvn.ma_ld and nguoidung.ma_nd='".$gv."' and monhoc.ma_mon_hoc='".$mon."'";
}
else if($gv==1){
	$sql="select * from nguoidung,btvn,monhoc,loai_de where nguoidung.ma_nd=monhoc.ma_nd and monhoc.ma_mon_hoc=btvn.ma_mon_hoc and loai_de.ma_ld=btvn.ma_ld and loai_de.ma_ld='".$ld."' and monhoc.ma_mon_hoc='".$mon."'";
}
else if ($mon==1){
	$sql="select * from nguoidung,btvn,monhoc,loai_de where nguoidung.ma_nd=monhoc.ma_nd and monhoc.ma_mon_hoc=btvn.ma_mon_hoc and loai_de.ma_ld=btvn.ma_ld and loai_de.ma_ld='".$ld."' and nguoidung.ma_nd='".$gv."'";
}
else{
	$sql="select * from nguoidung,btvn,monhoc,loai_de where nguoidung.ma_nd=monhoc.ma_nd and monhoc.ma_mon_hoc=btvn.ma_mon_hoc and loai_de.ma_ld=btvn.ma_ld and loai_de.ma_ld='".$ld."' and nguoidung.ma_nd='".$gv."' and monhoc.ma_mon_hoc='".$mon."'";
}
?>
<table class="table table-hover" id="table">
					    <thead>
					      <tr>
					        <th style="max-width: 40px;">S??? TT</th>
					        <th>T??n B??i</th>
					        <th>M??n h???c</th>
					        <th>Gi???ng vi??n</th>
					        <th>Lo???i ?????</th>
					        <th>Th???i Gian K???t Th??c</th>
					        <th></th>
					      </tr>
					    </thead>
					    <?php 
					    	$stt=1;
					    	date_default_timezone_set("Asia/Ho_Chi_Minh");
					    	$dateNow=date("Y-m-d H:i:s");
					    	$data=laydata($sql);
					    	if($data!=null && count($data)>0){
						    	foreach($data as $monhoc){
									$diff = abs(strtotime($monhoc['thoigian_kt'])-strtotime($dateNow));
									$years = floor($diff / (365*60*60*24));
									$months = floor(($diff - $years * 365*60*60*24) / (30*60*60*24));
									$days = floor(($diff - $years * 365*60*60*24 - $months*30*60*60*24) / (60*60*24));
									$hours = floor(($diff - $years * 365*60*60*24 - $months*30*60*60*24 - $days*60*60*24) / (60*60));
									$minutes = floor(($diff - $years * 365*60*60*24 - $months*30*60*60*24 - $days*60*60*24 - $hours*60*60) / 60);
									$seconds = floor(($diff - $years * 365*60*60*24 - $months*30*60*60*24 - $days*60*60*24 - $hours*60*60 - $minutes*60));
									$ht=0;
									if($days>0){
										$ht="c??n ".$days. " ng??y";
									}
									else if($hours>0){
										$ht="c??n ".$hours. " gi???";
									}
									else if($minutes>0){
										$ht="c??n ".$minutes. " ph??t";
									}
									else if($seconds>0){
										$ht="c??n ".$seconds. " gi??y";
									}
						    ?>
					    <tbody>
						    <tr>
						        <td><?php echo $stt++?></td>
						        <td><?php echo $monhoc['ten_bt']?></td>
						        <td><?php echo $monhoc['ten_mon_hoc']?></td>
						        <td><?php echo $monhoc['ho_ten']?></td>
						        <td><?php echo $monhoc['ten_ld']?></td>
						        <td><?php echo $ht?></td>
						        <td><i class="fas fa-eye" style="color: grey;"></i></td>
						     </tr>
					    </tbody>
						<?php }}?>
					</table>