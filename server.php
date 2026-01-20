
<?php
$host = "localhost";
$user = "root";
$pass = "";
$db   = "aspirasisiswa"; // Updated to match the database name

$conn = mysqli_connect($host, $user, $pass, $db);

if (!$conn) {
    die("Koneksi gagal: " . mysqli_connect_error());
}
?>