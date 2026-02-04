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
            <a class="nav-link" href="#tentang"><B>TENTANG</B></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#kategori"><B>KATEGORI</B></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="aspirasi.php"><b>ASPIRASI</b></a>
          </li>
           <li class="nav-item">
            <a class="nav-link" href="#fitur"><b>FITUR</b></a>
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
        <span>Suaramu didengar, perubahan pasti akan dimulai.</span>
        </h2>
      <h4><b> <br> Pilih jenis aspirasi yang ingin kamu sampaikan:</b></h4> 
      
      <button class="btn btn-primary btn-lg mt-4 mr-4 hero-button"
        onclick="location.href='formaspirasi.php'"><b>SARANA</b></button>
    </div>
  </div>
  </div>
  <!-- akhir hero section -->
   <!-- TENTANG KAMI -->
    <p class="text-kategori text-primary" id="tentang">TENTANG KAMI</p>
    <div class="d-flex w-full  ">
    <div class="container mt-5 px-5 " id="tentang">
      <p class="text-start text-tentang  mb-3">
          Aspirasi Siswa adalah platform daring yang didedikasikan untuk memberikan ruang aman bagi pelajar
      dalam menyampaikan pendapat, kritik, dan saran terkait lingkungan sekolah dan pendidikan secara umum.
      Kami percaya bahwa setiap suara pelajar penting dan berhak didengar. Melalui platform ini, kami
      berkomitmen untuk memfasilitasi komunikasi yang konstruktif antara pelajar, guru, dan pihak sekolah guna
      menciptakan lingkungan belajar yang lebih baik dan inklusif.
    </p>
    </div>
    <div class="container text-center px-5">
      <img src="image/SISWA.png" alt="Tentang Kami" class="img-fluid rounded shadow-sm">
    </div>
    </div>
  <!-- awal card  -->
  <p class="text-kategori text-primary" id="kategori">KATEGORI</p>
  <div class="container mt-4" id="kategori">
    <div class="row justify-content-end">
      <div class="col-md-4 mb-4 ">
        <div class="card" style="width: 18rem;">
          <img src="image/labkom.jpg" class="card-img-top" alt="...">
          <div class="card-body text-center">
            <p>
            <B><h4>LAB KOMPUTER</h4></B>
            </p>
          </div>
        </div>
      </div>



      <div class="col-md-4 mb-4">
        <div class="card" style="width: 18rem;">
          <img src="image/per.webp" class="card-img-top" alt="...">
          <div class="card-body text-center">
            <p>
            <B><h4>PERPUSTAKAAN</h4></B>
            </p>

          </div>
        </div>
      </div>

      <div class="col-md-4 mb-4">
        <div class="card" style="width: 18rem;">
          <img src="image/TOILET.jpeg" class="card-img-top" alt="...">
          <div class="card-body text-center">
            <p>
            <b><h4>TOILET</h4></b>
            </p>

          </div>
        </div>
      </div>
         <div class="col-md-4 mb-4">
        <div class="card" style="width: 18rem;">
          <img src="image/kelas.png" class="card-img-top" alt="...">
          <div class="card-body text-center">
            <p>
            <B><h4>KELAS</h4></B>
            </p>

          </div>
        </div>
      </div>
         <div class="col-md-4 mb-4">
        <div class="card" style="width: 18rem;">
          <img src="image/lapangan.png" class="card-img-top" alt="...">
          <div class="card-body text-center">
            <p>
            <B><h4>LAPANGAN</h4></B>
            </p>

          </div>
        </div>
      </div>
      
    </div>
  </div>
  <!-- akhir card  -->
   <!-- fitur yang tersedia -->
  <p class="text-kategori text-primary" id="fitur">FITUR YANG TERSEDIA</p>
  <div class="container mt-4 mb-5" id="fitur">
    <div class="row justify-content-center">
      
      <!-- Fitur 1 -->
      <div class="col-md-3 mb-4">
        <div class="card feature-card h-100 text-center p-3">
          <div class="feature-icon mb-3">
            <img src="image/categories.png" alt="Kategori" class="img-fluid" style="width: 60px; height: 60px;">
          </div>
          <h5 class="fw-bold">Kategori Beragam</h5>
          <p class="text-muted">
            Pilih kategori sesuai kebutuhan : Laboratorium, kelas, lapangan dan lainnya.
          </p>
        </div>
      </div>

      <!-- Fitur 2 -->
      <div class="col-md-3 mb-4">
        <div class="card feature-card h-100 text-center p-3">
          <div class="feature-icon mb-3">
            <img src="image/project.png" alt="Status" class="img-fluid" style="width: 60px; height: 60px;">
          </div>
          <h5 class="fw-bold">Lacak Status</h5>
          <p class="text-muted">
            Pantau perkembangan aspirasi Anda dari "diproses" hingga "ditindaklanjuti".
          </p>
        </div>
      </div>

      <!-- Fitur 3 -->
      <div class="col-md-3 mb-4">
        <div class="card feature-card h-100 text-center p-3">
          <div class="feature-icon mb-3">
            <img src="image/rapid.png" alt="Respons" class="img-fluid" style="width: 60px; height: 60px;">
          </div>
          <h5 class="fw-bold">Respons Cepat</h5>
          <p class="text-muted">
            Tim kami akan menindaklanjuti setiap aspirasi maksimal dalam 3-5 hari kerja.
          </p>
        </div>
      </div>

    </div>
  </div>
  <!-- akhir fitur yang tersedia -->
<!-- ===== KONTAK ===== -->
<section id="kontak" class="py-5 bg-light">
  <div class="container">
    <h1 class="text-center fw-bold mb-4 text-primary">KONTAK KAMI</h1>
    <p class="text-center mb-5">
      Hubungi kami jika ada pertanyaan atau ingin menyampaikan aspirasi secara langsung.
    </p>

    <div class="row text-center">

      <div class="col-md-4 mb-4">
        <div class="p-4 shadow-sm bg-white rounded">
          <img src="image/location.png" alt="Alamat" class="img-fluid mb-2 logo-location">
          <h5 class="fw-bold mt-3"> Alamat</h5>
          <p>Jl. Pendidikan No. 1<br>Sekolah Indonesia</p>
        </div>
      </div>

      <div class="col-md-4 mb-4">
        <div class="p-4 shadow-sm bg-white rounded">
           <img src="image/telephone (1).png" alt="Alamat" class="img-fluid mb-4 logo-telephone">
          <h5 class="fw-bold"> Telepon</h5>
          <p>0812-3456-7890
          <br>Senin – Jumat</p>
        </div>
      </div>

      <div class="col-md-4 mb-4">
        <div class="p-4 shadow-sm bg-white rounded">
            <img src="image/text.png" alt="Alamat" class="img-fluid mb-4 logo-email">
          <h5 class="fw-bold"> Email</h5>
          <p>aspirasi@siswa.sch.id<br>Respon cepat & aman</p>
        </div>
      </div>

    </div>
  </div>
</section>

      <!-- ===== FOOTER ===== -->
      <footer class=" bottom" id="kontak">
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