<div class="main-carousel-container">
  <div id="carouselExampleIndicators" style="position: relative;" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
      <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
      <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
      <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner">
      <div class="carousel-item carousel-full active">
        <img class="w-100 slider-img" src="{{asset('images/main_slider/1.jpg')}}" alt="First slide">
        <div class="carousel-caption d-none d-md-block main-slider-content">
          <h1 style="color:#fff !important;">always 250 new premium car models available</h1>
          {{-- <p>slide 1/3</p> --}}
          <button>show stock</button>
        </div>
      </div>
      <div class="w-100 carousel-item carousel-full">
        <img class="w-100 slider-img" src="{{asset('images/main_slider/2.jpg')}}" alt="Second slide">
        <div class="carousel-caption d-none d-md-block main-slider-content">
          <h1 style="color:#fff !important;">always 250 new premium car models available</h1>
          {{-- <p>slide 2/3</p> --}}
          <button>show stock</button>
        </div>
      </div>
      <div class="w-100 carousel-item carousel-full">
        <img class="w-100 slider-img" src="{{asset('images/main_slider/3.jpg')}}" alt="Third slide">
        <div class="carousel-caption d-none d-md-block main-slider-content">
          <h1 style="color:#fff !important;">always 250 new premium car models available</h1>
          {{-- <p>slide 3/3</p> --}}
          <button>show stock</button>
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
</div>
