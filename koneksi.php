<?php 

class koneksi{

	var $host = "localhost";
	var $username = "root";
	var $password = "";
	var $db = "db_siperpus_praujikom";
    var $konek;

	function __construct(){
		$this->konek = mysqli_connect($this->host, $this->username, $this->password,$this->db);
		if (mysqli_connect_errno()){
			echo "Koneksi database gagal : " . mysqli_connect_error();
		}
	}

} 

?>