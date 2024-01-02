<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Sewa Sewo - Tata Cara Penyewaanasdsada</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css"
    integrity="sha512-xrZr44l54tfjkER8mKu+IqU77z4sGWu+TByfHTtqjL2z7WBRl9/p3a1NVrqdkX0fFU4PXVcO8A00vf5B6aSppQ=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  <style>
    /* ... (styles remain unchanged) ... */
    .step-container {
      display: flex;
      justify-content: space-between;
      margin-top: 30px;
      margin-bottom: 30px;
    }

    .step-box {
      border: 2px solid #00C5C8;
      border-radius: 8px;
      padding: 20px;
      margin-bottom: 20px;
      background-color: #fff;
      box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    }

    .step-content {
      width: 48%;
    }

    .step-img {
      width: 48%;
    }

    .step-img img {
      width: 100%;
      border-radius: 8px;
      box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    }
  </style>
</head>

<body style="background-color: #EEEEEE">
  <nav class="navbar navbar-expand-lg navbar-dark fixed-top shadow" style="background-color: #00C5C8;">
    <div class="container">
      <a class="navbar-brand fs-1 fw-bold me-5" href="#">SEWA SEWO</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link {{ ($title === 'Home') ? 'active' : '' }}" href="/home">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link {{ ($title === 'Penyewaan') ? 'active' : '' }}" href="/sewa">Penyewaan</a>
          </li>
          <li class="nav-item">
            <a class="nav-link {{ ($title === 'Tata Cara') ? 'active' : '' }}" href="/tutorial">Tata Cara</a>
          </li>
          <li class="nav-item">
            <a class="nav-link {{ ($title === 'FAQ') ? 'active' : '' }}" href="/faq">FAQ</a>
          </li>
        </ul>
        <!-- Tombol Menu Akun dengan Ikon -->
        <ul class="navbar-nav">
          <li class="nav-item">
            <div class="dropdown">
              <button class="btn btn-secondary dropdown-toggle bg-transparent" type="button" data-bs-toggle="dropdown"
                aria-expanded="false">
                <a class="nav-link" href="#">
                  <div class="img-fluid custom-icon" style="background-color: transparent;">
                    <img src="{{ asset('akun.png') }}" class="w-100 h-100" alt="Account Icon">
                  </div>
                </a>
              </button>
              <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="#">Akun</a></li>
                <li><a class="dropdown-item" href="#">Toko Saya</a></li>
                <li><a class="dropdown-item" href="#">Logout</a></li>
              </ul>
            </div>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <div class="container content-box" style="margin-top: 120px;">
    <h2>Tata Cara Penyewaan Lapangan</h2>

    <!-- Langkah 1 -->
    <div class="step-container">
      <div class="step-box">
        <div class="step-content">
          <h3>Langkah 1: Pilih Lapangan</h3>
          <p>Pilih lapangan yang ingin Anda sewa dari berbagai pilihan lapangan yang tersedia.</p>
        </div>
      </div>
      <div class="step-img">
        <img src="{{ asset('lapangan.jpg') }}" alt="Contoh Lapangan">
      </div>
    </div>

    <!-- Langkah 2 -->
    <div class="step-container">
      <div class="step-box">
        <div class="step-content">
          <h3>Langkah 2: Pilih Tanggal dan Jam</h3>
          <p>Pilih tanggal dan jam sesuai dengan ketersediaan lapangan yang Anda pilih.</p>
        </div>
      </div>
      <div class="step-img">
        <img src="{{ asset('kalender.jpg') }}" alt="Pilih Tanggal dan Jam">
      </div>
    </div>

    <!-- Langkah 3 -->
    <div class="step-container">
      <div class="step-box">
        <div class="step-content">
          <h3>Langkah 3: Isi Formulir Penyewaan</h3>
          <p>Isi formulir penyewaan dengan informasi yang dibutuhkan, seperti nama, nomor telepon, dan keterangan lainnya.</p>
        </div>
      </div>
      <div class="step-img">
        <img src="{{ asset('formulir.jpg') }}" alt="Isi Formulir Penyewaan">
      </div>
    </div>

    <!-- Langkah 4 -->
    <div class="step-container">
      <div class="step-box">
        <div class="step-content">
          <h3>Langkah 4: Lakukan Pembayaran</h3>
          <p>Lakukan pembayaran sesuai dengan instruksi yang diberikan setelah mengisi formulir penyewaan.</p>
        </div>
      </div>
      <div class="step-img">
        <img src="{{ asset('pembayaran.jpg') }}" alt="Lakukan Pembayaran">
      </div>
    </div>

    <!-- Langkah 5 -->
    <div class="step-container">
      <div class="step-box">
        <div class="step-content">
          <h3>Langkah 5: Konfirmasi Pembayaran</h3>
          <p>Konfirmasikan pembayaran Anda untuk memastikan penyewaan lapangan Anda.</p>
        </div>
      </div>
      <div class="step-img">
        <img src="{{ asset('konfirmasi.jpg') }}" alt="Konfirmasi Pembayaran">
      </div>
    </div>

  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
  </script>
</body>

</html>
