<section id="content-aboutUs">
<div class="container">
  <div class="row justify-content-center align-items-center">
    <div class="col-md-4">
      <img class="img-aboutUs w-100" src="{{asset('assets/img/bg3.jpg')}}" alt="img-aboutUs">
    </div>
    <div class="col-md-5">
      <div class="text-aboutUs text-left my-5">
                        <p class="title-contact pt-5">{{__("ViewAboutTitle")}}</p>
        <br>
        <p class="text-contact">{{__("ViewAboutSubTitle")}}</p>
      </div>
    </div>
  </div>
</div>
</section>




<section id="ourCompany-aboutUs" style="z-index: 0;">
  <div class="container">
    <div class="row justify-content-center align-items-center">
      <div class="col-md-9">

        <p class="our-company"  style="margin-top:5rem;">{{__("ViewAboutCompany")}}</p>
        <br>
        <br>
        <p class="text-contact" >{{__("ViewAboutCompanyDescription")}}
        </p>
          <div class="logo-aboutUs d-flex align-items-center" style="z-index: 1; position: absolute; top: -17.5rem; right: -14rem;">
            <img class="img-fluid" src="{{asset('assets/img/logo.villar.sl.png')}}" style="padding: 20px; " alt="logo">
          </div>
          <br>
          <br>
          <div class="butttom">
            <button class="btn btn-primary solid blank" type="submit" style="padding; width: 181px; height: 50px; font-size: 20px; border-radius: 50px;opacity: 1; font-family:'lato' regular;">CONTACT ME</button>
          </div>

        </div> 
        <div class="col-md-3"></div>
    </div>
  </div>

</section>

<section class="cards-aboutUs" style="padding-bottom:0;">
  <div class="container-cards">
    <div class="row justify-content-center " style="margin-top: -70px; gap:-8rem; padding-left:3rem;" >

      <div class="col-11 col-md-3">
        
          <x-card-component
          :width="'90%'"
          :height="'1300px'"
          :img="'codificacion.svg'"
          :title="__('CardAbout1T')"
          :subtitle="__('CardAbout1S')"
          :description="__('CardAbout1D')"
          />
          
        </div>
        
        
        <div class=" col-11 col-md-3">
        
          <x-card-component
          :width="'90%'"
          :height="'1300px'"
          :img="'diseno-grafico.svg'"
          :title="__('CardAbout2T')"
          :subtitle="__('CardAbout2S')"
          :description="__('CardAbout2D')"
        />
          
        </div>
        
        <div class="col-11 col-md-3">
          
          <x-card-component
          :width="'90%'"
          :height="'1300px'"
          :img="'servicio.svg'"
          :title="__('CardAbout3T')"
          :subtitle="__('CardAbout3S')"
          :description="__('CardAbout3D')"
         />
        
      </div>

    </div>
  </div>
</section>



  <div class="container-redirect" stye="margin-top:-10rem;">
    <div class="imgs-redirect row justify-content-center align-items-center">

    @foreach($settings as $setting)

 
      <div class="img-redirect d-flex justify-content-end col-12 col-md-5 mx-5">
           <a href="{{ $setting->upwork }}">
          <img class="mx-5" src="{{asset('assets/img/upwork.png')}}">
              </a>
        </div>


   
        <div class="img-redirect2 d-flex justify-content-start col-12 col-md-5 mx-5">
           <a href="{{ $setting->date }}">
          <img src="{{asset('assets/img/linkedin.png')}}">
             </a>
        </div>

 

    @endforeach

    </div>
  </div>








