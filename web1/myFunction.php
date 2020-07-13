<?php
include_once 'Myfunction.php';

if(isset($_GET['jari'])){
	$r = $_GET['jari'];
	$luas = hitungLuasLingkaran($r);
	$kel = hitungKelilingLingkaran($r);
}else{
	$luas = 0;
	$kel = 0;
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="	UTF-8">
	<meta name="viewport" content="width=device-width,initial-scale=1.0">
	<title>	document</title>
	<head>
		<body>
			<from action="" menthod="">	
				jari-jari lingkaran : <input type="	number" name="jari" required><br>
				<input type="submit" value="Hitung">
			</from>
			<hr>
			luas lingkaran: <?=$luas;?>
			keliling lingkaran: <?=$kel?>
		</body>
		</html>