@extends('layouts.master')

@section('content')
  {{-- @include('partials._rev_slider') --}}
  @include('partials._bootstrap_slider')
  {{-- <div class="clearfix h-100" style="display:block; z-index:99999"></div> --}}

  @include('partials._4_panel')
  {{-- @include('partials._welcome') --}}
  {{-- @include('partials._counter') --}}
  {{-- <div class="clearfix h-100" style="display:block; z-index:99999"></div> --}}

  @include('partials._mission')

  @include('partials._parallax_msg')
  {{-- @include('partials._featured_car') --}}


  {{-- @include('partials._custom_block') --}}

  {{-- @include('partials._latest_news') --}}

  <div class="margin-btn" style="margin-bottom:3em;">
    {{-- @include('partials._content_box') --}}
  </div>

  <div class="margin-btn" style="margin-bottom:3em;">
    {{-- @include('partials._play_video') --}}
  </div>

  @include('partials._isotope_menu')




  {{-- @include('partials._testimonial') --}}
@endsection
