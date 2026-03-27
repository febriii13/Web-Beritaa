<?php
session_start();
include "koneksi.php";

if(!isset($_SESSION['admin'])){
    header("Location: admin.php");
    exit;
}

$data = mysqli_query($conn, "SELECT * FROM berita");
?>

<!DOCTYPE html>
<html>
<head>
<title>Data Berita</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body class="p-4">

<h3 class="mb-4">Data Berita</h3>

<table class="table table-bordered table-striped">
<tr>
    <th>No</th>
    <th>Judul</th>
    <th>Aksi</th>
</tr>

<div class="row g-4">

    <?php while($d = mysqli_fetch_array($data)){ ?>

    <div class="col-md-4">
        <a href="detail.php?id=<?= $d['id'] ?>" class="text-decoration-none text-dark">
            <div class="card">

                <img src="assets/<?= $d['gambar'] ?>">

                <div class="card-body">
                    <h5><?= $d['judul'] ?></h5>
                    <p><?= $d['deskripsi'] ?></p>
                </div>

            </div>
        </a>
    </div>

    <?php } ?>

</div>

</table>

<a href="tambah.php" class="btn btn-primary">Tambah Berita</a>
<a href="dasboradmin.php" class="btn btn-secondary">Kembali</a>

</body>
</html>