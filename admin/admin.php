<?php
include "../server.php";

//statistik

// Total Aspirasi (dari umpanbalik)
$q1 = mysqli_query($conn, "SELECT COUNT(*) as total FROM aspirasi");
$jml_aspirasi = $q1 ? mysqli_fetch_assoc($q1)['total'] : 0;

// Total Siswa
$q2 = mysqli_query($conn, "SELECT COUNT(*) as total FROM siswa");
$jml_siswa = $q2 ? mysqli_fetch_assoc($q2)['total'] : 0;

// Total Kategori
$q3 = mysqli_query($conn, "SELECT COUNT(*) as total FROM kategori");
$jml_kategori = $q3 ? mysqli_fetch_assoc($q3)['total'] : 0;

// Aspirasi Belum Ditindaklanjuti
$q4 = mysqli_query(
  $conn,
  "SELECT COUNT(*) as total FROM umpanbalik WHERE status='Belum Ditindaklanjuti'"
);
$jml_belum = $q4 ? mysqli_fetch_assoc($q4)['total'] : 0;

// Data Aspirasi Terbaru
$umpanbalik = mysqli_query(
  $conn,
  "SELECT * FROM umpanbalik ORDER BY tanggal DESC"
);

$aspirasi = mysqli_query(
  $conn,
  "SELECT * FROM aspirasi ORDER BY tanggal DESC"
);
?>
<!DOCTYPE html>
<html lang="id">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Dashboard Aspirasi Siswa</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="admin.css">
</head>

<body>
  <div class="navbar">
    <span class="toggle-btn" onclick="toggleSidebar()">☰ Menu</span>
    <h5 class="mb-0"><b>Dashboard Aspirasi Siswa</b></h5>
  </div>

  <div class="sidebar" id="sidebar">
    <a href="../aspirasisiswa.php">Beranda</a>
    <a href="datasiswa.php">Data Siswa</a>
    <a href="data_aspirasi.php">Data Aspirasi</a>
    <a href="logout.php">Logout</a>
  </div>

  <div class="content" id="content">
    <div class="container py-4">

      <!-- Statistik -->
      <div class="row text-white mb-4">
        <div class="col-md-4">
          <div class="card bg-primary shadow rounded-3">
            <div class="card-body text-center">
              <h5><b>Total Aspirasi</b></h5>
              <h3><?= $jml_aspirasi ?></h3>
            </div>
          </div>
        </div>

        <div class="col-md-4">
          <div class="card bg-success shadow rounded-3">
            <div class="card-body text-center">
              <h5><b>Siswa Aktif</b></h5>
              <h3><?= $jml_siswa ?></h3>
            </div>
          </div>
        </div>

        <div class="col-md-4">
          <div class="card bg-info shadow rounded-3">
            <div class="card-body text-center">
              <h5><b>Kategori</b></h5>
              <h3><?= $jml_kategori ?></h3>
            </div>
          </div>
        </div>

        
      </div>

      <!-- Tabel Aspirasi -->
      <div class="card shadow rounded-3">
        <div class="card-header bg-primary text-white text-center">
          <h4 class="mb-0">Aspirasi Terbaru</h4>
        </div>

        <div class="card-body">
          <table class="table table-striped">
            <thead>
              <tr>
                <th>ID</th>
                <th>NIS</th>
                <th>judul</th>
                <th>isi</th>
                <th>Kategori</th>
                <th>Tanggal</th>
                <th>Status</th>

              </tr>
            </thead>
            <tbody>
              <?php while ($row = mysqli_fetch_assoc($aspirasi)) { ?>
                <tr>
                  <td><?= $row['id'] ?></td>
                  <td><?= $row['id_siswa'] ?></td>
                  <td><?= $row['judul'] ?></td>
                  <td><?= $row['isi'] ?></td>
                  <td><?= $row['nama_kategori'] ?></td>
                  <td><?= $row['tanggal'] ?></td>

                  <td>
                    <?php if ($row['status'] == 'selesai') { ?>
                      <span class="badge bg-success">Selesai</span>
                    <?php } else { ?>
                      <span class="badge bg-secondary"><?= $row['status'] ?></span>
                    <?php } ?>
                  </td>
                </tr>
              <?php } ?>
            </tbody>
          </table>
        </div>
      </div>

    </div>
  </div>

  <script>
    function toggleSidebar() {
      document.getElementById("sidebar").classList.toggle("active");
      document.getElementById("content").classList.toggle("shift");
    }
  </script>
</body>

</html>