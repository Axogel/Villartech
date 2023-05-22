<div style="background-color: #f4f4f4;">
    <div class="container">
        <div class="" role="tablist">
            <ul class="nav nav-tabs d-flex justify-content-center mx-5" id="myTab" role="tablist" style="    border-bottom:0 ;">
            <li class="nav-item" style="height:50px;" role="presentation">
    <button class="nav-link active badge rounded-pill button-skill-nav bg-size-lg text-light px-5 mx-3 my-5 py-3" style=" font-weight: 100;
    font-size: 11px;
" id="home-tab" data-toggle="tab" data-target="#homeWelcome" type="button" role="tab" aria-controls="home" aria-selected="true">All</button>
  </li>
                @foreach ($skills as $skill)
                    <li class="nav-item" style="height:50px;" role="presentation">
                        <button class="text-center nav-link button-skill-nav badge rounded-pill bg-size-lg text-light px-5 mx-3 my-5 py-3" id="{{ $skill->name }}-tab" style="background-color: #323232; font-weight: 100;
    font-size: 11px;
" data-toggle="tab" data-target="#{{ $skill->name }}" type="button" role="tab" aria-controls="{{ $skill->name }}" aria-selected="false">{{ $skill->name }}</button>
                    </li>
                @endforeach
            </ul>
            <div class="tab-content" id="myTabContent">
            <div class="tab-pane fade show active in" id="homeWelcome" role="tabpanel" aria-labelledby="home-tab">
                <div class="container">
                    <div id="portfolioContainer" class="row justify-content-center">
                     @php
                            $firstFourPortfolios = array_slice($portfolios, 0, 4);
                      @endphp
                    @foreach ($firstFourPortfolios as $portfolio)
                                        <div class="col-5 col-sm-4 my-4 mx-6 web-design isotope-item portfolio-view-item py-5 px-5 card-hover">
                                            <div class="grid">
                                                <figure class="effect-portfolio" style="height:250px;">
                                                    @php
                                                        $cad = str_replace('[', '', $portfolio['image']);
                                                        $cad = str_replace(']', '', $cad);
                                                        $cad = str_replace('%', '', $cad);
                                                        $cad = str_replace('\/', '/', $cad);
                                                        $cad = str_replace('22', '', $cad);
                                                        $cad = str_replace('"', '', $cad);
                                                    @endphp
                                                    <img class="" src="{{ asset('/storage/' . $cad) }}" alt="" style="height:100%; width:100%;">
                                                    <figcaption> 
                                                        <a class="link icon-portfolio " href="#" data-toggle="modal" data-target="#{{ $portfolio['id'] }}">
                                                            <i class="fa fa-link"></i>
                                                        </a>
                                                    </figcaption>
                                                </figure>
                                            </div>
                                            <h5 class="" style="font-size: 15px; color:#045A97; font-family:'Lato'; font-weight:900;">{{ $portfolio['name'] }}</h5>
                                            <p class="">{{ $portfolio['description'] }}</p>
                                        </div>
                                    @endforeach
                    </div>
                </div>
            </div>
                @foreach ($skills as $skill)
                    <div class="tab-pane fade" id="{{ $skill->name }}" role="tabpanel" aria-labelledby="{{ $skill->id }}-tab">
                        @php 
                            $new = array_filter($portfolios, function ($var) use ($skill) {
                                return (in_array($skill->id, json_decode($var['skills'])));
                            });
                        @endphp
                        <div class="container">
                            <div class="row justify-content-center">
                                @if (empty($new))
                                    <div class="col-12 text-center py-5">
                                        <p>No portfolios to display</p>
                                    </div>
                                @else
                                    @foreach ($new as $portfolio)
                                        <div class="col-5 col-sm-4 my-4 mx-6 web-design isotope-item portfolio-view-item py-5 px-5 card-hover">
                                            <div class="grid">
                                                <figure class="effect-portfolio" style="height:250px;">
                                                    @php
                                                        $cad = str_replace('[', '', $portfolio['image']);
                                                        $cad = str_replace(']', '', $cad);
                                                        $cad = str_replace('%', '', $cad);
                                                        $cad = str_replace('\/', '/', $cad);
                                                        $cad = str_replace('22', '', $cad);
                                                        $cad = str_replace('"', '', $cad);
                                                    @endphp
                                                    <img class="" src="{{ asset('/storage/' . $cad) }}" alt="" style="height:100%; width:100%;">
                                                    <figcaption> 
                                                        <a class="link icon-portfolio" href="#" data-toggle="modal" data-target="#{{ $portfolio['id'] }}">
                                                            <i  class="fa fa-link"></i>
                                                        </a>
                                                    </figcaption>
                                                </figure>
                                            </div>
                                            <h5 class="" style="font-size: 15px; color:#045A97; font-family:'Lato'; font-weight:900;">{{ $portfolio['name'] }}</h5>
                                            <p class="">{{ $portfolio['description'] }}</p>
                                        </div>
                                    @endforeach
                                @endif
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
    <div class="container">
    <div class="row justify-content-center">
        <div class="text-center my-5">
            <button id="loadMoreButton" class="btn btn-primary solid blank" type="submit">SHOW MORE</button>
        </div>
    </div>
    </div>
</div>



<div class="row justify-content-center button-skill-nav">
    <div class="col-12 col-md-5 mx-5 my-5">
        <h5 class="text-light mx-5 my-4">Want to learn more about our work and experience?</h5>
        <p class="text-light mx-5">We invite you to discover our profiles on the freelance work platforms Upwork and LinkedIn. On these profiles, you can find more information about our previous projects, technical skills, recommendations from satisfied clients, and more.</p>
    </div>
    <div class="col-12 col-md-5 " style="">
                <div class="row justify-content-center">
                    <div class="col-12 mx-5 my-4 div-light-bulb" style="">
                            <svg class="" style="margin-left:1.8rem; margin-top:2rem;" xmlns="http://www.w3.org/2000/svg" width="100.711" height="100.71" viewBox="0 0 132.711 132.71">
                                 <path id="path2051" d="M62.145-760.8v18.968h9.479V-760.8Zm-38.834,16.1-6.721,6.684L30.022-724.59l6.684-6.721Zm87.119,0-13.4,13.4,6.721,6.721,13.4-13.432ZM28.958-694.439a37.73,37.73,0,0,0,18.959,32.465v14.932a4.74,4.74,0,0,0,4.74,4.739H81.094a4.74,4.74,0,0,0,4.74-4.739v-14.932a37.729,37.729,0,0,0,18.959-32.465,38.044,38.044,0,0,0-38.172-37.917,38.038,38.038,0,0,0-37.663,37.917Zm66.355,0a28.407,28.407,0,0,1-16.246,25.689,4.742,4.742,0,0,0-2.712,4.286v12.682H57.4v-12.682a4.739,4.739,0,0,0-2.712-4.286,28.407,28.407,0,0,1-16.246-25.689,28.408,28.408,0,0,1,28.248-28.438,28.408,28.408,0,0,1,28.628,28.438ZM.529-699.188v9.479H19.5v-9.479Zm113.752,0v9.479H133.24v-9.479ZM30.023-664.27l-13.432,13.4,6.721,6.711,13.4-13.432Zm73.724,0-6.721,6.684,13.4,13.432,6.721-6.711Zm-55.839,26.7v9.479H85.834v-9.479Z" transform="translate(-0.529 760.804)" fill="#fff"/>
                            </svg>
                    </div>
                </div>
                <div class="row justify-content-start">
                    @foreach($settings as $setting)
                        <div class="col-3 col-md-5 mx-5 my-4 img-link-up" style="background-color:#fff; border-radius: 100px; height: 50px; width: 150px;">
                            <a href="{{ $setting->upwork }}">
                                <img class=""    style="height: 50px; width: 120px; margin-left:0.8rem; margin-top:0.2rem;" src="{{asset('assets/img/upwork2.png')}}" alt="">
                            </a>
                        </div>
                        <div class="col-3 col-md-5 mx-5 my-4 img-link-up" style="background-color:#fff; border-radius: 100px; height: 50px; width: 150px;">
                            <a href="{{ $setting->date }}">
                                <img  class="" style="height: 30px; width: 120px; margin-left:0.8rem; margin-top:1rem;" src="{{asset('assets/img/linkIn2.png')}}" alt="">
                            </a>
                        </div>
                    @endforeach
                </div>
    </div>
</div>
<!-- img languages -->
<div class="container ">
    <div class="row text-center justify-content-center my-5">
        <div class="col-6 col-md-3 col-lg-1 mx-4">
            <img class="img-redirect" src="{{asset('assets/img/theme/laravel.png')}}" alt="" style="width:100px; height:90px;">
        </div>
        <div class="col-6 col-md-3 col-lg-1 mx-4">
            <img class="img-redirect" src="{{asset('assets/img/theme/php.png')}}" alt="" style="width:100px; height:90px;">
        </div>
        <div class="col-6 col-md-3 col-lg-1 mx-4">
            <img class="img-redirect" src="{{asset('assets/img/theme/vue.jpg')}}" alt="" style="width:100px; height:90px;">
        </div>
        <div class="col-6 col-md-3 col-lg-1 mx-4">
            <img class="img-redirect" src="{{asset('assets/img/theme/angular.jpg')}}" alt="" style="width:100px; height:90px;">
        </div>
        <div class="col-6 col-md-3 col-lg-1 mx-4">
            <img class="img-redirect" src="{{asset('assets/img/theme/react.jpg')}}" alt="" style="width:100px; height:90px;">
        </div>
        <div class="col-6 col-md-3 col-lg-1 mx-4">
            <img class="img-redirect mt-2" src="{{asset('assets/img/theme/html.png')}}" alt="" style="width:80px; height:70px;">
        </div>
        <div class="col-6 col-md-3 col-lg-1 mx-4">
            <img class="img-redirect mt-2" src="{{asset('assets/img/theme/css.png')}}" alt="" style="width:80px; height:70px;">
        </div>
    </div>
</div>
<script>
    var portfolioData = {!! json_encode($portfolios) !!};
    var url = `{{ url('/') }}`;
    
    var currentIndex = 0; 
    var batchSize = 4; 

    function addPortfolioItems(startIndex, endIndex) {
        var portfolioContainer = document.getElementById('portfolioContainer');

        for (var i = startIndex; i < endIndex; i++) {
            if (portfolioData[i]) {
                var portfolio = portfolioData[i];

                var portfolioItem = document.createElement('div');
                portfolioItem.className = 'col-5 col-sm-4 my-4 mx-6 web-design isotope-item portfolio-view-item py-5 px-5 card-hover';
                portfolioItem.innerHTML = `
                    <div class="grid">
                        <figure class="effect-portfolio" style="height:250px;">
                            <img class="" src="${url+'/'+'storage/'+portfolio.image}" alt="" style="height:100%; width:100%;">
                            <figcaption>
                                <a class="link icon-portfolio" href="#" data-toggle="modal" data-target="#${portfolio.id}">
                                    <i class="fa fa-link"></i>
                                </a>
                            </figcaption>
                        </figure>
                    </div>
                    <h5 class="" style="font-size: 15px; color:#045A97; font-family:'Lato'; font-weight:900;">${portfolio.name}</h5>
                    <p class="">${portfolio.description}</p>
                `;

                portfolioContainer.appendChild(portfolioItem);
            }
        }
    }

    // Load more
    function loadMoreItems() {
        var nextIndex = currentIndex + batchSize;
        addPortfolioItems(currentIndex, nextIndex);
        currentIndex = nextIndex;
        if (currentIndex >= portfolioData.length) {
            document.getElementById('loadMoreButton').style.display = 'none';
        }
    }

    document.getElementById('loadMoreButton').addEventListener('click', loadMoreItems);

    addPortfolioItems(0, currentIndex);
</script>