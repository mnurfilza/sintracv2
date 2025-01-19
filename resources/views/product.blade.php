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

 
@endsection