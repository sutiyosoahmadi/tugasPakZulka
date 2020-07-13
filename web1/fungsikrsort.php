<?php
//KMemasukkan nilai ke dalam array

$mobil=array("Zulka"=>"Volvo","Ali"=>"BMW","Ajuab"=>"Toyota");

//Nilai pada array diurutkan secara descending
arsort($mobil);

//dengan looping menampilkan tiap nilai dari array
foreach ($mobil as $x => $nilai_x){
	echo "Kunci="; .$x .", nilainya=" . $nilai_x;
	echo "<br/>";
	# code...
}
?>