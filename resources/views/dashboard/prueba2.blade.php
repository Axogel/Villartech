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
  <div class="style-switch-wrapper">
    <div class="style-switch-button">
      <i class="fa fa-sliders"></i>
    </div>
    <h3>Style Options</h3>
    <button id="preset1" class="btn btn-sm btn-primary"></button>
    <button id="preset2" class="btn btn-sm btn-primary"></button>
    <button id="preset3" class="btn btn-sm btn-primary"></button>
    <button id="preset4" class="btn btn-sm btn-primary"></button>
    <!--<button id="preset5" class="btn btn-sm btn-primary"></button>-->
    <button id="preset6" class="btn btn-sm btn-primary"></button>
    <br/><br/>
    <a class="btn btn-sm btn-primary close-styler pull-right">Close X</a>
  </div>
  <!-- Style switcher end -->

  <div class="body-inner">
  <!-- Header start -->
  <header id="header" class="navbar-fixed-top header2" role="banner">
    <nav class="navbar navbar-expand-lg navbar-light ">
      <div class="container">
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">


          <div class="navbar-brand">
            <a href="/">
              <img class="img-responsive" src="{{asset('assets/img/villartechlogo2.png')}}" style="width: 9%; top: 0px; position: fixed; padding-left: 25px;" alt="logo">
            </a> 
          </div>        


          <ul class="navbar-nav me-auto mb-2 mb-lg-0" style="padding-left:600px;">

           
            <li class="nav-item">
              <a class="nav-link active text-light" aria-current="page" href="#">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link active text-light" aria-current="page" href="#">ABOUT US</a>
            </li>
            <li class="nav-item">
              <a class="nav-link active text-light" aria-current="page" href="#">PORTFOLIO</a>
            </li>
            <li class="nav-item">
              <a class="nav-link active text-light" aria-current="page" href="#">SERVICES</a>
            </li>
            <li class="nav-item">
              <a class="nav-link active text-light" aria-current="page" href="#">TESTIMONIALS</a>
            </li>
            <li class="nav-item">
              <a class="nav-link active text-light" aria-current="page" href="#">Team</a>
            </li>
            <li class="nav-item">
              <a class="nav-link active text-light" aria-current="page" href="#">CONTACT US</a>
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
                              Need To Invent The Future!
                            </h2>
                              <h3 class="animated3">
                                We Making Difference To Great Things Possible
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
                                  How Big Can You Dream?
                              </h2>
                              <h3 class="animated5">
                                We are here to make it happen
                              </h3>         
                          </div>
                      </div>
          </li>
          <li>
            <div class="overlay2">
              <img class="" src="{{asset('assets/img/bg3.jpg')}}" alt="slider">
            </div>
            <div class="flex-caption slider-content">
                          <div class="col-md-12 text-center">
                              <h2 class="animated7">
                                  Your Challenge is Our Progress
                              </h2>
                              <h3 class="animated8">
                                So, You Don't Need to Go Anywhere Today
                              </h3>      
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

        <div class="col-md-6 col-sm-12 footer-widget">
          <h3 class="widget-title">Flickr Photos</h3>

          <div class="img-gallery">
            <div class="img-container">
              @foreach ($flickers as $flicker)
              <a class="thumb-holder" data-rel="prettyPhoto" href="/assets/img/gallery/1.jpg">
                <img src="{{ asset('storage') . '/' . $flicker->image }}" alt="">
              </a>
              @endforeach
            </div>
          </div>

            
        </div><!--/ end flickr -->

        @foreach($settings as $setting)
        <div class="col-md-6 col-sm-12 footer-widget footer-about-us">
          <h3 class="widget-title">About Villartechnologies</h3>
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