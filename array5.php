<html>
<head>
	<title>Pemrograman PHP dengan Array</title>
</head>
<body>
	<?php //perintah untuk memanggil php
	//Penulisan array dapat dibuat seperti berikut
	$nama[] = "Fanni"; //membuat variabel $nama
	$nama[] = "Arsyn"; //membuat variabel $nama
	$nama[] = "Silvana"; //membuat variabel $nama
	echo $nama[1] . $nama[2] . $nama[0]; //menampilkan teks nilai variabel nama indeks ke 1, indeks 2 dan indeks 0
	echo "<br>"; //menampilkan ganti baris
	//untuk menghitung jumlah elemen pada array
	$jum_array = count($nama); //membuat variabel jum_array yang menyimpan nilai hitung variabel nama
	echo "jumlah elemen array = " . $jum_array; //menampilkan teks jumlah elemen array
	?>
</body>
</html>
