@extends('layouts.home')

@section('styles')
    @include('sections.styles')
@endsection

@section('content')
    @include('sections.header-view')
    <x-header-view-dinamic :titleDinamic="'services'"  :subtitleDinamic="''" />

    <div class="container-fluid no-gutters">
        <div class="row pt-5 pb-5">

            <div class="col-sm-6">

                    <div class="row">


                        <div class="col" id="text">
                                <p class="title" id="web-design">Web design</p>
                                <p class="subtitle">We adapt and create your web site to any type of screen, through the developing and usage of the latest trends, in order to always improve the user´s experience.</p>
       
                        </div>


                        <div class="col" id="circulo">

                            <div class="circle"><svg xmlns="http://www.w3.org/2000/svg" class="svg"><g id="diseno-web" transform="translate(-5.25 -13.25)"><path id="Trazado_85" data-name="Trazado 85" d="M73.659,13.25H8.77a3.524,3.524,0,0,0-3.52,3.52v45.3a3.524,3.524,0,0,0,3.52,3.52H30.961v6.275a3.5,3.5,0,0,0,.281,1.377H25.3a1.071,1.071,0,1,0,0,2.143H57.131a1.071,1.071,0,1,0,0-2.143H51.187a3.5,3.5,0,0,0,.281-1.377V65.59H73.659a3.524,3.524,0,0,0,3.52-3.52V16.77A3.524,3.524,0,0,0,73.659,13.25ZM8.77,15.393H73.659a1.379,1.379,0,0,1,1.377,1.377V54.877H7.393V16.77A1.379,1.379,0,0,1,8.77,15.393ZM49.326,71.865a1.379,1.379,0,0,1-1.377,1.377H34.481A1.379,1.379,0,0,1,33.1,71.865V65.59h1.53v5.05a1.071,1.071,0,0,0,1.071,1.071H46.724A1.071,1.071,0,0,0,47.8,70.64V65.59h1.53ZM36.776,65.59h8.876v3.979H36.776Zm36.883-2.143H8.77A1.379,1.379,0,0,1,7.393,62.07V57.02H75.037v5.05a1.379,1.379,0,0,1-1.377,1.377Z"transform="translate(0 0)" fill="#fff" /><path id="Trazado_86" data-name="Trazado 86"d="M16.321,41.309H42.644a1.071,1.071,0,0,0,1.071-1.071V24.321a1.071,1.071,0,0,0-1.071-1.071H16.321a1.071,1.071,0,0,0-1.071,1.071V40.238a1.071,1.071,0,0,0,1.071,1.071Zm1.071-15.916h24.18V39.166H17.393Z"transform="translate(-3.878 -3.878)" fill="#fff" /><path id="Trazado_87" data-name="Trazado 87"d="M16.321,67.963H27.034a1.071,1.071,0,0,0,1.071-1.071v-8.57a1.071,1.071,0,0,0-1.071-1.071H16.321a1.071,1.071,0,0,0-1.071,1.071v8.57A1.071,1.071,0,0,0,16.321,67.963Zm1.071-8.57h8.57V65.82h-8.57Z"transform="translate(-3.878 -17.065)" fill="#fff" /><path id="Trazado_88" data-name="Trazado 88"d="M67.321,60.982H93.644a1.071,1.071,0,0,0,1.071-1.071V40.321a1.071,1.071,0,0,0-1.071-1.071H67.321a1.071,1.071,0,0,0-1.071,1.071V59.91a1.071,1.071,0,0,0,1.071,1.071Zm1.071-19.589h24.18V58.839H68.393Z"transform="translate(-23.658 -10.084)" fill="#fff" /><path id="Trazado_89" data-name="Trazado 89"d="M52.534,57.25H41.821a1.071,1.071,0,0,0-1.071,1.071v8.57a1.071,1.071,0,0,0,1.071,1.071H52.534a1.071,1.071,0,0,0,1.071-1.071v-8.57a1.071,1.071,0,0,0-1.071-1.071Zm-1.071,8.57h-8.57V59.393h8.57Z"transform="translate(-13.768 -17.065)" fill="#fff" /><path id="Trazado_90" data-name="Trazado 90"d="M67.321,25.393H93.644a1.071,1.071,0,0,0,0-2.143H67.321a1.071,1.071,0,1,0,0,2.143Z"transform="translate(-23.658 -3.878)" fill="#fff" /><path id="Trazado_91" data-name="Trazado 91"d="M67.321,33.393H80.483a1.071,1.071,0,1,0,0-2.143H67.321a1.071,1.071,0,1,0,0,2.143Z"transform="translate(-23.658 -6.981)" fill="#fff" /></g></svg></div>

                            
                        </div>
                       
                    </div>

                    <div class="row">


                        <div class="col" id="text">
                                <p class="title" id="ecommerce">Ecommerce websites</p>
                                <p class="subtitle">Creation of websites dedicated to the ecommerce service of selling and buying process of different products, articles and services.</p>
       
                        </div>


                        <div class="col" id="circulo">

                        <div class="circle"><svg xmlns="http://www.w3.org/2000/svg" class="svg"> <g id="Layer_x0020_1" transform="translate(0 -42)"> <g id="_526584240" transform="translate(0 42)"> <g id="Grupo_32" data-name="Grupo 32"> <g id="Grupo_30" data-name="Grupo 30"> <g id="_526572600"> <path id="Trazado_45" data-name="Trazado 45" d="M67.911,87.739H3.486A3.452,3.452,0,0,1,0,84.253V45.486A3.452,3.452,0,0,1,3.486,42H67.911A3.452,3.452,0,0,1,71.4,45.486V84.253A3.452,3.452,0,0,1,67.911,87.739ZM3.486,43.673a1.846,1.846,0,0,0-1.813,1.813V84.253a1.758,1.758,0,0,0,1.813,1.813H67.911a1.758,1.758,0,0,0,1.813-1.813V45.486a1.846,1.846,0,0,0-1.813-1.813Z" transform="translate(0 -42)" fill="#fff" fill-rule="evenodd"/> </g> <g id="_526576632" transform="translate(31.376 44.066)"> <path id="Trazado_46" data-name="Trazado 46" d="M232.809,368.18h-6.972a.8.8,0,0,1-.837-.837v-8.506a.8.8,0,0,1,.837-.837h6.972a.8.8,0,0,1,.837.837v8.506A.8.8,0,0,1,232.809,368.18Zm-6.136-1.673h5.3v-6.833h-5.3Z" transform="translate(-225 -358)" fill="#fff" fill-rule="evenodd"/> </g> <g id="_526582488" transform="translate(17.989 52.572)"> <path id="Trazado_47" data-name="Trazado 47" d="M163.583,426.112H129.837a.74.74,0,0,1-.837-.837v-2.649A3.6,3.6,0,0,1,132.626,419h28.169a3.6,3.6,0,0,1,3.626,3.626v2.649A.74.74,0,0,1,163.583,426.112Zm-32.91-1.673h32.073v-1.813a1.906,1.906,0,0,0-1.952-1.952H132.626a1.906,1.906,0,0,0-1.952,1.952Z" transform="translate(-129 -419)" fill="#fff" fill-rule="evenodd"/> </g> <g id="_526582848" transform="translate(0 35.838)"> <path id="Trazado_48" data-name="Trazado 48" d="M70.561,300.673H.837A.9.9,0,0,1,0,299.837.8.8,0,0,1,.837,299H70.561a.8.8,0,0,1,.837.837A.9.9,0,0,1,70.561,300.673Z" transform="translate(0 -299)" fill="#fff" fill-rule="evenodd"/> </g> </g> <g id="_526580736" transform="translate(23.846 9.622)"> <path id="Trazado_49" data-name="Trazado 49" d="M195.543,128.431H173.928a.781.781,0,0,1-.837-.7L171,111.976a.768.768,0,0,1,.279-.7.724.724,0,0,1,.558-.279h27.192a.747.747,0,0,1,.558.418.613.613,0,0,1,.139.7l-3.486,15.618A.747.747,0,0,1,195.543,128.431Zm-20.917-1.673h20.22l3.068-14.084h-25.1Z" transform="translate(-171 -111)" fill="#fff" fill-rule="evenodd"/> </g> <g id="_526581096" transform="translate(18.686 5.02)"> <path id="Trazado_50" data-name="Trazado 50" d="M140,84.275a.765.765,0,0,1-.837-.558l-1.116-4.044h-3.207a.837.837,0,0,1,0-1.673h3.9a.942.942,0,0,1,.837.558l1.255,4.741a.793.793,0,0,1-.558.976Z" transform="translate(-134 -78)" fill="#fff" fill-rule="evenodd"/> </g> <g id="_526583904" transform="translate(24.403 13.526)"> <path id="Trazado_51" data-name="Trazado 51" d="M201.5,140.673H175.837a.837.837,0,1,1,0-1.673H201.5a.837.837,0,0,1,0,1.673Z" transform="translate(-175 -139)" fill="#fff" fill-rule="evenodd"/> </g> <g id="_526583064" transform="translate(24.822 17.57)"> <path id="Trazado_52" data-name="Trazado 52" d="M203.24,169.673h-24.4a.9.9,0,0,1-.837-.837.8.8,0,0,1,.837-.837h24.4a.8.8,0,0,1,.837.837A.9.9,0,0,1,203.24,169.673Z" transform="translate(-178 -168)" fill="#fff" fill-rule="evenodd"/> </g> <g id="_526582896" transform="translate(25.38 21.614)"> <path id="Trazado_53" data-name="Trazado 53" d="M205.846,198.673H182.837a.9.9,0,0,1-.837-.837.8.8,0,0,1,.837-.837h23.009a.8.8,0,0,1,.837.837A.9.9,0,0,1,205.846,198.673Z" transform="translate(-182 -197)" fill="#fff" fill-rule="evenodd"/> </g> <g id="Grupo_31" data-name="Grupo 31" transform="translate(26.495 27.89)"> <g id="_526581432"> <path id="Trazado_54" data-name="Trazado 54" d="M192.65,247.438a2.743,2.743,0,0,1-2.65-2.65,2.72,2.72,0,1,1,2.65,2.65Zm0-3.765a1,1,0,0,0-.976,1.116.953.953,0,0,0,.976.976,1,1,0,0,0,1.116-.976A1.026,1.026,0,0,0,192.65,243.673Z" transform="translate(-190 -242)" fill="#fff" fill-rule="evenodd"/> </g> <g id="_526574304" transform="translate(16.594)"> <path id="Trazado_55" data-name="Trazado 55" d="M311.789,247.438a2.72,2.72,0,1,1,0-5.438,2.681,2.681,0,0,1,2.65,2.789A2.648,2.648,0,0,1,311.789,247.438Zm0-3.765a1.026,1.026,0,0,0-1.116,1.116,1,1,0,0,0,1.116.976.953.953,0,0,0,.976-.976A1,1,0,0,0,311.789,243.673Z" transform="translate(-309 -242)" fill="#fff" fill-rule="evenodd"/> </g> </g> </g> </g> </g> </svg> </div>



                            
                        </div>
                       
                    </div>

                    <div class="row">


                        <div class="col" id="text">
                                <p class="title" id="consulation">Consultation</p>
                                <p class="subtitle">As per the projects on develop, we provide uninterrupted user and customer support to assure the accurate and the effective assistance of the job.</p>
       
                        </div>


                        <div class="col" id="circulo">

                            
                        <div class="circle"> <svg xmlns="http://www.w3.org/2000/svg" class="svg"> <g id="consultoria" transform="translate(-9.25 -16.679)"> <path id="Trazado_71" data-name="Trazado 71" d="M81.4,43.624H52.275V17.851A1.172,1.172,0,0,0,51.1,16.679H10.422A1.172,1.172,0,0,0,9.25,17.851V44.688a1.172,1.172,0,0,0,1.172,1.172H36.4l3.153,3.153v22.62a1.172,1.172,0,0,0,1.172,1.172h5.8v6.078a1.172,1.172,0,0,0,2,.828l6.907-6.907H81.4a1.172,1.172,0,0,0,1.172-1.172V44.8A1.172,1.172,0,0,0,81.4,43.624Zm-44.521-.107H11.594V19.023H49.931V43.516h-5.8a1.172,1.172,0,0,0-1.172,1.172v4.42l-5.251-5.251A1.172,1.172,0,0,0,36.884,43.516ZM80.232,70.462H54.943a1.172,1.172,0,0,0-.828.344l-5.251,5.25v-4.42a1.172,1.172,0,0,0-1.172-1.172H41.9V51.357l1.41,1.41a1.172,1.172,0,0,0,2-.828V45.967H80.232Z" fill="#fff"/> <path id="Trazado_72" data-name="Trazado 72" d="M20.8,30.094H40.133a1.172,1.172,0,1,0,0-2.344H20.8a1.172,1.172,0,1,0,0,2.344Z" transform="translate(-3.427 -3.657)" fill="#fff"/> <path id="Trazado_73" data-name="Trazado 73" d="M20.8,38.844H47.583a1.172,1.172,0,1,0,0-2.344H20.8a1.172,1.172,0,1,0,0,2.344Z" transform="translate(-3.427 -6.548)" fill="#fff"/> <path id="Trazado_74" data-name="Trazado 74" d="M83.507,89.833H64.422a1.172,1.172,0,0,0,0,2.344H83.507a1.172,1.172,0,1,0,0-2.344Z" transform="translate(-17.839 -24.167)" fill="#fff"/> <path id="Trazado_75" data-name="Trazado 75" d="M64.422,84.713H83.507a1.172,1.172,0,1,0,0-2.344H64.422a1.172,1.172,0,0,0,0,2.344Z" transform="translate(-17.839 -21.701)" fill="#fff"/> <path id="Trazado_76" data-name="Trazado 76" d="M40.133,45.25H20.8a1.172,1.172,0,0,0,0,2.344H40.133a1.172,1.172,0,0,0,0-2.344Z" transform="translate(-3.427 -9.439)" fill="#fff"/> <path id="Trazado_77" data-name="Trazado 77" d="M92.921,71.311a1.172,1.172,0,0,0,1.172-1.172,3.6,3.6,0,0,1,1.08-2.582,3.549,3.549,0,0,1,2.6-1.045,3.7,3.7,0,0,1,3.575,3.571,3.636,3.636,0,0,1-1.521,3.006,7.775,7.775,0,0,0-3.278,6.295v.125a1.172,1.172,0,0,0,2.344,0v-.118a5.424,5.424,0,0,1,2.3-4.39,5.971,5.971,0,1,0-9.442-4.861,1.172,1.172,0,0,0,1.174,1.17Z" transform="translate(-27.253 -15.689)" fill="#fff"/> <path id="Trazado_78" data-name="Trazado 78" d="M101.17,90.556a1,1,0,0,0-.107-.2,1.227,1.227,0,0,0-.148-.174,1.175,1.175,0,0,0-1.058-.321.79.79,0,0,0-.214.067.871.871,0,0,0-.208.107.881.881,0,0,0-.174.147,1.179,1.179,0,0,0-.147.174,1.434,1.434,0,0,0-.107.2,1.335,1.335,0,0,0-.067.221,1.273,1.273,0,0,0-.02.228,1.169,1.169,0,0,0,.724,1.084,1.118,1.118,0,0,0,.449.087,1.16,1.16,0,0,0,.823-.342,1.138,1.138,0,0,0,.349-.83.871.871,0,0,0-.027-.228.938.938,0,0,0-.067-.221Z" transform="translate(-29.623 -24.168)" fill="#fff"/> </g> </svg> </div>



                            
                        </div>
                       
                    </div>

            </div>

            <div class="col-sm-6">
                <div class="float-start">

                    <div class="row">



                        <div class="col" id="circulo">

                                <div class="circle"><svg xmlns="http://www.w3.org/2000/svg" class="svg"> <g id="codificacion_1_" data-name="codificacion (1)" transform="translate(-5.25 -10.25)"> <path id="Trazado_65" data-name="Trazado 65" d="M71.78,10.25H8.673A3.427,3.427,0,0,0,5.25,13.673V70.827A3.427,3.427,0,0,0,8.673,74.25H71.78A3.427,3.427,0,0,0,75.2,70.827V13.673A3.427,3.427,0,0,0,71.78,10.25ZM8.673,12.334H71.78a1.341,1.341,0,0,1,1.34,1.34v9.674H7.334V13.673a1.341,1.341,0,0,1,1.34-1.34ZM71.78,72.166H8.673a1.341,1.341,0,0,1-1.34-1.34v-45.4H73.12v45.4A1.341,1.341,0,0,1,71.78,72.166Z" fill="#fff"/> <circle id="Elipse_16" data-name="Elipse 16" cx="1.488" cy="1.488" r="1.488" transform="translate(11.352 16.352)" fill="#fff"/> <circle id="Elipse_17" data-name="Elipse 17" cx="1.488" cy="1.488" r="1.488" transform="translate(17.306 16.352)" fill="#fff"/> <circle id="Elipse_18" data-name="Elipse 18" cx="1.488" cy="1.488" r="1.488" transform="translate(23.259 16.352)" fill="#fff"/> <path id="Trazado_66" data-name="Trazado 66" d="M101.27,69.021l-8.335-6.549a1.042,1.042,0,1,0-1.287,1.638l7.292,5.73-7.292,5.73a1.042,1.042,0,1,0,1.287,1.638l8.335-6.549a1.042,1.042,0,0,0,0-1.638Z" transform="translate(-34.8 -21.042)" fill="#fff"/> <path id="Trazado_67" data-name="Trazado 67" d="M29.446,62.648a1.041,1.041,0,0,0-1.463-.176l-8.335,6.549a1.042,1.042,0,0,0,0,1.638l8.335,6.549A1.042,1.042,0,1,0,29.27,75.57l-7.292-5.73,7.292-5.73a1.042,1.042,0,0,0,.176-1.463Z" transform="translate(-5.665 -21.042)" fill="#fff"/> <path id="Trazado_68" data-name="Trazado 68" d="M64.6,59.31a1.04,1.04,0,0,0-1.332.631l-5.953,16.67a1.041,1.041,0,0,0,.631,1.331,1.031,1.031,0,0,0,.35.06,1.042,1.042,0,0,0,.981-.692l5.953-16.67a1.041,1.041,0,0,0-.63-1.329Z" transform="translate(-21.042 -19.828)" fill="#fff"/> <path id="Trazado_69" data-name="Trazado 69" d="M47.627,73.25H39.292a1.042,1.042,0,1,0,0,2.084h8.335a1.042,1.042,0,0,0,0-2.084Z" transform="translate(-13.353 -25.493)" fill="#fff"/> <path id="Trazado_70" data-name="Trazado 70" d="M81.627,73.25H73.292a1.042,1.042,0,0,0,0,2.084h8.335a1.042,1.042,0,0,0,0-2.084Z" transform="translate(-27.112 -25.493)" fill="#fff"/> </g> </svg></div>

                            
                        </div>

                        <div class="col" id="text-right">
                                <p class="title" id="app-dev">Apps development</p>
                                <p class="subtitle">We are your solution and your best option for the design and development of apps in the android and ios platform.</p>
       
                        </div>


                        
                       
                    </div>

                    <div class="row">



                        <div class="col" id="circulo">

                                <div class="circle"><svg xmlns="http://www.w3.org/2000/svg" class="svg" style="padding-top:28px;"> <g id="pagina-web" transform="translate(323.531 -1)"> <g id="Grupo_34" data-name="Grupo 34" transform="translate(-332 1)"> <g id="Grupo_33" data-name="Grupo 33" transform="translate(8.469 0)"> <path id="Trazado_56" data-name="Trazado 56" d="M73.205,119.338H54.844a1.177,1.177,0,1,0,0,2.354H73.205a1.179,1.179,0,0,1,1.177,1.177v5.885H55.491a1.177,1.177,0,0,0,0,2.354H74.382V169.95a1.178,1.178,0,0,1-1.177,1.177H12a1.178,1.178,0,0,1-1.177-1.177V131.108H29.714a1.177,1.177,0,0,0,0-2.354H10.823v-5.885A1.179,1.179,0,0,1,12,121.692H30.362a1.177,1.177,0,1,0,0-2.354H12a3.535,3.535,0,0,0-3.531,3.531V169.95A3.535,3.535,0,0,0,12,173.481H73.205a3.535,3.535,0,0,0,3.531-3.531V122.869A3.535,3.535,0,0,0,73.205,119.338Z" transform="translate(-8.469 -102.877)" fill="#fff"/> <path id="Trazado_57" data-name="Trazado 57" d="M42.943,153.9a1.177,1.177,0,0,0,.836,2.013,1.18,1.18,0,1,0-.836-2.013Z" transform="translate(-37.894 -132.394)" fill="#fff"/> <path id="Trazado_58" data-name="Trazado 58" d="M77.076,153.9a1.177,1.177,0,1,0,1.671,0A1.236,1.236,0,0,0,77.076,153.9Z" transform="translate(-67.319 -132.394)" fill="#fff"/> <path id="Trazado_59" data-name="Trazado 59" d="M111.21,153.9a1.236,1.236,0,0,0-.341.836,1.164,1.164,0,0,0,.341.824,1.176,1.176,0,0,0,.836.354,1.166,1.166,0,0,0,1.177-1.177,1.177,1.177,0,0,0-2.013-.836Z" transform="translate(-96.745 -132.394)" fill="#fff"/> <path id="Trazado_60" data-name="Trazado 60" d="M128.161,40.486a1.179,1.179,0,0,0-.141,1.13l2.354,5.885a1.178,1.178,0,0,0,1.751.538l6.572-4.431c.412,1.164.789,2.109,1.044,2.726l0,0a1.176,1.176,0,0,0,.255.381,1.144,1.144,0,0,0,.175.118,1.163,1.163,0,0,0,.2.134,1.178,1.178,0,0,0,.45.091h.508l-1.5,3a1.177,1.177,0,0,0,1.053,1.7H150.3a1.177,1.177,0,0,0,1.053-1.7l-1.5-3H150a1.1,1.1,0,0,0,.171-.035,1.219,1.219,0,0,0,.177.035,1.178,1.178,0,0,0,1.089-.729c.254-.617.632-1.563,1.044-2.726l6.572,4.431a1.178,1.178,0,0,0,1.751-.538l2.354-5.885a1.179,1.179,0,0,0-.141-1.13l-7.212-9.915a38.269,38.269,0,0,0-1.083-15.759A37.474,37.474,0,0,0,146.466.372a1.215,1.215,0,0,0-1.751,0,37.469,37.469,0,0,0-8.259,14.438,38.266,38.266,0,0,0-1.083,15.759Zm14.626,8.932,1.177-2.354h3.253l1.177,2.354Zm12.5-15.568,5.452,7.5-1.571,3.927-5.883-3.966A60.552,60.552,0,0,0,155.283,33.849ZM138.714,15.478a34.708,34.708,0,0,1,6.877-12.527,34.722,34.722,0,0,1,6.877,12.527,35.968,35.968,0,0,1,.974,15.213c0,.022-.006.042-.009.064a60.253,60.253,0,0,1-3.155,12.034c-.264.747-.51,1.389-.72,1.92h-7.934c-.21-.53-.456-1.172-.72-1.92a60.242,60.242,0,0,1-3.155-12.034c0-.022,0-.042-.009-.064A35.966,35.966,0,0,1,138.714,15.478ZM137.9,41.306l-5.883,3.966-1.571-3.927,5.452-7.5A60.6,60.6,0,0,0,137.9,41.306Z" transform="translate(-111.457 0)" fill="#fff"/> <path id="Trazado_61" data-name="Trazado 61" d="M247.4,410.648v3.531a1.177,1.177,0,0,0,2.354,0v-3.531a1.177,1.177,0,1,0-2.354,0Z" transform="translate(-214.445 -352.992)" fill="#fff"/> <path id="Trazado_62" data-name="Trazado 62" d="M213.269,393.582v3.531a1.177,1.177,0,1,0,2.354,0v-3.531a1.177,1.177,0,1,0-2.354,0Z" transform="translate(-185.02 -338.28)" fill="#fff"/> <path id="Trazado_63" data-name="Trazado 63" d="M282.713,392.4a1.177,1.177,0,0,0-1.177,1.177v3.531a1.177,1.177,0,0,0,2.354,0v-3.531A1.177,1.177,0,0,0,282.713,392.4Z" transform="translate(-243.871 -338.279)" fill="#fff"/> <path id="Trazado_64" data-name="Trazado 64" d="M219.153,122.574a5.885,5.885,0,1,0-5.885-5.885A5.892,5.892,0,0,0,219.153,122.574Zm0-9.416a3.531,3.531,0,1,1-3.531,3.531A3.535,3.535,0,0,1,219.153,113.158Z" transform="translate(-185.02 -95.521)" fill="#fff"/> </g> </g> </g></svg></div>

                            
                        </div>

                        <div class="col" id="text-right">
                                <p class="title" id="seo">SEO service</p>
                                <p class="subtitle">Guarantee of seo positioning websites through a search engine optimization.</p>
       
                        </div>


                        
                       
                    </div>

                    <div class="row">



                        <div class="col" id="circulo">

                                <div class="circle"><svg xmlns="http://www.w3.org/2000/svg" class="svg"> <g id="diseno-web_1_" data-name="diseno-web (1)" transform="translate(-5.25 -10.25)"> <path id="Trazado_79" data-name="Trazado 79" d="M71.456,10.25H8.657A3.411,3.411,0,0,0,5.25,13.657V70.532a3.411,3.411,0,0,0,3.407,3.407h62.8a3.411,3.411,0,0,0,3.407-3.407V13.657A3.411,3.411,0,0,0,71.456,10.25Zm-62.8,2.074h62.8a1.335,1.335,0,0,1,1.333,1.333v9.627H7.324V13.657a1.335,1.335,0,0,1,1.333-1.333Zm62.8,59.541H8.657a1.335,1.335,0,0,1-1.333-1.333V25.357H72.789V70.532A1.335,1.335,0,0,1,71.456,71.865Z" transform="translate(0)" fill="#fff"/> <circle id="Elipse_19" data-name="Elipse 19" cx="1.481" cy="1.481" r="1.481" transform="translate(11.323 16.323)" fill="#fff"/> <circle id="Elipse_20" data-name="Elipse 20" cx="1.481" cy="1.481" r="1.481" transform="translate(17.247 16.323)" fill="#fff"/> <circle id="Elipse_21" data-name="Elipse 21" cx="1.481" cy="1.481" r="1.481" transform="translate(23.172 16.323)" fill="#fff"/> <path id="Trazado_80" data-name="Trazado 80" d="M49.909,46.25H20.287a1.037,1.037,0,0,0-1.037,1.037V79.279a1.037,1.037,0,0,0,1.037,1.037H49.909a1.037,1.037,0,0,0,1.037-1.037V47.287A1.037,1.037,0,0,0,49.909,46.25ZM33.685,63.283,21.324,76.633v-26.7ZM22.66,48.324h24.88L35.1,61.757ZM35.1,64.809,47.539,78.242H22.66Zm1.413-1.526,12.361-13.35v26.7Z" transform="translate(-5.706 -14.672)" fill="#fff"/> <path id="Trazado_81" data-name="Trazado 81" d="M95.69,100.25h-15.4a1.037,1.037,0,0,0,0,2.074h15.4a1.037,1.037,0,1,0,0-2.074Z" transform="translate(-30.159 -36.68)" fill="#fff"/> <path id="Trazado_82" data-name="Trazado 82" d="M80.287,92.324h8.294a1.037,1.037,0,1,0,0-2.074H80.287a1.037,1.037,0,0,0,0,2.074Z" transform="translate(-30.159 -32.604)" fill="#fff"/> <path id="Trazado_83" data-name="Trazado 83" d="M104.657,90.25h-2.37a1.037,1.037,0,1,0,0,2.074h2.37a1.037,1.037,0,1,0,0-2.074Z" transform="translate(-39.125 -32.604)" fill="#fff"/> <path id="Trazado_84" data-name="Trazado 84" d="M95.69,46.25h-15.4a1.037,1.037,0,0,0-1.037,1.037V67.43a1.037,1.037,0,0,0,1.037,1.037h15.4a1.037,1.037,0,0,0,1.037-1.037V47.287A1.037,1.037,0,0,0,95.69,46.25ZM86.685,57.358l-5.362,7.009V50.349Zm-4.3-9.035H93.593l-5.6,7.329Zm5.6,10.741,5.6,7.329H82.385Zm1.3-1.706,5.36-7.009V64.368Z" transform="translate(-30.159 -14.672)" fill="#fff"/> </g></svg></div>

                            
                        </div>

                        <div class="col" id="text-right">
                                <p class="title" id="designfor">Design for startups</p>
                                <p class="subtitle">We design beautiful modern engaging websites that always latest responsive technologies.</p>
       
                        </div>


                        
                       
                    </div>

                </div>
            </div>

        </div>

        <!-- FAQ SECTION -->
            

        <div class="circle" id="hola-como-vas"><svg xmlns="http://www.w3.org/2000/svg" width="100" height="100" viewBox="0 0 116 116" class="svg"> <g id="preguntas-mas-frecuentes" transform="translate(-1 -1)"> <path id="Trazado_112" data-name="Trazado 112" d="M90.636,1H27.364A26.394,26.394,0,0,0,1,27.364V69.545A26.413,26.413,0,0,0,22.091,95.377v16.351a5.274,5.274,0,0,0,8.2,4.387L60.6,95.909H90.636A26.394,26.394,0,0,0,117,69.545V27.364A26.394,26.394,0,0,0,90.636,1ZM56.074,86.249,32.636,101.873V90.636a5.271,5.271,0,0,0-5.273-5.273A15.837,15.837,0,0,1,11.545,69.545V27.364A15.837,15.837,0,0,1,27.364,11.545H90.636a15.837,15.837,0,0,1,15.818,15.818V69.545A15.837,15.837,0,0,1,90.636,85.364H59a5.249,5.249,0,0,0-2.926.886Z" fill="#fff"/> <path id="Trazado_113" data-name="Trazado 113" d="M24.818,4A15.837,15.837,0,0,0,9,19.818a5.273,5.273,0,0,0,10.545,0,5.273,5.273,0,1,1,8.389,4.26c-5.331,3.9-8.389,9.533-8.389,15.444v1.387a5.273,5.273,0,0,0,10.545,0V39.522c0-3.443,2.552-5.826,4.076-6.944A15.818,15.818,0,0,0,24.818,4Z" transform="translate(34.182 12.818)" fill="#fff"/> <ellipse id="Elipse_22" data-name="Elipse 22" cx="5" cy="5.5" rx="5" ry="5.5" transform="translate(54 64)" fill="#fff"/> </g></svg></div>


        <div class="col-12 no-gutters" style="background-color: #2E2E2E;">
            <div class="container" id="container-faq">
              <p class="faq-title pl-5 pt-5">Frequently Asked Questions (FAQ)</p>
              @foreach ($faqs as $faq)
                <p class="question-title pt-4">
                  <span style="color:white; padding-right:5px;" class="question-title">{{ $faq->id }}.</span>
                  {{ $faq->title }}
                </p>
                <div class="accordion-toggle">
                  <p class="question-answer">{{ $faq->answer }}</p>
                </div>
                <hr style="color:white; height:3px;">
              @endforeach
              <br><br>
              <br><br>
            </div>
                
          </div>

          <form form id="contact-form" action="{{route('enviar')}}" method="post" role="form">
            <input type="hidden" name="_method" value="POST">
            <input type="hidden" name="_token" value="{{ csrf_token() }}">

          <div class="col-6 mx-auto" style="background-color: #F9F9F9;" id="contact-form">
            <div class="" id="container-contact-us">
                <p class="title-contact pt-5">CONTACT US</p>
                <p class="subtitle-contact">Get in Touch for Exceptional Service</p>
                <p class="subtitle-contact" style="font-weight: 400; font-size:15px;F">Contact Us to Discuss Your Project Requirements and Receive a Customized Solution</p>
            </div>
                
                  <div class="container">
                    <div class="row">
                      <div class="col-lg-12">
                        <div class="contact-form-container">
                          <div class="row">
                            <div class="col-lg-4 col-md-6">
                              <div class="form-group">
                                <label for="name" class="form-title-contact">Your Name</label>
                                <input type="text" class="form-control" id="name"  name="name" placeholder="Enter your name">
                              </div>
                            </div>
                            <div class="col-lg-4 col-md-6">
                              <div class="form-group">
                                <label for="email" class="form-title-contact" >Your Email</label>
                                <input type="email" class="form-control" id="email" name="email" placeholder="Enter your email">
                              </div>
                            </div>
                            <div class="col-lg-4 col-md-6">
                              <div class="form-group">
                                <label for="number" class="form-title-contact">Your Number</label>
                                <input type="text" class="form-control" id="number" placeholder="Enter your number" name="number"> 
                              </div>
                            </div>
                            <div class="col-lg-6 col-md-6">
                              <div class="form-group">
                                <label for="interest" class="form-title-contact">What you are interested in</label>
                                <input type="text" class="form-control" id="interest" placeholder="Enter your interest" name="interest">
                              </div>
                            </div>
                            <div class="col-lg-6 col-md-6">
                              <div class="form-group">
                                <label for="budget" class="form-title-contact">Project Budget</label>
                                <input type="text" class="form-control" id="budget" placeholder="Enter project budget" name="budget" >
                              </div>
                            </div>
                            <div class="col-12">
                              <div class="form-group">
                                <label for="message" class="form-title-contact">Message</label>
                                <textarea class="form-control" id="mensaje" rows="5" placeholder="Enter your message" name="mensaje"></textarea>
                              </div>
                            </div>
                            <div class="col-12 text-center">
                              <button type="submit" class="btn btn-primary" href="/enviar-correo">Submit</button>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </form>
              <br>
              <br>
              <br>
              <br>
        </div>
        <div class="circle" id="hola-como-vas2"><svg xmlns="http://www.w3.org/2000/svg" class="svg" width="139.44" height="109.53" viewBox="0 0 139.44 109.53" style="padding-left:0px; padding-right:7px; padding-top:28px;"> <g id="layer1" transform="translate(-0.529 760.01)"> <path id="path1983" d="M20.459-760.01A19.971,19.971,0,0,0,.529-740.119v29.89A20,20,0,0,0,20.459-690.3v14.96a4.982,4.982,0,0,0,3.086,4.566,4.982,4.982,0,0,0,5.405-1.075L47.4-690.3H80.229a19.97,19.97,0,0,0,19.891-19.929v-29.89A19.938,19.938,0,0,0,80.229-760.01Zm0,9.969h59.77a9.807,9.807,0,0,1,9.97,9.922v29.89a9.839,9.839,0,0,1-9.97,9.959H45.349a4.982,4.982,0,0,0-3.5,1.469L30.419-687.363v-7.907a4.98,4.98,0,0,0-4.961-5h-5a9.83,9.83,0,0,1-9.96-9.959v-29.89a9.8,9.8,0,0,1,9.96-9.922Zm84.66,9.922v9.959h14.93a9.839,9.839,0,0,1,9.96,9.969v29.89a9.832,9.832,0,0,1-9.96,9.961h-4.97a4.978,4.978,0,0,0-3.54,1.458,4.979,4.979,0,0,0-1.459,3.541v7.867l-11.39-11.4a4.982,4.982,0,0,0-3.531-1.467H60.309a9.807,9.807,0,0,1-8.618-4.961H49.464l-5.816,5.817a19.93,19.93,0,0,0,16.662,9.1H93.1l18.461,18.452a4.981,4.981,0,0,0,5.419,1.068,4.98,4.98,0,0,0,3.073-4.589V-670.38a19.986,19.986,0,0,0,19.92-19.92v-29.89a20,20,0,0,0-19.92-19.929Z" transform="translate(0 0)" fill="#fff"/> </g></svg></div>

        <br>

           
    </div>


    <script>
        const toggleButtons = document.querySelectorAll('.accordion-toggle');
      
        toggleButtons.forEach(button => {
          button.addEventListener('click', () => {
            button.classList.toggle('active');
            const answer = button.querySelector('.question-answer');
            if (answer.style.maxHeight) {
              answer.style.maxHeight = null;
            } else {
              answer.style.maxHeight = answer.scrollHeight + 'px';
            }
          });
        });
      </script>

    <style>


#contact-form {
    position: relative;
    top:-60px;
}



.form-title-contact {
  font-family: 'Lato';
    font-size: 13px;
    font-weight: 900 !important;
}





.question-answer {
    max-height: 0;
    overflow: hidden;
    transition: max-height 0.3s ease;
  }

  .accordion-toggle {
    cursor: pointer;
    position: relative;
  }

  .accordion-toggle::before {
    content: '';
    position: absolute;
    right: 12px;
    top: 50%;
    transform: translateY(-50%);
    width: 0;
    height: 0;
    border-top: 6px solid transparent;
    border-bottom: 6px solid transparent;
    border-left: 8px solid white;
    transition: transform 0.3s ease;
  }

  .accordion-toggle.active::before {
    transform: translateY(-50%) rotate(-90deg);
  }

  

  #hola-como-vas {
    position: relative;
    left: 64%;
    top:48px;
  }

  #hola-como-vas2 {
    position: relative;
    left: 64%;
    top:-140px;
  }

  

        .circle {
            width: 130px;
            height: 130px;
            background-color: #005397;
            border-radius: 50%;
            margin-bottom: 10px;
        }

        .svg {
            padding-left: 30px;
            padding-top: 35px;
        }

        .title {
            color:#000000;
            font-family: 'Lato';
            font-weight: 900;
	          border-left: 0px solid #e7e7e7;

            font-size: 19px;
            display: inline-block;
        }

        .subtitle {
            color: #000000;
            font-family: 'Lato';
            font-weight: 400;
            font-size: 14px;
            text-align: justify

        }

        .faq-title {
            	color:#FFFFFF;
                font-size:25px;
                font-family: 'Lato';
                font-weight: 700;
        }

        .question-title {
            color:#FFFFFF;
                font-size:15px;
                font-family: 'Lato';
                font-weight: 600;
        }


        .question-answer {
            color:#FFFFFF;
                font-size:15px;
                font-family: 'Lato';
                font-weight: 300;
        }



        #circulo {
            margin-right: -20%;
        }

       @media (min-width:760px) and (max-width:1800px) {
        #text {
         margin-left:39%;   
        }

        #text-right {
         margin-right:39%;   
        }

        #container-faq {
    padding-right: var(--bs-gutter-x,10.75rem);
    padding-left: var(--bs-gutter-x,10.75rem);

                       }

        #web-design {
          padding-left: 178px;
        }
  

        #ecommerce {
          padding-left:100px;
        }

        #consulation {
          padding-left: 168px;
        }

        #app-dev {
          padding-left: 0px;
        }

        #seo {
          padding-left:0px;
        }

        #designfor{
          padding-left:0px;
        }

       }


       .title-contact {
    font-family: 'Lato';
    color: #005397;
    font-weight: 900;
    font-size: 30px;
    padding-left:50px;
}

.subtitle-contact{
    font-family: 'Lato';
    color: black;
    font-weight: 900;
    font-size: 20px;
    padding-left:50px;
}
  


.container-fluid {
        padding-right: var(--bs-gutter-x,-0.25rem);
        padding-left: var(--bs-gutter-x,-0.25rem);
       }
    </style>


@endsection

@section('scripts')
    @include('sections.scripts')
@endsection
