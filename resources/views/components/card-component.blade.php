 <div class="card-aboutUs card-hover" style="width: {{$width}}; height: {{$height}};">
          <div class="img-cards d-flex justify-content-center align-items-center" style="text-align: center;">
            <img src="{{ asset('assets/img/' . $img) }}">
          </div>
          <div class="card-body">
            <h4 style="color:#0B5A9B">{{$title}}</h4>
            <br>
            <p class="title-contact">{{$subtitle}}</p>
            <br>
            <br>
            <p class="card-text">
              {{$description}}
            </p>
          </div>
        </div>

