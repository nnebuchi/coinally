<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <script src="{{ asset('assets/jquery/jquery-3.4.1.min.js') }}"></script>
    <script src="{{ asset('assets/bootstrap/js/bootstrap.bundle.js') }}"></script>
    <link rel="stylesheet" href="{{ asset('assets/bootstrap/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/fontawesome/css/all.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/styles.css') }}">
    <script src="{{ asset('assets/js/custom.js') }}"></script>
    <script>
        var url ="{{ url('/') }}"
        var assetUrl = "{{ asset('storage') }}"
        var appAssetUrl = "{{ asset('/') }}"
    </script>
     {{-- <script src="https://unpkg.com/lightweight-charts/dist/lightweight-charts.standalone.production.js"></script> --}}

     
     {{-- <script type="text/javascript">
        
    </script> --}}
</head>

<body>
    {{-- <div id="header"></div> --}}
    @include('layouts.components.header')
    
    @yield('content')

    @include('layouts.components.footer')
    {{-- <div id="footer"></div> --}}
    {{-- <script type="text/javascript" src="{{ asset('js/app.js')}}"></script> --}}
</body>

</html>

.logo-div{
    
}