

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


                <div class="col-12">
                <p class="mx-auto thank-you pt-5" style="  text-align: center; font-size: 25px; font-family: 'Lato';color: #045A97; font-weight: 900;">
                    Thank you for contacting us!
                </p>
                <div class="circle" id="hola-como-vas2" style="    width: 203px;
                height: 176px;
                background-color: #005397;
                border-radius: 50%;
                margin-bottom: 10px;
                margin-left: auto !important;
                margin-right: auto !important;">

                    <img src="https://staging.villartechnologies.com.ve/images/layer1.png" alt="" style=" width: 138px;
                    height: 125px;
                    padding-left: 36px;
                    padding-top: 32px;
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
                        A new contact inquiry has been received through the website form. <br> Below are the details provided by the user:
                    </p>

                    <br>



                    <div class="col-12">

                  <table style="text-align:left; border-collapse: collapse; border: 2px solid #B3B3B3;  width: 100%; height: 108px; margin-left:auto !important; margin-right:auto !important; ">


                    <tr>
                      <td style="padding:15px; font-size: 17px; color: black; font-weight: 500;">Name:</td>
                      <td style="padding:15px; font-size: 17px;">{{ $name }}</td>
                    </tr>
                    <tr>
                      <td style="padding-left:15px; font-size: 17px; color: black; font-weight: 500;">Email:</td>
                      <td style="padding:15px; font-size: 17px;">{{ $email }}</td>
                    </tr>
                    <tr>
                      <td style="padding:15px; font-size: 17px; color: black; font-weight: 500;">Phone number:</td>
                      <td style="padding:15px; font-size: 17px;">{{ $number }}</td>
                    </tr>
                    <tr>


                  </table>


                  </div>

                  <br>

                    <p class="thanks" style="margin-left:auto !important; margin-right:auto !important;;   font-size: 17px;
                    font-weight: 500;
                    text-align: left">
                        Interested in {{ $interest }}, with the following message:
                    </p>


                    <p class="thanks" style="margin-left:auto !important; margin-right:auto !important; font-size: 17px;
                    font-weight: 500;
                    text-align: left">
                       "{{ $attachment }}"
                    </p> 

                    <br>
                    <br>

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
                            This message was sent to[Email's Name] and intended for {{ $name }}.
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
        <br>
        <section id="copyright" style="height: 100px;">
            <div class="container">
              <div class="row">
                <div style="text-align: center!important;     flex: 0 0 auto;
                width: 100%;
                background-color:#191919;" >
                  <ul class="footer-social unstyled">
                    <li >
                      <a title="Facebook" href="" style="filter: invert(1);">
                        <img src="https://staging.villartechnologies.com.ve/images/face.png" style="    color: #045A97;
                        height: 31px;
                        filter: invert(1);
                        padding-right: 5px;">
                      </a>
                      <a title="linkedin" href="" style="height: 35px;
                      position: relative;
                      top: -3px;">
                        <img src="https://staging.villartechnologies.com.ve/images/in.png" style="height: 35px;" style=" position: relative;
                        top: -3px;">

                      </a>
                      <a title="instagram" href="" style="height: 28px;
                      position: relative;
                      right: 11px;">
                        <img src="https://staging.villartechnologies.com.ve/images/instaga.png" style="position: relative;
                        right: 11px;
                        top: 4px;
                        height: 28px; ">

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