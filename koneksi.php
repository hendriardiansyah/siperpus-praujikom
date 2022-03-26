<?php 
class koneksi{

	var $host = "localhost";
	var $username = "root";
	var $password = "";
	var $db = "db_siperpus_praujikom";
    var $konek = "";

	function __construct(){
		$this->konek = mysqli_connect($this->host, $this->username, $this->password,$this->db);
		if (mysqli_connect_errno()){
			echo "Koneksi database gagal : " . mysqli_connect_error();
		}
	}

	function tampil_data_anggota()
	{
		$data = mysqli_query($this->konek,"select * from tbl_anggota");
		while($row = mysqli_fetch_array($data)){
			$hasil[] = $row;
		}
		return $hasil;
	}

	function tambah_data_anggota($nik, $nama, $alamat, $jk, $t_lahir, $tgl_lahir)
	{
		mysqli_query($this->konek, "insert into tbl_anggota values('$nik', '$nama', '$alamat', '$jk', '$t_lahir', '$tgl_lahir')");
	}

	function get_by_id($nik)
	{
		$query = mysqli_query($this->konek,"select * from tbl_anggota where nik='$nik'");
		return $query->fetch_array();
	}

	function update_data_anggota($nik,$nama,$alamat,$jk,$t_lahir,$tgl_lahir)
	{
		$query = mysqli_query($this->konek,"update tbl_anggota set nik='$nik', nama='$nama',alamat='$alamat',jk='$jk', t_lahir = '$t_lahir', tgl_lahir = '$tgl_lahir' where nik='$nik'");
	}

}

$konek = new koneksi();

?>