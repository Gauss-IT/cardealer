@extends('layouts.master')

  @section('content')
    @include('partials._header-carousel')

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
        </div>
        <?php $car_count++; ?>
      @endforeach
    </div>

    <!-- About Section Start -->
    {{-- @include('partials._about') --}}
    <!-- About Section End -->

    <!-- Services Section Start -->
    {{-- @include('partials._services') --}}
    <!-- Services Section End -->

    <!-- Portfolio Section -->
    {{-- @include('partials._portfolio') --}}
    <!-- Portfolio Section Ends -->

    <!-- Why Section Start -->
    {{-- @include('partials._why') --}}
    <!-- Why Section End -->

    <!-- Team Section Start  -->
    {{-- @include('partials._team') --}}
    <!-- Team Section End  -->

    <!-- Start Get-Strted Section -->
    {{-- @include('partials._get-started') --}}
    <!-- End Get-Strted Section -->

    <!-- Start Pricing Table Section -->
    {{-- @include('partials._pricing') --}}
    <!-- End Pricing Table Section -->

    <!-- Contact Section Start -->
    @include('partials._contact')
    <!-- Contact Section End -->

    <!-- Contact Icon Start -->
    {{-- @include('partials._contact-icon') --}}
    <!-- Contact Icon End -->

  @endsection
