<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>add buku</h1>
    <hr/>
<form method="post" action="../proses/buku_proses.php?action=add" enctype="multipart/form-data">
<table>
	<tr>
		<td>ISBN</td>
		<td>:</td>
		<td><input type="text" name="isbn"/></td>
	</tr>
	<tr>
		<td>Judul Buku</td>
		<td>:</td>
		<td><input type="text" name="judul_buku"/></td>
	</tr>
	<tr>
		<td>Penulis</td>
		<td>:</td>
		<td><input type="text" name="penulis"/></td>
	</tr>
	<tr>
		<td>Tahun Terbit</td>
		<td>:</td>
		<td><input type="text" name="tahun_terbit"/></td>
	</tr>
    <tr>
		<td>cover</td>
		<td>:</td>
		<td><input type="file" name="cover_buku"/></td>
	</tr>
	<tr>
		<td></td>
		<td></td>
		<td><input type="submit" name="" value="Simpan"/></td>
	</tr>
	<tr>
		<td></td>
		<td></td>
		<td><a href="buku_list.php">Kembali</a></td>
	</tr>
</table>
</form>
</body>
</html>