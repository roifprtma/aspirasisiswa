<?php
// Query aspirasi
$conn = mysqli_connect("localhost", "root", "", "aspirasisiswa");
if (!$conn) {
    die("Koneksi gagal: " . mysqli_connect_error());
}
// filter data aspirasi
$where = [];

if (!empty($_GET['tanggal'])) {
    $where[] = "tanggal = '" . $_GET['tanggal'] . "'";
}
if (!empty($_GET['nama_kategori'])) {
    $where[] = "nama_kategori = '" . $_GET['nama_kategori'] . "'";
}
if (!empty($_GET['nis'])) {
    $where[] = "id_siswa = '" . $_GET['nis'] . "'";
}
$query = "SELECT * FROM aspirasi";
if (!empty($where)) {
    $query .= " WHERE " . implode(" AND ", $where);
}
$query .= " ORDER BY tanggal DESC";
$result = mysqli_query($conn, $query);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Data Aspirasi</title>

    <link rel="stylesheet" href="bootstrap-5.3.3-dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="data.css">
</head>
<body>

<div class="container mt-4">

    <h3 class="mb-3">Data Aspirasi Siswa</h3>
<form method="GET" class="mb-3 d-flex gap-2">
    <input type="date" name="tanggal" class="form-control w-auto ">

    <select name="kategori" class="form-select w-auto">
        <option value="">Semua Kategori</option>
        <option value="lapangan">Lapangan</option>
        <option value="toilet">Toilet</option>
        <option value="perpustakaan">Perpustakaan</option>
        <option value="laboratorium">Laboratorium</option>
        <option value="kelas">Kelas</option>
    </select>

    <input type="text" name="nis" class="form-control w-auto" placeholder="Cari NIS">

    <button class="btn btn-primary">Filter</button>
</form>

    <table class="table table-bordered table-striped tabel-aspirasi text-center align-middle">

        <thead>
            <tr>
                <th>No</th>
                <th>NIS</th>
                <th>Kategori</th>
                <th>Judul</th>
                <th>Isi</th>
                <th>Tanggal</th>
                <th>Status</th>
                <th>feedback</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>

        <?php
        if (mysqli_num_rows($result) > 0) {
            $no = 1;
            while ($row = mysqli_fetch_assoc($result)) {
        ?>
            <tr>
                <td><?= $no++ ?></td>
                <td><?= $row['id_siswa'] ?></td>
                <td><?= $row['nama_kategori'] ?></td>
                <td><?= $row['judul'] ?></td>
                <td><?= substr($row['isi'], 0, 40) ?></td>
                <td><?= $row['tanggal'] ?></td>
                 <td><?= $row['status'] ?></td>
                 <td><?= $row['feedback'] ?></td>
               
          <td>
    <a href="../update/update.php?id=<?= $row['id']; ?>" 
       class="btn btn-sm btn-edit">
        Edit
    </a>

    <a href="../update/delete.php?id=<?= $row['id']; ?>" 
       class="btn btn-sm btn-delete"
       onclick="return confirm('Yakin ingin menghapus data ini?')">
        Hapus
    </a>
</td>

            </tr>
        <?php
            }
        } else {
            echo "<tr><td colspan='7'>Belum ada data aspirasi</td></tr>";
        }
        ?>

        </tbody>
    </table>

</div>

</body>
</html>
