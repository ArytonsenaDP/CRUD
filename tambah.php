<?php
require_once('koneksi.php');

if(isset($_POST['tambah'])) {
    $nama = $_POST['nama'];
    $nis = $_POST['nis'];
    $tanggal_lahir =$_POST['tanggal_lahir'];
    $email = $_POST['email'];

    $query = mysqli_query($koneksi, "INSERT INTO siswa  VALUES ('', '$nama', '$nis','$tanggal_lahir', '$email')");
    echo $query;

    if($query) {
        header('Location: Data.php');
        exit;
    }else {
        echo "Data Gagal Ditambahkan: " . mysqli_error($koneksi);
    }
}
?>