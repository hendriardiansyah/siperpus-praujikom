<html>
<?php
    include('../buku.php');
    extract($_POST);
    $book = new buku();

    $action = $_GET['action'];
    if($action == "add")
    {
        $book->tambah_data_buku(
            $_POST['isbn'],
            $_POST['judul_buku'],
            $_POST['penulis'],
            $_POST['tahun_terbit'],
            $_FILES['cover_buku']);
            
            // print_r();
            // die();
        header('location:../pages/buku_list.php');
    }
?>
</html>