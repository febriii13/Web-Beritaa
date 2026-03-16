<?php
    session_start();
    include "koneksi.php";

    if(isset($_POST['login'])){

        $username = $_POST['username'];
        $password = $_POST['password'];

        $query = mysqli_query($conn,"SELECT * FROM admin WHERE username='$username' AND password='$password'");
        $cek = mysqli_num_rows($query);

        if($cek > 0){
            $_SESSION['admin'] = true;
            header("Location: dasboradmin.php");
            exit;
        }else{
            echo "<script>alert('Username atau Password salah');</script>";
        }
    }
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Login</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

    <div class="container d-flex justify-content-center align-items-center" style="height: 100vh;">
    
        <form method="POST" class="bg-white p-4 rounded shadow" style="width:300px;">

            <h4 class="text-center mb-3">Login Admin</h4>

            <input type="text" name="username" class="form-control mb-3" placeholder="Username">

            <input type="password" name="password" class="form-control mb-3" placeholder="Password">

            <button name="login" class="btn btn-dark w-100">Login</button>
            <div class="text-center mt-3">
                <a href="index.php" class="btn btn-link">Back to Home</a>
            </div>
        </form>
    </div>

    </form>

        </div>

            <style>
                body {
                    background: #f8f9fa;
                }

                .film {
                    position: relative;
                    text-align: center;
                    color: white;
                }

                .film img {
                    width: 100%;
                    height: 500px;
                    object-fit: cover;
                }

                .text {
                    position: absolute;
                    top: 50%;
                    left: 50%;
                    transform: translate(-50%, -50%);
                }

                .text h1 {
                    font-size: 60px;
                    font-weight: bold;
                }
                .text p {
                    font-size: 20px;
                    margin-top: 20px;
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
            </style>
        </div>
    </form>
</body>