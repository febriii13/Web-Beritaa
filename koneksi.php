<koneksi class="php"></koneksi><?php
$host = 'localhost';
$user = 'root';
$pass = '';
$dbname = 'tugas_web1';

$conn = mysqli_connect($host, $user, $pass, $dbname);

if (!$conn) {
    die("Koneksi gagal: " . mysqli_connect_error());
}
?>