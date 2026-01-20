<!DOCTYPE html>

    <html lang="id">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Aspirasi siswa</title>
      <link rel="stylesheet" href="login.css">
    </head>

    <body>
        <div class="login-box">
            <h2>Sign In</h2>
            <form action="fungsisiswa.php" method="POST">
                <input type="text" name="kelas" placeholder="kelas" required>
                <input type="password" name="nis" placeholder="NIS" required>
                <button type="submit">Masuk</button>
                 <p>Belum punya akun? <a href="registrasi.php">Segera daftar</a></p>
            </form>
        </div>
    </body>
    </html>