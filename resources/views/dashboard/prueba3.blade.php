<!DOCTYPE html>
<html lang="en">
<head>

	<!-- Basic Page Needs
	================================================== -->
	<meta charset="utf-8">
    <title>BizCraft - Responsive Html5 Template</title>
    <meta name="description" content="">	
	<meta name="author" content="">

	<!-- Mobile Specific Metas
	================================================== -->
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

	<!-- Favicons
	================================================== -->
	<link rel="icon" href="img/favicon/favicon-32x32.png" type="image/x-icon" />
	<link rel="apple-touch-icon-precomposed" sizes="144x144" href="img/favicon/favicon-144x144.png">
	<link rel="apple-touch-icon-precomposed" sizes="72x72" href="img/favicon/favicon-72x72.png">
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
      <script src="js/html5shiv.js"></script>
      <script src="js/respond.min.js"></script>
    <![endif]-->

</head>
	
<body>
	<div class="body-inner">
	<!-- Header start -->
	<header id="header" class="navbar-fixed-top header" role="banner">
		<div class="container">
			<div class="row">
				<!-- Logo start -->
				<div class="navbar-header">
				    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
				        <span class="sr-only">Toggle navigation</span>
				        <span class="icon-bar"></span>
				        <span class="icon-bar"></span>
				        <span class="icon-bar"></span>
				    </button>
				    <div class="navbar-brand navbar-bg">
					    <a href="/">
					    	<img class="img-responsive" src="{{asset('assets/img/villartechlogo2.png')}}" style="width: 9%; top: -10px; position: fixed; padding-left: 25px;" alt="logo">
					    </a> 
				    </div>                   
				</div><!--/ Logo end -->
				<nav class="collapse navbar-collapse clearfix" role="navigation">
					<ul class="nav navbar-nav navbar-right">
						<li><a href="/">HOME</a></li>
                    </ul>
				</nav><!--/ Navigation end -->
			</div><!--/ Row end -->
		</div><!--/ Container end -->
	</header><!--/ Header end -->


	@yield('content')


	<!-- Footer start -->
	<section id="footer" class="footer footer-map">
		<div class="container">
			<div class="row">
				<div class="col-md-12 text-center">
					<div class="footer-logo">
						<img src="{{asset('assets/img/villartechlogo2.png')}}" style="width: 12%;" alt="logo">
					</div>
					<div class="gap-20"></div>
					<ul class="dark unstyled">
						<li>
							<a title="Twitter" href="#">
								<span class="icon-pentagon wow bounceIn"><i class="fa fa-twitter"></i></span>
							</a>
							<a title="Facebook" href="#">
								<span class="icon-pentagon wow bounceIn"><i class="fa fa-facebook"></i></span>
							</a>
							<a title="Google+" href="#">
								<span class="icon-pentagon wow bounceIn"><i class="fa fa-google-plus"></i></span>
							</a>
							<a title="linkedin" href="#">
								<span class="icon-pentagon wow bounceIn"><i class="fa fa-linkedin"></i></span>
							</a>
							<a title="Pinterest" href="#">
								<span class="icon-pentagon wow bounceIn"><i class="fa fa-pinterest"></i></span>
							</a>
							<a title="Skype" href="#">
								<span class="icon-pentagon wow bounceIn"><i class="fa fa-skype"></i></span>
							</a>
							<a title="Dribble" href="#">
								<span class="icon-pentagon wow bounceIn"><i class="fa fa-dribbble"></i></span>
							</a>
						</li>
					</ul>
				</div>
			</div><!--/ Row end -->
			<div class="row">
				<div class="col-md-12 text-center">
					<div class="copyright-info">
         			 &copy; Copyright 2019 Themefisher. <span>Designed by <a href="https://themefisher.com">Themefisher.com</a></span>
        			</div>
				</div>
			</div><!--/ Row end -->

		   	<div id="back-to-top" data-spy="affix" data-offset-top="10" class="back-to-top affix">
					<i class="fa-brands fa-whatsapp" style="color: #0f4fbd;"></i>
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
	</div><!-- Body inner end -->
</body>
</html>