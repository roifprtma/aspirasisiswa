<?php
// session_start();
include "../server.php"; // Include database connection

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $kelas = mysqli_real_escape_string($conn, $_POST['kelas']);
    $nis = mysqli_real_escape_string($conn, $_POST['nis']);

    // cek data di database
    $sql = "INSERT INTO siswa (kelas, nis) VALUES ('$kelas', '$nis')";
        if (mysqli_query($conn, $sql)) {
            echo "<script>alert('Registrasi berhasil! Silakan login.'); window.location='../siswa.php';</script>";
        } else {
            echo "Error: " . mysqli_error($conn);
        }
}
?>