<!DOCTYPE html>
<html lang="en">
  @include('layouts/frontend/includes/head')
  <body class="{{ $class ?? '' }}">
    @include('layouts/frontend/includes/header')
      @yield('content')
    @include('layouts/frontend/includes/footer')
  </body>

</html>
