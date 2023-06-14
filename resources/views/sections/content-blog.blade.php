<meta charset="utf-8">
    <title>Villartechnologies</title>
    <meta name="description" content="">  
    <meta name="author" content="">
    <link rel="icon" href="assets/img/villarblueg.png">

<!-- notices cards -->

<div class="blog" style="margin-top:4rem; margin-bottom:14rem;">
  <div class="container d-flex justify-content-center">
    <div class="cards-notices mx-auto">


      @foreach ($blogs as $blog)
          
    <div class="card mb-3" style="max-width: 1047px; max-height:800px; padding:40px 20px 30px 20px;">
      <div class="row g-0">
        <div class="col-md-6">

          <img src="{{asset('assets/img/business-team-present-professional-investor-working-new-startup-project-finance-meeting.png')}}" class="img-fluid rounded-start" alt="...">
        </div>

        <div class="col-md-6">
         <div class="card-body">
         <h5 class="card-title">{{ $blog->title }}</h5>
          <p class="card-text">Helping to a great team over a big project of sport management Helping to a great team over a big project of sport management Helping to a great team over a big project of sport management Helping to a great team over a big project of sport management Helping to a great team over a big project of sport management</p>
          <p class="card-text"><small class="text-body-secondary">Last updated 3 mins ago</small></p>
            <div class="py-2 text-left">
              <a type="submit" class="btn btn-primary solid blank" style="padding:5px 8px 10px 8px; width:170px; height:45px; font-size:20px;" href="{{ route('blogArticle', $blog->slug) }}">READ MORE
              </a>
            </div>
          </div>
        </div>
      </div>
    </div>
    @endforeach
    
    

    
    </div>
  </div>
</div>

<!-- show more button -->

<div class="col-12 text-center">
  <button type="submit" class="btn btn-primary solid blank" style="padding:5px 8px 10px 8px; width:170px; height:45px; font-size:20px; margin-top:-10rem;">JUST SEND</button>
</div>

<!-- container black -->

<div class="black" style="margin-bottom:5rem; padding-bottom:44rem; padding-top: rem; z-index: 0;">
  <div class="container ">
    <p>Important Notices</p>
    <div class="row row-cols-1 row-cols-md-3 justify-content-center" style="margin-top: 4rem;">

      <div class="col-10 col-sm-6 col-md-4">
        <img src="{{asset('assets/img/mockup-devices-modern-responsive-website.png')}}" class="img-fluid rounded-start" alt="...">
      </div>

      <div class="imgs-blog col-10 col-sm-6 col-md-4">
        <img src="{{asset('assets/img/1-z1.png')}}" class="img-fluid rounded-start" alt="...">
      </div>

      <div class="imgs-blog col-10 col-sm-6 col-md-4">
        <img src="{{asset('assets/img/zoom-backgrounds-oficina-llena.png')}}" class="img-fluid rounded-start" alt="...">
      </div>

      <div>
      <div class="logo-aboutUs d-flex" style="z-index: 2; position: absolute; top: -17.5rem; right: 14rem;">
            <svg xmlns="http://www.w3.org/2000/svg" width="43.195" height="43.201" viewBox="0 0 43.195 43.201">
              <g id="enlace" transform="translate(-0.039 0)">
                <g id="Grupo_24" data-name="Grupo 24" transform="translate(0.039 13.887)">
                  <g id="Grupo_23" data-name="Grupo 23" transform="translate(0)">
                    <path id="Trazado_16" data-name="Trazado 16" d="M26.4,167.565A9.8,9.8,0,0,0,24.7,166.2a10.08,10.08,0,0,0-12.562,1.361L2.984,176.73a10.079,10.079,0,0,0,14.247,14.261l7.559-7.559a.72.72,0,0,0-.511-1.231h-.288a12.117,12.117,0,0,1-4.607-.893.72.72,0,0,0-.785.158l-5.435,5.442A4.322,4.322,0,0,1,7.052,180.8l9.193-9.186a4.319,4.319,0,0,1,6.1,0,2.952,2.952,0,0,0,4.046,0,2.852,2.852,0,0,0,0-4.046Z" transform="translate(-0.039 -164.614)" fill="#fff"/>
                  </g>
                </g>
                <g id="Grupo_26" data-name="Grupo 26" transform="translate(16.023 0)">
                  <g id="Grupo_25" data-name="Grupo 25" transform="translate(0 0)">
                    <path id="Trazado_17" data-name="Trazado 17" d="M213.761,2.952a10.079,10.079,0,0,0-14.254,0L191.955,10.5a.723.723,0,0,0,.525,1.231h.266a12.094,12.094,0,0,1,4.6.9.72.72,0,0,0,.785-.158l5.421-5.414a4.322,4.322,0,1,1,6.112,6.112l-6.753,6.745-.058.065-2.361,2.347a4.319,4.319,0,0,1-6.1,0,2.952,2.952,0,0,0-4.046,0,2.87,2.87,0,0,0,0,4.06,9.993,9.993,0,0,0,2.88,2.016c.151.072.3.13.454.194s.31.115.461.173.31.108.461.151l.425.115c.288.072.576.13.871.18a10.022,10.022,0,0,0,1.073.1h.547l.432-.05c.158-.007.324-.043.511-.043h.245l.5-.072.23-.043.418-.086h.079A10.078,10.078,0,0,0,204.6,26.37l9.164-9.164A10.079,10.079,0,0,0,213.761,2.952Z" transform="translate(-189.502 0)" fill="#fff"/>
                  </g>
                </g>
              </g>
            </svg>
            </div>
          </div>
</div>
    </div>
  </div>
</div>

<!--Section imgs-->

<div class="news container d-flex  justify-content-center" style="margin-bottom:5rem;">

  <div class="row justify-content-center">
    <div class="col-md-5">

      <div class="card" style="max-width: 540px; padding:30px 20px 20px 30px;">
        <div class="row g-0">
    <div class="col-md-4">
      <img src="{{asset('assets/img/cursos-de-ingles.png')}}" class="img-fluid rounded-start" alt="...">
    </div>
    <div class="col-md-8">
      <div class="card-body">
        <h5 class="card-title">Card title</h5>
        <p class="card-text">¿Por qué mi programacion es mejor que el tuyo?.</p>
      </div>
    </div>
  </div>
      </div>

      <div class="card" style="max-width: 540px; padding:30px 20px 20px 30px;">
        <div class="row g-0">
    <div class="col-md-4">
      <img src="{{asset('assets/img/05_curso_nom-030-stps-2009_servicios_preventivos_de_seguridad_y_salud_en_el_trabajo_-_funciones_y_actividades_a_distancia.png')}}" class="img-fluid rounded-start" alt="...">
    </div>
    <div class="col-md-8">
      <div class="card-body">
        <h5 class="card-title">Card title</h5>
        <p class="card-text">La A – Z de programacion</p>
      </div>
    </div>
  </div>
      </div>

      <div class="card" style="max-width: 540px; padding:30px 20px 20px 30px;">
        <div class="row g-0">
    <div class="col-md-4">
      <img src="{{asset('assets/img/signing-business-contracts.png')}}" class="img-fluid rounded-start" alt="...">
    </div>
    <div class="col-md-8">
      <div class="card-body">
        <h5 class="card-title">Card title</h5>
        <p class="card-text">Siete datos increíbles sobreseguridad.</p>
      </div>
    </div>
  </div>
      </div>

    </div>

    <div class="col-md-6">
        <div class="row justify-content-center" style="">

      <div class="card" style="max-width: 540px; padding:30px 20px 20px 30px;">
        <div class="row g-0">
    <div class="col-md-4">
      <img src="{{asset('assets/img/pile-documents-with-black-clips-folders-stack-up.png')}}" alt="...">
    </div>
    <div class="col-md-8">
      <div class="card-body">
        <h5 class="card-title">Card title</h5>
        <p class="card-text">80 consejos para hacer crecer a tu programacion.</p>
      </div>
    </div>
  </div>
      </div>

      <div class="card " style="max-width: 540px; padding:30px 20px 20px 30px;">
        <div class="row g-0">
    <div class="col-md-4">
      <img src="{{asset('assets/img/business documents on office table with smart phone and digital tablet and graph financial diagram and man working in the background.png')}}" class="img-fluid rounded-start" alt="...">
    </div>
    <div class="col-md-8">
      <div class="card-body">
        <h5 class="card-title">Card title</h5>
        <p class="card-text">10 consejos para evitar fallos en programacion.</p>
      </div>
    </div>
  </div>
      </div>

      <div class="card" style="max-width: 540px; padding:30px 20px 20px 30px;">
        <div class="row g-0">
    <div class="col-md-4">
      <img src="{{asset('assets/img/organizar-documentos-comerciales.png')}}" class="img-fluid rounded-start" alt="...">
    </div>
    <div class="col-md-8">
      <div class="card-body">
        <h5 class="card-title">Card title</h5>
        <p class="card-text">La última revelación en la industria del programacion.</p>
      </div>
    </div>
  </div>
      </div>

    </div>
  </div>
</div>




  <div class="logo-aboutUs d-flex align-items-center" style="z-index: 1; position: absolute; top: -17.5rem; right: -14rem;">
    <svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 448 512"><!--! Font Awesome Free 6.4.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. --><path d="M224 0c-17.7 0-32 14.3-32 32V49.9C119.5 61.4 64 124.2 64 200v33.4c0 45.4-15.5 89.5-43.8 124.9L5.3 377c-5.8 7.2-6.9 17.1-2.9 25.4S14.8 416 24 416H424c9.2 0 17.6-5.3 21.6-13.6s2.9-18.2-2.9-25.4l-14.9-18.6C399.5 322.9 384 278.8 384 233.4V200c0-75.8-55.5-138.6-128-150.1V32c0-17.7-14.3-32-32-32zm0 96h8c57.4 0 104 46.6 104 104v33.4c0 47.9 13.9 94.6 39.7 134.6H72.3C98.1 328 112 281.3 112 233.4V200c0-57.4 46.6-104 104-104h8zm64 352H224 160c0 17 6.7 33.3 18.7 45.3s28.3 18.7 45.3 18.7s33.3-6.7 45.3-18.7s18.7-28.3 18.7-45.3z"/></svg>
  </div>


  </div>
</div>
