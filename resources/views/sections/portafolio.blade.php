<div id="portfolio" style="position:relative; bottom:50px; padding:0 0;">
<section  class="portfolio portfolio-box">
    <div class="" style="height:600px;">
        <div class="row">
            <div class="col-md-12 heading text-center">
                <span class="icon-pentagon wow bounceIn"><i class="fa fa-suitcase"></i></span>
                <h2 class="title2" style="font-family: 'Lato'" id="portfolio">{{__("HomePortfolioTtitle")}}
                    <span class="title-desc">{{__("HomePortfolioSubTitle")}}</span>
                </h2>
            </div>
        </div> 
        <div class="">
         <div class="owl-carousel owl-theme"  id="portfolio-carousel">

                @foreach ($portfolios as $portafolio)
           
                    <div class=" web-design item mt-5" style="padding: 1em">
                        <div class="grid">
  
                            <figure class="effect-oscar">
                                @php
                                    $cad = str_replace('[', '', $portafolio->image);
                                    $cad = str_replace(']', '', $cad);
                                    $cad = str_replace('%', '', $cad);
                                    $cad = str_replace('\/', '/', $cad);
                                    $cad = str_replace('22', '', $cad);
                                    $cad = str_replace('"', '', $cad);
                                @endphp
       
                                    <img src="{{ asset('/storage/' . $cad) }}" alt="" style="height:220px;">
              
                                <figcaption>
                                    <h5>{{ $portafolio->name }}</h5>
                                    <a class="link icon-pentagon" href="{{ route('portfolioDetail', $portafolio->slug) }}">

                                        <i class="fa fa-link"></i>
                                    </a>
                                </figcaption>
                            </figure>
                            
                        </div>
                    </div>

                @endforeach
            </div>
          </div>
                    <div class="text-center" style="position:relative; bottom:70px;"><br>
                        <a  href="{{ route ('portfolioView') }}">
                            <button class="btn btn-primary solid blank">{{__("ViewAllButton")}}</button>
                        </a>
                    </div>
        </div>
    </div>
</section>
</div>