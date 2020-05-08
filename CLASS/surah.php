<?php
class Surah {
		public $nama_surah,
				$ayat,
				$arti,
				$tempat_turun,
			   $jmlayat;


		public function __construct( $nama_surah, $jmlayat, $arti, $tempat_turun, $ayat ) {
			$this->nama_surah = $nama_surah;
			$this->jmlayat = $jmlayat;
			$this->arti = $arti;
			$this->tempat_turun = $tempat_turun;
			$this->ayat = $ayat;
		}

		public function __toString() {
			return "Nama Surah: " .$this->nama_surah . ". <br> Jumlah Ayat :" . $this->jmlayat . " ayat. <br> Arti : " .$this->arti . "<br>Tempat diturunkannya surah : " .$this->tempat_turun;
		}


	}

	$DaftarSurah1 = new Surah("Al-Fatihah", "7" , "Pembukaan", "Mekkah", "");
	$DaftarSurah2 = new Surah("Al-Baqarah", "286", "Sapi Betina" , "Madinah", "" );

	echo "DAFTAR SURAH :";
	echo "<br>";
	echo "1. " . $DaftarSurah1;
		echo "<br><br>";
	echo "2. " . $DaftarSurah2;
	echo "<br>";
	

// class Bab extends Surah {
// 	public $nama_bab,
// 			$no_bab;

// 	public function __construct( $nama_surah, $ayat, $nama_bab, $no_bab ) {

// 			$this->nama_surah = $nama_surah;
// 			$this->ayat = $ayat;
// 			$this->nama_bab = $nama_bab;
// 			$this->no_bab = $no_bab;
// 	}

// 	public function __toString() {
// 			return "Bab ". $this->no_bab . " : " . $this->nama_bab . ", referensi surah : " . $this->nama_surah . " , ayat ke : " . $this->ayat;
// 	}
// }
// 	$bab1 = new Bab("Al-Baqarah", "112-213" , "Rukun Islam", "1");
// 	$bab2 = new Bab("Al-Baqarah", "177, 186, 256, 285" , "Iman", "2");
// 	echo "<br>";
// 	echo $bab1 ;
// 	echo "<br>";
// 	echo $bab2;
// 	echo "<br>";

	

?>