 <div class="card-aboutUs card-hover" style="width: {{$width}}; height: {{$height}};">
          <div class="img-cards d-flex justify-content-center align-items-center" style="text-align: center;">
            <img src="{{ asset('assets/img/' . $img) }}">
          </div>
          <div class="card-body">
            <br>
            <br>
            <h4 style="color:#0B5A9B; font-size:25px;">{{$title}}</h4>
            <br>
            <br>
            <p class="title-contact">{{$subtitle}}</p>
            <br>
            <br>
            <p class="text-cards">
              {{$description}}
            </p>
          </div>
        </div>

