<section id="about-us" class="about angle">
    <div class="container">
        <br><br>
        <!-- Company Profile -->
        <div class="row">
            <div class="col-md-12 heading" >
                <h2 class="title classic nav-margin-responsive" style="font-size: 45px; color:#045A97; font-family:'Lato'; font-weight:900;" >
                    {{__("ProfileTitle")}}
                </h2>
            </div>
        </div><!-- Title row end -->
        <div class="row">
            <div class="landing-tab clearfix">
                <ul class="nav nav-tabs nav-stacked nav flex-column col-md-3 col-sm-5">
                    <li  id="tab-li-1"  class="active tab-profile">
                        <a class="animated fadeIn" href="#tab_a" data-toggle="tab">
                            <span class="tab-icon" style="padding-left: 8px;"><i class="fa fa-info"></i></span>
                            <div class="tab-info">
                                <h3 style="font-family: 'Lato'">{{__("ProfileWho")}}</h3>
                            </div>
                        </a>
                    </li>
                    <li  id="tab-li-2" class="tab-profile">
                        <a class="animated fadeIn" href="#tab_b" data-toggle="tab">
                            <span class="tab-icon"><i class="fa fa-briefcase"></i></span>
                            <div class="tab-info">
                                <h3 style="font-family: 'Lato'">{{__("ProfileOur")}}</h3>
                            </div>
                        </a>
                    </li>
                    <li id="tab-li-3"  class="tab-profile">
                        <a class="animated fadeIn" href="#tab_c" data-toggle="tab">
                            <span class="tab-icon"><i class="fa fa-android"></i></span>
                            <div class="tab-info">
                                <h3 style="font-family: 'Lato'"> {{__("ProfileWhat")}}</h3>
                            </div>
                        </a>
                    </li>
                    <li id="tab-li-4"  class="tab-profile">
                        <a class="animated fadeIn" href="#tab_d" data-toggle="tab">
                            <span class="tab-icon"><i class="fa fa-pagelines"></i></span>
                            <div class="tab-info">
                                <h3 style="font-family: 'Lato'">{{__("ProfileModern")}}</h3>
                            </div>
                        </a>
                    </li>
                    <li  id="tab-li-5" class="tab-profile">
                        <a class="animated fadeIn" href="#tab_e" data-toggle="tab">
                            <span class="tab-icon"><i class="fa fa-support"></i></span>
                            <div class="tab-info">
                                <h3 style="font-family: 'Lato'">{{__("ProfileDedicated")}}</h3>
                            </div>
                        </a>
                    </li>
                </ul>
                <div class="tab-content col-md-9 col-sm-7">
                    <div class="tab-pane tab-pane-tabs active animated fadeInRight" id="tab_a">
                        <i class="fa fa-trophy big"></i>
                        <h3 style="font-family: 'Lato'"> {{__("ProfileCardWe")}}</h3>
                        <p> {{__("ProfileCardWeDescription")}}
                        </p>
                    </div>
                    <div class="tab-pane tab-pane-tabs animated fadeInLeft" id="tab_b">
                        <i class="fa fa-briefcase big"></i>
                        <h3 style="font-family: 'Lato'">{{__("ProfileCard2")}} </h3>
                        <p>{{__("ProfileCard2Description")}} 
                        </p>
                    </div>
                    <div class="tab-pane tab-pane-tabs animated fadeIn" id="tab_c">
                        <i class="fa fa-android big"></i>
                        <h3 style="font-family: 'Lato'">{{__("ProfileCard3")}}</h3>
                        <p>{{__("ProfileCard3Description")}} 
                        </p>
                    </div>
                    <div class="tab-pane tab-pane-tabs animated fadeIn" id="tab_d">
                        <i class="fa fa-pagelines big"></i>
                        <h3 style="font-family: 'Lato'">{{__("ProfileCard4")}}</h3>
                        <p> {{__("ProfileCard4Description")}}
                        </p>
                    </div>
                    <div class="tab-pane tab-pane-tabs animated fadeIn" id="tab_e">
                        <i class="fa fa-support big"></i>
                        <h3 style="font-family: 'Lato'">{{__("ProfileCard5")}} </h3>
                        <p>{{__("ProfileCard5Description")}}
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
