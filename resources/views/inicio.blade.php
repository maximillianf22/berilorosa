@extends('layout.index')

@section('title', 'Inicio')

@section('content')
  

<!-- Page Content -->
<header style=" height: 65vh" class="shadow">
    <div class="carousel-inner" role="listbox" style=" height: 65vh">
      <!-- Slide One - Set the background image for this slide in the line below -->
      <div class="carousel-item active" style="background-image: url('{{asset('assets/img/ill/header.jpg')}}');  height: 70vh;">
        <div class="container-fluid shape-container d-flex align-items-center py-lg">
          <div class="col px-0">
            <div class="row d-flex justify-content-end">
              <div class="col-lg-4 mr-5 ">
                  <img src="{{asset('assets/img/theme/header-text.png')}}" class="d-none d-sm-none d-md-block d-lg-block mt-4" style="height: 24vh">
                </div>
              </div>
            </div>
          </div>
      </div>
    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
  </div>
</header>

<div class="container mt-5">
    <h2 class="font-weight-bold text-dark text-uppercase text-center d-none d-sm-none d-md-block d-lg-block">
      <img src="{{asset('assets/img/theme/em-1.png')}}">
      Lo más vendido
      <img src="{{asset('assets/img/theme/em-2.png')}}">
    </h2>
    <h2 class="font-weight-bold text-dark text-uppercase text-center d-sm-block d-md-none d-lg-none">
      Lo más vendido
    </h2>
<div class="col-12 col-md-12 bg-white">
  <div class="row row-cols-1 row-cols-md-3">
      <div class="owl-carousel owl-head owl-theme owl-loaded owl-drag">
      <div class="owl-stage-outer">
      <div class="owl-stage">

          <div class="owl-item col-lg-4 col-md-3 col-sm-4 col-6 p-0" data-animation="zooming">
          <div class="item">
            <div class="card-product m-0">
                <div class="card-image">
                  <a type="button" data-toggle="modal" data-target=".bd-example-modal-lg">
                    <img src="{{asset('assets/img/theme/slides/slide-1.jpg')}}" alt="..." class="shadow">
                  </a>
                </div>
              </div>
            </div>
          </div>
         
          <div class="owl-item col-lg-4 col-md-3 col-sm-4 col-6 p-0" data-animation="zooming">
          <div class="item">
            <div class="card-product m-0">
                <div class="card-image">
                  <a type="button" data-toggle="modal" data-target=".bd-example-modal-lg">
                    <img src="{{asset('assets/img/theme/slides/slide-2.jpg')}}" alt="..." class="shadow">
                  </a>
                </div>
              </div>
            </div>
          </div>
          <div class="owl-item col-lg-4 col-md-3 col-sm-4 col-6 p-0" data-animation="zooming">
          <div class="item">
            <div class="card-product m-0">
              <div class="card-image">
                <a type="button" data-toggle="modal" data-target=".bd-example-modal-lg">
                  <img src="{{asset('assets/img/theme/slides/slide-3.jpg')}}" alt="..." class="shadow">
                </a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  </div>
</div>
</div>

<div class="container-fluid mt-5 p-4 shadow-sm" style="background-color: #ffe3e9;">
    <h2 class="font-weight-bold text-dark text-uppercase text-center text-nowrap d-none d-sm-none d-md-block d-lg-block">
      <img src="{{asset('assets/img/theme/em-1.png')}}" >
        BLOG
      <img src="{{asset('assets/img/theme/em-2.png')}}">
    </h2>
    <h2 class="font-weight-bold text-dark text-uppercase text-center text-nowrap d-sm-block d-md-none d-lg-none">
        BLOG
    </h2>

    <div class="container">
      <div class="row">
        <div class="col-md-3  py-lg">
          <img src="{{asset('assets/img/theme/blog.png')}}">
        </div>
        <div class="col-md-3 ">
          <div class="card">
            <div class="card-body">
              <p>Lorem Ipsum is simply
              dummy text of the
              printing and typesetting
              industry. Lorem Ipsum
              has been the industry’s
              standard dummy text
              ever since the 1500s,
              when an unknown
              printer took a galley of
              type and scrambled it to
              make a type specimen
              book. It has survived not
              only five centuries, but</p>
              <h6 class="text-pink font-weight-bold">What is Lorem Ipsum?</h6>
            </div>
          </div>
        </div>
        <div class="col-md-3 ">
          <div class="card">
            <div class="card-body">
              <p>Lorem Ipsum is simply
              dummy text of the
              printing and typesetting
              industry. Lorem Ipsum
              has been the industry’s
              standard dummy text
              ever since the 1500s,
              when an unknown
              printer took a galley of
              type and scrambled it to
              make a type specimen
              book. It has survived not
              only five centuries, but</p>
              <h6 class="text-pink font-weight-bold">What is Lorem Ipsum?</h6>
            </div>
          </div>
        </div>
        <div class="col-md-3 ">
          <div class="card">
            <div class="card-body">
              <p>Lorem Ipsum is simply
              dummy text of the
              printing and typesetting
              industry. Lorem Ipsum
              has been the industry’s
              standard dummy text
              ever since the 1500s,
              when an unknown
              printer took a galley of
              type and scrambled it to
              make a type specimen
              book. It has survived not
              only five centuries, but</p>
              <h6 class="text-pink font-weight-bold">What is Lorem Ipsum?</h6>
            </div>
          </div>
        </div>
      </div>
    </div>
</div>

<div class="container-fluid p-0 m-0">
<div class="col-12 col-md-12 bg-white">
  <div class="row row-cols-1 row-cols-md-3">
      <div class="owl-carousel owl-foot owl-theme owl-loaded owl-drag">
      <div class="owl-stage-outer">
      <div class="owl-stage">
          <div class="owl-item col-lg-4 col-md-3 col-sm-4 col-6 p-0 m-0" data-animation="zooming">
          <div class="item p-0 m-0">
            <div class="card-product m-0 p-0">
                <div class="card-image p-0 m-0">
                  <a type="button" data-toggle="modal" data-target=".bd-example-modal-lg">
                    <img src="{{asset('assets/img/theme/slides/slide1.png')}}" alt="...">
                  </a>
                </div>
              </div>
            </div>
          </div>
          <div class="owl-item col-lg-4 col-md-3 col-sm-4 col-6 p-0 m-0" data-animation="zooming">
          <div class="item p-0 m-0">
            <div class="card-product m-0 p-0">
                <div class="card-image p-0 m-0">
                  <a type="button" data-toggle="modal" data-target=".bd-example-modal-lg">
                    <img src="{{asset('assets/img/theme/slides/slide2.png')}}" alt="...">
                  </a>
                </div>
              </div>
            </div>
          </div>
          <div class="owl-item col-lg-4 col-md-3 col-sm-4 col-6 p-0 m-0" data-animation="zooming">
          <div class="item p-0 m-0">
            <div class="card-product m-0 p-0">
                <div class="card-image p-0 m-0">
                  <a type="button" data-toggle="modal" data-target=".bd-example-modal-lg">
                    <img src="{{asset('assets/img/theme/slides/slide3.png')}}" alt="...">
                  </a>
                </div>
              </div>
            </div>
          </div>
          <div class="owl-item col-lg-4 col-md-3 col-sm-4 col-6 p-0 m-0" data-animation="zooming">
          <div class="item p-0 m-0">
            <div class="card-product m-0 m-0">
              <div class="card-image p-0 m-0">
                <a type="button" data-toggle="modal" data-target=".bd-example-modal-lg">
                  <img src="{{asset('assets/img/theme/slides/slide4.png')}}" alt="...">
                </a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  </div>
</div>
</div>
@endsection


@section('js')
   <script> 
    $('.owl-head').owlCarousel({
        loop: true,
        margin: 10,
        autoplay: true,
        autoplayTimeout: 4000,
        autoplayHoverPause: true,
        responsiveClass: true,
        responsive: {
            0: {
                items: 1,
                loop: true,
                nav: true
            },
            600: {
                items: 3,
                loop: true,
                nav: false
            },
            1100: {
                items: 4,
                loop: true,
                nav: false
            }

        }
    })

    $('.owl-foot').owlCarousel({
        loop: true,
        margin: 0,
        autoplay: true,
        autoplayTimeout: 4000,
        autoplayHoverPause: true,
        responsiveClass: true,
        responsive: {
            0: {
                items: 1,
                loop: true,
                nav: true
            },
            600: {
                items: 3,
                loop: true,
                nav: false
            },
            1100: {
                items: 7,
                loop: true,
                nav: false
            }

        }
    })
  </script>
@endsection