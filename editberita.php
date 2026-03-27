<?php
include "koneksi.php";

$data = mysqli_query($conn, "SELECT * FROM berita");
?>

<!DOCTYPE html>
<html>
<head>
<title>Data Berita</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body class="p-4">

    <h3>Data Berita</h3>

        <table class="table table-bordered">
                <tr>
                    <th>No</th>
                    <th>Judul</th>
                    <th>Aksi</th>
                </tr>
            <?php $no=1; while($d = mysqli_fetch_array($data)){ ?>
                <tr>
                    <td><?= $no++ ?></td>
                    <td><?= $d['judul'] ?></td>
                    <td>
                        <a href="editberita.php?id=<?= $d['id'] ?>" class="btn btn-warning btn-sm">Edit</a>
                    </td>
                </tr>
            <?php } ?>
        </table>
            <button type="submit" name="simpan" class="btn btn-primary">Simpan</button>
            <a href="dasboradmin.php" class="btn btn-secondary">Kembali</a>
</body>
</html>