<!DOCTYPE html>
<html>
<head>
	<title>Registrasi</title>
</head>
<body bgcolor="pink";>
<?php
	$kabupaten=[
					[
						"id"=>1,
						"nama_kab"=>"Kota Pontianak"
					],
					[
						"id"=>2,
						"nama_kab"=>"Sekadau"
					],
					[
						"id"=>3,
						"nama_kab"=>"Sintang"
					]
				];

?>



	<h2 align="center";>FORMULIR REGISTRASI</h2>
		<table align="center";>
			<form method="POST" action="proses.php">
				<tr>
					<td>Nama Lengkap</td>
					<td>:</td>
					<td>
					<input type="text" name="nama">
				</tr>

				<tr>
					<td>Nama User</td>
					<td>:</td>
					<td>
					<input type="text" name="username">
				</tr>

				<tr>
					<td>Password</td>
					<td>:</td>
					<td>
					<input type="password" name="password">
				</tr>

				<tr>
					<td for="no_hp">No Hp</td>
					<td>:</td>
					<td>
					<input type="number" name="no_hp">
				</tr>

				<tr>
					<td>Alamat</td>
					<td>:</td>
					<td>
					<textarea name="alamat"></textarea>
				</tr>

				<tr>
					<td for="kabupaten">Kabupaten</td>
					<td>:</td>
					<td>
					<select name="kabupaten">
						<?php foreach ($kabupaten as $kab):?>
						<option value="<?php echo $kab['id'] ?>">
							<?php echo $kab['nama_kab'];?> 
						</option>
							<?php endforeach ?>
					</select>
				</tr>

				<tr>
					<td for="jenkel">Jenis kelamin</td>
					<td>:</td>
					<td>
					<input type="radio"	name="jenis kelamin" value="1">Pria
					<input type="radio"	name="jenis kelamin" value="0">Wanita
					<input type="radio"	name="jenis kelamin" value="2">Tak Dikenal
				</tr>

				<tr>
					<td>Prodi pilihan</td>
					<td>:</td>
					<td>
					<input type="checkbox"	name="Prodi pilihan">Sistem Informasi<br>
					<input type="checkbox"	name="Prodi pilihan">Sistem Komputer<br>
					<input type="checkbox"	name="Prodi pilihan">Teknik Informatika
				</tr>

				<td>
					<input type="submit"	name="submit"	value="Simpan">
					<input type="reset"	name="reset"	value="Reset">
				</td>

			</form>
		</table>

</body>
</html>