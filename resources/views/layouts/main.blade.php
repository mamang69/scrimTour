<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <title>Scrim Tour</title>
</head>

<body>
    @include('partial.navbar')

    <div class="{{request()->is('/')?'':'mt-16'}}"> 
        @yield('heroimage')
        <div class="contain">
            @yield('container')
        </div>
    </div>

    @include('partial.footer')
    <script src="{{ mix('js/app.js') }}">
    
    </script>
</body>

</html>
