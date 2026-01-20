<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Data Siswa</title>
    <link rel="stylesheet" href="bootstrap-5.3.3-dist/css/bootstrap.min.css">
<link rel="stylesheet" href="datasiswa.css">
   
</head>

<body>

<div class="card card-custom">
    <div class="card-header">
        Data Siswa
    </div>

    <div class="card-body">
        <table class="table table-bordered table-striped align-middle">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Kelas</th>
                    <th>NIS</th>
                </tr>
            </thead>
            <tbody>

            <?php
            include "server.php";
            $query = mysqli_query($conn, "SELECT * FROM siswa");

            while ($row = mysqli_fetch_assoc($query)) {
            ?>
                <tr>
                    <td><?= $row['id'] ?></td>
                    <td><?= $row['kelas'] ?></td>
                    <td><?= $row['nis'] ?></td>
                </tr>
            <?php } ?>

            </tbody>
        </table>
    </div>
</div>

</body>
</html>
