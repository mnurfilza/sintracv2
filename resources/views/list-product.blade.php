@extends('layouts.app-product')
@section('products')
@include('layouts.navbars.guest.nav')
<div class="">
    <!-- Background putih -->
    <div class="row bg-product rounded-3 position-relative">
      <div class="container py-5">
          <div class="row">
              <div class="col-md-6 d-flex flex-column justify-content-center align-items-center bg-image py-4">
                  <h1 class="display-5 fw-bold text-center text-black">{{ $hero['title'] }}</h1>
                  <p class="fs-5 text-center text-white">{{ $hero['text'] }}</p>
              </div>
              <div class="col-md-6 d-flex justify-content-center align-items-center">
                  <img src="{{ $hero['image'] }}" alt="Hydraulic Forklift" class="img-fluid rounded">
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
  <div class="row g-4">
      @foreach ($cards as $card)
          <div class="col-lg-4 col-md-6 col-sm-12">
              <div class="card h-100">
                  <img src="{{ $card['image'] }}" class="card-img-top img-fluid" alt="{{ $card['title'] }}">
                  <div class="card-body">
                      <h5 class="card-title">{{ $card['title'] }}</h5>
                      <p class="card-text">{{ $card['text'] }}</p>
                      <a href="/products/brand/{{ $card['brand_id'] }}" class="btn btn-primary w-100">Go somewhere</a>
                  </div>
              </div>
          </div>
      @endforeach
  </div>
</div>

<section class="info_section ">

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
                  <img src="../assets/img/instagram/testi1.jpeg" alt="">
                </div>
                <div class="img-box">
                  <img src="../assets/img/instagram/testi2.jpeg  " alt="">
                </div>
                <div class="img-box">
                  <img src="../assets/img/instagram/testi3.jpeg" alt="">
                </div>
                <div class="img-box">
                  <img src="../assets/img/instagram.jpg" alt="">
                </div>
                <div class="img-box">
                  <img src="../assets/img/instagram.jpg" alt="">
                </div>
                <div class="img-box">
                  <img src="../assets/img/instagram.jpg" alt="">
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
                <img src="../assets/img/sintrac-white.png" alt="" class="footer-logo">
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