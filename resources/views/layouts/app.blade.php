<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    <script src="{{ asset('sb-template/js/sb-admin-2.min.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->

    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{asset('sb-template/css/sb-admin-2.min.css')}}" rel="stylesheet">

    {{--<link href="{{asset('sb-template/vendor/fontawesome-free/css/fontawesome.min.css')}}" rel="stylesheet">--}}
    <link href="{{asset('font-awesome/css/font-awesome.min.css')}}" rel="stylesheet">
    {{--<link href="{{asset('ionicons/css/ionicons.min.css')}}" rel="stylesheet">--}}


</head>
<body id="page-top">
    <div id="app">
        @yield('container')
    </div>
</body>
</html>
