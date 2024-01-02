@extends('layouts')

@section('isi')
<style>

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

</style>

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

@foreach ($toko as $t)
    <div class="col-md-4">
      <div class="card mb-3 rounded-top">
        <div class="card-body">
          <img src="{{ asset('lapbas.jpg') }}" class="card-img-top mb-3 custom-img" alt="Basket Marmer Pak Sarman Image">
          <h4 class="card-title">{{ $t->namaToko }} </h4>
          <p class="card-text">{{ $t->deskripsiToko }}</p>
        </div>
      </div>
    </div>
    @endforeach
  </div>
</div>
