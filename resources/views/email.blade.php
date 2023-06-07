@extends('layouts.boostrap-scripts')

@section('content')
    <link href="https://fonts.cdnfonts.com/css/lato-black" rel="stylesheet">
    <div class="container-fluid ">
        <div class="row">
            <div class="col-12" style="background-color: #045A97;">
                <img src="https://staging.villartechnologies.com.ve/assets/img/modal-teams/Grupo%205.png"
                    style="height: 100px; width:120px;  margin-bottom: 20px; margin-right: auto!important;
                    margin-left: auto!important;     padding-top: 2.5rem !important; display:block;">
                    <br>
            </div>
            <div class="col-12" style="margin-top:10rem;">


                <div class="circle" id="hola-como-vas2" style="
                width: 160px;
height: 160px;
                background-color: #005397;
                border-radius: 50%;
                margin-bottom: 10px;
                margin-left: auto !important;
                margin-right: auto !important;">

                    <img src="https://staging.villartechnologies.com.ve/images/layer1.png" alt="" style=" width: 138px;
                    height: 125px;
                    padding-left: 26px;
                    padding-top: 35px;
                ">
                </div>
                <p style="font-size: 25px; color: black; font-weight: 900; text-align: center;  padding-top: 3rem!important; margin-left:auto !important; margin-right:auto !important;">
                    New Contact Inquiry <br> Received
                </p>

                <hr style="color:black; width:25%; text-align:center; opacity:o.5px;" class="mx-auto">
                <div class="" style="margin-left:auto !important; margin-right:auto !important;     flex: 0 0 auto;
                width: 33.33333333%;">
                <br>
                    <p class="thanks" style="margin-left:auto !important; margin-right:auto !important;   font-size: 17px;
                    font-weight: 500;
                    text-align: center">
                        A new contact inquiry has been received through the website form. Below are the details provided by the user:
                    </p>



                    <p class="thanks" style="font-weight: 500;  font-size: 17px;
                    font-weight: 500;
                    text-align: center">
                        Best Regards
                    </p>

                        <p class="little-text mx-auto pt-3" style="font-weight: 500;  text-align: center;
                        font-size: 10px;
                        font-family: 'Lato';
                        color: #00000099;
                        font-weight: 300;
                        line-height: 0;">
                            (C)Villartechnologies
                        </p>
    
                        <p class="little-text mx-auto" style="font-weight: 500;  text-align: center;
                        font-size: 10px;
                        font-family: 'Lato';
                        color: #00000099;
                        font-weight: 300;
                        line-height: 0;">
                            This message was sent to[Email's Name] and intended for [User's Name].
                        </p>
    
                        <p class="little-text mx-auto" style="font-weight: 500;  text-align: center;
                        font-size: 10px;
                        font-family: 'Lato';
                        color: #00000099;
                        font-weight: 300;
                        line-height: 0;">
                            Not your account? Remove your email from this account.
                        </p>

                </div>
            </div>
        </div>
        <br>
        <section id="copyright">
            <div class="container">
              <div class="row">
                <div style="text-align: center!important;     flex: 0 0 auto;
                width: 100%;
             background-color:#191919;" >
                  <ul class="footer-social unstyled">
                    <li >
                      <a title="Facebook" href="" style="padding-right:10px;">
                        <img src="https://staging.villartechnologies.com.ve/images/facebook.svg" style="color:#045A97; height:35px; filter: invert(1);">
                      </a>
                      <a title="linkedin" href="">
                        <img src="https://staging.villartechnologies.com.ve/images/linkedin-in.svg" style="color:#045A97; height:35px; filter: invert(1);">

                      </a>
                      <a title="instagram" href="" style="padding-left:10px;">
                        <img src="https://staging.villartechnologies.com.ve/images/instagram.svg" style="color:#045A97; height:35px; filter: invert(1);">

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
