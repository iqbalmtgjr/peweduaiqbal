<!DOCTYPE html>
<html>
<head>
	<title>Latihan tabel</title>
</head>
<body>
	<h1>Ini latihan tabel</h1>
	<table border="1" ; cellpadding="2" ; cellspacing="0";>
		<tr>
			<td>id</td>
			<td>nama prodi</td>
			<td>kuota</td>
			<td>kaprodi</td>
		</tr>

<?php
	for ($i=1; $i <=100; $i++) :
		//$a = $i*3;


?>

		<tr>
			<td><?php echo $i?></td>
			<td>sisfo</td>
			<td><?php echo $i*3?></td>
		<?php if ($i%2) : ?>
			<td>ilhamsyah</td>
		<?php else : ?>
			<td>renny</td>
		<?php endif ; ?>

				</tr>


		

<?php
	endfor;
?>
</table>
</body>
</html>



