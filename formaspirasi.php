<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Form Aspirasi</title>

    <!-- CSS -->
    <link rel="stylesheet" href="bootstrap-5.3.3-dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/formaspirasi.css">
</head>
<body>

<div class="form-aspirasi">
    <h2>Form Aspirasi Siswa</h2>

   <form action="tambahaspirasi.php" method="POST">

    <label>NIS</label>
    <input type="text" name="id_siswa" required>

    <label>Kategori</label>
    <select name="id_kategori" required>
        <option value="1">Perpustakaan</option>
        <option value="2">toilet</option>
        <option value="3">lapangan</option>
        <option value="2">laboratorium</option>
        <option value="3">elektronik</option>
    </select>

    <label>Nama Kategori</label>
    <input type="text" name="nama_kategori" required>

    <label>Judul</label>
    <input type="text" name="judul" required>

    <label>Isi</label>
    <textarea name="isi" placeholder="maxsimal 4 kata"required></textarea>

    <button type="submit">Kirim</button>
</form>

</div>

</body>
</html>
