<?php 
require_once('../../data_sv.php');
require_once('../../khungtrang/sesion.php');
$mon=$_GET['mon'];
$sql="";
if($mon==1){
	$sql="select * from nguoidung,btvn,monhoc,loai_de where nguoidung.ma_nd=monhoc.ma_nd and monhoc.ma_mon_hoc=btvn.ma_mon_hoc and loai_de.ma_ld=btvn.ma_ld";
}
else{
	$sql="select * from nguoidung,btvn,monhoc,loai_de where nguoidung.ma_nd=monhoc.ma_nd and monhoc.ma_mon_hoc=btvn.ma_mon_hoc and loai_de.ma_ld=btvn.ma_ld and monhoc.ma_mon_hoc='".$mon."'";
}
?>
<table class="table table-hover" id="table">
					    <thead>
					      <tr>
					        <th style="max-width: 40px;">Số TT</th>
					        <th>Tên Bài</th>
					        <th>Môn học</th>
					        <th>Giảng viên</th>
					        <th>Loại đề</th>
					        <th>Thời Gian Kết Thúc</th>
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
										$ht="còn ".$days. " ngày";
									}
									else if($hours>0){
										$ht="còn ".$hours. " giờ";
									}
									else if($minutes>0){
										$ht="còn ".$minutes. " phút";
									}
									else if($seconds>0){
										$ht="còn ".$seconds. " giây";
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