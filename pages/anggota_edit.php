<?php 	
include ('../koneksi.php');
$db = new koneksi();
$nik = $_GET['nik'];
if(! is_null($nik))
{
	$data = $db->get_by_id($nik);
}
else
{
	header('location:anggota_list.php');
}
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<h3>Update Data Anggota</h3>
<hr/>
<form method="post" action="../proses/anggota_proses.php?action=update">
<input type="hidden" name="nik" value="<?php echo $nik['nik']; ?>"/>
<table>
	<tr>
		<td>NIK</td>
		<td>:</td>
		<td><input type="text" name="nik" value="<?php echo $data['nik']; ?>"/></td>
	</tr>
	<tr>
		<td>Nama</td>
		<td>:</td>
		<td><input type="text" name="nama" value="<?php echo $data['nama']; ?>"/></td>
	</tr>
	<tr>
		<td>Alamat </td>
		<td>:</td>
		<td><input type="text" name="alamat" value="<?php echo $data['alamat']; ?>"/></td>
	</tr>
	<tr>
		<td>Jenis Kelamin</td>
		<td>:</td>
		<td><input type="text" name="jk" value="<?php echo $data['jk']; ?>"/></td>
	</tr>
    <tr>
		<td>Tempat Lahir</td>
		<td>:</td>
		<td><input type="text" name="t_lahir" value="<?php echo $data['t_lahir']; ?>"/></td>
	</tr>
    <tr>
		<td>Tanggal Lahir</td>
		<td>:</td>
		<td><input type="date" name="tgl_lahir" value="<?php echo $data['tgl_lahir']; ?>"/></td>
	</tr>
	<tr>
		<td></td>
		<td></td>
		<td><input type="submit" name="tombol" value="Update"/></td>
	</tr>
</table>
</form>
</body>
</html>