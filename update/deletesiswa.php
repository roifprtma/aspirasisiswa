
<?php
include "server.php"; // koneksi ke database

// cek apakah ada id di URL
if (isset($_GET['id'])) {
    $id = $_GET['id'];

    // query hapus
    $sql = "DELETE FROM siswa WHERE id='$id'";
    if (mysqli_query($conn, $sql)) {
        echo "<script>
                alert('Data berhasil dihapus!');
                window.location='admin/admin.php';
              </script>";
    } else {
        echo "Error: " . mysqli_error($conn);
    }
} else {
    echo "ID tidak ditemukan!";
}
?>
