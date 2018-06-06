@include('partials.admin._head')
  <!-- Navigation-->
  @include('partials.admin._nav')
  @include('partials.admin._breadcrumbs')
  @include('partials.0partials._messages')

  @yield('content')

  @include('partials.admin._footer')
