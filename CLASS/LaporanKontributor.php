<?php
include 'user.php';

class LaporanKontributor extends User{
		public $pendapatan;


		public function __construct( $pendapatan, $nama_user) {
			$this->pendapatan = $pendapatan;
			$this->nama_user = $nama_user;
		}

		public function __toString() {
			return "Nama Kontributor : " . $this->nama_user . ". <br>Jumlah pendapatan: Rp.". $this->pendapatan ;
		}


	}

	$Laporank1 = new LaporanKontributor("500.000", "Song Ji Hyo");
	
	echo "<br>";
	echo "LAPORAN PENDAPATAN KONTRIBUTOR: ";
	echo "<br>";
	echo $Laporank1;
	