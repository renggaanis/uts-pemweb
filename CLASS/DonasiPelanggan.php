<?php
include 'user.php';

class DonasiPelanggan extends User{
	public $jmldonasi;

	public function __construct( $jmldonasi, $nama_user) {
			$this->jmldonasi = $jmldonasi;
			$this->nama_user = $nama_user;
	}

	public function __toString() {
			return $this->nama_user . " telah melakukan donasi sebesar : Rp." . $this->jmldonasi;
	}
}
	$Donasi1 = new DonasiPelanggan("100.000", "Kim jong kook");

	echo "<br>";
	echo "Laporan Donasi Pelanggan";
	echo "<br>";
	echo $Donasi1;
	echo "<br>";