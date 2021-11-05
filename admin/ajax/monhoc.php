<?php 
require_once('../../data_sv.php');
require_once('../../khungtrang/sesion.php');
$mon=$_GET['mon'];
$sql="";
if($mon==1){
	$sql= "select * from nguoidung,monhoc where nguoidung.ma_nd=monhoc.ma_nd";
}
else{
	$sql= "select * from nguoidung,monhoc where nguoidung.ma_nd=monhoc.ma_nd and monhoc.ma_nd='".$mon."'";
}
?>
<table class="table table-hover" id="table">
				    <thead>
				      <tr>
				        <th style="max-width: 40px;">Số TT</th>
				        <th>Tên Môn</th>
				        <th>Giáo viên</th>
				        <th>Sĩ Số</th>
				        <th style="max-width: 40px;"></th>
				      </tr>
				    </thead>
				    <?php
				    	$i=1;
				    	$data=laydata($sql);
				    	foreach($data as $mon){
				    ?>
				    <tbody>
						<td style="min-width: 60px;"><?php echo $i++?></td>
						<td><?php echo $mon['ten_mon_hoc']?></td>
						<td><?php echo $mon['ho_ten']?></td>
						<td><?php echo$mon['siso']?></td>
						<td><a href=""><i class="fas fa-eye"></i></a></td>
					</tbody>
					<?php }?>
				</table>