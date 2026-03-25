<?php
    session_start();
    include "koneksi.php";

    if(!isset($_SESSION['admin'])){
        header("Location: admin.php");
        exit;
    }

    $id = intval($_GET['id']);

    $query = mysqli_query($conn, "SELECT * FROM berita WHERE id='$id'");
    $data  = mysqli_fetch_array($query);

    if(!$data){
        echo "Data tidak ditemukan!";
        exit;
    }

    if(isset($_POST['update'])){

        $judul     = mysqli_real_escape_string($conn, $_POST['judul']);
        $slug      = mysqli_real_escape_string($conn, $_POST['slug']);
        $deskripsi = mysqli_real_escape_string($conn, $_POST['deskripsi']);
        $isi       = mysqli_real_escape_string($conn, $_POST['isi']);
        $penulis   = mysqli_real_escape_string($conn, $_POST['penulis']);
        $kategori  = mysqli_real_escape_string($conn, $_POST['kategori']);

        $gambarBaru = $_FILES['gambar']['name'];

        if($gambarBaru != ""){
            $tmp = $_FILES['gambar']['tmp_name'];
            move_uploaded_file($tmp, "assets/" . $gambarBaru);

            $sql = "UPDATE berita SET 
                        judul='$judul',
                        slug='$slug',
                        deskripsi='$deskripsi',
                        isi='$isi',
                        gambar='$gambarBaru',
                        penulis='$penulis',
                        kategori='$kategori'
                    WHERE id='$id'";
        } else {
            $sql = "UPDATE berita SET 
                        judul='$judul',
                        slug='$slug',
                        deskripsi='$deskripsi',
                        isi='$isi',
                        penulis='$penulis',
                        kategori='$kategori'
                    WHERE id='$id'";
        }

        mysqli_query($conn, $sql);

        header("Location: data_berita.php");
        exit;
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Edit Berita</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
    body { background: #f4f4f4; }
    .card-box { border-radius: 15px; }
    .img-preview { max-width: 150px; margin-top: 10px; border-radius: 10px; }
    </style>

</head>

<body>

    <div class="container mt-5">
        <div class="col-md-8 mx-auto">

            <div class="card shadow card-box p-4">

                <h3 class="text-center mb-4">Edit Berita</h3>

                <form method="POST" enctype="multipart/form-data">

                <div class="mb-3">
                    <label>Judul</label>
                    <input type="text" name="judul" value="<?= $data['judul'] ?? '' ?>" class="form-control">
                </div>

                <div class="mb-3">
                    <label>Slug</label>
                    <input type="text" name="slug" value="<?= $data['slug'] ?? '' ?>" class="form-control">
                </div>

                <div class="mb-3">
                    <label>Deskripsi</label>
                    <textarea name="deskripsi" class="form-control"><?= $data['deskripsi'] ?? '' ?></textarea>
                </div>

                <div class="mb-3">
                    <label>Isi Berita</label>
                    <textarea name="isi" class="form-control" rows="5"><?= $data['isi'] ?? '' ?></textarea>
                </div>

                <div class="mb-3">
                    <label>Gambar</label>
                    <input type="file" name="gambar" class="form-control">

                    <?php if(!empty($data['gambar'])){ ?>
                        <img src="assets/<?= $data['gambar'] ?>" class="img-preview">
                    <?php } ?>
                </div>

                <div class="row">
                    <div class="col-md-6 mb-3">
                        <label>Penulis</label>
                        <input type="text" name="penulis" value="<?= $data['penulis'] ?? '' ?>" class="form-control">
                    </div>

                    <div class="col-md-6 mb-3">
                        <label>Kategori</label>
                        <input type="text" name="kategori" value="<?= $data['kategori'] ?? '' ?>" class="form-control">
                    </div>
                </div>

                <div class="d-flex justify-content-between">
                    <a href="data_berita.php" class="btn btn-secondary">← Kembali</a>
                    <button name="update" class="btn btn-primary">Update</button>
                </div>

                </form>

            </div>

        </div>
    </div>

</body>
</html>