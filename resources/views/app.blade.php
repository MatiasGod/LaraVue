<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>
        <!--    Bootstrap   -->
        
        <link href="{{asset('css/app.css')}}" rel="stylesheet"> <!--Añadimos el css generado con webpack-->
    </head>
    <body>
        <div class="container-fluid" id="app">
            <div class="row">
                @include('header')
            </div>
            <div class="row">
                @yield('content')
                <example-component></example-component>
            </div>
            <div class="row">
                @include('footer')
            </div>
            
        </div>
        <script src="{{ asset('js/app.js') }}"></script>
    </body>
</html>