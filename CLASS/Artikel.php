<?php
include 'surah.php';

class Artikel extends Surah{
		public $judul,
				$konten;

		public function getDataArtikel() {
			$str = "{$this->nama_surah}   {$this->ayat} {$this->judul} {$this->konten}";
			return $str;

		// public function __construct( $judul, $konten, $nama_surah, $ayat ) {
		// 	$this->judul = $judul;
		// 	$this->konten = $konten;
		// 	$this->nama_surah = $nama_surah ;
		// 	$this->ayat = $ayat;
		// }

		// public function __toString() {
		// 	return "Judul artikel : " . $this->judul . ". <br> Isi artikel : ". $this->konten. ". <br> referensi Al-Qur'an : surah ". $this->nama_surah. " ayat ke-". $this->ayat ;
		}


	}

	$Artikel1 = new Artikel("Al-Baqarah",  "177" ,"Konsep Iman dalam Al-Qur'an", "berisi mengenai konsep iman dalam Al-Qur'an dengan tujuan pendidikan islam");
	
	echo "<br>";
	echo "ARTIKEL: ";
	echo "<br>";
	echo $Artikel1->getDataArtikel();
	