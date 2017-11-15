<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <meta property="og:title" content="The Rich List">
    <meta property="og:description" content="Do you have what it takes to claim the top spot?">
    <meta property="og:image" content="https://s3.ca-central-1.amazonaws.com/the-rich-list/rich-ico.png">
    <meta property="og:url" content="https://areyourich.ca">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'The Rich List') }}</title>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
</head>
<body>
    <div class="container-fluid">

        @include('layouts.partials._navigation')

        @yield('content')

        @include('layouts.partials._footer')
    </div>


    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>
