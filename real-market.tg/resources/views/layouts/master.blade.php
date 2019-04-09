<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>{{ $title . ' - Real Market' ?? 'Real Market' }}</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
        <link rel="stylesheet" href="{{ asset('css/materialize.css') }}">
        <link rel="stylesheet" href="{{ asset('css/font-awesome.min.css') }}">
        <link rel="stylesheet" href="{{ asset('css/style.css') }}">

        @yield('stylesheets')
    </head>
    <body>
        @include('layouts.partials._header')

        <div class="section" style="margin-top: 2rem">
            @yield('content')
        </div>

        @include('layouts.partials._footer')

        <script src="{{ asset('js/jquery-3.2.1.min.js') }}"></script>
        <script src="{{ asset('js/materialize.min.js') }}"></script>

        <script>
            $('.dropdown-trigger').dropdown({
                constrainWidth: false,
                hover: true,
                inDuration: 300,
                outDuration: 200,
                coverTrigger: false
            });

            $(document).ready(function(){
                $('.tooltipped').tooltip({
                    exitDelay: 150
                });
            });
        </script>

        @yield('scripts')
    </body>
</html>
