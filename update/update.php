<?php
include "../server.php";

// Ambil ID dari URL
if (!isset($_GET['id'])) {
    die("ID tidak ditemukan!");
}

$id = $_GET['id'];

// Ambil data aspirasi
$data = mysqli_query($conn, "SELECT * FROM aspirasi WHERE id='$id'");
$row = mysqli_fetch_assoc($data);

if (!$row) {
    die("Data tidak ditemukan!");
}

// Proses update
if (isset($_POST['update'])) {
    $id_siswa = $_POST['id_siswa'];
    $nama_kategori = $_POST['nama_kategori'];
    $judul = $_POST['judul'];
    $isi = $_POST['isi'];
    $tanggal = $_POST['tanggal'];
    $status = $_POST['status'];
    $feedback = $_POST['feedback'];


    $update = mysqli_query($conn, "
        UPDATE aspirasi SET
            id_siswa='$id_siswa',
            nama_kategori='$nama_kategori',
            judul='$judul',
            isi='$isi',
            tanggal='$tanggal',
            status='$status',
            feedback='$feedback'
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
    <h2>Edit Data Aspirasi</h2>

    <form method="POST">
        <label>NIS</label>
        <input type="text" name="id_siswa" value="<?= $row['id_siswa']; ?>" required>

        <label>Kategori</label>
        <input type="text" name="nama_kategori" value="<?= $row['nama_kategori']; ?>" required>

        <label>Judul</label>
        <input type="text" name="judul" value="<?= $row['judul']; ?>" required>

        <label>Isi Aspirasi</label>
        <textarea name="isi" rows="4" required><?= $row['isi']; ?></textarea>

        <label>Tanggal</label>
        <input type="date" name="tanggal" value="<?= $row['tanggal']; ?>" required>
        <label>Feedback</label>
        <input type="text" name="feedback" value="<?= $row['feedback']; ?>" required>

       <label>Status</label>
<input list="statusList" name="status" value="<?= $row['status']; ?>" required>

<datalist id="statusList">
    <option value="Menunggu">
    <option value="Diproses">
    <option value="Selesai">
</datalist>


        <button type="submit" name="update"> Simpan Perubahan</button>
        <a href="admin.php" class="btn-kembali">⬅ Kembali</a>
    </form>
</div>

</body>
</html>
