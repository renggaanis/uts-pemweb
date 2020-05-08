<?php 
// penggunaan class database
include 'database.php';
$db = new database();
?>
<h1>Data Pengguna</h1>

<a href="input.php">Input Data</a>
<table border="1">
	<tr>
		<th>No</th>
		<th>Nama</th>
		<th>Alamat</th>
		<th>Opsi</th>
	</tr>
	<?php
	$no = 1;
	foreach($db->tampil_data() as $a){
	?>
	<tr>
		<td><?php echo $no++; ?></td>
		<td><?php echo $a['nama']; ?></td>
		<td><?php echo $a['alamat']; ?></td>
		<td>
			<a href="edit.php?id=<?php echo $a['id']; ?>&aksi=edit">Edit</a>
			<a href="proses.php?id=<?php echo $a['id']; ?>&aksi=hapus">Hapus</a>			
		</td>
	</tr>
	<?php 
	}
	?>
</table>