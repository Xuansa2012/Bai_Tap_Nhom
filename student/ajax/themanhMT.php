<?php 
$img=$_GET['img'];
$mangIMG="";
if(isset($_COOKIE['mangIMG'])){
	$list_img=explode("*", $_COOKIE['mangIMG']);
	$list_img[]=$img;
	for($i=0;$i<count($list_img);$i++)
	{
		echo'
			<div class="khunganhMT" style="position:absolute;">
				<div class="imgMT">
					<img src="images'.$list_img[$i].'">
				</div>
			</div>
		';
		if($mangIMG==""){
			$mangIMG=$list_img[$i];
		}
		else{
			$mangIMG=$mangIMG.'*'.$list_img[$i];
		}
		setcookie('mangIMG',$mangIMG,time()+24*60*60,"/");
	}
}
else{
	echo '<div class="row" id="pateImg">
		<div class="khunganhMT" style="position:absolute;">
			<div class="imgMT">
				<img src="images'.$img.'">
			</div>
		</div></div>
	';
	setcookie('mangIMG',$img,time()+24*60*60,"/");
}

