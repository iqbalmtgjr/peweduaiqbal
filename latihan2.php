<!DOCTYPE html>
<html>
<head>
	<title>Judul Halaman</title>
</head>
<body>
	<h1>Judul Paragraf</h1>
	<?php 
		$angka=3;
		$subjudul="Ini adalah Sub Judul";
		$angkas=$angka*2;
		var_dump($angka);


		$logika=true;
		$logika_dua=false;
		$hasil=$logika&&$logika_dua;

		$hasil=var_dump($logika&&$logika_dua);
		echo $hasil;
		if ($logika&&$logika_dua) {
			echo "Ini bisa jalan";
		} else {
			echo "Ini tidak Jalan";
		}
		

		$hasil=$logika && $logika_dua;
		echo $hasil;
	 ?>
	 <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
	 tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
	 quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
	 consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
	 cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
	 proident, sunt in culpa qui officia deserunt mollit anim id est laborum.Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod </p>

	 <p>
	 <h2><?php echo $subjudul; ?></h2>
	 tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
	 quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
	 consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
	 cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
	 proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
	 
	  <?php echo $enam; ?>
	 <br>
	  <?= $angkas; ?>

	</p>

</body>
</html>