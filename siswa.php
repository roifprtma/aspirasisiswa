<!DOCTYPE html>

<html lang="id">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>
    Aspirasi Siswa
  </title>
  <link rel="stylesheet" href="bootstrap-5.3.3-dist/css/bootstrap.min.css">
  <link rel="stylesheet" href="css/siswa.css">

</head>

<body>
  <nav class="navbar navbar-expand-lg bg-light">
    <div class="container-fluid">

      <!-- LOGO -->
      <a class="navbar-brand d-flex align-items-center" href="aspirasisiswa.php">
        <img src="image/aspirasisiswa.png" alt="Logo Aspirasi" width="200" height="50" class="me-2">
      </a>

      <!-- TOGGLE -->
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <!-- MENU -->
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <!-- ms-auto = menu ke kanan -->
        <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link" href="#kategori"><B>KATEGORI</B></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="aspirasi.php"><b>ASPIRASI</b></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#kontak"><B>KONTAK</B></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="login/logout.php"><b>LOGOUT</b></a>
          </li>
        </ul>
      </div>

    </div>
  </nav>



  <!-- Hero Section -->
  <div class="hero">
    <div class="hero-text animate-hero">
      <h1 class="text-center">
        <b>Aspirasi Siswa</b>
      </h1>
      <h2 class="hero-sub">
        Ruang aman bagi setiap pelajar untuk berani bicara dan menyampaikan pendapat tanpa takut.
        <br>
        <span>Suaramu didengar, perubahan pasti akan dimulai.</span>
        <br> Pilih jenis aspirasi yang ingin kamu sampaikan:
      </h2>
      <button class="btn btn-primary btn-lg mt-4 mr-4 hero-button"
        onclick="location.href='formaspirasi.php'"><b>SARANA</b></button>
    </div>
  </div>
  </div>
  <!-- akhir hero section -->
  <!-- awal card  -->
  <p class="text-kategori">KATEGORI</p>
  <div class="container mt-4" id="kategori">
    <div class="row justify-content-end">
      <div class="col-md-4 mb-4">
        <div class="card" style="width: 18rem;">
          <img src="image/LAPANGAN.jpeg" class="card-img-top" alt="...">
          <div class="card-body">
            <p>
            <h4>mencuci</h4>
            </p>
            <p class="card-text">bila barang sudah sampai kita akan langsung mencuci pakaian yang anda kirim kan dengan
              bersih dan teliti</p>

          </div>
        </div>
      </div>



      <div class="col-md-4 mb-4">
        <div class="card" style="width: 18rem;">
          <img src="image/furnitur.jpg" class="card-img-top" alt="...">
          <div class="card-body">
            <p>
            <h4>menyetrika</h4>
            </p>
            <p class="card-text">Agar tidak terlihat kusut atau kurang rapih kita setrika terlebih dahulu sebelum
              dikirimkan</p>

          </div>
        </div>
      </div>

      <div class="col-md-4 mb-4">
        <div class="card" style="width: 18rem;">
          <img src="image/LAB.jpg" class="card-img-top" alt="...">
          <div class="card-body">
            <p>
            <h4>menyiapkan barang</h4>
            </p>
            <p class="card-text">Agar barang sampai tujuan dengan selamat kita packing dengan aman agar tidak membuat
              customers kecewa</p>

          </div>
        </div>
      </div>
      <div class="col-md-4 mb-4">
        <div class="card" style="width: 18rem;">
          <img src="image/LAPANGAN.jpeg" class="card-img-top" alt="...">
          <div class="card-body">
            <p>
            <h4>mencuci</h4>
            </p>
            <p class="card-text">bila barang sudah sampai kita akan langsung mencuci pakaian yang anda kirim kan dengan
              bersih dan teliti</p>

          </div>
        </div>
      </div>
      <div class="col-md-4 mb-4">
        <div class="card" style="width: 18rem;">
          <img src="image/furnitur.jpg" class="card-img-top" alt="...">
          <div class="card-body">
            <p>
            <h4>menyetrika</h4>
            </p>
            <p class="card-text">Agar tidak terlihat kusut atau kurang rapih kita setrika terlebih dahulu sebelum
              dikirimkan</p>

          </div>
        </div>
      </div>
    </div>
  </div>
<!-- ===== KONTAK ===== -->
<section id="kontak" class="py-5 bg-light">
  <div class="container">
    <h2 class="text-center fw-bold mb-4">Kontak Kami</h2>
    <p class="text-center mb-5">
      Hubungi kami jika ada pertanyaan atau ingin menyampaikan aspirasi secara langsung.
    </p>

    <div class="row text-center">

      <div class="col-md-4 mb-4">
        <div class="p-4 shadow-sm bg-white rounded">
          <h5 class="fw-bold">📍 Alamat :</h5>
          <p>Jl. Pendidikan No. 1<br>Sekolah Indonesia</p>
        </div>
      </div>

      <div class="col-md-4 mb-4">
        <div class="p-4 shadow-sm bg-white rounded">
          <h5 class="fw-bold">📞 Telepon</h5>
          <p>0812-3456-7890</p>
          <p>Senin – Jumat</p>
        </div>
      </div>

      <div class="col-md-4 mb-4">
        <div class="p-4 shadow-sm bg-white rounded">
          <h5 class="fw-bold">✉️ Email</h5>
          <p>aspirasi@siswa.sch.id</p>
          <p>Respon cepat & aman</p>
        </div>
      </div>

    </div>
  </div>
</section>

      <!-- ===== FOOTER ===== -->
      <footer class=" bottom">
        <div class="container text-center" id="kontak">
          <h5 class="mb-2">Aspirasi Siswa </h5>
          <p class="mb-1">
            Wadah aspirasi pelajar untuk menyampaikan pendapat, kritik, dan saran secara aman.
          </p>

          <div class="mb-3">
            <a href="#" class="text-light me-3 text-decoration-none">Instagram</a>
            <a href="#" class="text-light me-3 text-decoration-none">WhatsApp</a>
            <a href="#" class="text-light text-decoration-none">Email</a>
          </div>

          <hr class="border-secondary">

          <p class="mb-0">
            © 2026 Aspirasi Siswa. All Rights Reserved.
          </p>
        </div>
      </footer>

    <script src="bootstrap-5.3.3-dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>