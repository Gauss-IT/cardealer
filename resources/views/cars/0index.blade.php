@extends('layouts.master')

@section('content')
  <div style="margin-top:20%; color:#666;" class="container car-gallery">
    <?php $car_count=0; $first=true; ?>
    @foreach($cars as $car)
      @if($car_count % 3 == 0)
        @if($first == false)
          </div>
        @endif
        <?php $first = false; ?>
        <div class="card-deck">
      @endif
        <div class="card car-card">
          <a class="card car-card" style="padding:0;" href="{{route('cars.show', $car->id)}}">
          <img src="{{asset('images/cars/' . $car->featuredimage)}}" alt="{{$car->model}}" class="card-img-top">
            <div class="card-body">
              <h1 class="card-title">{{$car->model}}</h1>
              <p class="card-text">Motor Capacity: {{$car->motorcapacity}}</p>
              <p class="card-text">Power: {{$car->power}}</p>
              <p class="card-text">Body Type: {{$car->bodytype}}</p>
              <p class="card-text">Gearbox Type: {{$car->gearboxtype}}</p>
              <p class="card-text">CO2 Emmision: {{$car->co2emmision}}</p>
              <p class="card-text">Location: {{$car->location}}</p>
              <p class="card-text">Color: {{$car->color}}</p>
            </div>
          </a>
        </div>
      <?php $car_count++; ?>
    @endforeach
    {{-- <div class="card-deck">
      <div class="card">
        <img class="card-img-top" src="https://hips.hearstapps.com/amv-prod-cad-assets.s3.amazonaws.com/wp-content/uploads/2018/02/BMW-X3.jpg" alt="Card image cap">
        <div class="card-body">
          <h1 class="card-title">Car1</h1>
          <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
          <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
        </div>
      </div>
      <div class="card">
        <img class="card-img-top" src="https://media.wired.com/photos/59b1a378a0df4b47dcf7ccb0/master/w_2400,c_limit/LamborghiniRoadsterTA.jpg" alt="Card image cap">
        <div class="card-body">
          <h5 class="card-title">Car2</h5>
          <p class="card-text">This card has supporting text below as a natural lead-in to additional content.</p>
          <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
        </div>
      </div>
      <div class="card">
        <img class="card-img-top" src="http://st.motortrend.com/uploads/sites/5/2017/11/2019-Chevrolet-Corvette-ZR1-front-side-view-on-stage.jpg?interpolation=lanczos-none&fit=around|660:438" alt="Card image cap">
        <div class="card-body">
          <h5 class="card-title">Card title</h5>
          <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This card has even longer content than the first to show that equal height action.</p>
          <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
        </div>
      </div>
    </div> --}}
  </div>

@endsection
