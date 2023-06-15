<div class="container my-5">
    <p style="font-size:25px">
        <span style="color:#045A97;">About </span>me
    </p>
    <hr style="height:2px;border:none;color:white;background-color:rgb(0, 0, 0);" class="mx-auto d-block w-100">

</div>

<div class="container text-center my-5">
    <div class="col-12 col-lg-5">
        <iframe style="width:95%;" class="mx-4" src="{{ $detailTeam->team_presentation }}" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
        <div class="row my-5">
            <div class="col-1"></div>
            <div style="height: 5%; width:41%; background-color:#045A97; border-radius:20px;">
                <p style="text-align: center; padding-top:10px; color:white; font-family: 'Lato'; width:100%;">
                    <a href="{{ $detailTeam->cv_link }}" style="color:white;">DOWNLOAD CV</a>
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
    <div class="col-10 col-lg-5 ms-5">
        <p style="text-align: left;font: normal normal bold 25px/30px Lato;">{{$detailTeam->name}}</p>
        <p style="text-align: left; font: normal normal bold 25px/30px Lato; letter-spacing: 0px; color: #045A97;">{{$detailTeam->EmployeeCategories->name}}</p>
        <p style="text-align: left; font: normal normal bold 18px/31px Lato;">{{$detailTeam->address}}, {{$detailTeam->residence}}</p>
        <p style="text-align: left; font: normal normal bold 18px/31px Lato;">{{$detailTeam->work_time}}</p>
        <p style="text-align: left; font: normal normal 300 18px/30px Lato;">{{$detailTeam->description}}</p>
    </div>
</div>
                                                <!-- sections gray -->
<div class="row justify-content-center height-gray-div-responsive" style="background: #2E2E2E 0% 0% no-repeat padding-box; height: auto;">
            <div class="col-12 col-md-2 mx-5 mb-5 my-5 text-center corrections-postition-responsive-team">
                <img src="{{ asset('storage') . '/' . $detailTeam->photo }}" style="width:188px;" alt="">
            </div>
            <div class="col-lg-1 col-5 pe-2 my-5" style="color:#FFFFFF;line-height:2px; padding-top:7px; ">
                <p class="py-1" style="line-height: 1.3em; ">Age</p>
                <p class="py-1" style="line-height: 1.3em; ">Residence</p>
                <p class="py-1" style="line-height: 1.3em; ">Freelance</p>
                <p class="py-1" style="line-height: 1.3em; ">Address</p>
            </div>
                <div class="col-lg-2 col-5 pe-3 my-5" style="font-size: 15px; line-height:2px; padding-top:7px; color:#FFFFFF; ">
                    <p class="py-1" style="line-height: 1.3em; ">{{ $detailTeam->age }}</p>
                    <p class="py-1" style="line-height: 1.3em; ">{{ $detailTeam->residence }}</p>
                            @if($detailTeam->freelance == 1)
                            <p class="py-1" style="line-height: 1.3em; ">available</p>
                            @else
                            <p class="py-1" style="line-height: 1.3em; ">Occupied</p>
                            @endif

                    <p class="py-1" style="line-height: 1.3em; ">{{ $detailTeam->address }}</p>
                </div>
                <div class="col-12 mx-5 my-4 div-light-bulb " style="">
                <svg style="margin-left:3.2rem; margin-top:5rem;" xmlns="http://www.w3.org/2000/svg" width="131.241" height="104.993" viewBox="0 0 131.241 104.993">
  <path id="folder_shared_FILL1_wght400_GRAD0_opsz48" d="M89.028,64.762A12.043,12.043,0,0,0,101,52.786,11.948,11.948,0,0,0,80.58,44.337a11.882,11.882,0,0,0,0,16.9A11.526,11.526,0,0,0,89.028,64.762ZM62.78,93.307h52.5V90.19q0-6.89-6.972-10.663T89.028,75.753q-12.3,0-19.276,3.773T62.78,90.19ZM13.893,112.993A9.322,9.322,0,0,1,7,109.958,9.536,9.536,0,0,1,4.05,103.15V17.843A9.536,9.536,0,0,1,7,11.035,9.322,9.322,0,0,1,13.893,8H59.827l9.843,9.843h55.777a9.414,9.414,0,0,1,6.808,3.035,9.414,9.414,0,0,1,3.035,6.808V103.15a10.412,10.412,0,0,1-9.843,9.843Z" transform="translate(-4.05 -8)" fill="#fff"/>
</svg>

 
                    </div>
</div>

<div class="container my-5">
    <p class="text-left" style="color:#045A97; font-size:33px; font-weight:600;">
        Skills
    </p>
    <hr style="height:2px;border:none;color:white;background-color:rgb(0, 0, 0);" class="mx-auto d-block w-100">
    <p>2-5 years</p>
    @foreach ($detailTeam->EmployeeSkills()->get() as $skill)
    <h2 style="display: inline-block; font-family: 'Lato';">
        <span class="badge rounded-pill bg-size-lg" style="background-color: #323232; font-weight:300;">{{ $skill->name }}</span>
    </h2>
    @endforeach

    <p style="font-family: 'Lato'; color:#045A97; font-weight:700;" class="fs-1 pt-4">Overview
    
    </p>
    <hr style="height:2px;border:none;color:white;background-color:rgb(0, 0, 0);" class="mx-auto d-block">
    <div>
        <p style="font-size: 18px; color: #323232; font-family: 'Lato'; font-weight: 300;">
            {{ $detailTeam->overview }}
        </p>
    </div>
        <!-- language -->
    <div>

        <p style="font-family: 'Lato'; color:#045A97; font-weight:700;" class="fs-1 pt-4">
            Languages
        </p>
        <hr style="height:2px;border:none;color:white;background-color:rgb(0, 0, 0);" class="mx-auto d-block w-100">
<div class="row my-5">

@foreach ($detailTeam->languages()->get() as $language)
    @php
        $languageLevel = $language->pivot->language_level;
        $progress = round($languageLevel / 100 * 6);
    @endphp

    <div class="row col-10 col-md-6 my-3">
        <div class="col-5 col-md-2 ">
            <span style="font: normal normal normal 18px/31px Lato; letter-spacing: 0.18px; color: #323232;">{{$language->name}}</span>
        </div>
        <div class="col-10">
            <div class="progress-bar">
                <div class="progress-circles">
                    @for ($i = 1; $i <= 6; $i++)
                        <div class="circle {{ $i <= $progress ? 'blue' : '' }}"></div>
                    @endfor
                </div>
            </div>
        </div>
    </div>

@endforeach


        </div>
   


    </div>

    <div>
        <p style="font-family: 'Lato'; color:#045A97; font-weight:700;" class="fs-1 pt-4">Coding</p>
        <hr style="height:2px;border:none;color:white;background-color:rgb(0, 0, 0);" class="mx-auto d-block w-100">
        <div>
            @foreach ($teamSkills as $teamSkill)
            @if ($detailTeam->id == $teamSkill->developer_id)
            <ul class="d-inline-block">
                <li style="width:72px;">
                    <input type="text" value="{{ $teamSkill->skill_percentage }}" class="dial" data-thickness=".1">
                    <p style="font-family: 'Lato'; text-align:center; font-size:12px;">
                        {{ $teamSkill->skill_name }}
                    </p>
                </li>
            </ul>
            @endif
            @endforeach
        </div>
    </div>

    <div>
        <p style="font-family: 'Lato'; color:#045A97; font-weight:700;" class="fs-1 pt-4">
            Experience
            <img src="{{ asset('assets/img/modal-teams/work_FILL1_wght400_GRAD0_opsz48@2x.png') }}" style="height: 40px; float:right;">
        </p>
        <hr style="height:2px;border:none;color:white;background-color:rgb(0, 0, 0);" class="mx-auto d-block w-100">
        <div>
            @foreach ($teamExperiences as $teamExperience)
            @if ($detailTeam->id == $teamExperience->developer_id)
            <div class="col-12 lh-1">
                <div style="width:22%; background-color:#045A97; border-radius:20px; float: right; height:30px;">
                    <p style="text-align: center; color:white; margin-top:4px;">
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
    </div>
</div>
<style>
   .progress-bar {
  width: 250px;
  height: 40px;
  background: none;
  border-radius: 15px;
}

.progress-circles {
  display: flex;
  justify-content: space-between;
  align-items: center;
  height: 100%;
  padding: 0 10px;
}

.circle {
  width: 27px;
  height: 27px;
  border-radius: 50%;
  background-color: lightgray;
}

.circle.blue {
  background-color: #045A97;
}

</style>
<script>\
let numberProgress = {{}}
    function setProgressValue(value) {
  const circles = document.querySelectorAll('.circle');
  circles.forEach((circle, index) => {
    if (index < value) {
      circle.classList.add('blue');
    } else {
      circle.classList.remove('blue');
    }
  });
}

// Ejemplo de uso
setProgressValue(5); // Establecer el valor de progreso a 4

</script>