<!-- <?php

function perkenalan(){
	echo "Hallo perkenalkan nama saya budi <br>";
	echo "senang berkenalan dengan anda<br>";
	echo "<hr>";
}
// function dengan parameter

// function perkenalan kedua ($nama,$salam){
	echo "$salam balik	$nama <br>";
	echo "oke<br>";
	echo "sampai berjumpa kembali<br>";
	echo "<hr>";
}

// perkenalan();
perkenalankedua("soni", "selamat pagi");
perkenalankedua("nita", "assalamualaikum");
perkenalankedua("sinta","salamsukses");
?>  -->


<!-- <?php
// function hitungumur($tahunlahir,$tahunsekarang){
	$umur =$tahunsekarang - $tahunlahir;
	return $umur;
}

// function hitungluasSegitiga($alas,$tinggi){
	$luas=$alas * tinggi /2 ;
	return $luas;
}
// function hitungkelilingsegitiga($a,$b,$c){
	$kel=$a + $b + $c;
	return $kel;
}

$thnsekarang = date('Y');

echo "Umur saya adalah".Hitungumur(2000,$tahunsekarang)."<br>";
echo "Luas segitiga dengan alas sebesar 3cm dan tinggi 4cm adalah :".hitungluasSegitiga (3,4);
?> -->


<?php
function hitungluaslingkaran($r){
	$luas = 3.14 *$r *$r;
	return $luas;
}
function hitungkelilinglingkaran($r){
	$kel = 3.14 *2 *$r;
	return $kel;
}