<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Sewa Sewo</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css"
    integrity="sha512-xrZr44l54tfjkER8mKu+IqU77z4sGWu+TByfHTtqjL2z7WBRl9/p3a1NVrqdkX0fFU4PXVcO8A00vf5B6aSppQ=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr@4.6.6/dist/flatpickr.min.css" />
  <script src="https://cdn.jsdelivr.net/npm/flatpickr@4.6.6/dist/flatpickr.min.js"></script>
  <style>
    /* ... (styles remain unchanged) ... */
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
    <div class="row">
        </form>
      <div class="col-md-4">
        <div class="card mb-3 rounded-top">
          <div class="card-body">
            <img src="{{ asset('lapbas.jpg') }}" class="card-img-top mb-3 custom-img"
              alt="Basket Marmer Pak Sarman Image">
            <h4 class="card-title">namaToko </h4>
            <p class="card-text">deskripsiToko</p>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Additional content for transaction page -->
  <div class="container content-box mt-5">
    <h2>Transaction Details - Field Rental</h2>

    <!-- Transaction details form -->
    <form>
      <div class="mb-3">
        <label for="fieldName" class="form-label">Field Name</label>
        <select class="form-select" id="fieldName" required>
          <option value="">Select Field</option>
          <option value="field1">Field 1</option>
          <option value="field2">Field 2</option>
          <!-- Add more options based on your available fields -->
        </select>
      </div>
      <div class="mb-3">
        <label for="date" class="form-label">Date</label>
        <input type="text" class="form-control" id="date" placeholder="Select Date" readonly required>
      </div>
      <div class="mb-3">
        <label for="startTime" class="form-label">Start Time</label>
        <input type="text" class="form-control" id="startTime" placeholder="Select Start Time" readonly required>
      </div>
      <div class="mb-3">
        <label for="endTime" class="form-label">End Time</label>
        <input type="text" class="form-control" id="endTime" placeholder="Select End Time" readonly required>
      </div>
      <div class="mb-3">
        <label for="totalAmount" class="form-label">Total Amount</label>
        <input type="text" class="form-control" id="totalAmount" placeholder="Enter total amount" readonly required>
      </div>
      <button type="submit" class="btn btn-primary">Submit Booking</button>
    </form>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
  </script>
  <script>
    function showDatePicker() {
      flatpickr("#selectedDate", {
        enableTime: false,
        dateFormat: "Y-m-d",
        onClose: function (selectedDates, dateStr, instance) {
          document.getElementById('selectedDateTimeInfo').innerHTML = "Selected Date: " + dateStr;
        }
      }).open();
    }

    function showTimePicker() {
      flatpickr("#selectedDate", {
        enableTime: true,
        noCalendar: true,
        dateFormat: "H:i",
        onClose: function (selectedDates, dateStr, instance) {
          document.getElementById('selectedDateTimeInfo').innerHTML = "Selected Time: " + dateStr;
        }
      }).open();
    }
  </script>
</body>

</html>
