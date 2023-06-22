<nav class="navbar navbar-expand-lg navbar-light col-sm-11 col-md-1 col-lg-1 navbarAjustResponsive" style="background-color:#045A97; justify-content: start;">
                                <button class="navbar-toggler" style="box-shadow:none;"  type="button" data-toggle="collapse" data-target="#navbarModalTeam" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
                                  <span class="navbar-toggler-icon"></span>
                                </button>
                                 <div class="collapse navbar-collapse" id="navbarModalTeam">
                                   <ul class="navbar-nav mr-auto mt-2 mt-lg-0 row modalAjustResponsive">
                                   <li class="nav-item col-12">
                                      <div class="about pt-5" href="#tab_about_{{ $teamId }}" data-toggle="tab">
                                            <a href=" #tab_about_{{ $teamId }}" data-toggle="tab" onclick="toggle(this)"> 
                                                <svg id="svg1" class="svg-item active mx-auto" xmlns="http://www.w3.org/2000/svg" width="41.941" height="51.942" viewBox="0 0 50 50">
                                                    <path d="M182.619,331.275H165.372c-1.162,0-1.212-.142-1.314-1.283-.293-3.214,1.323-5.207,4.023-6.563,1.8-.906,3.716-1.529,5.564-2.319a11.991,11.991,0,0,0,3.051-1.752,4.045,4.045,0,0,0,1.319-2.267.958.958,0,0,0-.244-.866,19.4,19.4,0,0,1-4.329-13.72,8.658,8.658,0,0,1,5.307-7.6,8.876,8.876,0,0,1,9.38.866c3.131,2.234,4.177,5.432,3.858,9.143a20.558,20.558,0,0,1-3.81,10.646c-.331.455-.985.783-.8,1.527a4.18,4.18,0,0,0,1.385,2.319,20.7,20.7,0,0,0,5.541,2.722,21.494,21.494,0,0,1,4.675,2.346c2.142,1.545,2.528,3.711,2.308,6.114-.052.582-.506.693-1.015.693-2.012-.009-4.024,0-6.038,0Z" transform="translate(-156.82 -286.761)" fill="#FFFFFF"/>
                                                </svg>
                                            </a>
                                            <a class="fs-6 text-center "
                                                style="font-family: 'Lato'; font-weight: 300; color:white;"
                                                href="#tab_about_{{ $teamId }}" data-toggle="tab"
                                                data-svg="svg1" >
                                               {{__("TeamAbout")}}
                                            </a>
                                        </div>
                                      </li>
                                         <hr style="height:3px;border:none;color:white;background-color:white; width:60px;" class="margin-hr-responsive d-block">
                                      <li class="nav-item col-12">
                                      <div class="pt-4">
                                        <a href="#tab_experience_{{ $teamId }}" data-toggle="tab">
                                            <svg id="svg2"  class="svg-item mx-auto" xmlns="http://www.w3.org/2000/svg" width="41.941" height="41.942" viewBox="0 0 40 50">
                                                <path id="work_FILL1_wght400_GRAD0_opsz48" d="M6.859,40.208a2.742,2.742,0,0,1-2-.858,2.742,2.742,0,0,1-.858-2V14.481a2.742,2.742,0,0,1,.858-2,2.742,2.742,0,0,1,2-.858h8.576V6.859a2.742,2.742,0,0,1,.858-2,2.742,2.742,0,0,1,2-.858h9.529a2.742,2.742,0,0,1,2,.858,2.742,2.742,0,0,1,.858,2v4.764h8.576a2.931,2.931,0,0,1,2.859,2.859V37.35a2.931,2.931,0,0,1-2.859,2.859ZM18.293,11.623h9.529V6.859H18.293Z" transform="translate(-4 -4)" fill="#fff"/>
                                            </svg>
                                        </a>
                                        <a class="fs-6 text-center " data-svg="svg2" style="font-family: 'Lato'; font-weight: 300; color:white;" href="#tab_experience_{{  $teamId }}" data-toggle="tab">
                                           {{__("TeamExperience")}} 
                                        </a>
                                    </div>
                                      </li>
                                        <hr style="height:3px;border:none;color:white;background-color:white; width:60px;" class="margin-hr-responsive d-block">
                                      <li class="nav-item col-12">
                                      <div class="pt-4" href="#tab_education_{{ $teamId }}" data-toggle="tab">
                                        <a href="#tab_education_{{ $teamId }}" data-toggle="tab">
                                            <svg id="svg3" class="svg-item mx-auto" xmlns="http://www.w3.org/2000/svg" width="41.941" height="43.942" viewBox="0 0 50 50">
                                                <path  d="M42.356,33.412V19.534L23.605,29.623,2,17.811,23.605,6l21.7,11.811v15.6ZM23.605,41.434,9.333,33.609V23.274L23.605,31.1l14.272-7.825V33.609Z" transform="translate(-2 -6)" fill="#fff"/>
                                            </svg>
                                        </a>
                                        <a class="fs-6 text-center" data-svg="svg3" style="font-family: 'Lato'; font-weight: 300; color:white;" href="#tab_education_{{  $teamId }}" data-toggle="tab">
                                          {{__("TeamEducation")}}  
                                        </a>
                                    </div>
                                      </li>
                                         <hr style="height:3px;border:none;color:white;background-color:white; width:60px;" class="margin-hr-responsive d-block">
                                      <li class="nav-item col-12">
                                      <div class="pt-4" href="#tab_overview_{{ $teamId }}" data-toggle="tab">
                                        <a href="#tab_overview_{{ $teamId }}" data-toggle="tab">
                                            <svg id="svg4" class="svg-item px-auto" xmlns="http://www.w3.org/2000/svg" width="41.941" height="41.942" viewBox="0 0 35 50">
                                                <path  d="M15.417,33.386h15.02v-2.8H15.417Zm0-7.93h15.02v-2.8H15.417ZM10.8,41.316a2.87,2.87,0,0,1-2.8-2.8V6.8A2.685,2.685,0,0,1,8.84,4.84,2.685,2.685,0,0,1,10.8,4H27.638L37.853,14.215v24.3a2.87,2.87,0,0,1-2.8,2.8Zm15.44-25.841h8.816L26.238,6.8Z" transform="translate(-8 -4)" fill="#fff"/>
                                            </svg>
                                        </a>
                                        <a class="fs-6 text-center" data-svg="svg4" style="font-family: 'Lato'; font-weight: 300; color:white;" href="#tab_overview_{{ $teamId }}" data-toggle="tab">
                                          {{__("TeamOverview")}} 
                                        </a>
                                    </div>
                                      </li>
                                        <hr style="height:3px;border:none;color:white;background-color:white; width:60px;" class="margin-hr-responsive d-block">
                                        <div class="col-lg-12" style="height: 50px;"></div>
                                        <img src="{{ asset('assets/img/modal-teams/Grupo 5.png') }}" class="mx-auto d-block pt-5" style="height: 80px; width:80px;">
                             </ul>
                            </div>
                            </nav>                  
   
                                