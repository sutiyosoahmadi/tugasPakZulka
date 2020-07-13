<?php  
$total_harga = $_POST['total_harga'];
$uang_bayar = $_POST['uang_bayar'];


if ($total_harga>$uang_bayar){
	echo "<script>alert('Maaf uang Anda kurang')</script>";
	echo "<script>window.history.back()</script>";
}elseif($total_harga<$uang_bayar){
	$uangKembali = number_format($uang_bayar-$total_harga,0,",",".");
	echo "<script>alert('Terimakasih, Uang kembalian anda sebesar Rp.$uangKembali');</script>";
	echo "<script>window.location.assign('penjualan2.php')</script>";
}else{
	echo "<script>alert('Uang Anda Pas!Terimakasih telah berbelanja!');</script>";
	echo "<sript>window.location.assign('penjualan2.php')</script>";

}
?>