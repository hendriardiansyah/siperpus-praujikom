<?php
    include('../koneksi.php');
    $konek = new koneksi();

    $action = $_GET['action'];
    if($action == "add")
    {
        $konek->tambah_data_anggota(
            $_POST['nik'],
            $_POST['nama'],
            $_POST['alamat'],
            $_POST['jk'],
            $_POST['t_lahir'],
            $_POST['tgl_lahir']);
        header('location:../pages/anggota_list.php');
    }
?>