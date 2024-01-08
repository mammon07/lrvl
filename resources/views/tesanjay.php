<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Kontol</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" integrity="sha512-xrZr44l54tfjkER8mKu+IqU77z4sGWu+TByfHTtqjL2z7WBRl9/p3a1NVrqdkX0fFU4PXVcO8A00vf5B6aSppQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  <style>
    .content-box {
      background-color: #FFFFFF;
      padding: 20px;
      margin-top: 20px;
      border-radius: 8px;
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
      text-align: justify;
      position: relative;
    }

    .custom-icon {
      width: 20px; /* Set your desired width */
      height: auto; /* Maintain aspect ratio */
    }

    .search-bar .order-1 {
      order: -1;
    }

    .custom-img {
      width: 379px;
      height: 200px;
      object-fit: cover;
    }

    .search-bar {
      margin-top: 5px; /* Adjust the margin as needed */
    }

    .custom-text {
      position: absolute;
      top: 10px;
      left: 500px; /* Ubah ke left agar berada di kiri */
      display: flex;
      flex-direction: column;
      height: 100%; /* Mengisi tinggi container */
    }

    .booking-button {
      position: absolute;
      bottom: 10px;
      right: 10px;
      width: 100px;
      height: 40px;
    }

    .custom-words {
      text-align: center; /* Posisikan di tengah */
      font-weight: bold; /* Tambahkan properti bold */
      font-size: 1.2em; /* Tambahkan properti ukuran font */
    }

    /* Menambahkan lebar untuk membatasi teks secara horizontal */
    .card-text {
      width: 30%; /* Menggunakan setengah dari lebar kartu */
      overflow: hidden;
    }
  </style>
</head>
<body style="background-color: #EEEEEE">
  <nav class="navbar navbar-expand-lg navbar-dark fixed-top shadow" style ="background-color: #00C5C8;">
      <div class="container">
        <a class="navbar-brand fs-1 fw-bold me-5" href="#">SEWA SEWO</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
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
                <button class="btn btn-secondary dropdown-toggle bg-transparent" type="button" data-bs-toggle="dropdown" aria-expanded="false">
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
    <div class="row">
      <div class="container search-bar ">
        <form class="d-flex justify-content-center col-md-3 mx-6">
          <button class="btn order-1" type="submit" name="button1">
            <div class="img-fluid custom-icon" style="background-color: transparent;">
              <img src="{{ asset('filter.png') }}" class="w-100 h-100" alt="Filter Icon">
            </div>
          </button>
          <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
          <button class="btn btn-outline-success" type="submit" name="button2">
            <div class="img-fluid custom-icon" style="background-color: transparent;">
              <img src="{{ asset('pembesar.png') }}" class="w-100 h-100" alt="Zoom Icon">
            </div>
          </button>
        </form>
      </div>

      <div class="col-md-12">
        <div class="card mb-3 rounded-top">
          <div class="card-body">
            <div class="custom-text">
              <div class="custom-words">Booking moal anjing?</div>
              <div>Harga</div>
            </div>
            <button class="btn btn-primary booking-button">Booking</button>
            <img src="{{ asset('lapbas.jpg') }}" class="card-img-top mb-3 custom-img" alt="Basket Marmer Pak Sarman Image">
            <h4 class="card-title">Lapang Kanjut</h4>
            <p class="card-text">
              Lapang Berbentuk kanjut, yang sangat besar dan fleksibel untuk digunakan.
              Anda dapat menambahkan informasi tambahan di sini sesuai kebutuhan Anda. 
              Ini adalah contoh teks yang panjang untuk menunjukkan batas pada teks.
            </p>
          </div>
        </div>
      </div>
    </div>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>
