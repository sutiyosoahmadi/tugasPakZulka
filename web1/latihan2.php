<?php
include_once 'Myfunction.php';

if(isset($_GET['panjang'])){
	$r = $_GET['panjang'];
	$luas = hitungLuasPersegipanjang($r);
	$kel = hitungKelpersegipanjang($r);
}else{
	$luas = 0;
	$kel = 0;
}
if(isset($_GET['panjang'])){
	$r = $_GET['panjang'];
	$luas = luaspersegi($r);
	$kel = kelpersegi($r);
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
				Persegi panjang : <input type="	number" name="jari" required><br>
				<input type="submit" value="Hitung">
			</from>
			<hr>
			luas persegi: <?=$luas;?>
			kelpersegi panjang: <?=$kel?>
		</body>
		</html>