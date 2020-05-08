<!-- contoh penggunaan implementasi koneksi.php(class database) -->
<?php 	
include('koneksi.php');
$db = new database();
$data_category = $db->tampil_data();
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<table border="1">
		<tr>
			<th>No</th>
			<th>Nama Kategori</th>
		</tr>
		<?php 
		$no = 1;
		foreach($data_category as $row){
			?>
			<tr>
				<td><?php echo $no++; ?></td>
				<td><?php echo $row['nama_category']; ?></td>
				<td>
					<a href="edit.php?id=<?php echo $row['id_category']; ?>">Update</a>
					<a href="hapus.php?id=<?php echo $row['id_category']; ?>">Delete</a>
				</td>
			</tr>
			<?php 
		}
		?>
	</table>
</body>
</html>