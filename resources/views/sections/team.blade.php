<div class="col-12 heading" id="our-team">
    <h2  class="title classic" style="font-size: 45px; color:#045A97; font-family:'Lato'; font-weight:900;">OUR TEAM</h2>
</div>

@foreach ($teams as $team)
    <div class="modal fade" id="{{ $team->id }}" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-xl" role="document" style="width: 90%;">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close" id="modal-close">
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
                            <div class="col-sm-1 col-md-1 col-lg-1" style="background-color:#045A97;" id="navbarNavAltMarkup">
                                <div class="text-center" style="list-style:none;">
                                    <div class="active">
                                        <div class="about pt-5" href="#tab_about_{{ $team->id }}" data-toggle="tab">
                                            <a href=" #tab_about_{{ $team->id }}" data-toggle="tab" onclick="toggle(this)"> 
                                                <svg class="svg-item active mx-auto" xmlns="http://www.w3.org/2000/svg" width="41.941" height="51.942" viewBox="0 0 50 50">
                                                    <path d="M182.619,331.275H165.372c-1.162,0-1.212-.142-1.314-1.283-.293-3.214,1.323-5.207,4.023-6.563,1.8-.906,3.716-1.529,5.564-2.319a11.991,11.991,0,0,0,3.051-1.752,4.045,4.045,0,0,0,1.319-2.267.958.958,0,0,0-.244-.866,19.4,19.4,0,0,1-4.329-13.72,8.658,8.658,0,0,1,5.307-7.6,8.876,8.876,0,0,1,9.38.866c3.131,2.234,4.177,5.432,3.858,9.143a20.558,20.558,0,0,1-3.81,10.646c-.331.455-.985.783-.8,1.527a4.18,4.18,0,0,0,1.385,2.319,20.7,20.7,0,0,0,5.541,2.722,21.494,21.494,0,0,1,4.675,2.346c2.142,1.545,2.528,3.711,2.308,6.114-.052.582-.506.693-1.015.693-2.012-.009-4.024,0-6.038,0Z" transform="translate(-156.82 -286.761)" fill="#FFFFFF"/>
                                                </svg>
                                            </a>
                                            <a class="fs-6 text-center "
                                                style="font-family: 'Lato'; font-weight: 300; color:white;"
                                                href="#tab_about_{{ $team->id }}" data-toggle="tab">
                                                ABOUT
                                            </a>
                                        </div>
                                    </div>

                                    <hr style="height:3px;border:none;color:white;background-color:white; width:76px;" class="mx-auto d-block">

                                    <div class="pt-4">
                                        <a href="#tab_experience_{{ $team->id }}" data-toggle="tab">
                                            <svg  class="svg-item mx-auto" xmlns="http://www.w3.org/2000/svg" width="41.941" height="41.942" viewBox="0 0 40 50">
                                                <path id="work_FILL1_wght400_GRAD0_opsz48" d="M6.859,40.208a2.742,2.742,0,0,1-2-.858,2.742,2.742,0,0,1-.858-2V14.481a2.742,2.742,0,0,1,.858-2,2.742,2.742,0,0,1,2-.858h8.576V6.859a2.742,2.742,0,0,1,.858-2,2.742,2.742,0,0,1,2-.858h9.529a2.742,2.742,0,0,1,2,.858,2.742,2.742,0,0,1,.858,2v4.764h8.576a2.931,2.931,0,0,1,2.859,2.859V37.35a2.931,2.931,0,0,1-2.859,2.859ZM18.293,11.623h9.529V6.859H18.293Z" transform="translate(-4 -4)" fill="#fff"/>
                                            </svg>
                                        </a>
                                        <a class="fs-6 text-center"style="font-family: 'Lato'; font-weight: 300; color:white;" href="#tab_experience_{{ $team->id }}" data-toggle="tab">
                                            EXPERIENCE
                                        </a>
                                    </div>

                                    <hr style="height:3px;border:none;color:white;background-color:white; width:76px;"  class="mx-auto d-block">

                                    <div class="pt-4" href="#tab_education_{{ $team->id }}" data-toggle="tab">
                                        <a href="#tab_education_{{ $team->id }}" data-toggle="tab">
                                            <svg class="svg-item mx-auto" xmlns="http://www.w3.org/2000/svg" width="41.941" height="43.942" viewBox="0 0 50 50">
                                                <path  d="M42.356,33.412V19.534L23.605,29.623,2,17.811,23.605,6l21.7,11.811v15.6ZM23.605,41.434,9.333,33.609V23.274L23.605,31.1l14.272-7.825V33.609Z" transform="translate(-2 -6)" fill="#fff"/>
                                            </svg>
                                        </a>
                                        <a class="fs-6 text-center"style="font-family: 'Lato'; font-weight: 300; color:white;" href="#tab_education_{{ $team->id }}" data-toggle="tab">
                                            EDUCATION
                                        </a>
                                    </div>

                                    <hr style="height:3px;border:none;color:white;background-color:white; width:76px;" class="mx-auto d-block">

                                    <div class="pt-4" href="#tab_overview_{{ $team->id }}" data-toggle="tab">
                                        <a href="#tab_overview_{{ $team->id }}" data-toggle="tab">
                                            <svg class="svg-item px-auto" xmlns="http://www.w3.org/2000/svg" width="41.941" height="41.942" viewBox="0 0 35 50">
                                                <path  d="M15.417,33.386h15.02v-2.8H15.417Zm0-7.93h15.02v-2.8H15.417ZM10.8,41.316a2.87,2.87,0,0,1-2.8-2.8V6.8A2.685,2.685,0,0,1,8.84,4.84,2.685,2.685,0,0,1,10.8,4H27.638L37.853,14.215v24.3a2.87,2.87,0,0,1-2.8,2.8Zm15.44-25.841h8.816L26.238,6.8Z" transform="translate(-8 -4)" fill="#fff"/>
                                            </svg>
                                        </a>
                                        <a class="fs-6 text-center"style="font-family: 'Lato'; font-weight: 300; color:white;" href="#tab_overview_{{ $team->id }}" data-toggle="tab">
                                            OVERVIEW
                                        </a>
                                    </div>

                                    <hr style="height:3px;border:none; color:white;background-color:white;" class="mx-auto d-block w-100">

                                    <img src="{{ asset('assets/img/modal-teams/Grupo 5.png') }}" class="mx-auto d-block pt-5" style="height: 80px;">

                                </div>
                            </div>
                                
                            <!-- MODAL SIDEBAR END -->
                            <div class="col-sm-5  col-md-5 col-lg-5">
                                <div class="d-inline-block w-80">
                                    <iframe src="{{ $team->team_presentation }}" title="YouTube video player"
                                        frameborder="0"
                                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                                        allowfullscreen>
                                    </iframe>

                                    <div class="col-12" style="line-height: 1.3em;">
                                        <p style="font-family: 'Lato', Bold;  color:black; font-size:30px; line-height: 1.3em;" class="text-center pt-1">
                                            {{ $team->name }}
                                        </p>
                                        <p class="text-center fs-3" style="color:#045A97; font-family:'Lato'; font-weight:900; line-height: 1.3em;">
                                            {{ $team->team_category }}
                                        </p>
                                        <p class="text-center" style="color:#323232; line-height: 1.3em; font-weight:light">
                                            {{ $team->residence }}
                                        </p>
                                        <p class="text-center" style="color:#323232; line-height: 1.3em; font-weight:light">
                                            {{ $team->work_time }}
                                        </p>
                                    </div>

                                    <hr style="height:2px;border:none;color:white;background-color:rgb(0, 0, 0); width:422px;" class="mx-auto d-block">
                                </div>
                                <div class="row">
                                    <div class="col-1"></div>
                                    <div style="height: 5%; width:35%; background-color:#045A97; border-radius:20px;">
                                        <p style="text-align: center; padding-top:10px; color:white; font-family: 'Lato';">
                                            <a href="{{ $team->cv_link }}" style="color:white;">
                                                DOWNLOAD CV
                                            </a>
                                        </p>
                                    </div>
                                    <div class="col-1"></div>
                                    <div style="height: 5%; width:35%; background-color:#045A97; border-radius:20px;">
                                        <p style="text-align: center; padding-top:10px; color:white; font-family: 'Lato';">
                                            <a href="#" style="color:white;">CONTACT ME</a>
                                        </p>
                                    </div>
                                </div>
                            </div>

                            <div class="col-sm-6  col-md-6 col-lg-6">
                                <div class="tab-content">
                                    <div class="tab-pane active animated fadeInRight" id="tab_about_{{ $team->id }}">
                                        <p style="font-family: 'Lato'; color:#045A97; font-weight:700;" class="fs-1 pt-4">
                                            About <span style="color:#323232;">Me</span>
                                            <img src="{{ asset('assets/img/modal-teams/user-1.png') }}" style="height: 51px; float:right;">
                                        </p>
                                        <hr style="height:2px;border:none;color:white;background-color:rgb(0, 0, 0);" class="mx-auto d-block  w-100">
                                        <p style="font-size:18px; color:#323232; font-family: 'Lato'; font-weight:300;">
                                            {{ $team->description }}
                                        </p>

                                        <div class="col-11 h-25" style="background-color: #045A97;">
                                            <div class="row">
                                                <div class="col">
                                                    <img src="{{ asset('assets/img/modal-teams/folder_shared_FILL1_wght400_GRAD0_opsz48.png') }} " alt="" style="height: 80px; margin-left:35px; margin-top:25px;">
                                                </div>

                                                <div class="col" style="color:#FFFFFF;line-height:2px; padding-top:7px; ">
                                                    <p style="line-height: 1.3em; ">Age</p>
                                                    <p style="line-height: 1.3em; ">Residence</p>
                                                    <p style="line-height: 1.3em; ">Freelance</p>
                                                    <p style="line-height: 1.3em; ">Address</p>
                                                </div>

                                                <div class="col" style="font-size: 15px; line-height:2px; padding-top:7px; color:#FFFFFF; ">
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

                                            <hr style="height:2px;border:none;color:white;background-color:rgb(0, 0, 0);" class="mx-auto d-block w-100">

                                            <p>2-5 years</p>

                                            @foreach (explode(',', $team->skills) as $skill)
                                                <h2 style="display: inline-block; font-family: 'Lato';">
                                                    <span class="badge rounded-pill bg-size-lg" style="background-color: #323232; font-weight:300;">{{ $skill }}</span>
                                                </h2>
                                            @endforeach

                                        </div>
                                    </div>

                                    <div class="tab-pane animated fadeInLeft" id="tab_experience_{{ $team->id }}">
                                        <p style="font-family: 'Lato'; color:#045A97; font-weight:700;" class="fs-1 pt-4">
                                            Experience 
                                            <img src="{{ asset('assets/img/modal-teams/work_FILL1_wght400_GRAD0_opsz48@2x.png') }}" style="height: 40px; float:right;">
                                        </p>
                                            
                                        <hr style="height:2px;border:none;color:white;background-color:rgb(0, 0, 0);" class="mx-auto d-block w-100">

                                        @foreach ($teamExperiences as $teamExperience)
                                            @if ($team->id == $teamExperience->developer_id)
                                            <div class="col-12 lh-1">
                                                <div style=" width:22%; background-color:#045A97; border-radius:20px; float: right; height:30px; ">
                                                    <p style="text-align: center;  color:white; margin-top:4px;">
                                                        {{ $teamExperience->experience_date }}
                                                    </p>
                                                </div>
                                                <p class="text-left fs-3" style="color:#045A97; font-family:'Lato'; font-weight:900;">
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

                                    <div class="tab-pane animated  fadeInLeft" id="tab_education_{{ $team->id }}">
                                        <p style="font-family: 'Lato'; color:#045A97; font-weight:700;" class="fs-1 pt-4">
                                            Education 
                                            <img src="{{ asset('assets/img/modal-teams/educationblue.png') }}" style="height: 40px; float:right;">
                                        </p>
                                        <hr style="height:2px;border:none;color:white;background-color:rgb(0, 0, 0);" class="mx-auto d-block w-100">

                                        @foreach ($teamEducations as $teamEducation)
                                            @if ($team->id == $teamEducation->developer_id)
                                                <div class="col-12 lh-1">
                                                    <div style=" width:22%; background-color:#045A97; border-radius:20px; float: right; height:30px; ">
                                                        <p style="text-align: center;  color:white; margin-top:4px;">
                                                            {{ $teamEducation->education_date }}
                                                        </p>
                                                    </div>
                                                    <p class="text-left fs-3" style="color:#045A97; font-family:'Lato'; font-weight:900;">
                                                        {{ $teamEducation->education_title }}
                                                    </p>
                                                    <p>
                                                        {{ $teamEducation->education_country }}
                                                    </p>

                                                    <p style="font-size:15px; color:#323232;">
                                                        {{ $teamEducation->education_description }}
                                                    </p>
                                                </div>
                                            @endif
                                        @endforeach

                                    </div>

                                    <div class="tab-pane animated  fadeInLeft" id="tab_overview_{{ $team->id }}">
                                        <p style="font-family: 'Lato'; color:#045A97; font-weight:700;"  class="fs-1 pt-4">
                                            Overview 
                                            <img src="{{ asset('assets/img/modal-teams/OVERVIEW.png') }}" style="height: 40px; float:right;">
                                        </p>
                                        <hr style="height:2px;border:none;color:white;background-color:rgb(0, 0, 0); " class="mx-auto d-block">

                                        <p style=" font-size: 18px; color: #323232; font-family: 'Lato'; font-weight: 300;">
                                            {{ $team->overview }}
                                        </p>

                                        <p style="font-family: 'Lato'; color:#045A97; font-weight:700;" class="fs-1 pt-4">Coding</p>
                                        <hr style="height:2px;border:none;color:white;background-color:rgb(0, 0, 0);" class="mx-auto d-block w-100">

                                        @foreach ($teamSkills as $teamSkill)
                                            @if ($team->id == $teamSkill->developer_id)
                                            <ul class="d-inline-block">
                                                <li>
                                                    <input type="text" value="{{ $teamSkill->skill_percentage }}" class="dial" data-thickness=".1">
                                                        <p  style="font-family: 'Lato'; text-align:center; font-size:12px;">
                                                            {{ $teamSkill->skill_name }}
                                                        </p>
                                                    </li>
                                                </ul>
                                            @endif
                                        @endforeach
                                    </div>

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

 @endforeach

<!-- TEAM SLIDER-->

<div class="">
    <div class="" style="padding: 1em 0;">
        <div class="owl-carousel owl-theme" id="team-carousel">
            @foreach ($teams as $team)
                <div class="item">
                    <div class="team">
                        <div class="details">
                            <p class="pt-3 text-center">
                                <img src="{{ asset('assets/img/modal-teams/Grupo 5.png') }}" class="pt-5 mx-auto" style="height: 65px;">
                            </p>

                            <p style="font-family: 'Lato'; color:white; font-size:30px;" class="pt-3 text-center">
                                {{ $team->name }}
                            </p>
                            <hr style="width:60px; margin:0 auto; color:#FFFFFF; height:1px;">
                            <p style="font-family: 'Lato'; color:white; font-size:20px;" class="pt-3 text-center">
                                {{ $team->team_category }}
                            </p>
                        </div>
                        <div class="photo">
                            <img src="{{ asset('storage') . '/' . $team->photo }}" alt="" style="height:90%; width:100%" href="#" data-toggle="modal" data-target="#{{ $team->id }}">
                        </div>
                    </div>
                </div>
            @endforeach
        </div>

    </div>
</div>