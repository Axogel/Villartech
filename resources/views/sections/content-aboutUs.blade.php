<section id="content-aboutUs">
<div class="container">
  <div class="row justify-content-center align-items-center">
    <div class="col-md-4">
      <img class="img-aboutUs w-100" src="{{asset('assets/img/bg3.jpg')}}" alt="img-aboutUs">
    </div>
    <div class="col-md-5">
      <div class="text-aboutUs text-left my-5">
        <h4>Villar Technologies as the company that we are today</h4>
        <br>
        <p>We started working and providing our services on February
          2017. Since that date, we became a formal business company whose initiative was to incorporate a new platform that would be able to work on the latest skills and technologies related to the development and programmation world that updates on daily basis. Our team is composed by the owner of the company and working beside him, we have a number of professional trained coworkers that are responsable to accomplish all of the tasks and Jobs that are constantly been assigned.</p>
      </div>
    </div>
  </div>
</div>
</section>




<section id="ourCompany-aboutUs" style="z-index: 0;">
  <div class="container">
    <div class="col-md-1"></div>
    <div class="row justify-content-center align-items-center">
      <div class="col-md-9">
        <h4>Our company</h4>
        <br>
        <p>We are Villar Technologies, a trusted and award-winning company in the global development and programming market. With a client base spanning multiple countries, we take pride in our track record of delivering responsible and reliable services to businesses of all sizes. Our team of highly skilled professionals is committed to providing you with the highest quality service and support, backed by cutting-edge technology and an unwavering dedication to excellence. Whether you're looking for customized development solutions or programming services, we have the expertise and resources to help you succeed.</p>
        <div class="logo-aboutUs d-flex align-items-center" style="z-index: 1; position: absolute; top: -17.5rem; right: -9rem;">
          <img class="img-fluid" src="{{asset('assets/img/logo.villar.sl.png')}}" style="padding: 15px;" alt="logo">
        </div>
        <br>
        <br>
        <button class="btn btn-primary solid blank" type="submit" style="padding:6px 8px 6px 8px; width:134px">CONTACT ME</button>
        <br>
        <br>
        </div> 
<div class="col-md-3"></div>
    </div>
  </div>

</section>

<section class="cards-aboutUs" style="padding-bottom:0;">
  <div class="container-cards">
    <div class="row justify-content-center " style="margin-top: -80px; " >

      <div class="col-md-3">
        <div class="card-aboutUs" style="width: 25.5rem; height:75rem;">
          <div class="img-cards d-flex justify-content-center align-items-center" style="text-align: center;">
            <img src="{{asset('assets/img/codificacion.svg')}}" >
          </div>
          <div class="card-body">
            <h4 style="color:#0B5A9B">WHAT WE DO</h4>
            <br>
            <b style="font-size:18px">We build readymade Aplications</b>
            <br>
            <br>
            <p class="card-text">Provides a whole world of programmation and development services with the primacy base of software as a service. Therefore, our team is alwavs preparing themselves In the latest skills and technologies so they are continuosly getting up to date with the global growth of the system's world. We have the professionals to SEO, Web Design, SaaS, programmation, Lead Generation, Translations, Marketing,
11 Help and any tvpe of task that a freelancer does but backed by the trust that only a company can give you.</p>
          </div>
        </div>
      </div>

      <div class="col-md-3">
        <div class="card-aboutUs" style="width: 25.5rem; height:75rem;">
          <div class="img-cards d-flex justify-content-center align-items-center">
            <img src="{{asset('assets/img/diseno-grafico.svg')}}" >
          </div>
          <div class="card-body">
            <h4 style="color:#0B5A9B">modern design</h4>
            <br>
            <b style="font-size:18px">We build readymade Aplications</b>
            <br>
            <br>
            <p class="card-text">Villar Technologies offers an excellent strategic program to keep the execution of each job as modern and effective as posible and as it's required and requested by the client.
We quickly adapt to any type of campaign or project inbound and outbound that you want to outsource, créate, improve or manage.</p>
          </div>
        </div>
      </div>

      <div class="col-md-3">
        <div class="card-aboutUs" style="width: 25.5rem; height:75rem;">
          <div class="img-cards d-flex justify-content-center align-items-center">
            <img src="{{asset('assets/img/servicio.svg')}}" >
          </div>
          <div class="card-body">
            <h4 style="color:#0B5A9B">dedicated support</h4>
            <br>
            <b style="font-size:18px">We build readymade Aplications</b>
            <br>
            <br>
            <p class="card-text">In Villar Technologies we make sure that our team is available 24/7 or during the work schedule needed by the client. We have an excellent customer service team under the leadership of the company owner, totally trained to keep constant and direct contact with each client and accomplish all of the work timing related to the Project in develop</p>
          </div>
        </div>
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








