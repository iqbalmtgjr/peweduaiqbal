<?php 
	class perempuan(){
		protected $nama;
		protected function gunakan_baju(){
			return "Menggunakan gaun lebar menutup aurat";
		}

		$perempuan_cantik = new perempuan();
		$perempuan_cantik -> nama = "Tika";
		echo $perempuan_cantik -> nama;
		echo $perempuan_cantik -> gunakan_baju();
	}
 ?>