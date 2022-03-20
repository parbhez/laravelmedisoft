@include('_partials.top')

@include('_partials.header')
  <!-- Full Width Column -->
  <div class="content-wrapper">
    <div class="container">
      @yield('header-content')

       @yield('content')
    </div>
    <!-- /.container -->
  </div>
  <!-- /.content-wrapper -->
  @include('_partials.footer')

<!-- ./wrapper -->

  @yield('script')
@include('_partials.bottom')