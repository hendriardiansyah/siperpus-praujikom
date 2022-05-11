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

	//Anggota
	public function tampil_data_anggota()
	{
		$batas = 10;
		$halaman = isset($_GET['halaman'])?(int)$_GET['halaman'] : 1;
		$halaman_awal = ($halaman > 1) ? ($halaman * $batas) - $batas : 0;

		$previous = $halaman - 1;
		$next = $halaman + 1;

		$dt = mysqli_query($this->konek, "select * from tbl_anggota");
		$jumlah_data = mysqli_num_rows($dt);
		$total_halaman = ceil($jumlah_data / $batas);

		$data = mysqli_query($this->konek,"select * from tbl_anggota limit $halaman_awal, $batas");
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

	function delete_data_anggota($nik)
	{
		$query = mysqli_query($this->konek,"delete from tbl_anggota where nik='$nik'");
	}

	//Buku
}

$konek = new koneksi();
?>