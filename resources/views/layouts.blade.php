<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>SS | {{$title}} </title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" integrity="sha512-xrZr44l54tfjkER8mKu+IqU77z4sGWu+TByfHTtqjL2z7WBRl9/p3a1NVrqdkX0fFU4PXVcO8A00vf5B6aSppQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  <style>
    .content-box {
      background-color: #FFFFFF;
      padding: 20px;
      margin-top: 20px;
      border-radius: 8px;
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
      text-align: justify
    }

    .custom-icon {
      width: 20px; /* Set your desired width */
      height: auto; /* Maintain aspect ratio */
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
              <a class="nav-link" href="/home">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="/sewa">Penyewaan</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="/tutorial">Tata Cara</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="/faq">FAQ</a>
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
  @yield('isi')
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
  </script>
  </body>
</html>
