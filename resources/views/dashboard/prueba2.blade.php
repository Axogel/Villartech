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

  <!-- HTML5 shim, for IE6-8 support of HTML5 elements. All other JS at the end of file. -->
    <!--[if lt IE 9]>
      <script src="{{asset('assets/js/html5shiv.js')}}"></script>
      <script src="{{asset('assets/js/respond.min.js')}}"></script>
    <![endif]-->

</head>
  
<body>

  <!-- Style switcher start -->
  
  <!-- Style switcher end -->

  <div class="body-inner">
  <!-- Header start -->
  <header id="header" class="navbar-fixed-top header2" role="banner">
    <nav class="navbar navbar-expand-lg navbar-light">
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
        <div class="navbar-nav">
            <a href="/">
              <img class="img-responsive" src="{{asset('assets/img/villartechlogo2.png')}}" style="width: 9%; top: -4px; position: fixed; padding-left: 25px;" alt="logo">
            </a> 


          <ul class="navbar-nav me-auto mb-2 mb-lg-0"  id="navbar-villar">

            <li class="nav-item">
              <a class="nav-link active text-light" aria-current="page" href="#" style="font-weight: 900">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link active text-light" aria-current="page" href="#about-us" style="font-weight: 900">ABOUT US</a>
            </li>
            <li class="nav-item">
              <a class="nav-link active text-light" aria-current="page" href="#portfolio" style="font-weight: 900">PORTFOLIO</a>
            </li>
            <li class="nav-item">
              <a class="nav-link active text-light" aria-current="page" href="#services" style="font-weight: 900">SERVICES</a>
            </li>
            <li class="nav-item">
              <a class="nav-link active text-light" aria-current="page" href="#testimonial"style="font-weight: 900">TESTIMONIALS</a>
            </li>
            <li class="nav-item">
              <a class="nav-link active text-light" aria-current="page" href="#our-team" style="font-weight: 900">Team</a>
            </li>
            <li class="nav-item">
              <div style="height: 50%; width:100%; background-color:#045A97; border-radius:20px;" id="contact-us-navbar">

              <a class="nav-link active text-light" aria-current="page" href="#contact" style="font-weight: 900; font-size:14px; text-align:center;">CONTACT US</a>

              </div>
            </li>
            
          </ul>
        </div>
      </div>
    </nav>
  </header><!--/ Header end -->

  <!-- Slider start -->
  <section id="home" class="no-padding">  

      <div id="main-slide" class="ts-flex-slider">

      <div class="flexSlideshow flexslider">
        <ul class="slides">
          <li>
            <div class="overlay2">
              <img class="" src="{{asset('assets/img/bg1.jpg')}}" alt="slider">
            </div>
            <div class="flex-caption slider-content">
                          <div class="col-md-12 text-center">
                          <h2 class="animated2">
                            We develop custom technological solutions!
                            </h2>
                              <h3 class="animated3">
                                to drive your ideas forward
                              </h3>
                          </div>
                      </div>
          </li>
          <li>
            <div class="overlay2">
              <img class="" src="{{asset('assets/img/bg2.jpg')}}" alt="slider">
            </div>
            <div class="flex-caption slider-content">
                          <div class="col-md-12 text-center">
                              <h2 class="animated4">
                                Our highly trained team ensures the quality and success of your projects.
 
                              </h2>
                              
                          </div>
                      </div>
          </li>
          <li>
            <div class="overlay2">
              <img class="" src="{{asset('assets/img/bg3.jpg')}}" alt="slider">
            </div>
            <div class="flex-caption slider-content">
                          <div class="col-md-12 text-center">
                              <h2 class="animated7" style="font-size: 49px;">
                                We focus on your specific needs to offer personalized and efficient solutions.
                              </h2>
                          </div>
                      </div>
          </li>
        </ul>
      </div>
    </div><!--/ Main slider end -->     
    </section> <!--/ Slider end -->

   @yield('content')
  

  <!-- Footer start -->
  <footer id="footer" class="footer footer2">
    <div class="container">

      <div class="row">

      

        @foreach($settings as $setting)
        <div class="col-md-6 col-sm-12 footer-widget footer-about-us">
         
          <p><strong>Address: </strong>{{ $setting->address }}</p>
          <div class="row">
            <div class="col-md-6">
              <strong>Email: </strong>
              <p>{{ $setting->email }}</p>
            </div>
            <div class="col-md-6">
              <strong>Phone No.</strong>
              <p>{{ $setting->phone }}</p>
            </div>
          </div>
        </div><!--/ end about us -->
        @endforeach



      </div><!-- Row end -->
    </div><!-- Container end -->
  </footer><!-- Footer end -->
  

  <!-- Footer start -->
  <section id="copyright" class="copyright angle">
    @foreach($settings as $setting)
    <div class="container">
      <div class="row">
        <div class="col-md-12 text-center">
          <ul class="footer-social unstyled">
            <li>
              <a title="Facebook" href="{{ $setting->facebook }}">
                <span class="icon-pentagon wow bounceIn"><i class="fa fa-facebook"></i></span>
              </a>
              <a title="linkedin" href="{{ $setting->date }}">
                <span class="icon-pentagon wow bounceIn"><i class="fa fa-linkedin"></i></span>
              </a>
              <a title="instagram" href="{{ $setting->instagram }}">
                <span class="icon-pentagon wow bounceIn"><i class="fa fa-instagram"></i></span>
              </a>
            </li>
          </ul>
        </div>
      </div><!--/ Row end -->
      @endforeach
      <div class="row">
        <div class="col-md-12 text-center">
          <div class="copyright-info">
               &copy; Copyright 2022 Villartechnologies.
              </div>
        </div>
      </div><!--/ Row end -->
       <div id="back-to-top" data-spy="affix" data-offset-top="10" class="back-to-top affix">
        <button class="btn btn-primary" title="Back to Top"><i class="fa fa-angle-double-up"></i></button>
      </div>
    </div><!--/ Container end -->
  </section><!--/ Footer end -->

  <!-- Javascript Files
  ================================================== -->

  <!-- initialize jQuery Library -->
  <script type="text/javascript" src="{{asset('assets/js/jquery.js')}}"></script>
  <!-- Bootstrap jQuery -->
  <script type="text/javascript" src="{{asset('assets/js/bootstrap.min.js')}}"></script>
  <!-- Style Switcher -->
  <script type="text/javascript" src="{{asset('assets/js/style-switcher.js')}}"></script>
  <!-- Owl Carousel -->
  <script type="text/javascript" src="{{asset('assets/js/owl.carousel.js')}}"></script>
  <!-- PrettyPhoto -->
  <script type="text/javascript" src="{{asset('assets/js/jquery.prettyPhoto.js')}}"></script>
  <!-- Bxslider -->
  <script type="text/javascript" src="{{asset('assets/js/jquery.flexslider.js')}}"></script>
  <!-- Owl Carousel -->
  <script type="text/javascript" src="{{asset('assets/js/cd-hero.js')}}"></script>
  <!-- Isotope -->
  <script type="text/javascript" src="{{asset('assets/js/isotope.js')}}"></script>
  <script type="text/javascript" src="{{asset('assets/js/ini.isotope.js')}}"></script>
  <!-- Wow Animation -->
  <script type="text/javascript" src="{{asset('assets/js/wow.min.js')}}"></script>
  <!-- SmoothScroll -->
  <script type="text/javascript" src="{{asset('assets/js/smooth-scroll.js')}}"></script>
  <!-- Eeasing -->
  <script type="text/javascript" src="{{asset('assets/js/jquery.easing.1.3.js')}}"></script>
  <!-- Counter -->
  <script type="text/javascript" src="{{asset('assets/js/jquery.counterup.min.js')}}"></script>
  <!-- Waypoints -->
  <script type="text/javascript" src="{{asset('assets/js/waypoints.min.js')}}"></script>
  <!-- Template custom -->
  <script type="text/javascript" src="{{asset('assets/js/custom.js')}}"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous">
  </script>
  </div><!-- Body inner end -->
</body>
</html>