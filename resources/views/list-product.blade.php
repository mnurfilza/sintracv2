@extends('layouts.app')
@section('products')
@include('layouts.navbars.guest.nav')
<div class="">
    <!-- Background putih -->
    <div class="row bg-product rounded-3 position-relative">
        <div class="container py-5">
            <div class="row">
                <div class="py-5 col-md-6  d-flex flex-column justify-content-center align-items-center bg-image">
                    <h1 class="display-5 fw-bold text-center text-black">{{$hero['title']}}</h1>
                    <p class="fs-5 text-center text-white">{{$hero['text']}}</p>
                </div>
                <div class="z-3 image-wrapper ">
                    <img src="{{$hero['image']}}" alt="Hydraulic Forklift" class="img-fluid">
                </div>
            </div>
        </div>
    </div>
    
    <!-- Background oranye -->
    <div class="bg-orange position-relative" style="height: 200px;">
    </div>
    <!-- Gambar di tengah -->
</div>

<div class="container">
    <div class="row">
        @foreach ($cards as $card)
            <div class="col-md-4 mb-4">
                <div class="card" style="width: 18rem;">
                    <img src="{{ $card['image'] }}" class="card-img-top" alt="{{ $card['title'] }}">
                    <div class="card-body">
                        <h5 class="card-title">{{ $card['title'] }}</h5>
                        <p class="card-text">{{ $card['text'] }}</p>
                        <a href="{{ $card['link'] }}" class="btn btn-primary">Go somewhere</a>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>


@endsection