<!-- file ini digunakan untuk memproses inputan form -->
<?php 
include('koneksi.php');
// include file koneksi.php dimana didalamnya berisi class database
$koneksi = new database();
 // object $koneksi dengan class database
$action = $_GET['action'];
// variabel $action untuk menyimpan nilai dari variabel action dengan method GET
if($action == "add")
	// pengecekan dari nilai $action yang berisi nilai dari variabel action dengan method GET, jika nilai dari $action adalah add maka akan memproses pada line 12 – 13
{
	$koneksi->tambah_data($_POST['nama_category']);
	header('location:tampil_data.php');
}
?>