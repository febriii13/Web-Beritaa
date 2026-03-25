<?php
include "koneksi.php";

if(isset($_POST['simpan'])){

    $judul = $_POST['judul'];
    $slug = $_POST['slug'];
    $deskripsi = $_POST['deskripsi'];
    $isi = $_POST['isi'];
    $gambar = $_FILES['gambar']['name'];
    $tanggal = date("Y-m-d H:i:s");
    $penulis = $_POST['penulis'];
    $kategori = $_POST['kategori'];
    $views = 0;

    move_uploaded_file($_FILES['gambar']['tmp_name'],"assets/".$gambar);

    mysqli_query($conn,"INSERT INTO berita 
    VALUES(NULL,'$judul','$slug','$deskripsi','$isi','$gambar','$tanggal','$penulis','$kategori','$views')");

    header("Location:data_berita.php");
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Tambah Berita</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <h2 class="text-center mb-4">Tambah Berita</h2>
        <form method="POST" enctype="multipart/form-data">

            <input type="text" name="judul" class="form-control mb-2" placeholder="Judul">

            <input type="text" name="slug" class="form-control mb-2" placeholder="Slug">

            <textarea name="deskripsi" class="form-control mb-2" placeholder="Deskripsi"></textarea>

            <textarea name="isi" class="form-control mb-2" placeholder="Isi berita"></textarea>

            <input type="file" name="gambar" class="form-control mb-2">

            <input type="text" name="penulis" class="form-control mb-2" placeholder="Penulis">

            <input type="text" name="kategori" class="form-control mb-2" placeholder="Kategori">

            <button type="submit" name="simpan" class="btn btn-primary">Simpan</button>
            <a href="dasboradmin.php" class="btn btn-secondary">Kembali</a>
            
        </form>
    </div>
</body>
</html>