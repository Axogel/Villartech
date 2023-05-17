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
      </div>
      @endforeach
    </div>
  </div>
</footer>
  
<section id="copyright" class="copyright angle">
  <div class="container">
    @foreach($settings as $setting)
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
    </div>
    @endforeach
    <div class="row">
      <div class="col-md-12 text-center">
        <div class="copyright-info">
          &copy; Copyright 2022 Villartechnologies.
          </div>
      </div>
    </div>
    
    <a href="https://web.whatsapp.com/send?phone=+18042391855"  id="whatsapp"><svg xmlns="http://www.w3.org/2000/svg"  viewBox="0 0 48 48" width="48px" height="48px" fill-rule="evenodd" clip-rule="evenodd"><path fill="#fff" d="M4.9,43.3l2.7-9.8C5.9,30.6,5,27.3,5,24C5,13.5,13.5,5,24,5c5.1,0,9.8,2,13.4,5.6	C41,14.2,43,18.9,43,24c0,10.5-8.5,19-19,19c0,0,0,0,0,0h0c-3.2,0-6.3-0.8-9.1-2.3L4.9,43.3z"/><path fill="#fff" d="M4.9,43.8c-0.1,0-0.3-0.1-0.4-0.1c-0.1-0.1-0.2-0.3-0.1-0.5L7,33.5c-1.6-2.9-2.5-6.2-2.5-9.6	C4.5,13.2,13.3,4.5,24,4.5c5.2,0,10.1,2,13.8,5.7c3.7,3.7,5.7,8.6,5.7,13.8c0,10.7-8.7,19.5-19.5,19.5c-3.2,0-6.3-0.8-9.1-2.3	L5,43.8C5,43.8,4.9,43.8,4.9,43.8z"/><path fill="#cfd8dc" d="M24,5c5.1,0,9.8,2,13.4,5.6C41,14.2,43,18.9,43,24c0,10.5-8.5,19-19,19h0c-3.2,0-6.3-0.8-9.1-2.3	L4.9,43.3l2.7-9.8C5.9,30.6,5,27.3,5,24C5,13.5,13.5,5,24,5 M24,43L24,43L24,43 M24,43L24,43L24,43 M24,4L24,4C13,4,4,13,4,24	c0,3.4,0.8,6.7,2.5,9.6L3.9,43c-0.1,0.3,0,0.7,0.3,1c0.2,0.2,0.4,0.3,0.7,0.3c0.1,0,0.2,0,0.3,0l9.7-2.5c2.8,1.5,6,2.2,9.2,2.2	c11,0,20-9,20-20c0-5.3-2.1-10.4-5.8-14.1C34.4,6.1,29.4,4,24,4L24,4z"/><path fill="#40c351" d="M35.2,12.8c-3-3-6.9-4.6-11.2-4.6C15.3,8.2,8.2,15.3,8.2,24c0,3,0.8,5.9,2.4,8.4L11,33l-1.6,5.8	l6-1.6l0.6,0.3c2.4,1.4,5.2,2.2,8,2.2h0c8.7,0,15.8-7.1,15.8-15.8C39.8,19.8,38.2,15.8,35.2,12.8z"/><path fill="#fff" fill-rule="evenodd" d="M19.3,16c-0.4-0.8-0.7-0.8-1.1-0.8c-0.3,0-0.6,0-0.9,0	s-0.8,0.1-1.3,0.6c-0.4,0.5-1.7,1.6-1.7,4s1.7,4.6,1.9,4.9s3.3,5.3,8.1,7.2c4,1.6,4.8,1.3,5.7,1.2c0.9-0.1,2.8-1.1,3.2-2.3	c0.4-1.1,0.4-2.1,0.3-2.3c-0.1-0.2-0.4-0.3-0.9-0.6s-2.8-1.4-3.2-1.5c-0.4-0.2-0.8-0.2-1.1,0.2c-0.3,0.5-1.2,1.5-1.5,1.9	c-0.3,0.3-0.6,0.4-1,0.1c-0.5-0.2-2-0.7-3.8-2.4c-1.4-1.3-2.4-2.8-2.6-3.3c-0.3-0.5,0-0.7,0.2-1c0.2-0.2,0.5-0.6,0.7-0.8	c0.2-0.3,0.3-0.5,0.5-0.8c0.2-0.3,0.1-0.6,0-0.8C20.6,19.3,19.7,17,19.3,16z" clip-rule="evenodd"/></svg></a>      
   

    <div id="back-to-top" data-spy="affix" data-offset-top="10" class="back-to-top affix" style="display: inline-grid;">

      <button class="btn btn-primary" title="Back to Top"><i class="fa fa-angle-double-up"></i></button>
    </div>
    </div>
</section>


<style>
  #whatsapp {
    position: fixed;
    bottom: 100px;
    right: 36px;
    top: auto;
    z-index: 10;
    -webkit-backface-visibility: hidden;
}

@media min-width(360px) and (max-width: 700px) { 
#whatsapp {
  bottom: 59px;
  right: 15px;

}

}

</style>

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
