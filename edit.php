<?php
require_once('koneksi.php');

if (isset($_POST['edit'])) {
    $id             = $_POST['id'];
    $nama           = $_POST['nama'];
    $nis            = $_POST['nis'];
    $tanggal_lahir  = $_POST['tanggal_lahir'];
    $email          = $_POST['email'];

    $query = mysqli_query($koneksi, "UPDATE siswa SET NAMA='$nama', NIS='$nis', TANGGAL_LAHIR='$tanggal_lahir', EMAIL='$email' WHERE id='$id'");

    if ($query) {
        header('Location: Data.php');
        exit;
    } else {
        echo "Gagal mengupdate data!";
    }
}

$id = $_GET['id'];
$data = mysqli_query($koneksi, "SELECT * FROM siswa WHERE id='$id'");
$siswa = mysqli_fetch_assoc($data);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Data Siswa</title>
</head>
<body>
    <h2>Edit Data Siswa</h2>
    <form action="edit.php" method="POST">
        <input type="hidden" name="id" value="<?php echo $siswa['id']; ?>">

        <label>NAMA:</label><br>
        <input type="text" name="nama" value="<?php echo $siswa['NAMA']; ?>" required><br><br>

        <label>NIS:</label><br>
        <input type="text" name="nis" value="<?php echo $siswa['NIS']; ?>" required><br><br>

        <label>TANGGAL LAHIR:</label><br>
        <input type="date" name="tanggal_lahir" value="<?php echo isset($siswa['TANGGAL_LAHIR']) ? $siswa['TANGGAL_LAHIR'] : ''; ?>" required><br><br>

        <label>EMAIL:</label><br>
        <input type="text" name="email" value="<?php echo $siswa['EMAIL']; ?>" required><br><br>

        <button type="submit" name="edit">Simpan</button>
    </form>
    <br>
    <a href="Data.php">Kembali</a>
</body>
</html>