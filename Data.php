<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Siswa</title>
</head>
<body>
    <h2>Data Siswa</h2>
    <a href="tambah_siswa.php">+ Tambah Siswa</a>
    <br><br>
    <table border="1" cellpadding="8">
        <thead>
            <tr>
                <th>NO</th>
                <th>NAMA</th>
                <th>NIS</th>
                <th>TANGGAL_LAHIR</th>
                <th>EMAIL</th>
            </tr>
        </thead>
        <tbody>
            <?php
            require_once('koneksi.php');
            $data = mysqli_query($koneksi, "SELECT * FROM siswa");
            $i = 1;
            while ($siswa = mysqli_fetch_assoc($data)) : 
            ?>
            <tr>
                <td><?php echo $i++; ?></td>
                <td><?php echo $siswa['NAMA']; ?></td>
                <td><?php echo $siswa['NIS']; ?></td>
                <td><?php echo isset($siswa['TANGGAL_LAHIR']) ? $siswa['TANGGAL_LAHIR'] : '-'; ?></td>
                <td>
                    <?php echo $siswa['EMAIL']; ?><br><br>
                    <a href="edit.php?id=<?php echo $siswa['id']; ?>">Edit</a> | 
                    <a href="hapus.php?id=<?php echo $siswa['id']; ?>" onclick="return confirm('Yakin Hapus Data Ini?')">Hapus</a>
                </td>
            </tr>
            <?php endwhile; ?>
        </tbody>
    </table>
</body>
</html>