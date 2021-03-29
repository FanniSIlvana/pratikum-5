<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<form method="POST" action="isibiodata.php"> <!-- membuat form dengan method POST -->
		<h2> Masukan Biodata Anda: </h2>
		<table width="700"  cellpadding="2" cellspacing="2">  <!-- untuk membuat tabel -->
			<tr> <!-- untuk membuat baris pada tabel -->
				<td width="120">Nama </td> <!--membuat sel tabel -->
				<td><input type="text" name="nama"></td>
			</tr>
			<tr>
				<td width="120">Email</td><!--membuat sel tabel -->
				<td><input type="text" name="email"></td> <!--membuat input type teks -->
			</tr>
			<tr><!--membuat baris pada tabel -->
				<td width="130">Tempat dan Tanggal Lahir</td><!--membuat sel tabel -->
				<td><input type="text" name="ttl"></td>
			</tr>
			<tr>
				<td width="130">Pendidikan</td> <!--membuat sel tabel dengan teks pendidikan -->
				<td><input type="text" name="pendidikan"></td> <!--membuat input type teks -->
			</tr>
			<tr>
				<td width="130">Alamat</td> <!--membuat sel tabel teks alamat -->
				<td><input type="text" name="alamat"></td> <!--membuat input type teks -->
			</tr>
			<tr><!--membuat baris pada tabel -->
				<td width="130">Hobi</td><!--membuat sel tabel dengan teks hobi -->
				<td><input type="text" name="hobi"></td><!--membuat input type teks -->
			</tr>
			<tr>
				<td>
					<input type="submit" name="btnLogin" value="Kirim"> <!-- membuat input type submit-->
					<input type="reset" name="reset" value="Reset"> <!-- membuat input type reset-->
				</td>
			</tr>
		</table>
	</form>
</body>
</html>
