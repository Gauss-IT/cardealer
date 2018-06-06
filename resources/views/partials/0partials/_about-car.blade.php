{{$car}}

{{-- <section id="about" class="section">
  <div class="container">
    <div class="section-header">
      <h3 class="section-subtitle wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="300ms">{{$car->model}}</h3>
      <h2 class="section-title wow fadeInUp light-title" data-wow-duration="1000ms" data-wow-delay="300ms">{{$car->brand->name}}</h2>
    </div>
    <div class="d-block d-md-none d-lg-none sm-featured">
      <img src="{{asset('images/cars/' . $car->featuredimage)}}" class="img-fluid" style="background-color: rgba(150, 150, 150, 0);">
    </div>
    <div class="row">
      <div class="col-md-6 wow fadeInLeft" data-wow-duration="1000ms" data-wow-delay="300ms">
        <div class="row">
          <div class="col-xs-12 col-sm-12 col-md-6 col-lg-3">
            <p>Motor Capacity: {{$car->motorcapacity}} cm<sup>3</sup></p>
          </div>
          <div class="col-xs-12 col-sm-12 col-md-6 col-lg-3 col-md-offset-2">
            <p>Power: {{$car->power}} BHP</p>
            <p>Model: {{$car->brand->name}} {{$car->model}}</p>
          </div>
        </div>
        <div class="row">
          <div class="col-xs-12 col-sm-12 col-md-6 col-lg-3">
            <p>Body Type: {{$car->bodytype}}</p>
          </div>
          <div class="col-xs-12 col-sm-12 col-md-6 col-lg-3 col-md-offset-2">
            <p>Gearbox Type: {{$car->gearboxtype}}</p>
          </div>
        </div>
        <div class="row">
          <div class="col-xs-12 col-sm-12 col-md-6 col-lg-3">
            <p>CO2 Emmision: {{$car->co2emmision}}</p>
          </div>
          <div class="col-xs-12 col-sm-12 col-md-6 col-lg-3 col-md-offset-2">
            <p>Location: {{$car->location}}</p>
          </div>
        </div>
        <div class="row">
          <div class="col-xs-12 col-sm-12 col-md-6 col-lg-3">
            <p>Color: {{$car->color}}</p>
          </div>
        </div>
      </div>
    </div>
    <div class="counters">
      <div class="row">
        <div class="col-sm-6 col-md-3 col-lg-3">
          <div class="wow fadeInUp" data-wow-delay=".2s">
            @if(isset($car->topspeed))
              <div class="facts-item">
                <div class="fact-count">
                  <h3><span class="counter">{{$car->topspeed}}</span></h3>
                  <h4>Top Speed</h4>
                </div>
              </div>
            @endif
          </div>
        </div>
        <div class="col-sm-6 col-md-3 col-lg-3">
          <div class="wow fadeInUp" data-wow-delay=".4s">
            @if(isset($car->acceleration))
              <div class="facts-item">
                <div class="fact-count">
                  <h3><span class="counter">{{$car->acceleration}}</span><span> s</span></h3>
                  <h4>0 - 100 km/h</h4>
                </div>
              </div>
            @endif
          </div>
        </div>
        <div class="col-sm-6 col-md-3 col-lg-3">
          <div class="wow fadeInUp" data-wow-delay=".6s">
            <div class="facts-item">
              <div class="fact-count">
                <h3><span class="counter">{{$car->motorcapacity}}</span><span> cm<sup>3</sup></span></h3>
                <h4>Motor Capacity</h4>
              </div>
            </div>
          </div>
        </div>
        <div class="col-sm-6 col-md-3 col-lg-3">
          <div class="wow fadeInUp" data-wow-delay=".8s">
            <div class="facts-item">
              <div class="fact-count">
                <h3><span class="counter">{{$car->power}}</span><span> BHP</span></h3>
                <h4>Power</h4>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="img-about-out" style="background-color: rgba(150, 150, 150, 0);">
    <img src="{{asset('images/cars/' . $car->featuredimage)}}" style="background-color: rgba(150, 150, 150, 0);" alt="">
  </div>

  <div class="container">
    <div class="row justify-content-md-center">
      <div class="col-md-10">
        <div class="carousel-slider owl-carousel owl-theme">
          < $first=true; ?>
          @foreach($galleryimages as $gi)
            @if($gi != "")
              <div class="{{$first ? 'item active' : 'item'}}">
                <div class="contents text-center">
                  <img src="{{asset('images/cars/' . $gi)}}" class="img-fluid" > <!--style="max-height:400px;" -->
                </div>
              </div>
              < $first = false; ?>
            @endif
          @endforeach
        </div>
      </div>
    </div>
  </div>

</section> --}}
