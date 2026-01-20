<?php
$conn = mysqli_connect("localhost", "root", "", "aspirasisiswa");

if (!$conn) {
    die("Koneksi gagal: " . mysqli_connect_error());
}

// Query aspirasi
$query = "SELECT * FROM aspirasi ORDER BY tanggal DESC";
$result = mysqli_query($conn, $query);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Data Aspirasi</title>

    <link rel="stylesheet" href="bootstrap-5.3.3-dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/aspirasi.css">
</head>
<body>

<div class="container mt-4">

    <h3 class="mb-3">Data Aspirasi Siswa</h3>

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
                <td><?= substr($row['isi'], 0, 40) ?>...</td>
                <td><?= $row['tanggal'] ?></td>
                <td>
                    <?php if ($row['status'] == 'Selesai') { ?>
                        <span class="badge bg-success">Selesai</span>
                    <?php } else { ?>
                        <span class="badge bg-warning text-dark">Menunggu</span>
                    <?php } ?>
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
