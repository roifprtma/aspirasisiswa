<?php
include "../server.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $username = mysqli_real_escape_string($conn, $_POST['username']);
    $password = mysqli_real_escape_string($conn, $_POST['password']);

    $sql = "SELECT * FROM admin 
            WHERE username='$username' 
            AND password='$password'";

    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) == 1) {
        // langsung masuk admin
        header("Location: ../admin/admin.php");
        exit;
    } else {
        echo "<script>
            alert('Login gagal! Username atau Password salah');
            window.location='../aspirasisiswa.php';
        </script>";
    }
}
?>
