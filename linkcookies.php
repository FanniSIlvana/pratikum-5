<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<?php //perintah untuk php
	setcookie("variable_cookies", "ini adalah variable cookies", time()+60);
	//menerapkan fungsi cookies rentang waktu 60 detik
	echo "<a href=cekcookies.php> Cek Cookies </a>";
 //menampilkan link cekcookies.php
	?>

</body>
</html>
