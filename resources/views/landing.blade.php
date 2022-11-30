@extends('dashboard.prueba2')

@section('content')

<!-- About tab start -->
  <section id="about" class="about angle">
    <div class="container">
      <!-- Company Profile -->
      <div class="row">
        <div class="col-md-12 heading">
          <span class="title-icon classic pull-left"><i class="fa fa-suitcase"></i></span>
          <h2 class="title classic">Company Profile</h2>
        </div>
      </div><!-- Title row end -->
      <div class="row">
        <div class="landing-tab clearfix">
          <ul class="nav nav-tabs nav-stacked col-md-3 col-sm-5">
              <li class="active">
                <a class="animated fadeIn" href="#tab_a" data-toggle="tab">
                  <span class="tab-icon"><i class="fa fa-info"></i></span>
                  <div class="tab-info">
                    <h3>Who Are We</h3>
                  </div>
                </a>
              </li>
              <li>
                <a class="animated fadeIn" href="#tab_b" data-toggle="tab">
                  <span class="tab-icon"><i class="fa fa-briefcase"></i></span>
                  <div class="tab-info">
                    <h3>Our Company</h3>
                  </div>
                </a>
            </li>
            <li>
                <a class="animated fadeIn" href="#tab_c" data-toggle="tab">
                  <span class="tab-icon"><i class="fa fa-android"></i></span>
                  <div class="tab-info">
                    <h3>What We Do</h3>
                  </div>
                </a>
            </li>
            <li>
                <a class="animated fadeIn" href="#tab_d" data-toggle="tab">
                  <span class="tab-icon"><i class="fa fa-pagelines"></i></span>
                  <div class="tab-info">
                    <h3>Modern Design</h3>
                  </div>
                </a>
            </li>
            <li>
                <a class="animated fadeIn" href="#tab_e" data-toggle="tab">
                  <span class="tab-icon"><i class="fa fa-support"></i></span>
                  <div class="tab-info">
                    <h3>Dedicated Support</h3>
                  </div>
                </a>
            </li>
          </ul>
          <div class="tab-content col-md-9 col-sm-7">
                <div class="tab-pane active animated fadeInRight" id="tab_a">
                  <i class="fa fa-trophy big"></i>
                    <h3>We Are Awarded Winning Company</h3> 
                    <p>We are Villar Technologies, one of the most reliable companies that you will find in the development and programmation market around the world. We have clients from different countries that can assured our work and responsability with the bussiness and we are ready for you. We are here to help you and we are here to provide high quality and granted service, thanks to a high level human resource and the functionality of an excellent technological platform.</p>
                </div>
                <div class="tab-pane animated fadeInLeft" id="tab_b">
                  <i class="fa fa-briefcase big"></i>
                    <h3>We Have Worldwide Business</h3> 
                    <p>Us, VillarTechnologies as the company that we are today, we started working and providing our services on February 2017. Since that date, we became a formal bussiness company whose initiative was to incorporate a new platform that would be able to work on the latest skills and technologies related to the development and programmation world that updates on daily basis. Our team is composed by the owner of the company and working beside him, we have a number of professional  trained coworkers that are responsable to accomplish all of the tasks and Jobs that are constantly been assigned.</p>               
                </div>
                <div class="tab-pane animated fadeIn" id="tab_c">
                    <i class="fa fa-android big"></i>
                    <h3>We Build Readymade Applications</h3> 
                    <p>VillarTechnologies provides a whole world of programmation and development services with the primacy base of software as a service. Therefore, our team is always preparing themselves in the latest skills and technologies so they are continuosly getting up to date with the global growth of the system´s world. 
                       In VillarTechnologies we have the professionals to perform jobs such as SEO, Web Design, SaaS, programmation, Lead Generation, Translations, Marketing, IT Help and any type of task that a freelancer does but backed by the trust that only a company can give you.
                    </p>
                </div>
                <div class="tab-pane animated fadeIn" id="tab_d">
                    <i class="fa fa-pagelines big"></i>
                    <h3>Clean and Modern Design</h3> 
                    <p>VillarTechnologies offers an excellent strategic program to keep the execution of each job as modern and effective as posible and as it´s required and requested by the client. We quickly  adapt to any type of campaign or project inbound and outbound that you want to outsource, créate, improve or manage.</p>
                </div>
                <div class="tab-pane animated fadeIn" id="tab_e">
                    <i class="fa fa-support big"></i>
                    <h3>24/7 Dedicated Support</h3> 
                    <p>In VillarTechnologies we make sure that our team is available 24/7 or during the work schedule needed by the client. We have an excellent customer service team under the leadership of the company owner, totally trained to keep constant and direct contact with each client and accomplish all of the work timing related to the Project in develop.</p>
                </div>
          </div><!-- tab content -->
          </div><!-- Overview tab end -->
      </div><!--/ Content row end -->
    </div><!-- Container end -->
    </section><!-- About end -->

    <!--Our Services-->
    <section id="services" class="about angle">
      <div class="container">
      <!-- Services -->
      <div class="row">
        <div class="col-md-12 heading">
          <span class="title-icon classic pull-left"><i class="fa fa-cogs"></i></span>
          <h2 class="title classic">Our Services</h2>
        </div>
      </div>

      <div class="row">
        <div class="col-md-12">
          <div class="col-md-4 col-sm-4 wow fadeInDown" data-wow-delay=".5s">
            <div class="service-content text-center">
              <span class="service-icon icon-pentagon"><i class="fa fa-tachometer"></i></span>
              <h3>Web Design</h3>
              <p>We adapt and create your web site to any type of screen, through the developing and usage of the latest trends, in order to always improve the user´s experience.</p>
            </div>
          </div><!--/ End first service -->

          <div class="col-md-4 col-sm-4 wow fadeInDown" data-wow-delay=".8s" >
            <div class="service-content text-center">
              <span class="service-icon icon-pentagon"><i class="fa fa-android"></i></span>
              <h3>Apps Development</h3>
              <p>We are your solution and your best option for the design and development of apps in the Android and IOS platform.</p>
            </div>
            
          </div><!--/ End Second service -->

          <div class="col-md-4 col-sm-4 wow fadeInDown" data-wow-delay="1.1s">
            <div class="service-content text-center">
              <span class="service-icon icon-pentagon"><i class="fa fa-shopping-cart"></i></span>
              <h3>eCommerce Websites</h3>
              <p>Creation of websites dedicated to the ecommerce service of selling and buying process of different products, articles and services.</p>
            </div>
          </div><!--/ End Third service -->

        </div>
      </div><!-- Content 1st row end -->

      <div class="gap-40"></div>

      <div class="row">
        <div class="col-md-12">
          <div class="col-md-4 col-sm-4 wow fadeInDown" data-wow-delay=".5s">
            <div class="service-content text-center">
              <span class="service-icon icon-pentagon"><i class="fa fa-bar-chart"></i></span>
              <h3>SEO Service</h3>
              <p>Guarantee of SEO positioning websites through a search engine optimization.</p>
            </div>
          </div><!--/ End first service -->

          <div class="col-md-4 col-sm-4 wow fadeInDown" data-wow-delay="1.1s">
            <div class="service-content text-center">
              <span class="service-icon icon-pentagon"><i class="fa fa-comments"></i></span>
              <h3>Consultation</h3>
              <p>As per the projects on develop, we provide uninterrupted user and customer support to assure the accurate and the effective assistance of the job.</p>
            </div>
          </div><!--/ End Third service -->

          <div class="col-md-4 col-sm-4 wow fadeInDown" data-wow-delay="1.4s">
            <div class="service-content text-center">
              <span class="service-icon icon-pentagon"><i class="fa fa-lightbulb-o"></i></span>
              <h3>Design for Startups</h3>
              <p>We design beautiful modern engaging websites that always latest responsive technologies.</p>
            </div>
          </div><!--/ End 4th service -->

        </div>
      </div><!-- Content 2nd row end -->

      <!-- Services end -->
    </div>
    </section>


    <!-- Portfolio start -->
  <section id="portfolio" class="portfolio portfolio-box">
    <div class="container">
      <div class="row">
        <div class="col-md-12 heading text-center">
          <span class="icon-pentagon wow bounceIn"><i class="fa fa-suitcase"></i></span>
          <h2 class="title2">Project Completed
            <span class="title-desc">A Quality Professional Team with 4 years experience</span>
          </h2>
        </div>
      </div> <!-- Title row end -->

      <!--Isotope filter start -->
      <!--
      <div class="row text-center">
        <div class="isotope-nav" data-isotope-nav="isotope">
          <ul>
            <li><a href="#" class="active" data-filter="*">All</a></li>

            <li><a href="#" data-filter=".web-design">Web Design</a></li>
            
          </ul>
        </div>
      </div>
      -->
      <!-- Isotope filter end -->
      
      <div class="row">
        <div id="isotope" class="isotope">

            @foreach($portfolios as $portafolio)
            
          <div class="colr-12 col-sm-4 web-design isotope-item" style="padding: 1em">
            <div class="grid">
              <figure class="effect-oscar">
              @php
                $cad = str_replace("[","",$portafolio->image);
                $cad = str_replace("]","",$cad);
                $cad = str_replace("%","",$cad);
                $cad = str_replace("\/","/",$cad);
                $cad = str_replace("22","",$cad);
                $cad = str_replace('"','',$cad);
              @endphp
                <!--
                <img src="{{asset('assets/img/portfolio/cultura_global.png')}}" alt="">
                -->
                <img src="{{ asset('/storage/'.$cad) }}" alt="">
 
                <figcaption>
                  <h5>{{$portafolio->name}}</h5>
                  <a class="link icon-pentagon" href="#" data-toggle="modal" data-target="#{{$portafolio->id}}"><i class="fa fa-link"></i></a> 
                </figcaption>     
              </figure>
            </div>
          </div>
          
            <!-- The Modal -->
          <div class="modal" id="{{$portafolio->id}}">
            <div class="modal-dialog">
              <div class="modal-content">
              
                <!-- Modal Header -->
                <div class="modal-header">
                  <h4 class="modal-title">{{$portafolio->name}}</h4>
                  <!--
                  <button type="button" class="close" data-dismiss="modal">&times;</button>
                  -->
                </div>
                
                <!-- Modal body -->
                <div class="modal-body modal-custom">
                  <div class="modal-custom-body">
                    <!--
                    <img style="width:80%;" src="{{asset('assets/img/portfolio/cultura_global.png')}}" alt="">
                    -->
                    <img style="width:100%;" src="{{ asset('/storage/'.$cad) }}" alt="">
                  </div>
                  <div class="modal-custom-content">
                    <div class="modal-custom-description">
                        <strong class="modal-custom-title">Description:</strong>
                        <p>{{ $portafolio->description }}</p>
                    </div>
                    <div class="modal-custom-skills">
                      <strong class="modal-custom-title">Skills:</strong>
                      <p>
                        @foreach (explode(",", $portafolio->skills) as $portfolioskill)
                        <span class="badge badge-secondary">{{ $portfolioskill }}</span>
                        @endforeach
                    </div>
                  </div>
                </div>
                
                <!-- Modal footer -->
                <div class="modal-footer">
                  <a href="{{ $portafolio->url }}" target="_blank" class="btn btn-info">Ir al Sitio</a>
                  <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                </div>
                
              </div>
            </div>
          </div>
            @endforeach   
          <!-- Isotope item end --> 
        </div><!-- Isotope content end -->
      </div><!-- Content row end -->
    </div><!-- Container end -->
  </section><!-- Portfolio end -->

  <section class="team" id="team">
    <div class="container">
      <div class="row">
        <div class="col-md-12 heading">
          <span class="title-icon pull-left"><i class="fa fa-weixin"></i></span>
          <h2 class="title">Meet our Team <span class="title-desc">A Quality Professional Team with 4 years experience</span></h2>
        </div>
      </div>
      <div class="row text-center">
        <div class="col-12">
          <div class="team wow slideInLeft center-block">
            <div class="img-hexagon">
              <img src="{{asset('assets/img/team/jose manuel.png')}}" alt="">
              <span class="img-top"></span>
              <span class="img-bottom"></span>
            </div>
            <div class="team-content">
              <h3>José Rojas</h3>
              <p>CEO Villartechnologies</p>
              <div class="team-social">
                <a class="fb" href="#"><i class="fa fa-facebook"></i></a>
                <a class="twt" href="#"><i class="fa fa-twitter"></i></a>
                <a class="gplus" href="#"><i class="fa fa-google-plus"></i></a>
                <a class="linkdin" href="#"><i class="fa fa-linkedin"></i></a>
                <a class="dribble" href="#"><i class="fa fa-dribbble"></i></a>
              </div>
            </div>
          </div>  
        </div><!--/ Team 1 end -->
      </div>
      <div class="row" style="padding: 5em 0;">
        <div id="myCarousel" class="carousel slide" data-ride="carousel">
          <ol class="carousel-indicators" style="top: 100%; padding-top: 1em;">
            @php
              $i = 0;
              $j = 0;
              $cont = 0;
            @endphp
            @foreach($teams as $team)
              @if($i == 0)
                <li data-target="#myCarousel" data-slide-to="{{ $cont }}" class="block-color {{ $j == 0 ? 'active' : '' }}"></li>
              @endif
              @php
                $i++;
                $j = 1;
              @endphp
              @if($i == 4)
                @php
                  $i = 0;
                  $cont++;
                @endphp
              @endif
            @endforeach
          </ol>
          <div class="carousel-inner">
            @php
              $i = 0;
              $j = 0;
            @endphp
            @foreach($teams as $team)
                @if($i == 0)
                  <div class="item {{ $j == 0 ? 'active' : '' }}">
                @endif
                @php
                  $i++;
                  $j = 1;
                @endphp
                    <div class="col-12 col-sm-3 text-center" style="padding: 1em 0;">
                      <div class="team">
                        <div class="img-hexagon">
                          <img src="{{ asset('storage') . '/' . $team->photo }}" alt="">
                          <span class="img-top"></span>
                          <span class="img-bottom"></span>
                        </div>
                        <div class="team-content">
                          <h3>{{ $team->id_name }}</h3>
                          @foreach (explode(",", $team->skills) as $skill)
                            <p class="badge badge-secondary" style="color:white;">{{ $skill }}</p>
                          @endforeach
                          <div class="team-social">
                            <a class="fb" href="#"><i class="fa fa-facebook"></i></a>
                            <a class="twt" href="#"><i class="fa fa-twitter"></i></a>
                            <a class="gplus" href="#"><i class="fa fa-google-plus"></i></a>
                            <a class="linkdin" href="#"><i class="fa fa-linkedin"></i></a>
                            <a class="dribble" href="#"><i class="fa fa-dribbble"></i></a>
                          </div>
                        </div>
                      </div> 
                    </div>
                @if($i == 4)
                  @php
                    $i = 0;
                  @endphp
                  </div>
                @endif
            @endforeach
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Testimonial start-->
  <section id="testimonial" class="testimonial parallax parallax3">
    <div class="parallax-overlay"></div>
      <div class="container">
        <div class="row">
          <div id="testimonial-carousel" class="owl-carousel owl-theme text-center testimonial-slide">
              <div class="item">
                  <div class="testimonial-thumb">
                    <h2>Testimonials</h2>
                    <img src="{{asset('assets/img/team/jasara.jpg')}}" alt="testimonial">
                  </div>
                  <div class="testimonial-content">
                    <p class="testimonial-text">
                    Jose's expertise has been essential in supporting me and my project with development of my website for Loopexclusive.com.  His partnership and on going service with me and my team have been incredible. I couldn't be more impressed with his knowledge and his detail to to the Development of the websit plus the Laravel framework.  Jose also is not afraid to learn new tools for his overall success which makes him the best Developer for my project. Thank you Jose for always having my back we couldn't do this project without you.
                    </p>
                    <h3 class="name">Jasara Navarro<!--<span>Chief Executive</span>--></h3>
                  </div>
              </div>
              <div class="item">
                  <div class="testimonial-thumb">
                    <h2>Testimonials</h2>
                    <img src="{{asset('assets/img/team/martin.jpg')}}" alt="testimonial">
                  </div>
                <div class="testimonial-content">
                    <p class="testimonial-text">
                      José manuel is a bright and talented developer who has helped us all througout this project. 100% recommended and will surely hire him again in the future.
                    </p>
                    <h3 class="name">Martin Barrionuevo<!--<span>Sr. Manager</span>--></h3>
                </div>
              </div>
              <div class="item">
                <div class="testimonial-thumb">
                  <h2>Testimonials</h2>
                    <img src="{{asset('assets/img/team/hezi.jpg')}}" alt="testimonial">
                </div>
                  <div class="testimonial-content">
                    <p class="testimonial-text">
                    Zapata is a great developer and really knows his PHP, follows good design principles. Furthermore he is a great team player. He delivered upto my expectations. I am very happy and would recommend him for his Laravel Knowledge. I Will definitely work with him in future.
                    </p>
                    <h3 class="name">Hezi Herscovitch<!--<span>Sales Manager</span>--></h3>
                  </div>
              </div>
          </div><!--/ Testimonial carousel end-->
        </div><!--/ Row end-->
      </div><!--/  Container end-->
  </section><!--/ Testimonial end-->


  <!-- Newsletter start -->
  <section id="contact">
    <div class="container">
        <div class="col-md-12 heading">
          <span class="title-icon classic pull-left"><i class="fa fa-globe"></i></span>
          <h2 class="title classic">Contact Us</h2>
        </div>
      <div class="row">

          <div class="col-md-7">
	    <form id="contact-form" action="/sendemail" method="post" role="form">
	    <input type="hidden" name="_method" value="POST">
	    <input type="hidden" name="_token" value="{{ csrf_token() }}">
@foreach (['danger', 'warning', 'success', 'info'] as $key)
 @if(Session::has($key))
     <p class="alert alert-{{ $key }}">{{ Session::get($key) }}</p>
 @endif
@endforeach
            <div class="row">
              <div class="col-md-4">
                <div class="form-group">
                  <label>Name</label>
                <input class="form-control" name="name" id="name" placeholder="" type="text" required>
                </div>
              </div>
              <div class="col-md-4">
                <div class="form-group">
                  <label>Email</label>
                  <input class="form-control" name="email" id="email" 
                  placeholder="" type="email" required>
                </div>
              </div>
              <div class="col-md-4">
                <div class="form-group">
                  <label>Subject</label>
                  <input class="form-control" name="subject" id="subject" 
                  placeholder="" required>
                </div>
              </div>
            </div>
            <div class="form-group">
              <label>Message</label>
              <textarea class="form-control" name="message" id="message" placeholder="" rows="10" required></textarea>
            </div>
            <div class="text-right"><br>
              <button class="btn btn-primary solid blank" type="submit">Send Message</button> 
	    </div>

          </form>
          </div>
          <div class="col-md-5">
            @foreach($settings as $setting)
            <div class="contact-info">
              <h3>Contact Details</h3>
              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse eget erat magna. Pellentesque justo ante</p>
              <br>
              <p><i class="fa fa-home info"></i>19 de Abril Avenida, San Cristóbal, Venezuela </p>
            <p><i class="fa fa-phone info"></i>  +58 276 3489292 </p>
            <p><i class="fa fa-envelope-o info"></i>  villar88@gmail.com</p>
            <p><i class="fa fa-globe info"></i>  www.villartechnologies.com.ve</p>
            </div>
            @endforeach
          </div>
        </div>

    </div><!--/ container end -->
  </section><!-- Newsletter end -->
    
@endsection
