<?php
class User {
		public $nama_user,
				$email,
			   $alamat,
			   $peran;


		public function __construct( $nama_user, $email, $alamat, $peran ) {
			$this->nama_user = $nama_user;
			$this->email = $email;
			$this->alamat = $alamat;
			$this->peran = $peran;
		}

		// mencetak data transaksi
		public function __toString() {
			return $this->nama_user . ". <br> Email: " . $this->email . ". <br> tempat tinggal : " .$this->alamat. ". <br> Sebagai: " .$this->peran;
		}


	}

	// isinya informasi tentang iklan
	$User1 = new User("Kim jong kook", "kim@quranpedia.com", "seoul, Korea" , "pelanggan");
	$User2 = new User("Song Ji Hyo", "song@quranpedia.com", "surabaya, Indonesia" , "kontributor");

	echo "Daftar User";
	echo "<br>";
	echo "User 1 : " . $User1;
	echo "<br><br>";
	echo "User 2 : " . $User2;
	echo "<br>";
	
// class DonasiPelanggan extends User{
// 	public $jmldonasi;

// 	public function __construct( $jmldonasi, $nama_user) {
// 			$this->jmldonasi = $jmldonasi;
// 			$this->nama_user = $nama_user;
// 	}

// 	public function __toString() {
// 			return $this->nama_user . " telah melakukan donasi sebesar : Rp." . $this->jmldonasi;
// 	}
// }
// 	$Donasi1 = new DonasiPelanggan("100.000", "Kim jong kook");

// 	echo "<br>";
// 	echo "Laporan Donasi Pelanggan";
// 	echo "<br>";
// 	echo $Donasi1;
// 	echo "<br>";
