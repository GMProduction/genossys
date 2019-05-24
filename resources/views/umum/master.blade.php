<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Generation Of Smart System</title>

    <!-- Font -->
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,100i,400,700&display=swap" rel="stylesheet">

     <!-- Font Awesome -->
     <link rel="stylesheet" href="{{asset ('adminlte/plugins/font-awesome/css/font-awesome.min.css')}}">

    <script src="{{ asset('js/app.js') }}" defer></script>
    <!-- Styles -->
        <link href="{{ asset('/css/bootstrap.min.css') }}" rel="stylesheet" />
        <link href="{{ asset('/css/genosstyle.css') }}" rel="stylesheet" />
        <link href="{{ asset('/css/animate.css') }}" rel="stylesheet" />


</head>

<body id="home">

    <div class="content">
        @yield('content')
    </div>

    <script src="{{ asset('/js/jquery.min.js') }}"></script>
    @yield('script')

</body>

</html>
