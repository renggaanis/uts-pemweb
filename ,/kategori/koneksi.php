<?php 
class database{

	var $host = "localhost";
	var $username = "root";
	var $password = "";
	var $database = "quranpedia";
	var $koneksi = "";
	function __construct(){
		$this->koneksi = mysqli_connect($this->host, $this->username, $this->password,$this->database);
		if (mysqli_connect_errno()){
			echo "Koneksi database gagal : " . mysqli_connect_error();
		}
	}

	function tampil_data()
	{
		$data = mysqli_query($this->koneksi,"select * from category");
		while($row = mysqli_fetch_array($data)){
			$hasil[] = $row;
		}
		return $hasil;
	}

	function tambah_data($id,$nama_category)
	{
		mysqli_query($this->koneksi,"insert into tb_barang values ('','$id','$nama_category')");
	}
}
?>
