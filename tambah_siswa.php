<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Siswa</title>
</head>
<body>
  <h2>Tambah Siswa</h2>
   <form action="tambah.php" method="POST">
    <label>NAMA:</label><br>
    <input type="text" name="nama" required <br><br>

    <label>NIS:</label><br>
    <input type="text" name="nis" required <br><br>

    <label>TANGGAL_LAHIR:</label><br>
    <input type="text" name="tanggal_lahir" required <br><br>

    <label>EMAIL:</label><br>
    <input type="text" name="email" required <br><br>

    <button type="submit" name="tambah" value="1">Simpan</button>
   </form>
   <br>
   <a href="Data.php">Kembali Ke Data Siswa</a>
</body>
</html>