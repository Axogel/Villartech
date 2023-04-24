<header id="header" class="navbar-fixed-top header2 nav-responsive-fixed" role="banner">
  <nav class="navbar navbar-expand-lg navbar-light" style="justify-content: flex-start; padding-left: 2rem; ">
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation" style=" padding: 1.25rem 1.75rem; margin-bottom: 10px; color: #fff; ">
        <span style = "color: #fff">
          <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-list" viewBox="0 0 16 16"><path fill-rule="evenodd" d="M2.5 12a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5z"/></svg>
        </span>
    </button>

    <div class="collapse navbar-collapse" id="navbarNavAltMarkup" style="max-height: 500px">
      <div class="navbar-nav row" style="width: 100%;">
        <div class="col-xxl-1 col-lg-1">
            <!-- margin -->
        </div>
          <div href="/" class="col-1">
            <img class="img-responsive" src="{{asset('assets/img/villartechlogo2.png')}}"  alt="logo">
          </div> 
        <div class="col-xxl-2 col-lg-1 col-xl-2">
            <!-- margin -->
        </div>
        <div class="col-xxl-6 col-lg-5 col-xl-6">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0"  id="navbar-villar">
              <li class="nav-item px-2">
                <a class="nav-link active text-light bold-size" aria-current="page" href="#">Home</a>
              </li>
              <li class="nav-item px-2 ">
                <a class="nav-link active text-light bold-size" aria-current="page" href="#about-us "style="width: 90px" >ABOUT US</a>
              </li>
              <li class="nav-item px-2">
                <a class="nav-link active text-light bold-size" aria-current="page" href="#portfolio" >PORTFOLIO</a>
              </li>
              <li class="nav-item px-2">
                <a class="nav-link active text-light bold-size" aria-current="page" href="#services" >SERVICES</a>
              </li>
              <li class="nav-item px-2">
                <a class="nav-link active text-light bold-size" aria-current="page" href="#testimonial">TESTIMONIALS</a>
              </li>
              <li class="nav-item px-2">
                <a class="nav-link active text-light bold-size" aria-current="page" href="#our-team" >Team</a>
              </li>
              <li class="nav-item ps-lg-5 ps-sm-0 pe-sm-4 ">
                <div style="height: 50%; width:100%; background-color:#045A97; border-radius:8px;" id="contact-us-navbar">
                  <a class="nav-link active text-light bold-size ps-4 " aria-current="page" href="#contact" style="width: 125px; height: 50px; font-size:14px; text-align:center;">CONTACT US</a>
                </div>
              </li>
          </ul>
        </div>
        <div class="col-xxl-2 col-lg-4 col-xl-2">
            <!-- margin -->
        </div>

      </div>
    </div>
  </nav>
</header>

<section id="home" class="no-padding home-responsive">  
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
                Our highly trained team ensures
              </h2>
              <h3 class="animated4">
                The quality and success of your projects.
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
                We focus on your specific needs to offer
              </h2>
              <h3 class="animated8">
                Personalized and efficient solutions.
              </h3>      
            </div>
          </div>
        </li>
      </ul>
    </div>
  </div>     
</section>