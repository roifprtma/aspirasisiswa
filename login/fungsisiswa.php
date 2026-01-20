<?php
include "../server.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $kelas = mysqli_real_escape_string($conn, $_POST['kelas']);
    $nis = mysqli_real_escape_string($conn, $_POST['nis']);

    $sql = "SELECT * FROM siswa 
            WHERE kelas='$kelas' 
            AND nis='$nis'";
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) > 0) {
        // login berhasil → langsung masuk dashboard
        header("Location: ../siswa.php");
        exit;
    } else {
        echo "<script>
            alert('Login gagal! Username atau Password salah');
            window.location='aspirasisiswa.php';
        </script>";
    }
}
?>
