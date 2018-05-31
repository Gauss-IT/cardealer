@extends('layouts.master')

@section('content')
  @include('partials._rev_slider')

  {{-- @include('partials._welcome') --}}
  @include('partials._counter')

  @include('partials._featured_car')


  {{-- @include('partials._custom_block') --}}

  {{-- @include('partials._latest_news') --}}

  <div class="margin-btn" style="margin-bottom:3em;">
    @include('partials._content_box')
  </div>

  <div class="margin-btn" style="margin-bottom:3em;">
    @include('partials._play_video')
  </div>

  @include('partials._isotope_menu')




  {{-- @include('partials._testimonial') --}}
@endsection
