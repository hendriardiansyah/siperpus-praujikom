<?php 
	include "../buku.php";
	$db = new buku();
 ?>
 <!DOCTYPE html>
 <html lang="en">
 <head>
     <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <style>
        /* a:link, a:visited{
            background-color:#24a0ed;
            color:white;
            padding:15px 20px;
            text-align:center;
            text-decoration:none;
            display:inline-block;
            font-family:Sans-serif;
        }
        a:hover, a:active{
            background-color:blue;
        } */
    </style>
     <title>Document</title>
 </head>
 <body>
 <h2>Tambah Data Buku</h2>
 <hr>
 <table>
        <tr>
            <td> <a href="buku_add.php"> Tambah Buku </a> </td>
            <!-- <td><button onclick="document.location='buku_add.php'">+ Tambah Data Anggota</button></td> -->
        </tr>
    </table>
    <br>
<table border="1">
	<tr>
		<th>No</th>
		<th>ISBN</th>
		<th>Judul Buku </th>
		<th>Penulis </th>
        <th>Tahun Terbit</th>
        <th>Cover Buku</th>
		<th>Opsi</th>
	</tr>
	<?php
	$no = 1;
	foreach($db->tampil_data_buku() as $row){
	?>
	<tr>
		<td><?php echo $no++; ?></td>
		<td><?php echo $row['isbn']; ?></td>
		<td><?php echo $row['judul_buku']; ?></td>
		<td><?php echo $row['penulis']; ?></td>
        <td><?php echo $row['tahun_terbit']; ?></td>
		<td><img src="../uploads/images/<?php echo $row['cover_buku'];?>" width="35" height="40"></td>
		<td>
			<a href="buku_edit.php?isbn=<?php echo $row['isbn']; ?>&aksi=edit">Edit</a>
			<a href="../proses/buku_proses.php?isbn=<?php echo $row['isbn']; ?>&action=delete">Hapus</a>
		</td>
	</tr>
	<?php 
	}
	?>
</table>
 </body>
 </html>