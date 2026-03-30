<?php
include "server.php";

$id_siswa      = $_POST['id_siswa'];
$id_kategori   = $_POST['id_kategori'];
$nama_kategori = $_POST['nama_kategori'];
$judul         = $_POST['judul'];
$isi           = $_POST['isi'];
$nama_file      = $_FILES['gambar']['name'];
$tmp = $_FILES['gambar']['tmp_name'];
if ($nama_file !=""){
    move_uploaded_file($tmp, "gambar/".$nama_file);
}
$tanggal       = date('Y-m-d');
$status        = "Menunggu";

$query = "INSERT INTO aspirasi 
(id_siswa, id_kategori, nama_kategori, judul, isi, gambar, tanggal, status)
VALUES 
('$id_siswa', '$id_kategori', '$nama_kategori', '$judul', '$isi', '$nama_file','$tanggal', '$status')";

mysqli_query($conn, $query);

header("Location: siswa.php");
exit;
