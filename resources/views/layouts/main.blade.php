

  <!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('', 'Micheal Stevens Advisory Portal') }}</title>

    <!-- Scripts -->
    <script src="js/app.js"></script>
    <script src="js/chart.js"></script>
    <script src="js/dashboard.js"></script>
    <script src="js/misc.js"></script>
    <script src="js/off-canvas.js"></script>
    <script src="js/vendor.bundle.addons.js"></script>
    <script src="js/vendor.bundle.base.js"></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
 
    <!-- Styles -->
    <link href="{{ asset('css/demo_1/style.css') }}" rel="stylesheet">
    <link href="{{ asset('css/demo_1/style.css.map') }}" rel="stylesheet">
    <link href="{{ asset('css/shared_css/style.css') }}" rel="stylesheet">
    <link href="{{ asset('css/shared_css/style.css.map') }}" rel="stylesheet">
    <link href="{{ asset('css/vendor.bundle.addons.css') }}" rel="stylesheet">
    <link href="{{ asset('css/vendor.bundle.base.css') }}" rel="stylesheet">
    <link href="{{ asset('css/font-awesome/css/font-awesome.css') }}" rel="stylesheet">
    <link href="{{ asset('css/font-awesome/css/font-awesome.css.map') }}" rel="stylesheet">
    <link href="{{ asset('css/font-awesome/css/font-awesome.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/mdi/css/materialdesignicons.css') }}" rel="stylesheet">
    <link href="{{ asset('css/mdi/css/materialdesignicons.css.map') }}" rel="stylesheet">
    <link href="{{ asset('css/mdi/css/materialdesignicons.min') }}" rel="stylesheet">
    <link href="{{ asset('css/mdi/css/materialdesignicons.min.css.map') }}" rel="stylesheet">
    <link href="{{ asset('css/vblog.css') }}" rel="stylesheet">
    <link href="css/vendor.bundle.base.css">
</head>
<body>
 <div id="app">
 
            @include('inc.navbar')
            @include('inc.sidebar')
            @yield('content')
           
    </div>
     <!-- Scripts -->
     
        <script src="js/app.js"></script>
        <script src="js/chart.js"></script>
        <script src="js/dashboard.js"></script>
        <script src="js/misc.js"></script>
        <script src="js/off-canvas.js"></script>
        <script src="js/vendor.bundle.addons.js"></script>
        <script src="js/vendor.bundle.base.js"></script>

        <script src ="{{ asset('js/app.js') }}"></script>
        <script src="{{ asset('ckeditor/ckeditor.js') }}"></script>
        <script>
        CKEDITOR.replace( 'article-ckeditor' );
        </script>
        @include('inc.footer')
</body>
            

</html>
