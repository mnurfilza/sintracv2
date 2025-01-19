@extends('layouts.app-product')
@section('products')
@include('layouts.navbars.guest.nav')

@foreach ($data as $subCategory)

<div class="">
    <!-- Background putih -->
    <div class="row bg-product rounded-3 position-relative">
      <div class="container py-5">
          <div class="row">
              <div class="col-md-6 d-flex flex-column justify-content-center align-items-center bg-image py-4">
                  <h1 class="display-5 fw-bold text-center text-black">{{ $subCategory['title'] }}</h1>
                  <p class="fs-5 text-center text-white">{{ $subCategory['desc'] }}</p>
              </div>
              <div class="col-md-6 d-flex justify-content-center align-items-center">
                  <img src="{{ asset('assets/img/'.$subCategory['thumbnail']) }}" alt="Hydraulic Forklift" class="img-fluid rounded">
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
    </ol>
  </nav>
</div>

<div class="container section-title aos-init aos-animate" data-aos="fade-up">
  <h2>{{ $subCategory['title'] }}</h2>
  <p>Sample Our Products Partner</p>
</div>

<div class="container mb-5">
  <div class="row g-4">
    @foreach ($subCategory['brand'] as $card)
    <div class="col-lg-4 col-md-6 col-sm-12">
      <div class="card h-100 dynamic-card">
        <div class="image-container">
          <img src="{{ asset('assets/img/'.$card['thumbnail']) }}" class="card-img-top" alt="{{ $card['name'] }}">
        </div>
        <div class="card-body d-flex flex-column">
          <h5 class="card-title">{{ $card['name'] }}</h5>
          <p class="card-text">{{ $card['desc'] }}</p>
          <!-- Spacer untuk mendorong tombol ke bawah -->
          <div class="mt-auto">
            <a href="/products/{{ $card['id'] }}" class="btn btn-primary w-100">Explore</a>
          </div>
        </div>
      </div>
    </div>
    @endforeach
  </div>
</div>
@endforeach


@endsection