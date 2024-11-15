<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="{{ asset('css/output.css') }}" rel="stylesheet">
    <title>Scrim Tour</title> 
  </head>
  <body>
    @include('partial.navbar')
    
    @yield('heroimage')
    <div class="container">
      @yield('container')
    </div>
    <script src="{{ mix('js/app.js') }}"></script>
  </body>
</html>