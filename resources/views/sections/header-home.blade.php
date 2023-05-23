<header id="header" class="navbar-fixed-top header2 nav-responsive-fixed" role="banner">
  <nav class="navbar navbar-expand-lg navbar-light" style="justify-content: flex-start; padding-left: 2rem; ">
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation" style=" padding: 1.25rem 1.75rem; margin-bottom: 10px; color: #045A97; ">
        <span style = "color: #fff">
          <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-list" viewBox="0 0 16 16"><path fill-rule="evenodd" d="M2.5 12a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5z"/></svg>
        </span>
    </button>

    <div class="collapse navbar-collapse" id="navbarNavAltMarkup" style="max-height: 500px; @media (min-width:768px) and (max-width: 991px) {
    
        display: none !important;
    
}">
      <div class="navbar-nav row" style="width: 100%;">
        <div class="col-xl-1 col-lg-0 ps-lg-5 col-xxl-1"></div>
          <div href="/" class="col-1 ps-lg-5">
               <a aria-current="page"  href="/">
                  <img class="img-responsive" src="{{asset('assets/img/villartechlogo2.png')}}"  alt="logo">
              </a>
          </div> 
        <div class="col-xxl-3 col-xl-2 col-lg-1"></div>
        <div class="col-xxl-6 col-xl-6 col-lg-6">
            <ul class="navbar-nav mb-2 mb-lg-0 w-100"  id="navbar-villar" style="padding-left: 50px;">
              <li class="nav-item px-2">
                <a class="nav-link active text-light bold-size" aria-current="page"  href="/">Home</a>
              </li>
              <li class="nav-item px-2 ">
                <a class="nav-link active text-light bold-size" aria-current="page" href="{{ route ('aboutUs') }}"style="width: 90px" >ABOUT US</a>
              </li>
              <li class="nav-item px-2">
                <a class="nav-link active text-light bold-size" aria-current="page" href="{{ route ('portfolioView') }}" >PORTFOLIO</a>
              </li>
              <li class="nav-item px-2">
                <a class="nav-link active text-light bold-size" aria-current="page" href="/services" >SERVICES</a>
              </li>
              <li class="nav-item px-2">
                <a class="nav-link active text-light bold-size" aria-current="page" href="#testimonial">TESTIMONIALS</a>
              </li>
              <li class="nav-item px-2">
                <a class="nav-link active text-light bold-size" aria-current="page" href="#our-team" >Team</a>
              </li>
              <li class="nav-item px-2 w-100">
                <div id="contact-us-navbar">
                  <a class="nav-link active text-light bold-size margin-contactUs" aria-current="page" href="#contact" style="font-size: 14px; text-align: center; background-color: #045197; border-radius: 8px; width: 150px ">
                    CONTACT US
                  </a>
                </div>
              </li>
          </ul>
        </div>
        <div class="col-xxl-1 col-xl-1 col-lg-0"></div>
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