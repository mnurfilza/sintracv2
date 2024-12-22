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
      <div class="card h-100 small-card">
        <div class="image-container">
          <img src="{{ asset('assets/img/'.$card['thumbnail']) }}" class="card-img-top" alt="{{ $card['name'] }}">
        </div>
        <div class="card-body">
          <h5 class="card-title">{{ $card['name'] }}</h5>
          <p class="card-text">{{ $card['desc'] }}</p>
          <a href="/products/{{ $card['id'] }}" class="btn btn-primary w-100">Explore</a>
        </div>
      </div>
    </div>
    @endforeach
  </div>
</div>
@endforeach

<section class="info_section">

    <div class="container">
      <div class="contact_nav">
        <a href="">
          <i class="fa fa-phone" aria-hidden="true"></i>
          <span>
            Call : 0812 1960 6299
          </span>
        </a>
        <a href="">
          <i class="fa fa-envelope" aria-hidden="true"></i>
          <span>
            Email : sintracindonesia@gmail.com
          </span>
        </a>
        <a href="https://maps.app.goo.gl/vW2kZzTeFdJDGBYVA">
          <i class="fa fa-map-marker" aria-hidden="true"></i>
          <span>
            Ruko Garden Hous BG 1 no 26 , kelurahan lambangjaya, kecamatan tambun selatan , kabupaten bekasi , Jawa barat 17510 
          </span>
        </a>
      </div>

      <div class="info_top ">
        <div class="row info_main_row">
          <div class="col-sm-6 col-md-4 col-lg-3">
            <div class="info_links">
              <h4>
                QUICK LINKS
              </h4>
              <div class="info_links_menu">
                <a class="" href="index.html">Home <span class="sr-only">(current)</span></a>
                <a class="" href="service.html">Services</a>
                <a class="" href="about.html"> About</a>
                <a class="" href="project.html">Project</a>
                <a class="" href="testimonial.html">Testimonial</a>
                <a class="" href="contact.html">Contact Us</a>
              </div>
            </div>
          </div>
          <div class="col-sm-6 col-md-4 col-lg-3 mx-auto">
            <div class="info_post">
              <h5>
                INSTAGRAM FEEDS
              </h5>
              <div class="post_box">
                <div class="img-box">
                  <img src="{{asset('../assets/img/instagram/testi1.jpeg')}}" alt="">
                </div>
                <div class="img-box">
                  <img src="{{asset('../assets/img/instagram/testi2.jpeg')}}"  alt="">
                </div>
                <div class="img-box">
                  <img src="{{asset('../assets/img/instagram/testi3.jpeg')}}"  alt="">
                </div>
                <div class="img-box">
                  <img src="{{asset('../assets/img/instagram.jpg')}}" alt="">
                </div>
                <div class="img-box">
                  <img src="{{asset('../assets/img/instagram.jpg')}}" alt="">
                </div>
                <div class="img-box">
                  <img src="{{asset('../assets/img/instagram.jpg')}}" alt="">
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="info_form">
              <h4>
                SIGN UP TO OUR NEWSLETTER
              </h4>
              <form action="">
                <input type="text" placeholder="Enter Your Email" />
                <button type="submit">
                  Subscribe
                </button>
              </form>
            </div>
          </div>
        </div>
      </div>
      <div class="info_bottom">
        <div class="row">
          <div class="col-md-4">
            <div class="info_logo">
              <a href="">
                <img src="{{asset('../assets/img/sintrac-white.png')}}" alt="" class="footer-logo">
              </a>
            </div>
          </div>
          <div class="col-md-4 ml-auto">
            <div class="social_box">
              <a href="">
                <i class="fa fa-facebook" aria-hidden="true"></i>
              </a>
              <a href="">
                <i class="fa fa-twitter" aria-hidden="true"></i>
              </a>
              <a href="">
                <i class="fa fa-linkedin" aria-hidden="true"></i>
              </a>
              <a href="">
                <i class="fa fa-instagram" aria-hidden="true"></i>
              </a>
            </div>
          </div>
        </div>

      </div>
    </div>
  </section>
  <!-- end info_section -->


  <!-- footer section -->
  <footer class="footer_section">
    <div class="container">
      <p>
        &copy; <span id="displayYear"></span> All Rights Reserved By
        <a href="https://html.design/">PT. Sintrac Niaga Indonesia</a>
      </p>
    </div>
  </footer>
@endsection