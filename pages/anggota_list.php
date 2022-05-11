<?php 
	include "../koneksi.php";
	$db = new koneksi();
	$conn = $db->konek;
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
	$halaman = 10;
	$page = isset($_GET['halaman']) ? (int)$_GET["halaman"]:1;
	$mulai = ($page>1) ? ($page * $halaman) - $halaman : 0;
	$result = mysqli_query($conn, "select * from tbl_anggota");
	$total = mysqli_num_rows($result);
	$pages = ceil($total/$halaman);
	$query = mysqli_query($conn, "select * from tbl_anggota LIMIT $mulai, $halaman")or die(mysqli_error);
  	$no =$mulai+1;

	// $no = 1;
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
<?php for ($i=1; $i<=$pages ; $i++){ ?>
  <a href="?halaman=<?php echo $i; ?>"><?php echo $i; ?></a>
 
  <?php } ?>