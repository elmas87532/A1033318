<?php
include 'config.php';

if (isset($_POST['city'])) {

	$city=$_POST['city'];
	$cid=0;
	if ($city == "Taipei") {
		$cid=1;
	}elseif ($city == "Kaohsiung") {
		$cid=2;
	}elseif ($city == "Tainan"){
		$cid=3;
	}
	$query="SELECT * FROM area WHERE city_no=$cid";
	$result=mysqli_query($conni,$query);

	while ($row=mysqli_fetch_row($result)) { 
		echo "<option value='$row[0]'>$row[2]</option>";
	}
	exit();
}
?>