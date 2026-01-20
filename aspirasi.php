<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Aspirasi</title>

    <link rel="stylesheet" href="bootstrap-5.3.3-dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="aspirasi.css">
</head>
<body>

<div class="container mt-4">

    <h3 class="mb-3">Data Aspirasi Siswa</h3>

    <table class="table table-bordered table-striped tabel-aspirasi">
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
        include "server.php";
        $no = 1;

        $aspirasi = mysqli_query($conn, "SELECT * FROM aspirasi ORDER BY tanggal DESC");

        while ($row = mysqli_fetch_assoc($aspirasi)) {
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
        <?php } ?>

        </tbody>
    </table>

</div>
</body>
</html>
