<section class="text-center">
                                @php
                                    $cad = str_replace('[', '', $detailPortfolio->image);
                                    $cad = str_replace(']', '', $cad);
                                    $cad = str_replace('%', '', $cad);
                                    $cad = str_replace('\/', '/', $cad);
                                    $cad = str_replace('22', '', $cad);
                                    $cad = str_replace('"', '', $cad);
                                @endphp
    <img src="{{ asset('/storage/' . $cad) }}" alt="" style="height:50%; width:80%;">
</section>


<section class="row container mx-5">
    <div class="col-0 col-md-2"></div>
    <div class="col-11 col-md-5">
                        @foreach ($skills as $skill)
                                @if (in_array($skill->id, json_decode($detailPortfolio->skills)))

                                        <div class="text-center nav-link button-skill-nav badge rounded-pill bg-size-lg text-light px-5 mx-3 mb-3  py-4" id="{{ $skill->name }}-tab" style="background-color: #323232; font-weight: 400; font-size: 18px;" data-toggle="tab" data-target="#{{ $skill->name }}" type="button" role="tab" aria-controls="{{ $skill->name }}" aria-selected="false">{{ $skill->name }}</div>

                            @endif
                        @endforeach
            <p style="font-size:25px; margin:0 0;"><b >May 2019 - January 2020</b></p>
            <a class="mb-1" href="{{$detailPortfolio->url}}" style="text-decoration:none; font-size:25px;">{{$detailPortfolio->url}}</a>
            <p style="font-size:18px;">{{$detailPortfolio->description}}</p>
    </div>

</section>
<section class="row margin-section-deatil-responsive"  style="width:100%; background-color:#2E2E2E;   margin-left: 0;">

    <div class="col-0 col-md-2"></div>
        <div class="col-11 col-md-8">
            <h5 class="text-light" style="font-size:25px;">About The Project</h5>
            <p class="text-light" style="font-size:18;"> Lorem ipsum dolor sit, amet consectetur adipisicing elit. Dicta blanditiis officiis ab corrupti sunt nemo quis ad exercitationem sint pariatur officia placeat consequuntur molestiae, facere cupiditate eum sapiente, ullam debitis.</p>
            <div class=" div-light-bulb position-details" style="">
                    <svg style="margin-left:4rem; margin-top:3.5rem;" xmlns="http://www.w3.org/2000/svg" width="130" height="130" viewBox="0 0 124 124">
                            <g id="chat_1_" data-name="chat (1)" transform="translate(-1 -1)">
                                <path id="Trazado_153" data-name="Trazado 153" d="M96.818,1H29.182A28.214,28.214,0,0,0,1,29.182V74.273a28.235,28.235,0,0,0,22.545,27.613v17.478a5.637,5.637,0,0,0,8.765,4.689l32.4-21.6h32.11A28.214,28.214,0,0,0,125,74.273V29.182A28.214,28.214,0,0,0,96.818,1ZM59.872,92.129l-25.054,16.7V96.818a5.638,5.638,0,0,0-5.636-5.636A16.93,16.93,0,0,1,12.273,74.273V29.182A16.93,16.93,0,0,1,29.182,12.273H96.818a16.93,16.93,0,0,1,16.909,16.909V74.273A16.93,16.93,0,0,1,96.818,91.182H63a5.506,5.506,0,0,0-3.128.947Z" transform="translate(0 0)" fill="#fff"/>
                                <path id="Trazado_154" data-name="Trazado 154" d="M78.273,7H10.636a5.636,5.636,0,0,0,0,11.273H78.273A5.636,5.636,0,0,0,78.273,7Z" transform="translate(18.545 27.818)" fill="#fff"/>
                                <path id="Trazado_155" data-name="Trazado 155" d="M57.727,11H12.636a5.636,5.636,0,1,0,0,11.273H57.727a5.636,5.636,0,0,0,0-11.273Z" transform="translate(27.818 46.364)" fill="#fff"/>
                            </g>
                    </svg>
            </div>
        </div>

</section>
<!-- slider portfolios -->
<section class="row justify-content-center" style="gap:20px;" >
        @php
            $firstThreePortfolios = array_slice($portfolios, 0, 3);
            $countShowMore=count($portfolios);
        @endphp
    
        @foreach ($firstThreePortfolios as $portafolio)

            <div class="col-10 col-md-3 web-design item mt-5 mb-3 " style="padding: 1em; overflow-x:hidden; height:auto;">
                <div class="grid">

                    <figure class="effect-oscar">
                        @php
                            $cad = str_replace('[', '', $portafolio['image']);
                            $cad = str_replace(']', '', $cad);
                            $cad = str_replace('%', '', $cad);
                            $cad = str_replace('\/', '/', $cad);
                            $cad = str_replace('22', '', $cad);
                            $cad = str_replace('"', '', $cad);
                        @endphp

                            <img src="{{ asset('/storage/' . $cad) }}" alt="" style="height:220px;">

                        <figcaption>
                            <h5>{{ $portafolio['name'] }}</h5>
                            <a class="link icon-pentagon" href="{{ route('portfolioDetail', $portafolio['id']) }}">
                                <i class="fa fa-link"></i>
                            </a>
                        </figcaption>
                    </figure>
                    
                </div>
            </div>


        @endforeach
    @if($countShowMore>3)
                    <div class="text-center" style="position:relative; bottom:70px;"><br>
                        <a  href="{{ route ('portfolioView') }}">
                            <button class="btn btn-primary solid blank mt-5" style="font-size:20px;">SHOW MORE</button>
                        </a>
                    </div>
    @endif
</section>

