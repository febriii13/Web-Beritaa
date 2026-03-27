<?php
session_start();
include "koneksi.php";

if(!isset($_SESSION['admin'])){
    header("Location: admin.php");
    exit;
}

$id = $_GET['id'] ?? 0;

$query = mysqli_query($conn, "SELECT * FROM berita WHERE id='$id'");
$data  = mysqli_fetch_array($query);

if(!$data){
    echo "Data tidak ditemukan!";
    exit;
}

if(isset($_POST['update'])){
    $judul     = $_POST['judul'];
    $slug      = $_POST['slug'];
    $deskripsi = $_POST['deskripsi'];
    $isi       = $_POST['isi'];
    $penulis   = $_POST['penulis'];
    $kategori  = $_POST['kategori'];

    mysqli_query($conn, "UPDATE berita SET 
        judul='$judul',
        slug='$slug',
        deskripsi='$deskripsi',
        isi='$isi',
        penulis='$penulis',
        kategori='$kategori'
    WHERE id='$id'");

    header("Location: data_berita.php");
}
?>

<!DOCTYPE html>
<html>
<head>
<title>Edit Berita</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body class="bg-light">

<div class="container mt-5">
    <div class="col-md-6 mx-auto">

        <div class="card shadow p-4">
            <h4 class="text-center mb-3">Edit Berita</h4>
            <form method="POST">

                <input type="text" name="judul" value="<?= $data['judul'] ?>" class="form-control mb-3">

                <input type="text" name="slug" value="<?= $data['slug'] ?>" class="form-control mb-3">

                <textarea name="deskripsi" class="form-control mb-3"><?= $data['deskripsi'] ?></textarea>

                <textarea name="isi" class="form-control mb-3"><?= $data['isi'] ?></textarea>

                <input type="text" name="penulis" value="<?= $data['penulis'] ?>" class="form-control mb-3">

                <input type="text" name="kategori" value="<?= $data['kategori'] ?>" class="form-control mb-3">

                <div class="d-flex justify-content-between">
                    <a href="databerita.php" class="btn btn-secondary">Kembali</a>
                    <button name="update" class="btn btn-primary">Update</button>
                </div>

            </form>
        </div>
    </div>
</div>

</body>
</html>