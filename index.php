```html
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Berita Film</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>

        body {
            font-family: Arial, sans-serif;
            background: #f4f4f4;
        }

        .navbar {
            background: #222 !important;
        }

        .navbar-brand {
            font-weight: bold;
        }

        .hero-film {
            position: relative;
            height: 500px;
            overflow: hidden;
        }

        .hero-film img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            filter: brightness(60%);
        }

        .hero-text {
            position: absolute;
            top: 50%;
            left: 80px;
            transform: translateY(-50%);
            color: white;
            max-width: 500px;
        }

        .hero-text h1 {
            font-size: 50px;
            font-weight: bold;
        }

        .hero-text p {
            margin-top: 15px;
            margin-bottom: 20px;
        }

        .berita-container {
            background: white;
            padding: 30px;
            border-radius: 15px;
            box-shadow: 0 4px 10px rgba(0,0,0,0.1);
        }

        .card {
            border: none;
            overflow: hidden;
            transition: 0.3s;
        }

        .card:hover {
            transform: translateY(-8px);
            box-shadow: 0 10px 20px rgba(0,0,0,0.2);
        }

        .card img {
            height: 220px;
            object-fit: cover;
            transition: 0.3s;
        }

        .card:hover img {
            transform: scale(1.05);
        }

        #filmSlide img {
            height: 250px;
            object-fit: cover;
        }
        .button {
            color: #000;
            border: none;
        }
    </style>
</head>

<body>

    <nav class="navbar navbar-expand-lg navbar-dark">
        <div class="container">

            <a class="navbar-brand" href="#">BeritaKu</a>

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

                <form class="d-flex">
                    <input class="form-control me-2" type="search" placeholder="Cari film">
                    <button class="btn btn-outline-light">Cari</button>
                </form>

            </div>
        </div>
    </nav>

    <div class="hero-film">

        <img src="assets/fm.jpg">

        <div class="hero-text">
            <h1>Film </h1>

            <p>
                Film adalah karya hiburan berupa gambar bergerak yang menceritakan suatu kisah kepada penonton. Melalui cerita, visual, dan suara, film dapat menyampaikan berbagai emosi serta pesan yang menarik untuk dinikmati oleh berbagai kalangan.
            </p>

            <a href="detail.php?id=1" class="btn btn-warning">
                Baca Selengkapnya
            </a>
        </div>

    </div>

    <div class="container mt-5">

        <div class="berita-container">

            <h2 class="text-center mb-4">BERITA TERBARU</h2>

            <div class="row g-4">

                <div class="col-md-4">
                    <a href="detail.php?id=2" class="text-decoration-none text-dark">
                        <div class="card">

                            <img src="assets/zoo.jpg">

                            <div class="card-body">
                                <h5>Zootopia 2</h5>
                                <p>Film Zootopia 2 dirilis pada tahun 2020.</p>
                            </div>

                        </div>
                    </a>
                </div>

                <div class="col-md-4">
                    <a href="detail.php?id=3" class="text-decoration-none text-dark">
                        <div class="card">

                            <img src="assets/wc.avif">

                            <div class="card-body">
                                <h5>Wicked</h5>
                                <p>Film Wicked dirilis pada tahun 2023.</p>
                            </div>

                        </div>
                    </a>
                </div>

                <div class="col-md-4">
                    <a href="detail.php?id=4" class="text-decoration-none text-dark">
                        <div class="card">

                            <img src="assets/gz.jpg">

                            <div class="card-body">
                                <h5>Godzilla x Kong</h5>
                                <p>Film Godzilla x Kong dirilis pada tahun 2024.</p>
                            </div>

                        </div>
                    </a>
                </div>

            </div>
        </div>
    </div>


    <div class="container mt-5">

        <h2 class="text-center mb-4">FILM REKOMENDASI</h2>

        <div id="filmSlide" class="carousel slide" data-bs-ride="carousel">

            <div class="carousel-inner">

                <div class="carousel-item active">
                    <div class="row">

                        <div class="col-md-4">
                            <img src="assets/km.webp" class="d-block w-100 rounded">
                        </div>

                        <div class="col-md-4">
                            <img src="assets/ds.webp" class="d-block w-100 rounded">
                        </div>

                        <div class="col-md-4">
                            <img src="assets/gb.jpg" class="d-block w-100 rounded">
                        </div>

                    </div>
                </div>

                <div class="carousel-item">
                    <div class="row">

                        <div class="col-md-4">
                            <img src="assets/ba.jpg" class="d-block w-100 rounded">
                        </div>

                        <div class="col-md-4">
                            <img src="assets/hr.webp" class="d-block w-100 rounded">
                        </div>

                        <div class="col-md-4">
                            <img src="assets/s7.png" class="d-block w-100 rounded">
                        </div>

                    </div>
                </div>

            </div>

            <button class="carousel-control-prev" type="button" data-bs-target="#filmSlide" data-bs-slide="prev">
                <span class="carousel-control-prev-icon"></span>
            </button>

            <button class="carousel-control-next" type="button" data-bs-target="#filmSlide" data-bs-slide="next">
                <span class="carousel-control-next-icon"></span>
            </button>

        </div>

    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>
```
