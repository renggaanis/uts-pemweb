<?php 

interface InfoUser {
    public function getInfoUser();
}

Abstract class User {
    protected $namalengkap, 
           $email,
           $alamat,
           $username;

    public function __construct( $namalengkap = "namalengkap", $email = "email", $alamat = "alamat", $username = "username" ) {
        $this->namalengkap = $namalengkap;
        $this->email = $email;
        $this->alamat = $alamat;
        $this->username = $username;
    }

    public function setnamalengkap( $namalengkap ) {
        $this->namalengkap = $namalengkap;
    }

    public function getnamalengkap() {
        return $this->namalengkap;
    }

    public function setemail( $email ) {
        $this->email = $email;
    }

    public function getemail() {
        return $this->email;
    }

    public function setalamat( $alamat ) {
        $this->alamat = $alamat;
    }

    public function getalamat() {
        return $this->alamat;
    }

    public function setusername( $username ) {
        $this->username = $username;
    }

    public function getusername() {
        return $this->username;
    }
    
    public function getLabel() {
        return "$this->namalengkap, $this->email, $this->alamat, $this->username";
    }

    abstract public function getInfo();

}


class Kontributor extends User implements InfoUser {
    public $jmlPost;

    public function __construct( $namalengkap = "namalengkap", $email = "email", $alamat = "alamat", $username = "username", $jmlPost = 0) {

        parent::__construct( $namalengkap, $email, $alamat, $username );

        $this->jmlPost = $jmlPost;
    }

    public function getInfo() {
        $str = "{$this->getLabel()}";

        return $str;
    }

    public function getInfoUser() {
        $str = "Kontributor : " . $this->getInfo() . " - {$this->jmlPost} Artikel.";
        return $str;
    }
}


class Pelanggan extends User implements InfoUser {
    public $jmlDonasi;

    public function __construct( $namalengkap = "namalengkap", $email = "email", $alamat = "alamat", $username = "username", $jmlDonasi = 0 ) {
        parent::__construct( $namalengkap, $email, $alamat, $username );

        $this->jmlDonasi = $jmlDonasi;
    }

    public function getInfo() {
        $str = "{$this->getLabel()}";

        return $str;
    }

    public function getInfoUser() {
        $str = "Pelanggan : " . $this->getInfo() . " - Rp.{$this->jmlDonasi}.";
        return $str;
    }
}


class CetakInfoUser {
    public $daftarUser = array();

    public function tambahUser( User $User ) {
        $this->daftarUser[] = $User;
    }

    public function cetak() {
        $str = "DAFTAR USER : <br>";

        foreach( $this->daftarUser as $p ) {
            $str .= "- {$p->getInfoUser()} <br>";
        }

        return $str;
    }
}


$User1 = new Kontributor("Song Ji Hyo", "Song@gmail.com", "Surabaya", "Song123", 10);
$User2 = new Pelanggan("Kim Jong Kook", "Kimjk@gmail.com", "Madiun", "Kim01", 100000);

$cetakUser = new CetakInfoUser();
$cetakUser->tambahUser( $User1 );
$cetakUser->tambahUser( $User2 );
echo $cetakUser->cetak();