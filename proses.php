<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<?php //perintah php
	include "inc.php";
	//eksekusi file inc.php
	echo $angka;
	//menampilkan nilai variabel angka
	echo "<br>";
	//menampilkan ganti baris
	if ($angka==100) {
	// memuaskan jika berada di angka 100
		echo "Memuaskan";
	}
	elseif ($angka<100&&$angka>=85) {
	//jika nilai variabel angka lebih dari 85 tampilkan teks sangat baik
		echo "Sangat Baik";
	}
	elseif ($angka<85&&$angka>=70) {
	//jika nilai variabel angka lebih dari 70 tampilkan teks baik
		echo "Baik";
	}
	elseif ($angka<70&&$angka>=55) {
	//jika nilai variabel angka lebih dari 55 tampilkan teks cukup
		echo "Cukup";
	}
	elseif ($angka<55&&$angka>=0) {
	//jika nilai variabel angka lebih dari 0 tampilkan teks kurang
		echo "Kurang";
	}
	?>
</body>
</html>
