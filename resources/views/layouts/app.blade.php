<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title')</title>
    
    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet" type="text/css"/>
    @stack('css')
</head>
<body class="page-md page-header-fixed page-quick-sidebar-over-content page-style-square page-container-bg-solid">
    @include('includes.header')
    <div class="clearfix"></div>

    <div class="page-container">
		@include('includes.sidebar')

		<div class="page-content-wrapper">
            <div class="page-content">
                @yield('content')
            </div>
		</div>

    </div>

    <script src="{{ asset('js/app.js') }}" type="text/javascript"></script>
    @stack('script')

</body>
</html>
