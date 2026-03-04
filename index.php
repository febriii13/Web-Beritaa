<!DOCTYPE html>
<html lang="en"> 
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Berita</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #00000033;
        }

        .navbar {
            background-color: #333 !important;
        }

        .navbar-brand, .nav-link {
            color: white !important;
        }

        .berita-container {
            background: white;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 4px 10px rgba(0,0,0,0.1);
        }

        h1 {
            text-align: center;
            margin-bottom: 30px;
        }

        .card {
            transition: transform 0.3s ease, box-shadow 0.3s ease;
            cursor: pointer;
            overflow: hidden;height: 300px;
            border: none;
            overflow: hidden;
        }

        .card:hover {
            transform: translateY(-8px);
            box-shadow: 0 10px 25px rgba(0,0,0,0.2);
        }

        .card img {
            width: 100%;
            height: 220px;
            object-fit: cover;
            border-top-left-radius: 10px;
            border-top-right-radius: 10px;
        }

        .card:hover img {
            transform: scale(1.08);
        }
        .berita-container {
            color: rgb(0, 0, 0);
            background-color: rgba(38, 38, 38, 0.66);
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 4px 10px rgba(0, 22, 224, 0.1);
        }
    </style>
</head>

<body>

    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container">
            
            <a class="navbar-brand fw-bold" href="#">BeritaKu</a>

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarNav">

                <ul class="navbar-nav me-auto">
                    <li class="nav-item">
                        <a class="nav-link active" href="#">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Trending</a>
                    </li>
                </ul>

                <form class="d-flex" role="search">
                    <input class="form-control me-2" type="search" placeholder="Cari berita..." aria-label="Search">
                    <button class="btn btn-outline-light" type="submit">Cari</button>
                </form>

            </div>
        </div>
    </nav>

    <div class="container mt-5">
        <div class="berita-container">
            <h1>BERITA TERBARU</h1>

            <div class="row g-4">
                
                <a href="detail.php?id=1" style="text-decoration:none; color:black;">
                    <div class="card">
                        <img src="picture/1.jpg" class="card-img-top">
                        <div class="card-body">
                            <h5 class="card-title">Transformers V</h5>
                            <p class="card-text">Film Transformers V dirilis pada tahun 2017.</p>
                        </div>
                    </div>
                </a>

                <div class="col-md-4">
                    <div class="card">
                        <img src="https://via.placeholder.com/400x300" class="card-img-top" alt="gambar2">
                        <div class="card-body">
                            <h5 class="card-title">Judul Berita 2</h5>
                            <p class="card-text">Deskripsi singkat berita kedua.</p>
                        </div>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="card">
                        <img src="https://via.placeholder.com/400x300" class="card-img-top" alt="gambar3">
                        <div class="card-body">
                            <h5 class="card-title">Judul Berita 3</h5>
                            <p class="card-text">Deskripsi singkat berita ketiga.</p>
                        </div>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="card">
                        <img src="https://via.placeholder.com/400x300" class="card-img-top" alt="gambar4">
                        <div class="card-body">
                            <h5 class="card-title">Judul Berita 4</h5>
                            <p class="card-text">Deskripsi singkat berita keempat.</p>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>
