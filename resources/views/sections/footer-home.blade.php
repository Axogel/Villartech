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