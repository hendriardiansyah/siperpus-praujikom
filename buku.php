<?php
    class buku {
    var $host = "localhost";
	var $username = "root";
	var $password = "";
	var $db = "db_siperpus_praujikom";
    var $book = "";
    function __construct(){
		$this->book = mysqli_connect($this->host, $this->username, $this->password,$this->db);
		if (mysqli_connect_errno()){
			echo "Koneksi database gagal : " . mysqli_connect_error();
		}
	}

    public function tampil_data_buku(){
		$data = mysqli_query($this->book, "select * from tbl_buku");
		while($row = mysqli_fetch_array($data)){
			$hasil[] = $row;
		}
		return $hasil;
	}

    public function tambah_data_buku($isbn, $judul_buku, $penulis, $tahun_terbit, $cover_buku){
        // extract($_POST);
		$allow = array('jpg','jpeg','png');
        $fileName = $_FILES['cover_buku']['name'];
        $exntension = explode('.', $cover_buku['name']);
        $file_tmp = $_FILES['cover_buku']['tmp_name'];
        $ext =  PATHINFO($fileName, PATHINFO_EXTENSION);
		$fileActExt = strtolower(end($exntension));
		
        // print_r($cover_buku);
        // die();

		if(in_array($fileActExt, $allow)){
            $fileNew = $judul_buku."_".rand().".".$fileActExt;  // rand function create the rand number 
		    $filePath = '../uploads/images/'.$fileNew;
            
			move_uploaded_file($file_tmp, $filePath);
            $query = "INSERT INTO tbl_buku (isbn, penulis, judul_buku, tahun_terbit, cover_buku) VALUES ('$isbn','$penulis','$judul_buku','$tahun_terbit','$fileNew')";
            $result = $this->book->query($query);
		} if ($result == true) {
            return true;
        } else {
            return false;
        }
	}   
}

$book = new buku();

?>