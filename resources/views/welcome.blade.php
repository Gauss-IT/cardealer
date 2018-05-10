@extends('layouts.master')

  @section('content')
    @include('partials._header-carousel')

    <!-- About Section Start -->
    @include('partials._about')
    <!-- About Section End -->

    <!-- Services Section Start -->
    @include('partials._services')
    <!-- Services Section End -->

    <!-- Portfolio Section -->
    @include('partials._portfolio')
    <!-- Portfolio Section Ends -->

    <!-- Why Section Start -->
    @include('partials._why')
    <!-- Why Section End -->

    <!-- Team Section Start  -->
    @include('partials._team')
    <!-- Team Section End  -->

    <!-- Start Get-Strted Section -->
    @include('partials._get-started')
    <!-- End Get-Strted Section -->

    <!-- Start Pricing Table Section -->
    @include('partials._pricing')
    <!-- End Pricing Table Section -->

    <!-- Contact Section Start -->
    @include('partials._contact')
    <!-- Contact Section End -->

    <!-- Contact Icon Start -->
    @include('partials._contact-icon')
    <!-- Contact Icon End -->

  @endsection
