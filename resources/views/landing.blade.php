@extends('dashboard.prueba2')

@section('content')
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/lato-font/3.0.0/css/lato-font.min.css"
        integrity="sha512-rSWTr6dChYCbhpHaT1hg2tf4re2jUxBWTuZbujxKg96+T87KQJriMzBzW5aqcb8jmzBhhNSx4XYGA6/Y+ok1vQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- About tab start -->
    <section id="about" class="about angle">
        <div class="container">
            <!-- Company Profile -->
            <div class="row">
                <div class="col-md-12 heading">
                    <span class="title-icon classic pull-left" style="padding-bottom:9px;"><i
                            class="fa fa-suitcase"></i></span>
                    <h2 class="title classic" style="line-height: 57px; height:60px; font-family: 'Lato';" id="about-us">Company Profile</h2>
                </div>
            </div><!-- Title row end -->
            <div class="row">
                <div class="landing-tab clearfix">
                    <ul class="nav nav-tabs nav-stacked nav flex-column col-md-3 col-sm-5">
                        <li class="active">
                            <a class="animated fadeIn" href="#tab_a" data-toggle="tab">
                                <span class="tab-icon"><i class="fa fa-info"></i></span>
                                <div class="tab-info">
                                    <h3 style="font-family: 'Lato'">Who Are We</h3>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a class="animated fadeIn" href="#tab_b" data-toggle="tab">
                                <span class="tab-icon"><i class="fa fa-briefcase"></i></span>
                                <div class="tab-info">
                                    <h3 style="font-family: 'Lato'">Our Company</h3>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a class="animated fadeIn" href="#tab_c" data-toggle="tab">
                                <span class="tab-icon"><i class="fa fa-android"></i></span>
                                <div class="tab-info">
                                    <h3 style="font-family: 'Lato'">What We Do</h3>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a class="animated fadeIn" href="#tab_d" data-toggle="tab">
                                <span class="tab-icon"><i class="fa fa-pagelines"></i></span>
                                <div class="tab-info">
                                    <h3 style="font-family: 'Lato'">Modern Design</h3>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a class="animated fadeIn" href="#tab_e" data-toggle="tab">
                                <span class="tab-icon"><i class="fa fa-support"></i></span>
                                <div class="tab-info">
                                    <h3 style="font-family: 'Lato'">Dedicated Support</h3>
                                </div>
                            </a>
                        </li>
                    </ul>
                    <div class="tab-content col-md-9 col-sm-7">
                        <div class="tab-pane active animated fadeInRight" id="tab_a">
                            <i class="fa fa-trophy big"></i>
                            <h3 style="font-family: 'Lato'">We Are Awarded Winning Company</h3>
                            <p>We are Villar Technologies, one of the most reliable companies that you will find in the
                                development and programmation market around the world. We have clients from different
                                countries that can assured our work and responsability with the bussiness and we are ready
                                for you. We are here to help you and we are here to provide high quality and granted
                                service, thanks to a high level human resource and the functionality of an excellent
                                technological platform.</p>
                        </div>
                        <div class="tab-pane animated fadeInLeft" id="tab_b">
                            <i class="fa fa-briefcase big"></i>
                            <h3 style="font-family: 'Lato'">We Have Worldwide Business</h3>
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
                            <h3 style="font-family: 'Lato'">We Build Readymade Applications</h3>
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
                            <h3 style="font-family: 'Lato'">Clean and Modern Design</h3>
                            <p>VillarTechnologies offers an excellent strategic program to keep the execution of each job as
                                modern and effective as posible and as it´s required and requested by the client. We quickly
                                adapt to any type of campaign or project inbound and outbound that you want to outsource,
                                créate, improve or manage.</p>
                        </div>
                        <div class="tab-pane animated fadeIn" id="tab_e">
                            <i class="fa fa-support big"></i>
                            <h3 style="font-family: 'Lato'">24/7 Dedicated Support</h3>
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
                    <h2 class="title classic" style="font-family: 'Lato'" id="services">Our Services</h2>
                </div>
            </div>

            <div class="row">
                <div class="col-md-12">
                    <div class="col-md-4 col-sm-4 wow fadeInDown" data-wow-delay=".5s">
                        <div class="service-content text-center">
                            <span class="service-icon icon-pentagon"><i class="fa fa-tachometer"></i></span>
                            <h3 style="font-family: 'Lato'" class="pt-5">Web Design</h3>
                            <p>We adapt and create your web site to any type of screen, through the developing and usage of
                                the latest trends, in order to always improve the user´s experience.</p>
                        </div>
                    </div>
                    <!--/ End first service -->

                    <div class="col-md-4 col-sm-4 wow fadeInDown" data-wow-delay=".8s">
                        <div class="service-content text-center">
                            <span class="service-icon icon-pentagon"><i class="fa fa-android"></i></span>
                            <h3 style="font-family: 'Lato'" class="pt-5">Apps Development</h3>
                            <p>We are your solution and your best option for the design and development of apps in the
                                Android and IOS platform.</p>
                        </div>

                    </div>
                    <!--/ End Second service -->

                    <div class="col-md-4 col-sm-4 wow fadeInDown" data-wow-delay="1.1s">
                        <div class="service-content text-center">
                            <span class="service-icon icon-pentagon"><i class="fa fa-shopping-cart"></i></span>
                            <h3 style="font-family: 'Lato'" class="pt-5">eCommerce Websites</h3>
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
                            <h3 style="font-family: 'Lato'" class="pt-5">SEO Service</h3>
                            <p>Guarantee of SEO positioning websites through a search engine optimization.</p>
                        </div>
                    </div>
                    <!--/ End first service -->

                    <div class="col-md-4 col-sm-4 wow fadeInDown" data-wow-delay="1.1s">
                        <div class="service-content text-center">
                            <span class="service-icon icon-pentagon"><i class="fa fa-comments"></i></span>
                            <h3 style="font-family: 'Lato'" class="pt-5">Consultation</h3>
                            <p>As per the projects on develop, we provide uninterrupted user and customer support to assure
                                the accurate and the effective assistance of the job.</p>
                        </div>
                    </div>
                    <!--/ End Third service -->

                    <div class="col-md-4 col-sm-4 wow fadeInDown" data-wow-delay="1.4s">
                        <div class="service-content text-center">
                            <span class="service-icon icon-pentagon"><i class="fa fa-lightbulb-o"></i></span>
                            <h3 style="font-family: 'Lato'" class="pt-5">Design for Startups</h3>
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
                    <h2 class="title2" style="font-family: 'Lato'" id="portfolio">Project Completed
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

            <div class="">
                <div id="isotope" class="isotope">

                    @foreach ($portfolios as $portafolio)
                        <div class="col-12 col-sm-4 web-design isotope-item" style="padding: 1em">
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

    <div class="col-12" id="our-team">
        <p style="font-size: 45px; color:#045A97; font-family:'Lato'; font-weight:900; padding-left:80px;">OUR TEAM</p>
    </div>

    <!-- The Modal Team -->

    @foreach ($teams as $team)
        <div class="modal fade" id="{{ $team->id }}" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog modal-xl" role="document" style="width: 90%;">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">


                        <div class="container-fluid">
                            <div class="row">

                                <button class="navbar-toggler" type="button" data-toggle="collapse"
                                    data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup"
                                    aria-expanded="true" aria-label="Toggle navigation">
                                    <span class="navbar-toggler-icon"></span>
                                </button>
                                <!-- MODAL SIDEBAR -->
                                <div class="col-sm-1 col-md-1 col-lg-1" style="background-color:#045A97;"
                                    id="navbarNavAltMarkup">
                                    <div class="text-center" style="list-style;none:">
                                        <div class="active">
                                            <div class="about pt-5" href="#tab_about_{{ $team->id }}"
                                                data-toggle="tab">
                                                <a href=" #tab_about_{{ $team->id }}" data-toggle="tab"> <img
                                                        src="{{ asset('assets/img/modal-teams/user.png') }}"
                                                        class="mx-auto d-block" href="#tab_about_{{ $team->id }}"
                                                        data-toggle="tab"></a>
                                                <a class="fs-6 text-center "
                                                    style="font-family: 'Lato'; font-weight: 300; color:white;"
                                                    href="#tab_about_{{ $team->id }}" data-toggle="tab">
                                                    ABOUT
                                                </a>
                                            </div>
                                        </div>

                                        <hr style="height:3px;border:none;color:white;background-color:white; width:76px;"
                                            class="mx-auto d-block">


                                        <div class="pt-4">
                                            <a href="#tab_experience_{{ $team->id }}" data-toggle="tab"><img
                                                    src="{{ asset('assets/img/modal-teams/work_FILL1_wght400_GRAD0_opsz48.png') }}"
                                                    class="mx-auto d-block"></a>
                                            <a class="fs-6 text-center"style="font-family: 'Lato'; font-weight: 300; color:white;"
                                                href="#tab_experience_{{ $team->id }}" data-toggle="tab">
                                                EXPERIENCE
                                            </a>
                                        </div>

                                        <hr style="height:3px;border:none;color:white;background-color:white; width:76px;"
                                            class="mx-auto d-block">



                                        <div class="pt-4" href="#tab_education_{{ $team->id }}" data-toggle="tab">
                                            <a href="#tab_education_{{ $team->id }}" data-toggle="tab"><img
                                                    src="{{ asset('assets/img/modal-teams/school_FILL1_wght400_GRAD0_opsz48.png') }}"
                                                    class="mx-auto d-block"></a>
                                            <a class="fs-6 text-center"style="font-family: 'Lato'; font-weight: 300; color:white;"
                                                href="#tab_education_{{ $team->id }}" data-toggle="tab">
                                                EDUCATION
                                            </a>
                                        </div>

                                        <hr style="height:3px;border:none;color:white;background-color:white; width:76px;"
                                            class="mx-auto d-block">

                                        <div class="pt-4" href="#tab_overview_{{ $team->id }}" data-toggle="tab">
                                            <a href="#tab_overview_{{ $team->id }}" data-toggle="tab">
                                                <img src="{{ asset('assets/img/modal-teams/description_FILL1_wght400_GRAD0_opsz48.png') }}"
                                                    class="mx-auto d-block">
                                            </a>
                                            <a class="fs-6 text-center"style="font-family: 'Lato'; font-weight: 300; color:white;"
                                                href="#tab_overview_{{ $team->id }}" data-toggle="tab">
                                                OVERVIEW
                                            </a>
                                        </div>

                                        <hr style="height:3px;border:none; color:white;background-color:white;"
                                            class="mx-auto d-block w-100">

                                        <img src="{{ asset('assets/img/modal-teams/Grupo 5.png') }}"
                                            class="mx-auto d-block pt-5" style="height: 80px;">

                                    </div>
                                </div>
                                <!-- MODAL SIDEBAR END -->

                                <div class="col-sm-5  col-md-5 col-lg-5">


                                    <div class="d-inline-block">
                                        <iframe  src="{{ $team->team_presentation }}"
                                            title="YouTube video player" frameborder="0"
                                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                                            allowfullscreen></iframe>


                                        <div class="col-12" style="line-height: 1.3em;">
                                            <p style="font-family: 'Lato', Bold;  color:black; font-size:30px; line-height: 1.3em;"
                                                class="text-center pt-1">
                                                {{ $team->name }}
                                            </p>
                                            <p class="text-center fs-3"
                                                style="color:#045A97; font-family:'Lato'; font-weight:900; line-height: 1.3em;">
                                                {{ $team->team_category }}
                                            </p>
                                            <p class="text-center"
                                                style="color:#323232; line-height: 1.3em; font-weight:light">
                                                {{ $team->residence }}
                                            </p>
                                            <p class="text-center"
                                                style="color:#323232; line-height: 1.3em; font-weight:light">
                                                {{ $team->work_time }}
                                            </p>

                                        </div>

                                        <hr style="height:2px;border:none;color:white;background-color:rgb(0, 0, 0); width:422px;"
                                            class="mx-auto d-block">
                                    </div>

                                    <div class="row">
                                        <div class="col-1"></div>
                                        <div style="height: 5%; width:35%; background-color:#045A97; border-radius:20px;">
                                            <p style="text-align: center; padding-top:8px; color:white; font-family: 'Lato';"><a
                                                    href="{{ $team->cv_link }}" style="color:white;">DOWNLOAD
                                                    CV</a></p>
                                        </div>
                                        <div class="col-1"></div>
                                        <div style="height: 5%; width:35%; background-color:#045A97; border-radius:20px;">
                                            <p style="text-align: center;  padding-top:8px; color:white; font-family: 'Lato';">CONTACT
                                                ME</p>
                                        </div>
                                    </div>

                                </div>

                                <div class="col-sm-6  col-md-6 col-lg-6">
                                    <div class="tab-content">

                                        <div class="tab-pane active animated fadeInRight"
                                            id="tab_about_{{ $team->id }}">
                                            <p style="font-family: 'Lato'; color:#045A97; font-weight:700;"
                                                class="fs-1 pt-4">About <span style="color:#323232;">Me</span>
                                                <img src="{{ asset('assets/img/modal-teams/user-1.png') }}"
                                                    style="height: 51px; float:right;">
                                            </p>
                                            <hr style="height:2px;border:none;color:white;background-color:rgb(0, 0, 0);"
                                                class="mx-auto d-block  w-100">

                                            <p style="font-size:18px; color:#323232; font-family: 'Lato'; font-weight:300;">
                                                {{ $team->description }}</p>

                                            <div class="col-11 h-25" style="background-color: #045A97;">

                                                <div class="row">

                                                    <div class="col">
                                                        <img src="{{ asset('assets/img/modal-teams/folder_shared_FILL1_wght400_GRAD0_opsz48.png') }} "
                                                            alt=""
                                                            style="height: 80px; margin-left:35px; margin-top:25px;">
                                                    </div>


                                                    <div class="col"
                                                        style="color:#FFFFFF;line-height:2px; padding-top:7px; ">
                                                        <p style="line-height: 1.3em; ">Age</p>
                                                        <p style="line-height: 1.3em; ">Residence</p>
                                                        <p style="line-height: 1.3em; ">Freelance</p>
                                                        <p style="line-height: 1.3em; ">Address</p>

                                                    </div>


                                                    <div class="col"
                                                        style="font-size: 15px; line-height:2px; padding-top:7px; color:#FFFFFF; ">
                                                        <p style="line-height: 1.3em; ">{{ $team->age }}</p>
                                                        <p style="line-height: 1.3em; ">{{ $team->residence }}</p>
                                                        <p style="line-height: 1.3em; ">{{ $team->freelance }}</p>
                                                        <p style="line-height: 1.3em; ">{{ $team->address }}</p>
                                                    </div>

                                                </div>




                                            </div>


                                            <div class="col-11 pt-5">
                                                <p style="color:#045A97; font-size:33px; font-weight:600;">
                                                    Skills
                                                </p>

                                                <hr style="height:2px;border:none;color:white;background-color:rgb(0, 0, 0);"
                                                    class="mx-auto d-block w-100">

                                                <p>2-5 years</p>

                                                @foreach (explode(',', $team->skills) as $skill)
                                                    <h1
                                                        style="display: inline-block; font-family: 'Lato';">
                                                        <span
                                                            class="badge rounded-pill bg-size-lg" style="background-color: #323232; font-weight:300;">{{ $skill }}</span>
                                            </h1>
                                                @endforeach


                                            </div>
                                        </div>



                                        <div class="tab-pane animated fadeInLeft"
                                            id="tab_experience_{{ $team->id }}">
                                            <p style="font-family: 'Lato'; color:#045A97; font-weight:700;"
                                                class="fs-1 pt-4">Experience <img
                                                    src="{{ asset('assets/img/modal-teams/work_FILL1_wght400_GRAD0_opsz48@2x.png') }}"
                                                    style="height: 40px; float:right;"></p>
                                            <hr style="height:2px;border:none;color:white;background-color:rgb(0, 0, 0);"
                                                class="mx-auto d-block w-100">


                                            @foreach ($teamExperiences as $teamExperience)
                                                @if ($team->id == $teamExperience->developer_id)
                                                    <div class="col-12 lh-1">

                                                        <div
                                                            style=" width:22%; background-color:#045A97; border-radius:20px; float: right; height:30px; ">
                                                            <p style="text-align: center;  color:white; margin-top:2px;">
                                                                {{ $teamExperience->experience_date }}
                                                            </p>
                                                        </div>
                                                        <p class="text-left fs-3"
                                                            style="color:#045A97; font-family:'Lato'; font-weight:900;">
                                                            {{ $teamExperience->experience_category }}

                                                        </p>
                                                        <p>
                                                            {{ $teamExperience->experience_company }}
                                                        </p>

                                                        <p style="font-size:15px; color:#323232;">
                                                            {{ $teamExperience->experience_description }}
                                                        </p>
                                                    </div>
                                                @endif
                                            @endforeach

                                        </div>




                                        <div class="tab-pane animated  fadeInLeft"
                                            id="tab_education_{{ $team->id }}">

                                            <p style="font-family: 'Lato'; color:#045A97; font-weight:700;"
                                                class="fs-1 pt-4">Education <img
                                                    src="{{ asset('assets/img/modal-teams/educationblue.png') }}"
                                                    style="height: 40px; float:right;"></p>
                                            <hr style="height:2px;border:none;color:white;background-color:rgb(0, 0, 0);"
                                                class="mx-auto d-block w-100">

                                            @foreach ($teamEducations as $teamEducation)
                                                @if ($team->id == $teamEducation->developer_id)
                                                    <div class="col-12 lh-1">
                                                        <div
                                                            style=" width:22%; background-color:#045A97; border-radius:20px; float: right; height:30px; ">
                                                            <p style="text-align: center;  color:white; margin-top:2px;">
                                                                {{ $teamEducation->education_date }}
                                                            </p>
                                                        </div>
                                                        <p class="text-left fs-3"
                                                            style="color:#045A97; font-family:'Lato'; font-weight:900;">
                                                            {{ $teamEducation->education_title }}

                                                        </p>
                                                        <p>
                                                            {{ $teamEducation->education_country }}
                                                        </p>

                                                        <p style="font-size:15px; color:#323232;">
                                                            {{ $teamEducation->education_description }}</p>
                                                    </div>
                                                @endif
                                            @endforeach

                                        </div>




                                        <div class="tab-pane animated  fadeInLeft" id="tab_overview_{{ $team->id }}">
                                            <p style="font-family: 'Lato'; color:#045A97; font-weight:700;"
                                                class="fs-1 pt-4">Overview <img
                                                    src="{{ asset('assets/img/modal-teams/OVERVIEW.png') }}"
                                                    style="height: 40px; float:right;"></p>
                                            <hr style="height:2px;border:none;color:white;background-color:rgb(0, 0, 0); "
                                                class="mx-auto d-block">



                                            <p style=" font-size: 18px; color: #323232; font-family: 'Lato'; font-weight: 300;">{{ $team->overview }}</p>

                                            <p style="font-family: 'Lato'; color:#045A97; font-weight:700;"
                                                class="fs-1 pt-4">Coding</p>
                                            <hr style="height:2px;border:none;color:white;background-color:rgb(0, 0, 0);"
                                                class="mx-auto d-block w-100">



                                            @foreach ($teamSkills as $teamSkill)
                                                @if ($team->id == $teamSkill->developer_id)
                                                    <ul class="d-inline-block">
                                                        <li>
                                                            <input type="text"
                                                                value="{{ $teamSkill->skill_percentage }}" class="dial"
                                                                data-thickness=".1">
                                                            <p  style="font-family: 'Lato'; text-align:center; font-size:12px;">
                                                                {{ $teamSkill->skill_name }}</p>
                                                        </li>
                                                    </ul>
                                                @endif
                                            @endforeach
                                        </div>

                                    </div><!-- tab content -->
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


    <!-- TEAM SLIDER-->

        <div class="">
            <div class="" style="padding: 1em 0;">
                <div class="owl-carousel owl-theme" id="team-carousel">
                    @foreach($teams as $team)
                    <div class="item">
                        <div class="team">
                            
                            <div class="details">
                                <p class="pt-3 text-center">
                                    <img src="{{ asset('assets/img/modal-teams/Grupo 5.png') }}"
                                    class="pt-5 mx-auto" style="height: 65px;">
                                </p>

                                <p style="font-family: 'Lato'; color:white; font-size:30px;" class="pt-3 text-center">{{$team->name}}</p>
                                <hr style="width:60px; margin:0 auto; color:#FFFFFF; height:1px;">
                                <p style="font-family: 'Lato'; color:white; font-size:20px;" class="pt-3 text-center">{{$team->team_category}}</p>

                            </div>
                            <div class="photo">
                                
                                <img src="{{ asset('storage') . '/' . $team->photo }}" alt=""
                                    style="height:90%; width:100%" href="#" data-toggle="modal"
                                    data-target="#{{ $team->id }}">
                                    
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>

            </div>
        </div>

       

    <!-- TEAM SLIDER END-->
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
                <h2 class="title classic" style="font-family: 'Lato'">Contact Us</h2>
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
                            <h3 style="font-family: 'Lato'">Contact Details</h3>
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


    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">
    </script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jQuery-Knob/1.2.13/jquery.knob.min.js"
        integrity="sha512-NhRZzPdzMOMf005Xmd4JonwPftz4Pe99mRVcFeRDcdCtfjv46zPIi/7ZKScbpHD/V0HB1Eb+ZWigMqw94VUVaw=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <script>
        $('.dial').knob({
            'min': 10,
            'max': 100,
            'width': 70,
            'height': 70,
            'displayInput': true,
            'fgColor': "#045A97",


        });

        $(document).ready(function(){
  $("#team-carousel").owlCarousel({
    margin:0,
    responsive:true,
    navigation:true,
    pagination:false,
    responsiveRefreshRate : 0,
    navigationText: ['<i class="fa fa-chevron-left" style= "color:#045A97; font-size:20px;"></i>', '<i class="fa fa-chevron-right" style= "color:#045A97; font-size:20px;"></i>'],
    itemsCustom : [
        [0, 1],
        [375, 1],
        [600, 1],
        [700, 1],
        [1000, 5]
      ],
  });
});



$(document).ready(function(){
  $("#testimonial-carousel").owlCarousel({
    margin:0,
    responsive:true,
    navigation:true,
    pagination:false,
    responsiveRefreshRate : 0,
    navigationText: ['<i class="fa fa-chevron-left" style= "color:#045A97; font-size:20px;"></i>', '<i class="fa fa-chevron-right" style= "color:#045A97; font-size:20px;"></i>'],
    itemsCustom : [
        [0, 1],
        [375, 1],
        [600, 1],
        [700, 1],
        [1000, 5]
      ],
  });
});





    </script>


    <style>


        @media (min-width:300px) and (max-width:600px) {

            .owl-next {
                top:40% !important;
            }

            .owl-prev {
                top:40% !important;
            }
        }


        h1 {
            font-family: 'JaapokkiRegular';
            text-transform: uppercase;
            letter-spacing: 0.5px;
        }

        h2 {
            font-family: 'JaapokkiRegular';
            text-transform: uppercase;
            letter-spacing: 0.5px;
        }

        h3 {
            font-family: 'JaapokkiRegular';
            text-transform: uppercase;
            letter-spacing: 0.5px;
        }

        h4 {
            font-family: 'JaapokkiRegular';
            text-transform: uppercase;
            letter-spacing: 0.5px;
        }

        h5 {
            font-family: 'JaapokkiRegular';
            text-transform: uppercase;
            letter-spacing: 0.5px;
        }

        h6 {
            font-family: 'JaapokkiRegular';
            text-transform: uppercase;
            letter-spacing: 0.5px;
        }

        * {
            list-style: none;
        }

        .photo {
            z-index: 99999999;
        }


        .item {
            height: 400px;
            position: relative;
        }

        .team{ 
        height: 0px;
        position: relative;
        }

        .photo {
            top:50px;
            position: fixed;
            transition: all 1s;

        }

        @media (min-width:765px) {

        .photo:hover {
            top: 100px;
            transition: all 1s;

        }



        iframe {
            width: 450px;
            height: 315px;
        }

        }

        .details {
            height: 0px;
            width: 100%;
            position: absolute;
            top: 0px;
            background: linear-gradient(to bottom, #3E4043, #045A97);
            transition: all 0.5s;
            visibility: hidden;
            z-index: -9999999;
            
        }


        @media (min-width:300px) and (max-width:765px) {
            .details {
                width: 100%;

        height: 300px;
        visibility: visible;
     
            
        }


        .owl-carousel .owl-wrapper-outer {
        overflow: hidden;
      }

      .photo {
            top:194px;
            position: fixed;
            transition: all 1s;

        }

    




}



@media (min-width:765px) {
    
    .team:hover .details {
            width: 100%;

            height: 300px;
            position: fixed;
            top: -200px;
            visibility: visible;
            z-index: 99999999;

            

        }


        .team:hover .details {
            width: 100%;

            height: 300px;
            position: fixed;
            top: -200px;
            visibility: visible;
            z-index: 99999999;

            

        }


        }



        .details * {
            z-index: 0;
        }

      

        @media (min-width:765px) {
           


        .owl-carousel .owl-wrapper-outer {
        overflow: initial;
      }



        }
        
       .owl-next {
            position: absolute !important;
            top:30% ;
            font-size: 20px;
            right:  0%;
            background-color: white;
        }

        .owl-prev {
            position: absolute !important;
            top:30%;
            font-size: 20px;
            left: 0%;
            background-color: white;

        }

    </style>
@endsection
