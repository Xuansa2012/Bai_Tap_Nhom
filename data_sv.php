<?php 
	const host ="localhost";
	const user ="root";
	const pass ="";
	const data ="qlsv";
	function xuly($sql){
		$conn=new mysqli(host,user,pass,data);
		mysqli_set_charset($conn,"utf8");
		mysqli_query($conn,$sql);
		mysqli_close($conn);
	}
	function laydata($sql){
		$conn=new mysqli(host,user,pass,data);
		mysqli_set_charset($conn,"utf8");
		$result=mysqli_query($conn,$sql);
		$data=[];
		while ($row=mysqli_fetch_array($result)) {
			$data[]=$row;
		}
		mysqli_close($conn);
		return $data;
	}

?>