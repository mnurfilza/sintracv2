@extends('layouts.app-product')
@section('product')
@include('layouts.navbars.guest.nav')
<div class="">
    <!-- Background putih -->
    <div class="row bg-detail rounded-3 position-relative">
        <div class="container py-5">
            <div class="row">
                <div class="py-5 col-md-12  d-flex flex-column justify-content-center align-items-center bg-image">
                    <h1 class="display-5 fw-bold text-center text-black">{{$hero['title']}}</h1>
                    <p class="fs-5 text-center text-white">{{$hero['text']}}</p>
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
        <div class="col-md-6">
            <img src="{{ asset($detail['image']) }}" åclass="card-img-top" alt="{{ $detail['title'] }}">
        </div>
        <div class="col-md-6">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-sm-12 wrapper-title-product p-2 ">
                        <p class="display-4 ">Toyota Hydraulic</p>
                        <p class="fs-6 text-justify lh-sm">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam semper sollicitudin nibh, ultricies tempor felis pellentesque eu. Curabitur interdum odio justo, eu lacinia libero rutrum id. Aenean quis eleifend ex. Etiam at nisi quam. Donec in sapien ac massa mattis lobortis. Mauris ut tempor felis, id imperdiet orci. 
                          </p>
                    </div>
                    <table class="table">
                      <thead class="table-dark"> 
                        <tr>
                          <th scope="col">#</th>
                          <th scope="col">First</th>
                          <th scope="col">Last</th>
                          <th scope="col">Handle</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <th scope="row">1</th>
                          <td>Mark</td>
                          <td>Otto</td>
                          <td>@mdo</td>
                        </tr>
                        <tr>
                          <th scope="row">2</th>
                          <td>Jacob</td>
                          <td>Thornton</td>
                          <td>@fat</td>
                        </tr>
                        <tr>
                          <th scope="row">3</th>
                          <td colspan="2">Larry the Bird</td>
                          <td>@twitter</td>
                        </tr>
                      </tbody>
                    </table>
                </div>
                <div class="row">
                  <div class="col-md-5 p-3">
                    <p class="fs-3 ">More Detail :</p>

                  </div>

                  <div class="col-md-7 p-3 text-bg-dark">
                    <p class="fs-3 ">Contact info :</p>
                    <div class="container">
                      <div class="row">
                          <div class="text-center">
                            <ul class="list-group list-group-flush">
                              <li class="list-group-item list-group-item-transparent">
                                <i class="fa fa-phone pr-3" aria-hidden="true"></i>&nbsp;&nbsp;+62812 1960 6299</li>
                              <li class="list-group-item list-group-item-transparent">
                                <i class="fa fa-envelope pr-3" aria-hidden="true"></i>&nbsp;&nbsp;sintracindonesia@gmail.com</li>
                            </ul>
                          </div>
                      </div>
                  </div>
                  </div>
                </div>
                
            </div>
            
          </div>
        
    </div>
</div>

<section class="project_section layout_padding" id='project_sections'>
  <div class="container">
    <div class="heading_container">
      <h2>
        Product Support
      </h2>
    </div>
    <div class="carousel-wrap ">
      <div class="filter_box">
        <h6>
          Category filter
        </h6>
        <nav class="owl-filter-bar">
          <a href="#" class="item active" data-owl-filter="*">All</a>
          <a href="#" class="item" data-owl-filter=".materialhandling">Material Handling</a>
          <a href="#" class="item" data-owl-filter=".earthmover">Earth Mover</a>
          <a href="#" class="item" data-owl-filter=".forkliftattachment">Forklift Attachment</a>
          <a href="#" class="item" data-owl-filter=".powergenerator">Power Generator</a>
          <a href="#" class="item" data-owl-filter=".spareparts">spareparts Support</a>
          <a href="#" class="item" data-owl-filter=".pompa">pompa</a>
        </nav>
      </div>

      <div class="owl-carousel project_carousel">
        <div class="item materialhandling">
          <div class="box">
            <div class="img-box">
              <img src="../assets/img/hydraulic_forklift.webp" alt="" />
              <a href="/products/brand/1" class="pin_link">
                <i class="fa fa-link" aria-hidden="true"></i>
              </a>
            </div>
            <div class="detail-box">
              <h5>
                Hydraulic Forklift
              </h5>
              <p>
                alteration in some form, by injected humour, or randomised words which don't look even slightly
                believable. If you are going to use
              </p>
            </div>
          </div>
        </div>
        <div class="item materialhandling">
          <div class="box">
            <div class="img-box">
              <img src="../assets/img/stack_crane.webp" alt="" />
              <a href="/products/brand/2" class="pin_link">
                <i class="fa fa-link" aria-hidden="true"></i>
              </a>
            </div>
            <div class="detail-box">
              <h5>
                Stack Container
              </h5>
              <p>
                alteration in some form, by injected humour, or randomised words which don't look even slightly
                believable. If you are going to use
              </p>
            </div>
          </div>
        </div>
        <div class="item materialhandling">
          <div class="box">
            <div class="img-box">
              <img src="../assets/img/hydraulic_crane.webp" alt="" />
              <a href="/products/brand/3" class="pin_link">
                <i class="fa fa-link" aria-hidden="true"></i>
              </a>
            </div>
            <div class="detail-box">
              <h5>
                Hydraulic Crane
              </h5>
              <p>
                alteration in some form, by injected humour, or randomised words which don't look even slightly
                believable. If you are going to use
              </p>
            </div>
          </div>
        </div>
        <div class="item earthmover">
          <div class="box">
            <div class="img-box">
              <img src="../assets/img/backhoe-loader.webp" alt="" />
              <a href="/products/brand/1" class="pin_link">
                <i class="fa fa-link" aria-hidden="true"></i>
              </a>
            </div>
            <div class="detail-box">
              <h5>
                Backhoe Loader
              </h5>
              <p>
                alteration in some form, by injected humour, or randomised words which don't look even slightly
                believable. If you are going to use
              </p>
            </div>
          </div>
        </div>
        <div class="item earthmover">
          <div class="box">
            <div class="img-box">
              <img src="../assets/img/hydraulic-excavator.webp" alt="" />
              <a href="/products/brand/1" class="pin_link">
                <i class="fa fa-link" aria-hidden="true"></i>
              </a>
            </div>
            <div class="detail-box">
              <h5>
               Hydraulic Excavator
              </h5>
              <p>
                alteration in some form, by injected humour, or randomised words which don't look even slightly
                believable. If you are going to use
              </p>
            </div>
          </div>
        </div>
        <div class="item earthmover">
          <div class="box">
            <div class="img-box">
              <img src="../assets/img/motor-grader.webp" alt="" />
              <a href="/products/brand/1" class="pin_link">
                <i class="fa fa-link" aria-hidden="true"></i>
              </a>
            </div>
            <div class="detail-box">
              <h5>
               Motor Grader
              </h5>
              <p>
                alteration in some form, by injected humour, or randomised words which don't look even slightly
                believable. If you are going to use
              </p>
            </div>
          </div>
        </div>
        <div class="item earthmover">
          <div class="box">
            <div class="img-box">
              <img src="../assets/img/mini-excavator.webp" alt="" />
              <a href="/products/brand/1" class="pin_link">
                <i class="fa fa-link" aria-hidden="true"></i>
              </a>
            </div>
            <div class="detail-box">
              <h5>
               Mini Excavator
              </h5>
              <p>
                alteration in some form, by injected humour, or randomised words which don't look even slightly
                believable. If you are going to use
              </p>
            </div>
          </div>
        </div>
        <div class="item forkliftattachment">
          <div class="box">
            <div class="img-box">
              <img src="../assets/img/project1.jpg" alt="" />
              <a href="" class="pin_link">
                <i class="fa fa-link" aria-hidden="true"></i>
              </a>
            </div>
            <div class="detail-box">
              <h5>
                Forklift Attachement
              </h5>
              <p>
                alteration in some form, by injected humour, or randomised words which don't look even slightly
                believable. If you are going to use
              </p>
            </div>
          </div>
        </div>
        <div class="item powergenerator">
          <div class="box">
            <div class="img-box">
              <img src="../assets/img/power-generetor.webp" alt="" />
              <a href="" class="pin_link">
                <i class="fa fa-link" aria-hidden="true"></i>
              </a>
            </div>
            <div class="detail-box">
              <h5>
                Power Generator
              </h5>
              <p>
                alteration in some form, by injected humour, or randomised words which don't look even slightly
                believable. If you are going to use
              </p>
            </div>
          </div>
        </div>
        <div class="item spareparts">
          <div class="box">
            <div class="img-box">
              <img src="../assets/img/project1.jpg" alt="" />
              <a href="" class="pin_link">
                <i class="fa fa-link" aria-hidden="true"></i>
              </a>
            </div>
            <div class="detail-box">
              <h5>
                Spareparts Supports
              </h5>
              <p>
                alteration in some form, by injected humour, or randomised words which don't look even slightly
                believable. If you are going to use
              </p>
            </div>
          </div>
        </div>
        <div class="item pompa">
          <div class="box">
            <div class="img-box">
              <img src="../assets/img/project1.jpg" alt="" />
              <a href="" class="pin_link">
                <i class="fa fa-link" aria-hidden="true"></i>
              </a>
            </div>
            <div class="detail-box">
              <h5>
               Pompa
              </h5>
              <p>
                alteration in some form, by injected humour, or randomised words which don't look even slightly
                believable. If you are going to use
              </p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<section class="info_section">

  <div class="container">
    <div class="contact_nav">
      <a href="https://wa.me/+6281219606299">
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
            <a href="https://www.instagram.com/sintrac.id?igsh=MTQ3ZDB4MXlnZ2I2cQ==">
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