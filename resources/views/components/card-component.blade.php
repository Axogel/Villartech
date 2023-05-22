 <div class="card-aboutUs card-hover" style="width: 25.5rem; height:75rem">
          <div class="img-cards d-flex justify-content-center align-items-center" style="text-align: center;">
            <img src="{{ asset('assets/img/' . $img) }}">
          </div>
          <div class="card-body">
            <h4 style="color:#0B5A9B">{{$title}}</h4>
            <br>
            <b style="font-size:18px">{{$subtitle}}</b>
            <br>
            <br>
            <p class="card-text">
              {{$description}}
            </p>
          </div>
        </div>

