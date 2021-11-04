<?php 
require_once('../data_sv.php');
$nd=$_GET['nd'];
$sql="";
if($nd==1){
	
	$sql= "select * from nguoidung,phanloai where nguoidung.ma_pl=phanloai.ma_pl and nguoidung.ma_pl!='admin'";
}
else{
	$sql="select * from nguoidung,phanloai where nguoidung.ma_pl=phanloai.ma_pl and nguoidung.ma_pl!='admin' and nguoidung.ma_pl='".$nd."'";
}
?>
<table class="table table-hover" id="table">
    <thead>
      <tr>
        <th style="max-width: 40px;">Số TT</th>
        <th>Tên người dùng</th>
        <th>Loai người dùng</th>
        <th>Email</th>
        <th>năm sinh</th>
        <th></th>
      </tr>
    </thead>
    <?php
    	$i=1;
    	$data=laydata($sql);
    	foreach($data as $nguoidung){
    ?>
    <tbody>
		<td><?php echo $i++?></td>
		<td><?php echo $nguoidung['ho_ten']?></td>
		<td><?php echo $nguoidung['ten_pl']?></td>
		<td><?php echo $nguoidung['email']?></td>
		<td><?php echo $nguoidung['ngay_sinh']?></td>
		<td></td>
	</tbody>
	<?php }?>
</table>