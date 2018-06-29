@extends('layouts.master')

@section('content')
  <div class="container-fluid margin-fluid">
    <div class="row">
      <div class="col-xs-12 col-sm-12 col-md-3 col-lg-3">
        <button class="red-bg-btn">all stock</button>
      </div>
    </div>
    <div class="row">
      <div class="col-xs-12 col-sm-12 col-md-12 col-lg-9">
        @include('partials._single_car_carousel')
      </div>
      <div class="col-xs-12 col-sm-12 col-md-12 col-lg-3">
          @include('partials._car_summary')
      </div>
    </div>
  </div>
@endsection()
