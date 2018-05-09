<?php 
	class nilai {
		public $a;
		public $b;
		public $nilai;
	
		public function mencari_nilai($ujian) {
			return $ujian;
		}
	}

		$hasil = new angka();
		$hasil -> a = 2;
		$hasil -> b = 5;
		$hasil -> nilai = $hasil->a + $hasil->b;

		if ($hasil->nilai>=7) {
			echo "Baik";
		}else{
			echo "Buruk";
		}

		echo "<br>";
 ?>