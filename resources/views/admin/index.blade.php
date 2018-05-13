@extends('layouts.admin')

  @section('content')
      @include('partials.admin.cars._add-car')
      <!-- Icon Cards-->
      {{-- @include('partials.admin._icon-cards') --}}
      <!-- Area Chart Example-->
      {{-- @include('partials.admin._area-chart') --}}
      {{-- @include('partials.admin._bar-chart') --}}
          <!-- Card Columns Example Social Feed-->
          {{-- @include('partials.admin._social-feed') --}}
          {{-- @include('partials.admin._social-card') --}}
            <!-- Example Social Card-->
            {{-- @include('partials.admin._social-card2') --}}
            <!-- Example Social Card-->
            {{-- @include('partials.admin._social-card3') --}}
            <!-- Example Social Card-->
            {{-- @include('partials.admin._social-card4') --}}
            <!-- end of card columns -->
        {{-- @include('partials.admin._pie-chart') --}}
          <!-- Example Notifications Card-->
        {{-- @include('partials.admin._notifications-card') --}}
      <!-- Example DataTables Card-->
      {{-- @include('partials.admin._data-tables-card') --}}
    <!-- /.container-fluid-->
    <!-- /.content-wrapper-->
  @endsection
