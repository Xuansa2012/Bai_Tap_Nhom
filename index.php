<?php
	require_once('data_sv.php');
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/css/bootstrap.min.css" rel="stylesheet">
  	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script> 
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
	<script type="text/javascript">
		function suamau() {
			var header=document.getElementById('body');
			var tab=document.getElementById('table');
			if(header.style.backgroundColor=="white"){
				header.style.backgroundColor="silver";
				tab.style.color="red";
			}
			else{
				header.style.backgroundColor="white";
				tab.style.color="olive";
			}
		}
	</script>
	
</head>
<body >
	<button type="button" onclick="suamau()">đổi background</button>
<div class="container mt-3" style="background-color:white ; color: black;width: 100%;" id="body">          
  <table class="table table-hover" id="table">
    <thead>
      <tr>
        <th style="width: 40px;">STT</th>
        <th>Tên Chủ đề</th>
        <th>Môn Học</th>
        <th>Loại đề</th>
        <th>Trạng Thái</th>
        <th style="width: 40px;"></th>
      </tr>
    </thead>
    <tbody>
    	<?php
    		$sql="select * from btvn,monhoc,loai_de where btvn.ma_mon_hoc=monhoc.ma_mon_hoc and loai_de.ma_ld=btvn.ma_ld";
    		$data=laydata($sql);
    		$i=1;
    		if($data!=null && count($data)>0){
    			foreach ($data as $row) {
					echo '
						<td>'.$i++.'</td>
						<td>'.$row['ten_bt'].'</td>
						<td>'.$row['ten_bt'].'</td>
						<td>'.$row['ten_bt'].'</td>
						<td>'.$row['ten_bt'].'</td>
						<td><i class="fas fa-eye"></i></td>
					';
    			}
    		}?>
    </tbody>
  </table>
</div>
</body>
</html>
