<?php
include "../server.php";

// Ambil ID dari URL
if (!isset($_GET['id'])) {
    die("ID tidak ditemukan!");
}

$id = $_GET['id'];

// Ambil data aspirasi
$data = mysqli_query($conn, "SELECT * FROM siswa WHERE id='$id'");
$row = mysqli_fetch_assoc($data);

if (!$row) {
    die("Data tidak ditemukan!");
}

// Proses update
if (isset($_POST['update'])) {
    $kelas = $_POST['kelas'];
    $nis = $_POST['nis'];
   


    $update = mysqli_query($conn, "
        UPDATE siswa SET
            kelas='$kelas',
            nis='$nis'
        WHERE id='$id'
    ");

    if ($update) {
        echo "<script>
            alert('Data berhasil diperbarui!');
            window.location='../admin/admin.php';
        </script>";
    } else {
        echo "Gagal update: " . mysqli_error($conn);
    }
}
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Edit Aspirasi</title>
     <link rel="stylesheet" href="bootstrap-5.3.3-dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="update.css">
</head>
<body>

<div class="form-container">
    <h2>Edit Data siswa</h2>

    <form method="POST">
        <label>kelas</label>
        <input type="text" name="kelas" value="<?= $row['kelas']; ?>" required>

        <label>NIS</label>
        <input type="text" name="nis" value="<?= $row['nis']; ?>" required>

        <button type="submit" name="update"> Simpan Perubahan</button>
        <a href="../admin/admin.php" class="btn-kembali">⬅ Kembali</a>
    </form>
</div>

</body>
</html>