
<div style="background-color: #f4f4f4;">
<div>
        @foreach ($skills as $skill)
             <h2 style="display: inline-block; font-family: 'Lato';">
                <span class="badge rounded-pill bg-size-lg" style="background-color: #323232; font-weight:300;">{{ $skill->name }}</span>
            </h2>
        @endforeach
</div>
<div class="container">
    <div class="row">

        @foreach ($portfolios as $portafolio)
                    <div class="col-12 col-sm-5 my-4  mx-6 web-design isotope-item portfolio-view-item py-5 px-5" >
                        <div class="grid">
                            <figure class="effect-oscar" style="height:250px;">
                                @php
                                    $cad = str_replace('[', '', $portafolio->image);
                                    $cad = str_replace(']', '', $cad);
                                    $cad = str_replace('%', '', $cad);
                                    $cad = str_replace('\/', '/', $cad);
                                    $cad = str_replace('22', '', $cad);
                                    $cad = str_replace('"', '', $cad);
                                @endphp
                   
                                <img class="" src="{{ asset('/storage/' . $cad) }}" alt="" style="height:100%;">

                                <figcaption>
                                    
                                    <a class="link icon-pentagon" href="#" data-toggle="modal" data-target="#{{ $portafolio->id }}">
                                        <i class="fa fa-link"></i>
                                    </a>
                                </figcaption>
                            </figure>
                        </div>
                        <div>
                        <h5 class="" style="font-size: 15px; color:#045A97; font-family:'Lato'; font-weight:900;">{{ $portafolio->name }}</h5>
                        <p class=""> {{$portafolio->description}} </p>
                        </div>
                    </div>
                    <!-- MODAL  PORTFOLIO -->
                    <x-modal-portfolio :portfolioID="$portafolio->id" :portafolio="$portafolio" />
                  
                @endforeach
                <div class="text-center my-5">
                    <button class="btn btn-primary solid blank" type="submit">SHOW MORE</button>
                </div>
        
    </div>

</div>
</div>