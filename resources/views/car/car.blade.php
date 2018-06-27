@extends('layouts.master')

@section('content')
  <div class="row">
    <div class="col-xs-12 col-sm-12 col-md-3 col-lg-3">
      <button class="red-bg-btn">all stock</button>
    </div>
  </div>
  <div class="row">
    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-8">
      @include('partials._single_car_carousel')
    </div>
  </div>
@endsection()
