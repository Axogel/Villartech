 <div class="card-aboutUs card-hover" style="width: {{$width}}; height: {{$height}};">
          <div class="img-cards d-flex justify-content-center align-items-center" style="text-align: center;">
            <img src="{{ asset('assets/img/' . $img) }}">
          </div>
          <div class="card-body">
            <p class="title-contact" style="color:#0B5A9B;">{{$title}}</p>
            <p class="title-contact">{{$subtitle}}</p>
            <p class="text-cards">
              {{$description}}
            </p>
          </div>
        </div>

