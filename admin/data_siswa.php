<?php
$conn = mysqli_connect("localhost", "root", "", "aspirasisiswa");

if (!$conn) {
    die("Koneksi gagal: " . mysqli_connect_error());
}

// Query aspirasi
$query = "SELECT * FROM siswa ORDER BY id DESC";
$result = mysqli_query($conn, $query);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Data siswa</title>

    <link rel="stylesheet" href="bootstrap-5.3.3-dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="data.css">
</head>
<body>

<div class="container mt-4">

    <h3 class="mb-3">Data siswa</h3>

    <table class="table table-bordered table-striped tabel-aspirasi text-center align-middle">

        <thead>
            <tr>
                <th>No</th>
                <th>kelas</th>
                <th>NIS</th>
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
                <td><?= $row['kelas'] ?></td>
                <td><?= $row['nis'] ?></td>
               
          <td>
    <a href="../update/updatesiswa.php?id=<?= $row['id']; ?>" 
       class="btn btn-sm btn-edit">
        Edit
    </a>

    <a href="../update/deletesiswa.php?id=<?= $row['id']; ?>" 
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
