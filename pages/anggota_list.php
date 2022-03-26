<?php 
	include "koneksi.php";
	$db = new koneksi();
 ?>
 <h1>CRUD OOP PHP</h1>
 <h3>Tambah Data Bayar</h3>

 <a href="input_bayar.php">Input Data</a>
<table border="1">
	<tr>
		<th>No</th>
		<th>NIK</th>
		<th>Nama Anggota</th>
		<th>Alamat</th>
        <th>Jenis Kelamin</th>
        <th>Tempat Lahir</th>
        <th>Tanggal Lahir</th>
		<th>Opsi</th>
	</tr>
	<?php
	$no = 1;
	foreach($db->tampil_data_anggota() as $row){
	?>
	<tr>
		<td><?php echo $no++; ?></td>
		<td><?php echo $row['nik']; ?></td>
		<td><?php echo $row['nm_bank_pengirim']; ?></td>
		<td><?php echo $row['nm_pengirim']; ?></td>
        <td><?php echo $row['norek_pengirim']; ?></td>
		<td><?php echo $row['file']; ?></td>
		<td><?php echo $row['tanggal_upload']; ?></td>
		<td>
			<a href="edit_anggota.php?nik=<?php echo $row['nik']; ?>&aksi=edit">Edit</a>
			<a href="proses_anggota.php?nik=<?php echo $row['nik']; ?>&action=delete">Hapus</a>
		</td>
	</tr>
	<?php 
	}
	?>
</table>