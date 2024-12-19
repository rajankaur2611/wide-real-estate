<!DOCTYPE html>
<html lang="en">
  @include('layouts/frontend/includes/head')
  <body class="{{ $class ?? '' }}">
    @include('layouts/frontend/includes/header')
      @yield('content')
    @include('layouts/frontend/includes/footer')

    <script src="{{url('assets/js/plugins/jquery-3.7.1.min.js')}}" ></script>
    <script src="{{url('assets/js/plugins/slick.min.js')}}" ></script>
    @vite(['resources/js/common.js']) 
  </body>

</html>
