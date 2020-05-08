<?php
include 'surah.php';

class Bab extends Surah {
	public $nama_bab,
			$no_bab;

	public function __construct( $nama_surah, $ayat, $nama_bab, $no_bab ) {

			$this->nama_surah = $nama_surah;
			$this->ayat = $ayat;
			$this->nama_bab = $nama_bab;
			$this->no_bab = $no_bab;
	}

	public function __toString() {
			return "Bab ". $this->no_bab . " : " . $this->nama_bab . ", referensi surah : " . $this->nama_surah . " , ayat ke : " . $this->ayat;
	}
}

	$bab1 = new Bab("Al-Baqarah", "112-213" , "Rukun Islam", "1");
	$bab2 = new Bab("Al-Baqarah", "177, 186, 256, 285" , "Iman", "2");
	echo "<br>";
	echo "PEMETAAN BAB: ";
	echo "<br>";
	echo $bab1 ;
	echo "<br>";
	echo $bab2;
	echo "<br>";