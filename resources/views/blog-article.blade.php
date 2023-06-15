@extends('layouts.home')

@section('styles')
    @include('sections.styles')
@endsection


@section('content')
    @include('sections.header-view')
    <x-header-view-dinamic :titleDinamic="'Blog'" :subtitleDinamic="''" />
    
        
    <div class="container">
        <div class="row pt-5 pb-5">
            <div class="col-10 mx-auto pt-5 carta" style="background-color: white; text-align:center;">
                <img src="{{ asset('storage') . '/' . $detailBlog->image }}" alt="" class="mx-auto img-fluid">

               <div class="row">
                <div class="col-8 text-left pt-4" id="container-resp">
                    <p class="technology">{{ $detailBlog->categoryBlog->name }}</p>

                </div>
                <div class="col-md-4 col-sm-6">
                    <p class="author"> {{$detailBlog->author }} | {{$detailBlog->date }} </p>

                </div>

               </div>
                <div class="col-10 mx-auto">
                    <hr>
                </div>

                <div class="col-10 pt-5" id="title-10">

                    <div class="col-12" id="container-title">
                    <p class="title-10">{{ $detailBlog->title }}</p>

                    </div>
                    <p class="message"> {{ $detailBlog->description }}</p>

                </div>
             

                <div class="col-10 text-left pt-4" style="display: inline-flex;">
                    @foreach ($tags as $tag)
                    @if (in_array($tag->id, json_decode($detailBlog->tags)))
                    <li class="nav-item " style="height:50px;" role="presentation">
                        <button class="text-center nav-link button-skill-nav badge rounded-pill bg-size-lg text-light"
                            id="-tab" style="background-color: #323232; font-weight: 100; font-size: 18px; margin-left:10px;"
                            data-toggle="tab" data-target="" type="button" role="tab" aria-controls=""
                            aria-selected="false">{{ $tag->name  }}</button>
                    </li>
                    @endif
                    @endforeach
                </div>
                
                
                
            </div>

             </div>


        </div>

        <div class="container-fluid">
            <div class="circle" id="hola-como-vas"><svg id="Layer_1" enable-background="new 0 0 24 24" height="130" viewBox="0 0 24 24" width="130" xmlns="http://www.w3.org/2000/svg"><path d="m3 18c0 .5527344.4472656 1 1 1h3 1c0 2.2060547 1.7939453 4 4 4s4-1.7939453 4-4h1 3c.5527344 0 1-.4472656 1-1s-.4472656-1-1-1h-.1842651c.1120605-.3143311.1842651-.647644.1842651-1v-5c0-3.7194824-2.5552979-6.8450928-6-7.7366943v-.2633057c0-1.1025391-.8974609-2-2-2s-2 .8974609-2 2v.2633057c-3.4447021.8916015-6 4.0172119-6 7.7366943v5c0 .352356.0722656.6856689.1843262 1h-.1843262c-.5527344 0-1 .4472656-1 1zm9 3c-1.1025391 0-2-.8974609-2-2h4c0 1.1025391-.8974609 2-2 2zm-6-5v-5c0-3.3085938 2.6914063-6 6-6s6 2.6914063 6 6v5c0 .5517578-.4482422 1-1 1h-2-6-2c-.5517578 0-1-.4482422-1-1z"/></svg></div>
            <div class="row pb-3" id="container-of-cards">
                
                <div class="col-12 card-content" style="background-color: #2E2E2E;">
                    <div class="col-9 mx-auto pt-5">
                        <p class="related">Related post</p>

                    </div>

                    

                </div>

                    
                <div class="col-10 mx-auto pt-5 container-cards">
                    <div class="col-sm-6">
                        <div class="card">
                            <div class="card-body">
                                <div class="row">
                                    @foreach ($relatedPostsFirsts as $item)
                                    
                                    <div class="col-5 mt-5">
                                        <img src="{{ asset('/storage/' . $item['image']) }}" alt="" class="blog-image">
                                    </div>

                                    <div class="col-7 mt-5 text-left">
                                        <p class="card-title">
                                            {{ $item->categoryBlog->name }}
                                        </p>
                                        <p class="card-subtitle">
                                            {{ $item->title }}
                                        </p>
                                    </div>
                                    
                                    <hr class="mt-4" style="opacity: 1;">
                                    @endforeach

                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-6">
                        <div class="card">
                            <div class="card-body">
                                <div class="row">
                                    @foreach ($relatedPostsLasts as $item)

                                    <div class="col-5 mt-5">
                                        <img src="{{ asset('/storage/' . $item['image']) }}" alt="" class="blog-image">
                                    </div>

                                    <div class="col-7 mt-5 text-left">
                                        <p class="card-title">
                                            {{ $item->categoryBlog->name }}
                                        </p>
                                        <p class="card-subtitle">
                                            {{ $item->title }}
                                        </p>
                                    </div>
                                    
                                    <hr class="mt-4" style="opacity: 1;">
                                    @endforeach

                                </div>

                            </div>
                        </div>
                    </div>

                </div>

            </div>
        </div>
        

        <style>
            body {
                background-color: #F9F9F9 !important;
            }

            @media (min-width: 768px) {

                .blog-image {
                width: 100%; /* Establece un ancho fijo para las imágenes */
                height: 113px; /* Permite que la altura se ajuste proporcionalmente */
                }

                #container-of-cards {
                    height: 750px;
                }

                .technology {
                font-size: 25px;
                font-family: 'Lato';
                color: #005397;
                font-weight: 900;
                position: relative;
                left: 100px;
                top:15px;
            }

            .author {
                color: #404346;
    font-family: 'Lato';
    font-weight: 900;
    font-size: 18px;
    position: relative;
    top: 45px;
            }

            .carta {
                box-shadow: 0 0 10px 5px rgba(0, 0, 0, 0.3);
            }

            .title-10 {
                font-family: 'Lato';
                font-weight: 900;
                font-size: 25px;
                text-align: left !important;

            }

            .message {
                font-family: 'Lato';
                font-weight: 400;
                font-size: 17px;
                text-align: justify;
                position: relative;
                left: 95px;
            }


            .no-gutters {
                margin-left: -5px;
                margin-right: -13px;
            }

            .circle {
                width: 211px;
                height: 211px;
                background-color: #005397;
                border-radius: 50%;
                position: relative;
                left: 1068px;
                margin-bottom: 10px;
                top: 85px;
            }


            .related {
                font-family: 'Lato';
                font-weight: 700;
                font-size: 25px;
                color: white;
                padding-left: 0px;
            }

            .card-title {
                font-family: 'Lato';
                font-weight: 900;
                font-size: 25px;
                color:#005397;
            } 

            .card-subtitle {
                font-family: 'Lato';
                font-weight: 900;
                font-size: 25px;
                color:black;
            }

            .container-cards{
                position: relative;
                top:-389px;
            }

            .card-content{ 
                height: 480px;
            }

            #Layer_1 {
                position: relative;
                left: 39px;
                top: 36px;
                fill: white;

            }


            #container-title {
                position: relative;
                left: 96px;
            }

             }

             @media (max-width:1024px ) {
                .technology {
                font-size: 25px;
                font-family: 'Lato';
                color: #005397;
                font-weight: 900;
                text-align: center;
               
            }
            #container-resp {
                margin-right: auto!important;
                margin-left: auto!important;
            }

            .author {
                color: #404346;
                font-family: 'Lato';
                font-weight: 900;
                font-size: 18px;
            }

            .carta {
                box-shadow: 0 0 10px 5px rgba(0, 0, 0, 0.3);
            }

            .title-10 {
                font-family: 'Lato';
                font-weight: 900;
                font-size: 25px;

            }

            #title-10 {
                margin-right: auto!important;
                margin-left: auto!important;
            }

            .message {
                font-family: 'Lato';
                font-weight: 400;
                font-size: 17px;
                text-align: justify;
                position: relative;
                left: 0px;

            }


            .no-gutters {
                margin-left: -5px;
                margin-right: -13px;
            }

            .circle {
                width: 211px;
                height: 211px;
                background-color: #005397;
                border-radius: 50%;
                position: relative;
                left: 1068px;
                margin-bottom: 10px;
                top: 85px;
            }


            .related {
                font-family: 'Lato';
                font-weight: 700;
                font-size: 25px;
                color: white;
                padding-left: 0px;
            }

            .card-title {
                font-family: 'Lato';
                font-weight: 900;
                font-size: 25px;
                color:#005397;
            } 

            .card-subtitle {
                font-family: 'Lato';
                font-weight: 900;
                font-size: 12px;
                color:black;
            }

            .container-cards{
                position: relative;
                top:-430px;
            }

            .card-content{ 
                height: 480px;
            }

            #Layer_1 {
                position: relative;
                left: 39px;
                top: 36px;
                fill: white;

            }
             }
        </style>
    @endsection
