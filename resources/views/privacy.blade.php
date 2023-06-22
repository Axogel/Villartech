@extends('layouts.home')

@section('styles')
    @include('sections.styles')
@endsection


@section('content')
    @include('sections.header-view')
    <x-header-view-dinamic :titleDinamic="'HeaderPrivacy'" :subtitleDinamic="''" />


    <div class="container">
        <div class="row pt-5 pb-5">
            <div class="col-10 mx-auto pt-5 carta" style="background-color: white; text-align:left;">
                <div class="container">
                    <div class="col-9" id="contenedor">
                        <p class="subtitulo">
                            {{__("PrivacyTitle")}}  <span class="negrita">VILLARTECHNOLOGIES</span>,{{__("PrivacyTitle2do")}}
                        </p>

                        <p class="titulo"> {{__("Privacy2title")}} </p>

                        <p class="subtitulo">
                            {{__("PrivacyDescription")}}  
                        </p>

                        <p class="titulo">
                           {{__("PrivacyUse")}}   
                        </p>

                        <p class="subtitulo">
                        {{__("PrivacyUseD")}}  
                             <span class="negrita">VILLARTECHNOLOGIES</span> 
                             {{__("PrivacyUseD2")}}  
                           
                        </p>

                        <p class="titulo">
                           {{__("PrivacyLink")}}  
                        </p>

                        <p class="subtitulo">
                            {{__("PrivacyLinkD")}} 
                        </p>

                        <p class="titulo">
                            {{__("PrivacyControl")}}  
                        </p>

                        <p class="subtitulo">
                            {{__("PrivacyControlD")}} 

                        </p>

                        <p class="titulo">
                           {{__("PrivacySecurity")}}   
                        </p>

                        <p class="subtitulo">
                            <span class="negrita">VILLARTECHNOLOGIES</span>  {{__("PrivacySecurityD")}}  <span class="negrita">VILLARTECHNOLOGIES</span>.
                        </p>

                        <p class="titulo">
                           {{__("PrivacyChange")}}   
                        </p>

                        <p class="subtitulo">
                           {{__("PrivacyChangeD")}}  
                        </p>

                        <p class="titulo">
                            {{__("PrivacyDate")}}  
                        </p>

                        <p class="titulo">
                           {{__("PrivacyDateD")}}   
                        </p>

                        <br><br>
                    </div>
                </div>


            </div>

        </div>


    </div>

    <style>
        .carta {
            box-shadow: 0 0 10px 5px rgba(0, 0, 0, 0.3);
        }

        .subtitlo {
            text-align: left;
            font-size: 18px;
            font-family: 'Lato';
        }

        .negrita {
            font-size: 18px;
            font-family: 'Lato';
            font-weight: 800;
            color:black;
        }
    
        .titulo {
            font-size: 25px;
            font-family: 'Lato';
            font-weight: 800;
            color:black;
        }

        @media (min-width:768px) {
            #contenedor { 
                position: relative;
                left: 90px;
                top: 10px;
            }
        }
    </style>
@endsection
