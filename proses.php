<!DOCTYPE html>
<html>
<head>
	<title>Proses Registrasi</title>
</head>
<body>

<h1>Selamat Anda Terdaftar</h1>
<h3>Dengan Identitas :</h3>

<table>
	<tr>
		<td>Nama</td>
		<td>:</td>
		<td>
			<?php echo $_POST['nama'] ?>
		</td>
	</tr>
	<tr>
		<td>Username</td>
		<td>:</td>
		<td>
			<?php echo $_POST['username'] ?>
		</td>
	</tr>
	<tr>
		<td>No HP</td>
		<td>:</td>
		<td>
			<?php echo $_POST['no_hp'] ?>
		</td>
	</tr>
	<tr>
		<td>Alamat</td>
		<td>:</td>
		<td>
			<?php echo $_POST['alamat'] ?>
		</td>
	</tr>
</table>

</body>
</html>