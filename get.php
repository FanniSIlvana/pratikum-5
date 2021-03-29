<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<form method="GET" action="getAct.php">
		<!-- membuat sebuah form dengan menggunakan method GET-->
		<table width="400" align="center" cellpadding="2" cellspacing="2"> <!--membuat tabel -->
			<tr> <!--membuat baris tabel -->
				<td width="130">Nama </td>  <!--membuat sel tabel -->
				<td><input type="text" name="nama"></td>  <!--membuat input teks -->
			</tr>
			<tr>
				<td width="130">Email</td>  <!-- tabel teks yaitu email -->
				<td><input type="text" name="email"></td> <!--membuat input type teks -->
			</tr>
			<tr>
				<td>
					<input type="submit" name="btnLogin" value="Login"> <!-- membuat type submit -->
					<input type="reset" name="reset" value="Reset">  <!-- membuat type reset-->
				</td>
			</tr>
		</table>
	</form>
</body>
</html>
