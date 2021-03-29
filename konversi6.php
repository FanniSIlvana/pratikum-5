<html>
<head>
	<title>Konversi Tipe</title>
</head>
<body>
<?php //perintah php
$a = 300.4;
//variabel a dengan nilai 300.4
echo $a;
//menampilkan nilai variabel a
echo "<br>"; 
//ganti baris
echo "tipe Double :", doubleval($a), "<br>";
//menampilkan teks tipe double: doubleval ($a) dan akan mengkonversi tipe variabel a menjadi double
echo "tipe Integer :", intval($a), "<br>";
//menampilkan teks tipe integer: intval ($a) dan akan mengkonversi tipe variabel a menjadi integer
echo "tipe string :", strval($a);
//menampilkan teks tipe string: strval ($a) dan akan mengkonversi tipe variabel a menjadi string
?>

</body>
</html>
