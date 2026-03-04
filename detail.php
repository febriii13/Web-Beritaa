<?php
include 'koneksi.php';

$id = $_GET['id'];
$query = mysqli_query($conn, "SELECT * FROM berita WHERE id='$id'");
$data = mysqli_fetch_assoc($query);
?>

<!DOCTYPE html>
<html>
<head>
    <title>Detail Berita</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body style="background-color: #2a2c2d;">

<div class="container mt-5 col-md-8">
    <div class="card shadow p-4">

        <img src="picture/<?php echo $data['gambar']; ?>" class="img-fluid mb-3">

        <h2><?php echo $data['judul']; ?></h2>
        <p class="text-muted">Penulis: <?php echo $data['penulis']; ?></p>
        <hr>
        <p><?php echo $data['isi']; ?></p>

        <a href="index.php" class="btn btn-dark mt-3">Kembali</a>

    </div>
</div>

</body>
</html>