<?php
class Event {
		public $nama_event,
				$tanggal,
			   $pukul,
			   $lokasi;


		public function __construct( $nama_event, $tanggal, $pukul, $lokasi ) {
			$this->nama_event = $nama_event;
			$this->tanggal = $tanggal;
			$this->pukul = $pukul;
			$this->lokasi = $lokasi;
		}

		public function __toString() {
			return $this->nama_event . ". <br> Dilaksanakan pada tanggal : ". $this->tanggal. ". <br> Pukul : ". $this->pukul . " WIB. <br> Berlokasi di ". $this->lokasi;
		}


	}

	$Event1 = new Event("LIVE youtube, Bedah Al-Qur'an ", "9 Mei", "20.00", "dirumah masing-masing");
	

	echo "EVENT YANG AKAN DISELENGGARAKAN : ";
	echo "<br>";
	echo $Event1;
	