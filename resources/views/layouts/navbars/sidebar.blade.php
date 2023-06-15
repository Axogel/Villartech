@php
use Illuminate\Support\Facades\DB;

$setting = DB::select('select * from admin_settings');

@endphp

<script>
    // Smooth scroll
    document.querySelectorAll('a[href^="#"]').forEach(anchor => {
        anchor.addEventListener('click', function (e) {
            e.preventDefault();

            document.querySelector(this.getAttribute('href')).scrollIntoView({
                behavior: 'smooth'
            });
        });
    });
</script>
<script src="https://kit.fontawesome.com/91356adb35.js" crossorigin="anonymous"></script>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@6.2.1/css/fontawesome.min.css" integrity="sha384-QYIZto+st3yW+o8+5OHfT6S482Zsvz2WfOzpFSXMF9zqeLcFV0/wlZpMtyFcZALm" crossorigin="anonymous">
<link href="/assets/vendor/nucleo/css/nucleo.css" rel="stylesheet">
<nav class="navbar navbar-vertical fixed-left navbar-expand-md navbar-light" id="sidenav-main" style="background-color: #045A97;">
    <div class="container-fluid">
        <!-- Toggler -->
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#sidenav-collapse-main"
            aria-controls="sidenav-main" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <!-- Brand -->
        <img src="{{ asset('assets/img/modal-teams/Grupo 5.png') }}" class="mx-auto d-block" style="height: 50px;">

        <!-- User -->
        <ul class="nav align-items-center d-md-none">
            <li class="nav-item dropdown">
                <a class="nav-link" href="#" role="button" data-toggle="dropdown" aria-haspopup="true"
                    aria-expanded="false">
                    <div class="media align-items-center">
                        <span class="avatar avatar-sm rounded-circle">
                            <img alt="Image placeholder" src="{{ asset('argon') }}/img/theme/team-1-800x800.jpg">
                        </span>
                    </div>
                </a>
                <div class="dropdown-menu dropdown-menu-arrow dropdown-menu-right">
                    <div class=" dropdown-header noti-title">
                        <h6 class="text-overflow m-0">{{ __('Welcome!') }}</h6>
                    </div>
                    <a href="{{ route('profile.edit') }}" class="dropdown-item">
                        <i class="ni ni-single-02"></i>
                        <span>{{ __('My profile') }}</span>
                    </a>
                    <a href="#" class="dropdown-item">
                        <i class="ni ni-settings-gear-65"></i>
                        <span>{{ __('Settings') }}</span>
                    </a>
                    <a href="#" class="dropdown-item">
                        <i class="ni ni-calendar-grid-58"></i>
                        <span>{{ __('Activity') }}</span>
                    </a>
                    <a href="#" class="dropdown-item">
                        <i class="ni ni-support-16"></i>
                        <span>{{ __('Support') }}</span>
                    </a>
                    <div class="dropdown-divider"></div>
                    <a href="{{ route('logout') }}" class="dropdown-item"
                        onclick="event.preventDefault();
                    document.getElementById('logout-form').submit();">
                        <i class="ni ni-user-run"></i>
                        <span>{{ __('Logout') }}</span>
                    </a>
                </div>
            </li>
        </ul>
        <!-- Collapse -->
        <div class="collapse navbar-collapse" id="sidenav-collapse-main">
            <!-- Collapse header -->
            <div class="navbar-collapse-header d-md-none">
                <div class="row">
                    <div class="col-6 collapse-brand">
                        <a href="{{ route('home') }}">
                            <img src="{{ asset('argon') }}/img/brand/blue.png">
                        </a>
                    </div>
                    <div class="col-6 collapse-close">
                        <button type="button" class="navbar-toggler" data-toggle="collapse"
                            data-target="#sidenav-collapse-main" aria-controls="sidenav-main" aria-expanded="false"
                            aria-label="Toggle sidenav">
                            <span></span>
                            <span></span>
                        </button>
                    </div>
                </div>
            </div>
            <!-- Form -->
            <form class="mt-4 mb-3 d-md-none">
                <div class="input-group input-group-rounded input-group-merge">
                    <input type="search" class="form-control form-control-rounded form-control-prepended"
                        placeholder="{{ __('Search') }}" aria-label="Search">
                    <div class="input-group-prepend">
                        <div class="input-group-text">
                            <span class="fa fa-search"></span>
                        </div>
                    </div>
                </div>
            </form>
            <!-- Navigation -->
            <ul class="nav nav-sm flex-column img-zoom">
                <li class="nav-item">
                    <a class="nav-link" href="<?php echo e(route('home')); ?>">
                        <p style="font-weight: 900; font-size:15px; color:white;"><i class="fa-solid fa-laptop"></i>Dashboard</p>

                    </a>
                </li>
            </ul>
                
                


                <ul class="nav nav-sm flex-column img-zoom">
                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo e(route('teams.index')); ?>">
                            <p style="font-weight: 900; font-size:15px; color:white;"><i class="fa-solid fa-user"></i> Emplooyes</p>

                        </a>
                    </li>
                </ul>
                <!-- skils CRUD -->
                <ul class="nav nav-sm flex-column img-zoom">
                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo e(route('skills.index')); ?>">
                            <p style="font-weight: 900; font-size:15px; color:white;"><i class="fa-solid fa-star" style="color: #ffffff;"></i> Skills</p>

                        </a>
                    </li>
                </ul>


                <ul class="nav nav-sm flex-column img-zoom">
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('portfolios.index') }}">
                           <p style="font-weight: 900; font-size:15px; color:white;"> <i class="fa-solid fa-suitcase" style="color: #ffffff;"></i> Portfolios</p>
                        </a>
                    </li>
                </ul>



                <ul class="nav nav-sm flex-column img-zoom">
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('settings.edit', $setting[0]->id) }}">
                           <p style="font-weight: 900; font-size:15px; color:white;"> <i class="fa-solid fa-gear" style="color: #ffffff;"></i> Settings</p>
                        </a>
                    </li>
                </ul>


               

                <ul class="nav nav-sm flex-column img-zoom">
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('tags.index') }}">
                    <p style="font-weight: 900; font-size:15px; color:white;"> <i class="fa-solid fa-tag" style="color: #ffffff;"></i> Tags</p>
                    </a>
                </li>
            </ul>

            <ul class="nav nav-sm flex-column img-zoom">

                <li class="nav-item">
                    <a class="nav-link" href="{{ route('categories.index') }}">
                        <p style="font-weight: 900; font-size:15px; color:white;"> <i class="fa-solid fa-folder" style="color: #fafafa;"></i> Categories</p>
                    </a>
                </li>
            </ul>

            <ul class="nav nav-sm flex-column img-zoom ">

                <li class="nav-item">
                    <a class="nav-link" href="{{ route('category-types.index') }}">
                        <p style="font-weight: 900; font-size:15px; color:white;"> <i  class="fa-solid fa-layer-group pr-1" style="color: #ffffff;"></i>Category Types</p>
                    </a>
                </li>
            </ul>
            <ul class="nav nav-sm flex-column img-zoom ">

                <li class="nav-item">
                    <a class="nav-link" href="{{ route('languages.index') }}">
                        <p style="font-weight: 900; font-size:15px; color:white;"> <i  class="fa-solid fa-layer-group pr-1" style="color: #ffffff;"></i>Languages</p>
                    </a>
                </li>
                </ul>
            <ul class="nav nav-sm flex-column img-zoom ">

                <li class="nav-item">
                    <a class="nav-link" href="{{ route('EmployeeCategories.index') }}">
                        <p style="font-weight: 900; font-size:15px; color:white;"> <i  class="fa-solid fa-layer-group pr-1" style="color: #ffffff;"></i> Employee Category</p>
                    </a>
                </li>
            </ul>


            <ul class="nav nav-sm flex-column img-zoom">

                <li class="nav-item">
                    <a class="nav-link" href="{{ route('blogs.index') }}">
                        <p style="font-weight: 900; font-size:15px; color:white;"><i class="fa-solid fa-pencil" style="color: #ffffff;"></i> Blogs</p>
                    </a>
                </li>
            </ul>



            <ul class="nav nav-sm flex-column img-zoom">

                <li class="nav-item">
                    <a class="nav-link" href="{{ route('faqs.index') }}">
                        <p style="font-weight: 900; font-size:15px; color:white;"><i class="fa-solid fa-question" style="color: #ffffff;"></i> Faqs</p>
                    </a>
                </li>
            </ul>
            
            <ul class="nav nav-sm flex-column img-zoom">

                <li class="nav-item">
                    <a class="nav-link" href="{{ route('contacts.index') }}">
                        <p style="font-weight: 900; font-size:15px; color:white;"><i class="fa-solid fa-envelope pr-1" style="color: #ffffff;"></i>Emails</p>
                    </a>
                </li>
            </ul>

        </div>
    </div>


  
    <style>


        .img-zoom {
            transition: transform ease-in-out 0.3s;
        }

        .img-zoom:hover { 
            transform: scale(1.2); 
        }



        ul {
            list-style: none;
        }

        html {
        scroll-behavior: smooth;
    }
    
    h1, h2, h3, h4, h5, h6, img {
        transition: transform .2s ease-out;
    }
    
    h1:hover, h2:hover, h3:hover, h4:hover, h5:hover, h6:hover, img:hover {
        transform: scale(1.05);
    }
    </style>
    
</nav>

