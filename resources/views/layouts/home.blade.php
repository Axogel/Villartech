<!DOCTYPE html>
<html lang="en">
<head>

    <!-- Basic Page Needs
    ================================================== -->
    <meta charset="utf-8">
    <title>Villartechnologies</title>
    <meta name="description" content="">  
    <meta name="author" content="">
    <link rel="icon" href="assets/img/villarblueg.png">

    <!-- Mobile Specific Metas
    ================================================== -->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    <!-- Favicons
    ================================================== -->
    <link rel="icon" href="img/favicon/favicon-32x32.png" type="image/x-icon" />
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="img/favicon/favicon-144x144.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="img/favicon/favicon-72x72.png">
    <link rel="apple-touch-icon-precomposed" href="img/favicon/favicon-54x54.png">
    <link rel="apple-touch-icon-precomposed" href="img/favicon/favicon-54x54.png">
  
    <!-- CSS
    ================================================== -->
    
    <!-- Bootstrap -->
    <link rel="stylesheet" href="{{asset('assets/css/bootstrap.min.css')}}">
    <!-- Template styles-->
    <link rel="stylesheet" href="{{asset('assets/css/style.css')}}">
    <!-- Responsive styles-->
    <link rel="stylesheet" href="{{asset('assets/css/responsive.css')}}">
    <!-- FontAwesome -->
    <link rel="stylesheet" href="{{asset('assets/css/font-awesome.min.css')}}">
    <!-- Animation -->
    <link rel="stylesheet" href="{{asset('assets/css/animate.css')}}">
    <!-- Prettyphoto -->
    <link rel="stylesheet" href="{{asset('assets/css/prettyPhoto.css')}}">
    <!-- Owl Carousel -->
    <link rel="stylesheet" href="{{asset('assets/css/owl.carousel.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/owl.theme.css')}}">
    <!-- Flexslider -->
    <link rel="stylesheet" href="{{asset('assets/css/flexslider.css')}}">
    <!-- Flexslider -->
    <link rel="stylesheet" href="{{asset('assets/css/cd-hero.css')}}">
    <!-- Style Swicther -->
    <link id="style-switch" href="{{asset('assets/css/presets/preset1.css')}}" media="screen" rel="stylesheet" type="text/css">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/lato-font/3.0.0/css/lato-font.min.css"
        integrity="sha512-rSWTr6dChYCbhpHaT1hg2tf4re2jUxBWTuZbujxKg96+T87KQJriMzBzW5aqcb8jmzBhhNSx4XYGA6/Y+ok1vQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- HTML5 shim, for IE6-8 support of HTML5 elements. All other JS at the end of file. -->
        <!--[if lt IE 9]>
        <script src="{{asset('assets/js/html5shiv.js')}}"></script>
        <script src="{{asset('assets/js/respond.min.js')}}"></script>
        <![endif]-->
        @yield('styles')
</head>
  
<body>
    <div class="body-inner">
     

            @yield('content')
            @yield('scripts')

        @include('sections.footer-home')
    </div>
</body>
</html>