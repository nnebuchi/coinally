<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <script src="assets/jquery/jquery-3.4.1.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.bundle.js"></script>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/fontawesome/css/all.css">
    <link rel="stylesheet" href="assets/css/styles.css">

    <script>
        var url ="{{ url('/') }}"
    </script>
</head>

<body>
    <div id="header"></div>
    
    @yield('content')

    <div id="footer"></div>
    <script type="text/javascript" src="js/app.js"></script>
</body>

</html>