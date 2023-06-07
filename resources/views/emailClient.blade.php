@extends('layouts.boostrap-scripts')

@section('content')
    <link href="https://fonts.cdnfonts.com/css/lato-black" rel="stylesheet">
    <div class="container-fluid ">
        <div class="row">
            <div class="col-12" style="background-color: #045A97;">
                <img src="{{ asset('assets/img/modal-teams/Grupo 5.png') }}" class="mx-auto d-block pt-4"
                    style="height: 100px; width:120px;  margin-bottom: 20px;">
            </div>
            <div class="col-12">
                <p class="mx-auto thank-you pt-5" style="  text-align: center; font-size: 25px; font-family: 'Lato';color: #045A97; font-weight: 900;">
                    Thank you for contacting us!
                </p>
                <div class="circle" id="hola-como-vas2" style="width: 126px; height: 126px; background-color: #005397; border-radius: 50%; margin-bottom: 10px; margin-left:auto !important; margin-right:auto !important;">
                    <svg xmlns="http://www.w3.org/2000/svg" class="svg"id="svg-contact" width="100" height="100"
                        viewBox="0 0 116 120">
                        <g id="layer1" transform="translate(-0.529 760.01)">
                            <path id="path1983"
                                d="M20.459-760.01A19.971,19.971,0,0,0,.529-740.119v29.89A20,20,0,0,0,20.459-690.3v14.96a4.982,4.982,0,0,0,3.086,4.566,4.982,4.982,0,0,0,5.405-1.075L47.4-690.3H80.229a19.97,19.97,0,0,0,19.891-19.929v-29.89A19.938,19.938,0,0,0,80.229-760.01Zm0,9.969h59.77a9.807,9.807,0,0,1,9.97,9.922v29.89a9.839,9.839,0,0,1-9.97,9.959H45.349a4.982,4.982,0,0,0-3.5,1.469L30.419-687.363v-7.907a4.98,4.98,0,0,0-4.961-5h-5a9.83,9.83,0,0,1-9.96-9.959v-29.89a9.8,9.8,0,0,1,9.96-9.922Zm84.66,9.922v9.959h14.93a9.839,9.839,0,0,1,9.96,9.969v29.89a9.832,9.832,0,0,1-9.96,9.961h-4.97a4.978,4.978,0,0,0-3.54,1.458,4.979,4.979,0,0,0-1.459,3.541v7.867l-11.39-11.4a4.982,4.982,0,0,0-3.531-1.467H60.309a9.807,9.807,0,0,1-8.618-4.961H49.464l-5.816,5.817a19.93,19.93,0,0,0,16.662,9.1H93.1l18.461,18.452a4.981,4.981,0,0,0,5.419,1.068,4.98,4.98,0,0,0,3.073-4.589V-670.38a19.986,19.986,0,0,0,19.92-19.92v-29.89a20,20,0,0,0-19.92-19.929Z"
                                transform="translate(0 0)" fill="#fff" />
                        </g>
                    </svg>
                </div>
                <p class="dear pt-5">
                    Dear Test
                </p>

                <hr style="color:black; width:25%; text-align:center; opacity:1;" class="mx-auto">
                <div class="col-4 mx-auto">
                    <p class="thanks mx-auto">
                        Thank you for reaching out Villartechnologies. <span style="font-weight: 900;">We have recieved</span> <span style="font-weight: 900;">your message and aprecciate your interest in our services</span>
                    </p>

                    <p class="thanks mx-auto pt-3" style="font-weight: 500;">
                        Our team will review your inquiry and get back to you as soon as possible. In the meantime, if you have any additional questions or need further information, please feel free to contact us. 
                    </p>

                    <p class="thanks mx-auto pt-3" style="font-weight: 500;">
                        Best Regards
                    </p>

                        <p class="little-text mx-auto pt-3" style="font-weight: 500;">
                            (C)Villartechnologies
                        </p>
    
                        <p class="little-text mx-auto" style="font-weight: 500;">
                            This message was sent to[Email's Name] and intended for [User's Name].
                        </p>
    
                        <p class="little-text mx-auto" style="font-weight: 500;">
                            Not your account? Remove your email from this account.
                        </p>

                </div>
            </div>
        </div>
        <br>
        <section id="copyright">
            <div class="container">
              <div class="row">
                <div class="col-md-12 text-center">
                  <ul class="footer-social unstyled">
                    <li>
                      <a title="Facebook" href="">
                        <span class="icon-pentagon wow bounceIn"><i class="fa fa-facebook"></i></span>
                      </a>
                      <a title="linkedin" href="">
                        <span class="icon-pentagon wow bounceIn"><i class="fa fa-linkedin"></i></span>
                      </a>
                      <a title="instagram" href="">
                        <span class="icon-pentagon wow bounceIn"><i class="fa fa-instagram"></i></span>
                      </a>
                    </li>
                  </ul>
                </div>
              </div>
          </section>
    </div>

    <style>
        .thank-you {
            text-align: center;
            font-size: 25px;
            font-family: 'Lato';
            color: #045A97;
            font-weight: 900;
        }

        .circle {
            width: 126px;
            height: 126px;
            background-color: #005397;
            border-radius: 50%;
            margin-bottom: 10px;
        }

        #svg-contact {


            position: relative;
            top: -2px;
            width: 116px;
            height: 110px;
            padding-left: 0px;
            padding-top: 35px;
        }

        .dear {
            font-size: 25px;
            color: black;
            font-weight: 900;
            text-align: center;
        }

        .thanks{
            font-size: 17px;
            font-weight: 500;
            text-align: center
        }

        .little-text {
            text-align: center;
            font-size: 10px;
            font-family: 'Lato';
            color: #00000099;
            font-weight: 300;
            line-height: 0;
        }
    </style>
@endsection
