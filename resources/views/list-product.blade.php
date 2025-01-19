@extends('layouts.app-product')
@section('brands')
@include('layouts.navbars.guest.nav')
@foreach ($data as $item)

<div class="">
    <!-- Background putih -->
    <div class="row bg-product rounded-3 position-relative">
      <div class="container py-5">
          <div class="row">
              <div class="col-md-6 d-flex flex-column justify-content-center align-items-center bg-image py-4">
                  <h1 class="display-5 fw-bold text-center text-black">{{ $item['title'] }}</h1>
                  <p class="fs-5 text-center text-white">{{ $item['text'] }}</p>
              </div>
              <div class="col-md-6 d-flex justify-content-center align-items-center">
                  <img src="{{ asset('assets/img/'.$item['image']) }}" alt="Hydraulic Forklift" class="img-fluid rounded">
              </div>
          </div>
      </div>
  </div>
    
    <!-- Background oranye -->
    <div class="bg-orange position-relative" style="height: 90px;">
    </div>
    <!-- Gambar di tengah -->
</div>

<div class="container">
  <nav aria-label="breadcrumb" class="d-flex justify-content-end">
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="#">Home</a></li>
      <li class="breadcrumb-item active" aria-current="page">Products</li>
      <li class="breadcrumb-item active" aria-current="page">{{ $item['title'] }}</li>

    </ol>
  </nav>
</div>

<div class="container section-title aos-init aos-animate" data-aos="fade-up">
  <h2>{{ $item['title'] }}</h2>
  <p>Sample Our Products Partner</p>
</div>

<div class="container">
  <div class="row">
    <div class="mb-6">
      <p> Showing Result : {{count($item['product'])}}
    </div>
  </div>
</div>

<div class="container mb-5">
  <div class="row g-4">
    @foreach ($item['product'] as $card)
      <div class="col-lg-4 col-md-6 col-sm-12">
        <div class="card h-100">
          <!-- Gambar dengan ukuran tetap -->
          <img src="{{ asset('assets/img/'.$card['image']) }}" class="card-img-top img-fluid" alt="{{ $card['title'] }}">
          <div class="card-body">
            <h5 class="card-title">{{ $card['title'] }}</h5>
            <!-- Deskripsi pendek -->
            <p class="card-text">{{ $card['text'] }}</p>
            <a href="/products/brand/type/{{ $card['id'] }}" class="btn btn-primary w-100">Go somewhere</a>
          </div>
        </div>
      </div>
    @endforeach
  </div>
</div>
@endforeach


@endsection