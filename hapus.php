<?php

require_once('koneksi.php');

if (!isset($_GET['id'])) {
    header('Location: Data.php');
    exit;
}

$id = $_GET['id'];
$query = mysqli_query($koneksi, "DELETE FROM siswa WHERE id=$id");

if ($query) {
    header('Location: Data.php');
    exit;
} else {
    echo "Data Gagal Dihapus: " . mysqli_error($koneksi);
    exit;
}
?>