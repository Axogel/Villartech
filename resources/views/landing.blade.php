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
                            <p>We are Villar Technologies, one of the most reliable companies that you will find in the
                                development and programmation market around the world. We have clients from different
                                countries that can assured our work and responsability with the bussiness and we are ready
                                for you. We are here to help you and we are here to provide high quality and granted
                                service, thanks to a high level human resource and the functionality of an excellent
                                technological platform.</p>
                        </div>
                        <div class="tab-pane animated fadeInLeft" id="tab_b">
                            <i class="fa fa-briefcase big"></i>
                            <h3>We Have Worldwide Business</h3>
                            <p>Us, VillarTechnologies as the company that we are today, we started working and providing our
                                services on February 2017. Since that date, we became a formal bussiness company whose
                                initiative was to incorporate a new platform that would be able to work on the latest skills
                                and technologies related to the development and programmation world that updates on daily
                                basis. Our team is composed by the owner of the company and working beside him, we have a
                                number of professional trained coworkers that are responsable to accomplish all of the tasks
                                and Jobs that are constantly been assigned.</p>
                        </div>
                        <div class="tab-pane animated fadeIn" id="tab_c">
                            <i class="fa fa-android big"></i>
                            <h3>We Build Readymade Applications</h3>
                            <p>VillarTechnologies provides a whole world of programmation and development services with the
                                primacy base of software as a service. Therefore, our team is always preparing themselves in
                                the latest skills and technologies so they are continuosly getting up to date with the
                                global growth of the system´s world.
                                In VillarTechnologies we have the professionals to perform jobs such as SEO, Web Design,
                                SaaS, programmation, Lead Generation, Translations, Marketing, IT Help and any type of task
                                that a freelancer does but backed by the trust that only a company can give you.
                            </p>
                        </div>
                        <div class="tab-pane animated fadeIn" id="tab_d">
                            <i class="fa fa-pagelines big"></i>
                            <h3>Clean and Modern Design</h3>
                            <p>VillarTechnologies offers an excellent strategic program to keep the execution of each job as
                                modern and effective as posible and as it´s required and requested by the client. We quickly
                                adapt to any type of campaign or project inbound and outbound that you want to outsource,
                                créate, improve or manage.</p>
                        </div>
                        <div class="tab-pane animated fadeIn" id="tab_e">
                            <i class="fa fa-support big"></i>
                            <h3>24/7 Dedicated Support</h3>
                            <p>In VillarTechnologies we make sure that our team is available 24/7 or during the work
                                schedule needed by the client. We have an excellent customer service team under the
                                leadership of the company owner, totally trained to keep constant and direct contact with
                                each client and accomplish all of the work timing related to the Project in develop.</p>
                        </div>
                    </div><!-- tab content -->
                </div><!-- Overview tab end -->
            </div>
            <!--/ Content row end -->
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
                            <p>We adapt and create your web site to any type of screen, through the developing and usage of
                                the latest trends, in order to always improve the user´s experience.</p>
                        </div>
                    </div>
                    <!--/ End first service -->

                    <div class="col-md-4 col-sm-4 wow fadeInDown" data-wow-delay=".8s">
                        <div class="service-content text-center">
                            <span class="service-icon icon-pentagon"><i class="fa fa-android"></i></span>
                            <h3>Apps Development</h3>
                            <p>We are your solution and your best option for the design and development of apps in the
                                Android and IOS platform.</p>
                        </div>

                    </div>
                    <!--/ End Second service -->

                    <div class="col-md-4 col-sm-4 wow fadeInDown" data-wow-delay="1.1s">
                        <div class="service-content text-center">
                            <span class="service-icon icon-pentagon"><i class="fa fa-shopping-cart"></i></span>
                            <h3>eCommerce Websites</h3>
                            <p>Creation of websites dedicated to the ecommerce service of selling and buying process of
                                different products, articles and services.</p>
                        </div>
                    </div>
                    <!--/ End Third service -->

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
                    </div>
                    <!--/ End first service -->

                    <div class="col-md-4 col-sm-4 wow fadeInDown" data-wow-delay="1.1s">
                        <div class="service-content text-center">
                            <span class="service-icon icon-pentagon"><i class="fa fa-comments"></i></span>
                            <h3>Consultation</h3>
                            <p>As per the projects on develop, we provide uninterrupted user and customer support to assure
                                the accurate and the effective assistance of the job.</p>
                        </div>
                    </div>
                    <!--/ End Third service -->

                    <div class="col-md-4 col-sm-4 wow fadeInDown" data-wow-delay="1.4s">
                        <div class="service-content text-center">
                            <span class="service-icon icon-pentagon"><i class="fa fa-lightbulb-o"></i></span>
                            <h3>Design for Startups</h3>
                            <p>We design beautiful modern engaging websites that always latest responsive technologies.</p>
                        </div>
                    </div>
                    <!--/ End 4th service -->

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

                    @foreach ($portfolios as $portafolio)
                        <div class="colr-12 col-sm-4 web-design isotope-item" style="padding: 1em">
                            <div class="grid">
                                <figure class="effect-oscar">
                                    @php
                                        $cad = str_replace('[', '', $portafolio->image);
                                        $cad = str_replace(']', '', $cad);
                                        $cad = str_replace('%', '', $cad);
                                        $cad = str_replace('\/', '/', $cad);
                                        $cad = str_replace('22', '', $cad);
                                        $cad = str_replace('"', '', $cad);
                                    @endphp
                                    <!--
                                <img src="{{ asset('assets/img/portfolio/cultura_global.png') }}" alt="">
                                -->
                                    <img src="{{ asset('/storage/' . $cad) }}" alt="">

                                    <figcaption>
                                        <h5>{{ $portafolio->name }}</h5>
                                        <a class="link icon-pentagon" href="#" data-toggle="modal"
                                            data-target="#{{ $portafolio->id }}"><i class="fa fa-link"></i></a>
                                    </figcaption>
                                </figure>
                            </div>
                        </div>

                        <!-- The Modal -->
                        <div class="modal" id="{{ $portafolio->id }}">
                            <div class="modal-dialog">
                                <div class="modal-content">

                                    <!-- Modal Header -->
                                    <div class="modal-header">
                                        <h4 class="modal-title">{{ $portafolio->name }}</h4>
                                        <!--
                                  <button type="button" class="close" data-dismiss="modal">&times;</button>
                                  -->
                                    </div>

                                    <!-- Modal body -->
                                    <div class="modal-body modal-custom">
                                        <div class="modal-custom-body">
                                            <!--
                                    <img style="width:80%;" src="{{ asset('assets/img/portfolio/cultura_global.png') }}" alt="">
                                    -->
                                            <img style="width:100%;" src="{{ asset('/storage/' . $cad) }}"
                                                alt="">
                                        </div>
                                        <div class="modal-custom-content">
                                            <div class="modal-custom-description">
                                                <strong class="modal-custom-title">Description:</strong>
                                                <p>{{ $portafolio->description }}</p>
                                            </div>
                                            <div class="modal-custom-skills">
                                                <strong class="modal-custom-title">Skills:</strong>
                                                <p>
                                                    @foreach (explode(',', $portafolio->skills) as $portfolioskill)
                                                        <span class="badge badge-secondary">{{ $portfolioskill }}</span>
                                                    @endforeach
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Modal footer -->
                                    <div class="modal-footer">
                                        <a href="{{ $portafolio->url }}" target="_blank" class="btn btn-info">Ir al
                                            Sitio</a>
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
                    <h2 class="title">Meet our Team <span class="title-desc">A Quality Professional Team with 4 years
                            experience</span></h2>
                </div>
            </div>
            <div class="row text-center">
                <div class="col-12">
                    <div class="team wow slideInLeft center-block">
                        <div class="img-hexagon">
                            <img src="{{ asset('assets/img/team/jose manuel.png') }}" alt="">
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
                </div>
                <!--/ Team 1 end -->
            </div>

            @foreach ($teams as $team)
                <!-- The Modal Team -->

                <div class="modal fade text-left" id="{{ $team->id }}" tabindex="-1" role="dialog"
                    aria-hidden="true">
                    <div class="modal-dialog" role="document" style="width: 95%;">
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body"
                                style="font-family: 'Lato,Bold'; height:84vh;  overflow-y: auto; display:grid; grid-template-columns: 1fr 1fr">
                                <div class="left-modal" style=" width:100%; height:120vh; position:static;">
                                    <div
                                        style="background-color:#045A97; width:10%; height:87%; float: left; position: fixed;">
                                        <div class="about">
                                            <img src="{{ asset('assets') }}/img/user.png" alt=""
                                                style="padding-left:50px; padding-top:25px;">
                                            <p
                                                style="font-size:15px; color:white; font-weight:bold; font-family:'Lato',Bold; padding-left:38px;">
                                                OVERVIEW</p>
                                            <hr style="color:white; width:105px;">
                                        </div>

                                       

                                        <div class="experience">
                                            <img src="{{ asset('assets') }}/img/modal-teams/work_FILL1_wght400_GRAD0_opsz48.png"
                                                alt="" style="padding-left:57px; padding-top:25px;">
                                            <p
                                                style="font-size:15px; color:white; font-weight:bold; font-family:'Lato',Bold; padding-left:33px;     padding-top: 5px;">
                                                EXPERIENCE</p>
                                            <hr style="color:white; width:105px;">
                                        </div>

                                        <div class="education">
                                            <img src="{{ asset('assets') }}/img/modal-teams/school_FILL1_wght400_GRAD0_opsz48.png"
                                                alt="" style="padding-left:57px; padding-top:25px;">
                                            <p
                                                style="font-size:15px; color:white; font-weight:bold; font-family:'Lato',Bold; padding-left:33px;     padding-top: 5px;">
                                                EDUCATION</p>
                                            <hr style="color:rgb(255, 255, 255); width:105px;">
                                        </div>

                                        <div class="logo">
                                            <img src="{{ asset('assets') }}/img/modal-teams/Grupo 5.png" alt=""
                                                style="padding-left:33px; padding-top:255px;">
                                        </div>
                                    </div>
                                    <div style="color:blue; padding-left:10.5%; float: left; position: fixed;">
                                        <iframe width="600" height="450"
                                            src="https://www.youtube.com/embed/_BjL6W71mWY" title="YouTube video player"
                                            frameborder="0"
                                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                                            allowfullscreen></iframe>
                                    </div>

                                    <div class="basic-info"
                                        style="width:32.9%; height:48%; margin-left:10.5%; line-height:10px; position: fixed; margin-top:28%;">


                                        <p class="modal-custom-title"
                                            style="font-family: 'Lato', Regular; font-weight:400; font-size:36px; padding-left:39%; margin-top:0%; color:black">
                                            Jose Rojas</p>
                                        <p
                                            style="color:#045A97; font-family: 'Lato',Bold; padding-left:47%; padding-top:0%; font-weight:bold; font-size:20px;">
                                            Full-Stack
                                        </p>

                                        <p style="font-family: 'Lato',Light; padding-left:44%; font-weight:lighter;">
                                            Tachira, Venezuela
                                        </p>

                                        <p
                                            style="font-family: 'Lato',Light; padding-left:49%; font-weight:lighter; font-size:18px; ">
                                            Full Time
                                        </p>

                                        <hr style="margin-left: 10px; width:546px; color:black;">

                                        <div
                                            style="background-color:#045A97; width:40%; height:8%; border-radius:25px; margin-left:20px; float:left; margin-top:10px;">
                                            <p
                                                style="font-family:'Lato',Regular; color:white; padding-left:35px; padding-top:3px; font-size:16px;">
                                                DOWNLOADER CV
                                            </p>
                                        </div>

                                        <div
                                            style="background-color:#045A97; width:36%; height:8%; border-radius:25px; margin-left:0px; float:right; margin-top:10px;">
                                            <p
                                                style="font-family:'Lato',Regular; color:white; padding-left:44px; padding-top:3px; font-size:16px;">
                                                CONTACT ME
                                            </p>
                                        </div>



                                    </div>
                                </div>

                                <div class="right-modal" style=" width:100%; height:100vh;">
                                    <img src="{{ asset('assets') }}/img/modal-teams/user-1.png" alt=""
                                        style="float: right; padding-top:0px;">

                                    <div class="detailed-info" style="padding-left:0%; padding-top:2%;">
                                        <p
                                            style="color:#045A97; font-family: 'Lato', Bold; margin-left:1%; font-size:37px; font-weight:bolder;">
                                            Overview
                                           

                                        <p>
                                            <hr style="color:#000000; width:100%;">

                                        <p
                                            style="font-family:'Lato',Light; font-size:20px; margin-left:0+%; color:#323232; font-weight:lighter;">
                                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolor delectus commodi
                                            quae
                                            magni molestias vel illum temporibus, asperiores laudantium rerum. Lorem ipsum,
                                            dolor sit amet consectetur adipisicing elit. Cupiditate, temporibus!
                                        </p>

                                        <div
                                            style="background-color:#045A97; height:198px; margin-left:0%; margin-top:40px;">
                                            <img src="{{ asset('assets') }}/img/modal-teams/folder_shared_FILL1_wght400_GRAD0_opsz48.png"
                                                alt="" style="padding-top:41px; padding-left:20px; float:left;">
                                            <div
                                                style="padding-left:30px; padding-top:45px; color:#FFFFFF; font-family:'Lato', Light; font-size:25px; float: left; font-weight:lighter;">
                                                <p>Age</p>
                                                <p>Residence</p>
                                                <p>freelance</p>
                                                <p>Address</p>

                                            </div>

                                            <div
                                                style=" padding-left:360px; padding-top:45px; color:#FFFFFF; font-family:'Lato', Light; font-size:25px; font-weight:bold;">
                                                <p>24</p>
                                                <p>Venezuela</p>
                                                <p>Available</p>
                                                <p>Tachira, San Cristobal</p>


                                            </div>



                                        </div>

                                        <div
                                            style="margin-top:-15px; font-size:20px; float:right; margin-right:41%; font-family:'Lato', Bold; width:58%;">
                                            <p
                                                style="color: #045A97; font-family:'Lato', Bold;  padding-top:25px; font-weight:bolder; font-size:40px;">
                                                Skills</p>
                                            <hr style="width: 170%;">
                                            <p style="font-family:'Lato',Light; color:#323232; font-size:15px;">
                                                2-5 Years
                                            </p>


                                            @foreach (explode(',', $team->skills) as $skill)
                                                <p class="badge" style="color:white; width:20%; height:20px">
                                                    {{ $skill }}</p>
                                            @endforeach


                                        </div>

                                        <div class="over" style="padding-top:25%;" id="overview">
                                            <div style="margin-top:60px;">
                                                <img src="{{ asset('assets') }}/img/modal-teams/description_FILL1_wght400_GRAD0_opsz48@2x.png"
                                                    alt="" style="float: right; padding-top:0px;">


                                                <div class="overview" style="padding-left:0%; padding-top:2%;">
                                                    <p
                                                        style="color:#045A97; font-family: 'Lato', Bold; margin-left:1%; font-size:37px; font-weight:bolder;">
                                                        Languages

                                                    </p>
                                                    <hr style="color:#000000; width:100%;">

                                                </div>

<br><br>

                                                <div class="overview" style="padding-left:0%; padding-top:2%;">
                                                    <p
                                                        style="color:#045A97; font-family: 'Lato', Bold; margin-left:1%; font-size:37px; font-weight:bolder;">
                                                        Coding

                                                    </p>
                                                    <hr style="color:#BFBFC1; width:100%;">
                                                     <div class="coding-bar" style="display: inline-block;">
                                                        <div class="circular-progress">
                                                            <span class="progress-value" data-count="50">0%</span>
                                                        </div>
                                            
                                                        <span class="text">HTML & CSS</span>
                                                        

                                                </div>
                                                     </div>



                                                <div class="overview" style="padding-left:0%; padding-top:2%;">
                                                    <img src="{{ asset('assets') }}/img/modal-teams/work_FILL1_wght400_GRAD0_opsz48@2x.png"
                                                    alt="" style="float: right; padding-top:0px;">
                                                    <p
                                                        style="color:#045A97; font-family: 'Lato', Bold; margin-left:1%; font-size:37px; font-weight:bolder;">
                                                        Experience

                                                    </p>
                                                   
                                                    <hr style="color:#BFBFC1; width:100%;">

                                                    <p style="color:#045A97; font-size:23px; font-family:'Lato',Bold; font-weight:700;">Full-Stack</p>

                                                    <p style="color:#404346; font-size:20px; font-weight:lighter;">VillarTechnologies</p>

                                                </div>



                                            </div>





                                        </div>
                                    </div>
                                </div>


                            </div>
                            <br>
                            <br>


                        </div>
                    </div>
                </div>
        </div>
        @endforeach


        <!-- MODAL END -->



        <div class="row" style="padding: 5em 0;">
            <div id="myCarousel" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators" style="top: 100%; padding-top: 1em;">
                    @php
                        $i = 0;
                        $j = 0;
                        $cont = 0;
                    @endphp
                    @foreach ($teams as $team)
                        @if ($i == 0)
                            <li data-target="#myCarousel" data-slide-to="{{ $cont }}"
                                class="block-color {{ $j == 0 ? 'active' : '' }}"></li>
                        @endif
                        @php
                            $i++;
                            $j = 1;
                        @endphp
                        @if ($i == 4)
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
                    @foreach ($teams as $team)
                        @if ($i == 0)
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
                                    <a class="link icon-pentagon" href="#" data-toggle="modal"
                                        data-target="#{{ $team->id }}"><i class="fa fa-link"></i></a>
                                    <h3>{{ $team->id_name }}</h3>

                                    @foreach (explode(',', $team->skills) as $skill)
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
                        @if ($i == 4)
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
                            <img src="{{ asset('assets/img/team/jasara.jpg') }}" alt="testimonial">
                        </div>
                        <div class="testimonial-content">
                            <p class="testimonial-text">
                                Jose's expertise has been essential in supporting me and my project with development of my
                                website for Loopexclusive.com. His partnership and on going service with me and my team have
                                been incredible. I couldn't be more impressed with his knowledge and his detail to to the
                                Development of the websit plus the Laravel framework. Jose also is not afraid to learn new
                                tools for his overall success which makes him the best Developer for my project. Thank you
                                Jose for always having my back we couldn't do this project without you.
                            </p>
                            <h3 class="name">Jasara Navarro
                                <!--<span>Chief Executive</span>-->
                            </h3>
                        </div>
                    </div>
                    <div class="item">
                        <div class="testimonial-thumb">
                            <h2>Testimonials</h2>
                            <img src="{{ asset('assets/img/team/martin.jpg') }}" alt="testimonial">
                        </div>
                        <div class="testimonial-content">
                            <p class="testimonial-text">
                                José manuel is a bright and talented developer who has helped us all througout this project.
                                100% recommended and will surely hire him again in the future.
                            </p>
                            <h3 class="name">Martin Barrionuevo
                                <!--<span>Sr. Manager</span>-->
                            </h3>
                        </div>
                    </div>
                    <div class="item">
                        <div class="testimonial-thumb">
                            <h2>Testimonials</h2>
                            <img src="{{ asset('assets/img/team/hezi.jpg') }}" alt="testimonial">
                        </div>
                        <div class="testimonial-content">
                            <p class="testimonial-text">
                                Zapata is a great developer and really knows his PHP, follows good design principles.
                                Furthermore he is a great team player. He delivered upto my expectations. I am very happy
                                and would recommend him for his Laravel Knowledge. I Will definitely work with him in
                                future.
                            </p>
                            <h3 class="name">Hezi Herscovitch
                                <!--<span>Sales Manager</span>-->
                            </h3>
                        </div>
                    </div>
                </div>
                <!--/ Testimonial carousel end-->
            </div>
            <!--/ Row end-->
        </div>
        <!--/  Container end-->
    </section>
    <!--/ Testimonial end-->


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
                            @if (Session::has($key))
                                <p class="alert alert-{{ $key }}">{{ Session::get($key) }}</p>
                            @endif
                        @endforeach
                        <div class="row">
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label>Name</label>
                                    <input class="form-control" name="name" id="name" placeholder=""
                                        type="text" required>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label>Email</label>
                                    <input class="form-control" name="email" id="email" placeholder=""
                                        type="email" required>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label>Subject</label>
                                    <input class="form-control" name="subject" id="subject" placeholder="" required>
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
                    @foreach ($settings as $setting)
                        <div class="contact-info">
                            <h3>Contact Details</h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse eget erat magna.
                                Pellentesque justo ante</p>
                            <br>
                            <p><i class="fa fa-home info"></i>19 de Abril Avenida, San Cristóbal, Venezuela </p>
                            <p><i class="fa fa-phone info"></i> +58 276 3489292 </p>
                            <p><i class="fa fa-envelope-o info"></i> villar88@gmail.com</p>
                            <p><i class="fa fa-globe info"></i> www.villartechnologies.com.ve</p>
                        </div>
                    @endforeach
                </div>
            </div>

        </div>
        <!--/ container end -->
    </section><!-- Newsletter end -->


    <style>
        .modal-dialog {
            overflow-y: initial !important
        }

        .circular-progress{
    position: relative;
    height: 109px;
    width: 109px;
    border-radius: 50%;
    background:#045A97;
    display: flex;
    align-items: center;
    justify-content: center;
}
.circular-progress::before{
    content: "";
    position: absolute;
    height: 100px;
    width: 100px;
    border-radius: 50%;
    background-color: #fff;
}
.progress-value{
    position: relative;
    font-size: 22px;
    font-weight: 600;
    color: #323232;
    font-family: 'Lato', Bold;
}
.text{
    font-size: 15px;
    font-weight: 500;
    color: #606060;
    font-family: 'Lato', Bold;
    padding-left: 10px;
}


   

    </style>





    <script>

        
        
        let circularProgress = document.querySelector(".circular-progress"),
    progressValue = document.querySelector(".progress-value");

        let progressStartValue = 0,    
            speed =  200;
            
        let fin = 90;


        let progress = setInterval(() => {
            progressStartValue++;

            progressValue.textContent = `${progressStartValue}%`
            circularProgress.style.background = `conic-gradient(#045A97 ${progressStartValue * 3.6}deg, #ededed 0deg)`

            if(progressStartValue == fin){
                clearInterval(progress);
            }    
        }, speed);
    </script>

@endsection
