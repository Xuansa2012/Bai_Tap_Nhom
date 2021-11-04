<?php  
require_once('../../data_sv.php');
require_once('../../khungtrang/sesion.php');
$sql= "select * from monhoc,nguoidung,phanloai where nguoidung.ma_pl=phanloai.ma_pl and monhoc.ma_nd=nguoidung.ma_nd and nguoidung.ma_pl='admin'";
$data=laydata($sql);
foreach($data as $mon){
	if(isset($_POST[$mon['ma_mon_hoc']])){
		$ma_mon=($_POST[$mon['ma_mon_hoc']]);
		$sql="update monhoc set ma_nd='".$ma_nd."' where ma_mon_hoc='".$ma_mon."'";	
		xuly($sql);
	}
}
?>
<table class="table table-hover" id="table">
				    <thead>
				      <tr>
				        <th style="max-width: 40px;">Số TT</th>
				        <th>Tên Môn</th>
				        <th><button type="button" onclick="checked()"></button></th>
				      </tr>
				    </thead>
				    <?php
				    	$i=1;
				    	$sql= "select * from monhoc,nguoidung,phanloai where nguoidung.ma_pl=phanloai.ma_pl and monhoc.ma_nd=nguoidung.ma_nd and nguoidung.ma_pl='admin'";
				    	$data=laydata($sql);
				    	foreach($data as $monhoc){
				    ?>
				    <tbody>
				    	<td><?php echo $i++?></td>
						<td><?php echo $monhoc['ten_mon_hoc']?></td>
						<th><input class="form-check-input" type="checkbox" id="check1" name="<?php echo $monhoc['ma_mon_hoc']?>" value="<?php echo $monhoc['ma_mon_hoc']?>"></th>
						<td style="min-width: 60px;"></td>
					</tbody>
					<?php }?>
				</table>