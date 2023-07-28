<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Css -->
    <link rel="stylesheet" href="{{ asset('admin-res/dist/css/adminlte.min.css') }}">
    <link href="{{ asset('assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">


    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{ asset('plugin/fontawesome-free/css/all.min.css') }}">

    <link rel="stylesheet" href="{{asset('admin-res/dist/css/testinomial.css')}}">
    <link rel="stylesheet" href="{{asset('admin-res/dist/css/servicecard.css')}}">


    {{-- Select2 --}}
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />

    <style>
        .select2-selection {
            height: 38px !important;
        }

        .userForm {
            margin: auto;
        }
        .ck-content{
            height: 200px !important;
            border-bottom-left-radius: 5px !important;
            border-bottom-right-radius: 5px !important;

        

        }

    </style>
    <title>Marks & Marks</title>
</head>

<body>
    <div id="container">
        @include('includes.admin_header')
        @yield('content')
    </div>

</body>

<script src="{{ asset('plugin/jquery/jquery.min.js') }}"></script>
<!-- jQuery UI 1.11.4 -->
<script src="{{ asset('plugin/jquery-ui/jquery-ui.min.js') }}"></script>

<script src="{{ asset('admin-res/dist/js/adminlte.js') }}"></script>
<script src="{{ asset('plugin/bootstrap/js/bootstrap.bundle.min.js') }}"></script>

<!-- Toastr -->
<script src="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>


{{-- ckeditor --}}
<script src="https://cdn.ckeditor.com/ckeditor5/34.0.0/classic/ckeditor.js"></script>

{{-- Select2 --}}
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>


{{-- toasts setup --}}
@if (Session::has('success'))
    <script>
        toastr.success("{{ session('success') }}", {
            timeOut: 5000
        })
    </script>
@endif
@if (Session::has('warning'))
    <script>
        toastr.warning("{{ session('warning') }}", {
            timeOut: 5000
        })
    </script>
@endif
@if (Session::has('error'))
    <script>
        toastr.error("{{ session('error') }}", {
            timeOut: 5000
        })
    </script>
@endif
{{-- toasts setup --}}
@yield('extraJS')

</html>
