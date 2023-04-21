<section id="portfolio" class="portfolio portfolio-box">
    <div class="container">
        <div class="row">
            <div class="col-md-12 heading text-center">
                <span class="icon-pentagon wow bounceIn"><i class="fa fa-suitcase"></i></span>
                <h2 class="title2" style="font-family: 'Lato'" id="portfolio">Project Completed
                    <span class="title-desc">A Quality Professional Team with 4 years experience</span>
                </h2>
            </div>
        </div>

        <div class="">
            <div id="isotope" class="isotope">
                @foreach ($portfolios as $portafolio)
                <div class="col-12 col-sm-4 web-design isotope-item" style="padding: 1em">
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
                                   
                            <img src="{{ asset('/storage/' . $cad) }}" alt="">

                            <figcaption>
                                <h5>{{ $portafolio->name }}</h5>
                                <a class="link icon-pentagon" href="#" data-toggle="modal" data-target="#{{ $portafolio->id }}">
                                    <i class="fa fa-link"></i>
                                </a>
                            </figcaption>
                        </figure>
                    </div>
                </div>

                <!-- The Modal -->
                <div class="modal" id="{{ $portafolio->id }}">
                    <div class="modal-dialog">
                        <div class="modal-content">

                            <!-- Modal Header -->
                            <div class="modal-header">
                                <h4 class="modal-title">{{ $portafolio->name }}</h4>
                            </div>

                            <!-- Modal body -->
                            <div class="modal-body modal-custom">
                                <div class="modal-custom-body">  
                                    <img style="width:100%;" src="{{ asset('/storage/' . $cad) }}" alt="">
                                </div>
                                <div class="modal-custom-content">
                                    <div class="modal-custom-description">
                                        <strong class="modal-custom-title">Description:</strong>
                                        <p>{{ $portafolio->description }}</p>
                                    </div>
                                    <div class="modal-custom-skills">
                                        <strong class="modal-custom-title">Skills:</strong>
                                        @foreach (explode(',', $portafolio->skills) as $portfolioskill)
                                            <span class="badge badge-secondary">{{ $portfolioskill }}</span>
                                        @endforeach
                                    </div>
                                </div>
                            </div>

                            <!-- Modal footer -->
                            <div class="modal-footer">
                                <a href="{{ $portafolio->url }}" target="_blank" class="btn btn-info">
                                    Ir al Sitio
                                </a>
                                <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                            </div>

                        </div>
                    </div>
                </div>
                @endforeach

            </div>
        </div>
    </div>
</section>