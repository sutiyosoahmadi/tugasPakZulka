<?php
//Memasukka nilai ke dalam array
$mobil=array("zulka"=>"Volvo","Ali"=>"BMW","Ajuab"=>"Toyota");

//Key atau kunci pada array diurutkan secara ascending
ksort($mobil);

//Dengan looping menampilkan tiap nilai dari array
foreach ($mobil as $x => = $nilai_x){
	echo "Kunci=" . $x .",Nilainya="  .$nilai_x;
	echo "<br/>";
}
?>