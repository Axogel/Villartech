<div id="our-team" style="position:relative; bottom:70px;"></div>
<div class="col-12 heading container our-team" >
    <h2  class="title classic" style="font-size: 45px; color:#045A97; font-family:'Lato'; font-weight:900;">{{__("TeamOur")}}</h2>
</div>
@php
$locale = session('locale');
$targetLocale = ($locale == 'es') ? 'en' : 'es'; 
@endphp
@foreach ($teams as $team)
                @php
                        if($locale == 'es'){
                            $teamDescription =  $team['descriptionEs'];
                            $teamOverview = $team['overviewEs'];
                        }
                        else {
                            $teamDescription =  $team['description'];
                            $teamOverview = $team['overview'];
                        }
                @endphp

    <div class="modal fade" id="modal_team_{{ $team->id }}" tabindex="-1" role="dialog" aria-hidden="true">
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
                            <!-- MODAL SIDEBAR -->
                            <x-modal-team :teamId="$team->id" />
                            <!-- MODAL SIDEBAR END -->
                            <div class="col-sm-5  col-md-5 col-lg-5" style="padding-left: 0;">
                                <div class="d-inline-block w-80" style="width:100%;">
                                    <iframe style="width:100%;" class="ml-sm-1" src="{{ $team->team_presentation }}" title="YouTube video player"
                                        frameborder="0"
                                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                                        allowfullscreen>
                                    </iframe>

                                    <div class="col-12 modal-responsive-width" style="line-height: 1.3em;">
                                        <p style="font-family: 'Lato', Bold;  color:black; font-size:30px; line-height: 1.3em;" class="text-center pt-1">
                                            {{ $team->name }}
                                        </p>
                                        <p class="text-center fs-3" style="color:#045A97; font-family:'Lato'; font-weight:900; line-height: 1.3em;">
                                        <span class="mb-0 text-sm">{{ $team->EmployeeCategories->name }}</span>

                                        </p>
                                        <p class="text-center" style="color:#323232; line-height: 1.3em; font-weight:light">
                                            {{ $team->residence }}
                                        </p>
                                        <p class="text-center" style="color:#323232; line-height: 1.3em; font-weight:light">
                                            {{ $team->work_time }}
                                        </p>
                                    </div>

                                    <hr style="height:2px;border:none;color:white;background-color:rgb(0, 0, 0); width:80%;" class="mx-auto d-block">
                                </div>
                                <div class="row">
                                    <div class="col-1"></div>
                                    <div style="height: 5%; width:41%; background-color:#045A97; border-radius:20px;">
                                        <p style="text-align: center; padding-top:10px; color:white; font-family: 'Lato'; width:100%;">
                                            <a href="{{ route('teamDetail', $team->slug) }}" style="color:white;">
                                            {{__("ViewTeamCV")}} 
                                            </a>
                                        </p>
                                    </div>
                                    <div class="col-1"></div>
                                    <div style="height: 5%; width:35%; background-color:#045A97; border-radius:20px;">
                                        <p style="text-align: center; padding-top:10px; color:white; font-family: 'Lato';">
                                            <a href="{{ route ('contactUs') }}" style="color:white;">  {{__("ViewTeamContactMe")}}</a>
                                        </p>
                                    </div>
                                </div>
                            </div>

                            <div class="col-sm-6  col-md-6 col-lg-6">
                                <div class="tab-content">
                                    <div class="tab-pane active animated fadeInRight" id="tab_about_{{ $team->id }}">
                  <p style="font-family: 'Lato'; color:#045A97; font-weight:700;" class="fs-1 pt-4">
                                        <span style="color:#045A97;">{{__("TeamAbout")}}  </span>{{__("TeamAboutNull")}}
                                            <img src="{{ asset('assets/img/modal-teams/user-1.png') }}" style="height: 51px; float:right;">
                                        </p>
                                        <hr style="height:2px;border:none;color:white;background-color:rgb(0, 0, 0);" class="mx-auto d-block  w-100">
                                        <div class="scrollable-container my-4">
                                             <p style="font-size: 18px; color: #323232; font-family: 'Lato'; font-weight: 300;">
                                                 {{  $teamDescription }}
                                             </p>
                                        </div>

                                        <div class="col-11 height-responsive-modal responsiveAjustAbout" style="background-color: #045A97;">
                                            <div class="row">
                                                <div class="col-lg-4 col-sm-10">
                                                    <img src="{{ asset('assets/img/modal-teams/folder_shared_FILL1_wght400_GRAD0_opsz48.png') }} " alt="" style="height: 80px; margin-left:10px; margin-top:25px;">
                                                </div>
                                                <div class="col-lg-4 col-6 pe-2" style="color:#FFFFFF;line-height:2px; padding-top:7px; ">
                                                    <p class="py-1" style="line-height: 1.3em; "> {{__("FormAge")}}</p>
                                                    <p class="py-1" style="line-height: 1.3em; ">{{__("FormResidence")}}</p>
                                                    <p class="py-1" style="line-height: 1.3em; "> {{__("FormFreelance")}}</p>
                                                    <p class="py-1" style="line-height: 1.3em; ">{{__("FormAddress")}}</p>
                                                </div>

                                                <div class="col-lg-4 col-6 pe-3" style="font-size: 15px; line-height:2px; padding-top:7px; color:#FFFFFF; ">
                                                    <p class="py-1" style="line-height: 1.3em; ">{{ $team->age }}</p>
                                                    <p class="py-1" style="line-height: 1.3em; ">{{ $team->residence }}</p>
                                                            @if($team->freelance == 1)
                                                            <p class="py-1" style="line-height: 1.3em; ">{{__("Available")}}</p>
                                                            @else
                                                            <p class="py-1" style="line-height: 1.3em; ">{{__("Occupied")}}</p>
                                                            @endif

                                                    <p class="py-1" style="line-height: 1.3em; ">{{ $team->address }}</p>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-11 pt-2">
                                            <p style="color:#045A97; font-size:33px; font-weight:600;">
                                                {{__("Skills")}}
                                            </p>

                                            <hr style="height:2px;border:none;color:white;background-color:rgb(0, 0, 0);" class="mx-auto d-block w-100">

                                            <p>2-5 {{__("years")}}</p>


                                    @foreach ($team->EmployeeSkills()->get() as $skill)
                                                <h2 style="display: inline-block; font-family: 'Lato';">
                                                    <span class="badge rounded-pill bg-size-lg" style="background-color: #323232; font-weight:300;">{{ $skill->name }}</span>
                                                </h2>
                                            @endforeach

                                        </div>
                                    </div>

                                    <div class="tab-pane animated fadeInLeft" id="tab_experience_{{ $team->id }}">
                                        <p style="font-family: 'Lato'; color:#045A97; font-weight:700;" class="fs-1 pt-4">
                                           {{__("TeamExperience")}}
                                            <img src="{{ asset('assets/img/modal-teams/work_FILL1_wght400_GRAD0_opsz48@2x.png') }}" style="height: 40px; float:right;">
                                        </p>
                                            
                                        <hr style="height:2px;border:none;color:white;background-color:rgb(0, 0, 0);" class="mx-auto d-block w-100">
                                        <div class="scrollable-container-area">
                                        @foreach ($teamExperiences as $teamExperience)
                                            @if ($team->id == $teamExperience->developer_id)
                                            @php
                                                if($locale == 'es'){
                                                        $teamTitleExp = $teamExperience['experience_categoryEs'];
                                                        $teamDescriptionExp =  $teamExperience['experience_descriptionEs'] ;
                                                    }
                                                    else {
                                                        $teamTitleExp = $teamExperience['experience_category'];
                                                        $teamDescriptionExp =  $teamExperience['experience_description'] ;
                                                    }   
                                            @endphp

                                            <div class="col-12 lh-1">
                                          
                                                <div style=" width:22%; background-color:#045A97; border-radius:20px; float: right; height:30px; ">
                                                    <p style="text-align: center;  color:white; margin-top:4px;">
                                                        {{ $teamExperience->experience_date }}
                                                    </p>
                                                </div>
                                                <p class="text-left fs-3" style="color:#045A97; font-family:'Lato'; font-weight:900;">
                                                    {{ $teamTitleExp }}
                                                </p>
                                                <p>
                                                    {{ $teamExperience->experience_company }}
                                                </p>
                                             
                                                <p style="font-size:15px; color:#323232;">
                                                    {{ $teamDescriptionExp }}
                                                </p>
                                              
                                            </div>
                                          
                                            @endif
                                        @endforeach
                                        </div>
                                    </div>

                                    <div class="tab-pane animated  fadeInLeft" id="tab_education_{{ $team->id }}">
                                        <p style="font-family: 'Lato'; color:#045A97; font-weight:700;" class="fs-1 pt-4">
                                            {{__("TeamEducation")}}
                                            <img src="{{ asset('assets/img/modal-teams/educationblue.png') }}" style="height: 40px; float:right;">
                                        </p>
                                        <hr style="height:2px;border:none;color:white;background-color:rgb(0, 0, 0);" class="mx-auto d-block w-100">
                                        <div class="scrollable-container-area">
                                        @foreach ($teamEducations as $teamEducation)
                                            @if ($team->id == $teamEducation->developer_id)
                                            @php
                                            if($locale == 'es'){
                                                    $teamTitleEdu = $teamEducation['education_titleEs'];
                                                    $teamDescriptionEdu =  $teamEducation['education_descriptionEs'] ;
                                                }
                                                else {
                                                    $teamTitleEdu = $teamEducation['education_title'];
                                                    $teamDescriptionEdu =  $teamEducation['education_description'] ;
                                                }   
                                        @endphp
                                                <div class="col-12 lh-1">
                                                    <div style=" width:22%; background-color:#045A97; border-radius:20px; float: right; height:30px; ">
                                                        <p style="text-align: center;  color:white; margin-top:4px;">
                                                            {{ $teamEducation->education_date }}
                                                        </p>
                                                    </div>
                                                    <p class="text-left fs-3" style="color:#045A97; font-family:'Lato'; font-weight:900;">
                                                    {{ $teamTitleEdu}}
                                                </p>
                                                    <p>
                                                        {{ $teamEducation->education_country }}
                                                    </p>
                                                    <p style="font-size:15px; color:#323232;">
                                                        {{ $teamDescriptionEdu }}
                                                    </p>
                                                </div>
                                            @endif
                                        @endforeach
                                    </div>

                                    </div>

                                    <div class="tab-pane animated  fadeInLeft" id="tab_overview_{{ $team->id }}">
                                        <p style="font-family: 'Lato'; color:#045A97; font-weight:700;"  class="fs-1 pt-4">
                                        {{__("TeamOverview")}}
                                            <img src="{{ asset('assets/img/modal-teams/OVERVIEW.png') }}" style="height: 40px; float:right;">
                                        </p>
                                        <hr style="height:2px;border:none;color:white;background-color:rgb(0, 0, 0); " class="mx-auto d-block">
                                        <div class=" scrollable-container">
                                             <p style=" font-size: 18px; color: #323232; font-family: 'Lato'; font-weight: 300;">
                                                    {{ $teamOverview }}
                                              </p>
                                        </div>

                                        <p style="font-family: 'Lato'; color:#045A97; font-weight:700;" class="fs-1 pt-4">  {{__("ViewTeamCoding")}}</p>
                                        <hr style="height:2px;border:none;color:white;background-color:rgb(0, 0, 0);" class="mx-auto d-block w-100">
                                        <div class="scrollable-container">
                                        @foreach ($teamSkills as $teamSkill)
                                            @if ($team->id == $teamSkill->developer_id)
                                            <ul class="d-inline-block">
                                                <li style="width:72px;">
                                                    <input  type="text" value="{{ $teamSkill->skill_percentage }}" class="dial" data-thickness=".1">
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

            </div>
            <br>
            <br>
        </div>
    </div>

 @endforeach

<!-- TEAM SLIDER-->

<div class="">
    <div class="" style="padding: 1em 0;">
        <div class="owl-carousel owl-theme" id="team-carousel" style="overflow-x:clip;">
            @foreach ($teams as $team)
                    @if ($team->freelance == 1)
                    <div class="item" >
                        <div class="team" >
                            <div class="details">
                                <p class="pt-3 text-center">
                                    <img src="{{ asset('assets/img/modal-teams/Grupo 5.png') }}" class="pt-5 mx-auto" style="height: 65px;">
                                </p>

                                <p style="font-family: 'Lato'; color:white; font-size:30px;" class="pt-3 text-center">
                                    {{ $team->name }}
                                </p>
                                <hr style="width:60px; margin:0 auto; color:#FFFFFF; height:1px;">
                                <p style="font-family: 'Lato'; color:white; font-size:20px;" class="pt-3 text-center">
                                @foreach ($team->EmployeeCategories()->get() as $employeeCategory)
                                                {{ $employeeCategory->name }}
                                        @endforeach
                                </p>
                            </div>
                            <div class="photo"n style="width:100%;">
                                <img src="{{ asset('storage') . '/' . $team->photo }}" alt="" style="cursor: pointer;  width:100%; position: relative; bottom:60px;" href="#" data-toggle="modal" data-target="#modal_team_{{ $team->id }}">
                            </div>
                        </div>
                    </div>
                    @endif

            @endforeach
        </div>

    </div>
</div>