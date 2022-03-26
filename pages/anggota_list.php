<?php 
	include "../koneksi.php";
	$db = new koneksi();
 ?>
 <h1>CRUD OOP PHP</h1>
 <h2>Tambah Data Anggota</h2>
 <hr>
 <table>
        <tr>
            <td> <a href="anggota_add.php"> <button> + Tambah Data Anggota</button> </a> </td>
        </tr>
    </table>
    <br>
<table border="1">
	<tr>
		<th>No</th>
		<th>NIK</th>
		<th>Nama </th>
		<th>Alamat </th>
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
		<td><?php echo $row['nama']; ?></td>
		<td><?php echo $row['alamat']; ?></td>
        <td><?php echo $row['jk']; ?></td>
		<td><?php echo $row['t_lahir']; ?></td>
		<td><?php echo $row['tgl_lahir']; ?></td>
		<td>
			<a href="anggota_edit.php?nik=<?php echo $row['nik']; ?>&aksi=edit">Edit</a>
			<a href="../proses/anggota_proses.php?nik=<?php echo $row['nik']; ?>&action=delete">Hapus</a>
		</td>
	</tr>
	<?php 
	}
	?>
</table>