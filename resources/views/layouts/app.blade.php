<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/style.css') }}" rel="stylesheet">
    <link href="{{ asset('admin-res/dist/css/about.css') }}" rel="stylesheet">
    <link href="{{ asset('plugin/fontawesome-free/css/fontawesome.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">


    <link rel="stylesheet" href="{{ asset('admin-res/dist/css/testinomial.css') }}">
    <style>
        .title {
            font-size: 25px;
            font-weight: 500;

        }
        video{
           /* left: 0; */
           margin-left: 270px;

        }

    </style>



</head>

<body>
    <div id="container">
        @include('includes.header1')
        @yield('content')
        @include('includes.footer')
    </div>

</body>

<script src="{{ asset('plugin/jquery/jquery.min.js') }}"></script>
<!-- jQuery UI 1.11.4 -->
<script src="{{ asset('plugin/jquery-ui/jquery-ui.min.js') }}"></script>
<script src="{{ asset('js/carousel.js') }}"></script>
@yield('script')

</html>
