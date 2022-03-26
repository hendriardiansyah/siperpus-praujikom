<html>
<head>
	<title>FORM TAMBAH ANGGOTA</title>
</head>
<body>
<h2>Tambah Data Bayar</h2>
<hr/>
<form method="post" action="../proses/anggota_proses.php?action=add">
<table>
	<tr>
		<td>NIK</td>
		<td>:</td>
		<td><input type="text" name="nik"/></td>
	</tr>
	<tr>
		<td>Nama</td>
		<td>:</td>
		<td><input type="text" name="nama"/></td>
	</tr>
	<tr>
		<td>Alamat</td>
		<td>:</td>
		<td><input type="text" name="alamat"/></td>
	</tr>
	<tr>
		<td>Jenis Kelamin</td>
		<td>:</td>
		<td><input type="text" name="jk"/></td>
	</tr>
    <tr>
		<td>Tempat Lahir</td>
		<td>:</td>
		<td><input type="text" name="t_lahir"/></td>
	</tr>
    <tr>
		<td>Tanggal Lahir</td>
		<td>:</td>
		<td><input type="date" name="tgl_lahir"/></td>
	</tr>
	<tr>
		<td></td>
		<td></td>
		<td><input type="submit" name="tombol" value="Simpan"/></td>
	</tr>
</table>
</form>
</body>
</html>