<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Bootstrap 101 Template</title>

    <!-- Bootstrap -->
    @section('css')
      <link href="{{ asset('css/app.css') }}" rel="stylesheet">
      <link href="{{ asset('css/costum.css') }}" rel="stylesheet">
      <link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap-glyphicons.css" rel="stylesheet">
    @show

  </head>
  <body>
    <div class="container">
        @yield('menu')
    </div>

    <div class="container">
      @yield('slider')
    </div>

    <div class="container">
      @yield('content')
    </div>

    <script src="{{ asset('js/app.js') }}"></script>
  </body>
</html>
