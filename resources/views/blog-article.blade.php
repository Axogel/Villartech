@extends('layouts.home')

@section('styles')
    @include('sections.styles')
@endsection


@section('content')
    @include('sections.header-view')
    <x-header-view-dinamic :titleDinamic="'Notices'" :subtitleDinamic="''" />

    <div class="container">
        <div class="row pt-5 pb-5">
            <div class="col-10 mx-auto pt-5 text-center carta" style="background-color: white;">
                <img src="{{ asset('assets/img/business.png') }}" alt="" class="mx-auto img-fluid">

                <div class="col-12 text-left pt-4">
                    <p class="technology">TECHNOLOGY <span class="author">Author | Date</span></p>
                </div>
                <div class="col-10 mx-auto">
                    <hr>
                </div>

                <div class="col-10 pt-5">
                    <p class="title-10">Diez desventajas de programacion y cómo puedes solucionarlas.</p>

                    <p class="message">Helping to a great team over a big project of sport management Helping to a great
                        team over a big project of sport management Helping to a great team over a big project of sport
                        management Helping to a great team over a big project of sport management Helping to a great team
                        over a big project of sport managementHelping to a great team over a big project of sport management
                        Helping to a great team over a big project of sport management Helping to a great team over a big
                        project of sport management Helping to a great team over a big project of sport management Helping
                        to a great team over a big project of sport management</p>

                    <p class="message">Helping to a great team over a big project of sport management Helping to a great
                        team over a big project of sport management Helping to a great team over a big project of sport
                        management Helping to a great team over a big project of sport management Helping to a great team
                        over a big project of sport managementHelping to a great team over a big project of sport management
                        Helping to a great team over a big project of sport management Helping to a great team over a big
                        project of sport management Helping to a great team over a big project of sport management Helping
                        to a great team over a big project of sport management</p>

                    <p class="message">Helping to a great team over a big project of sport management Helping to a great
                        team over a big project of sport management Helping to a great team over a big project of sport
                        management Helping to a great team over a big project of sport management Helping to a great team
                        over a big project of sport managementHelping to a great team over a big project of sport management
                        Helping to a great team over a big project of sport management Helping to a great team over a big
                        project of sport management Helping to a great team over a big project of sport management Helping
                        to a great team over a big project of sport management</p>

                </div>
                <div class="col-10 text-left pt-4" style="display: inline-flex;">
                    <li class="nav-item " style="height:50px;" role="presentation">
                        <button class="text-center nav-link button-skill-nav badge rounded-pill bg-size-lg text-light"
                            id="-tab" style="background-color: #323232; font-weight: 100; font-size: 18px;"
                            data-toggle="tab" data-target="" type="button" role="tab" aria-controls=""
                            aria-selected="false">Laravel</button>
                    </li>
                    <li class="nav-item " style="height:50px; padding-left:15px;" role="presentation">
                        <button class="text-center nav-link button-skill-nav badge rounded-pill bg-size-lg text-light"
                            id="-tab" style="background-color: #323232; font-weight: 100; font-size: 18px;"
                            data-toggle="tab" data-target="" type="button" role="tab" aria-controls=""
                            aria-selected="false">HTML</button>
                    </li>
                </div>
            </div>

                <div class="col-12" style="background-color: #2E2E2E;">

                </div>

        </div>


    </div>

    <style>
        body {
            background-color: #F9F9F9 !important;
        }

        .technology {
            font-size: 25px;
            font-family: 'Lato';
            color: #005397;
            font-weight: 900;
            position: relative;
            left: 100px;
        }

        .author {
            color: #404346;
            position: relative;
            font-family: 'Lato';
            font-weight: 900;
            font-size: 18px;
            left: 600px;
        }

        .carta {
            box-shadow: 0 0 10px 5px rgba(0, 0, 0, 0.3);
        }

        .title-10 {
            font-family: 'Lato';
            font-weight: 900;
            font-size: 25px;

        }

        .message {
            font-family: 'Lato';
            font-weight: 400;
            font-size: 17px;
            text-align: justify;
            position: relative;
            left: 95px;
        }
    </style>
@endsection
