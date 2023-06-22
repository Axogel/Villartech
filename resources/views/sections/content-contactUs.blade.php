<section id="content-contactUs">
  <div class="container">
    <div class="row justify-content-center align-items-center">
  
      <div class="cn col-md-6" >
        <img class="img-contactUs w-100" src="{{asset('assets/img/bussiness2.png')}}" alt="img-contactUs" style="height:35rem;">
      </div>
  
          <div class="col-md-1"></div>
  
      <div class="col-md-3">
        <div class="text-contactUs text-left my-5">
          <b class="title-contact">{{__("ViewContactTitle")}} </b>
          <br>
          <br>
          <p class="text-contact">{{__("ViewContacSubtTitle")}} </p>
        </div>
      </div>
  
    </div>
  </div>
  </section>
  
  <section class="black row align-items-center">
  
    <div class="container-contactInfo">
      <b class="centered">{{__("ViewContacTInformation")}}</b>
    </div>
  
  </section>
  
  
  <section class="cards-aboutUs" style="padding-bottom:0;">
    <div class="container-cards">
      <div class=" row justify-content-center " style="padding-left:6rem;" >
  
        <div class="cards-contactUs col-11 col-md-3" style="margin-top: -270px;">
  
 <x-card-component
  :width="'90%'"
  :height="'400px'"
  :img="'quedarse-en-casa.svg'"
  :subtitle="__('FormAddress')"
  :description="'123. Main Street, City, State, ZIP.'"
  :title="null"
/>

  
  
          </div>
  
  
        <div class="cards-contactUs col-11 col-md-3" style="margin-top: -270px;">
  
      <x-card-component
      :width="'90%'"
      :height="'400px'"
      :img="'telefono (1).svg'"
      :subtitle="__('FormPhone')"
      :description="'+1(555) 123-456'"
      :title="null"
  />
  
  
          </div>
  
        <div class="cards-contactUs col-11 col-md-3" style="margin-top: -270px;">
  
      <x-card-component
      :width="'90%'"
      :height="'400px'"
      :img="'correo.svg'"
      :subtitle="__('FormEmail')"
      :description="'info@example.com'"
      :title="null"
  />
  
  
          </div>
  
      </div>
    </div>
  </section>
  
  
  
  
  <section class="section-form-contactUs" style="background-color:#FFFFF; margin-top:-60rem;">
  
            
                     
            <form id="contact-form" action="{{route('send')}}" method="post" role="form" style="  background: linear-gradient(#F9F9F9, white)">
              <input type="hidden" name="_method" value="POST">
              <input type="hidden" name="_token" value="{{ csrf_token() }}">
  
            <div class="col-8 mx-auto " style="background-color: #FFFFF;" id="contact-form">
              <div class="" id="container-contact-us">
                  <p class="title-contact">{{__("FormContactForm")}}</p>
                  <p class="text-contact">{{__("FormContactDescription")}}</p>
              </div>
                  <br>
                  <br>
                    <div class="container">
                      <div class="row">
                        <div class="col-lg-12">
                          <div class="contact-form-container">
                            <div class="row">
                              <div class="col-lg-4 col-md-12">
                                <div class="form-group">
                                  <label for="name" class="subtitle-contact">{{__("FormYour")}} {{__("FormName")}}</label>
                                  <input type="text" class="form-control " id="name"  name="name" placeholder="{{__('FormPlaceholder')}} {{__('FormName')}}">
                                </div>
                              </div>
                              <br>
                              <div class="col-lg-4 col-md-12 ">
                                <div class="form-group">
                                  <label for="email" class="subtitle-contact" >{{__("FormYour")}} {{__("FormEmail")}}</label>
                                  <input type="email" class="form-control" id="email" name="email" placeholder="{{__('FormPlaceholder')}} {{__('FormEmail')}}">
                                </div>
                              </div>
                              <br>
                              <div class="col-lg-4 col-md-12">
                                <div class="form-group">
                                  <label for="number" class="subtitle-contact">{{__("FormYour")}} {{__("FormNumber")}}</label>
                                  <input type="text" class="form-control" id="number" placeholder="{{__('FormPlaceholder')}} {{__('FormNumber')}}" name="number"> 
                                </div>
                              </div>
                              <div class="col-12">
                                <div class="form-group">
                                  <br>
                                  <br>
                                  <label for="interest" class="subtitle-contact">{{__("FormInteresed")}}</label>
                                  <input type="text" class="form-control" id="interest" placeholder="{{__('FormPlaceholder')}} {{__('FormInteresed')}}" name="interest">
                                </div>
                              </div>
                              <div class="col-12 col-md-12">
                                <div class="form-group">
                                  <br>
                                  <br>
                                  <label for="message" class="subtitle-contact">{{__("FormMessage")}}</label>
                                  <textarea class="form-control" id="mensaje" rows="5" placeholder="{{__('FormPlaceholder')}} {{__('FormMessage')}}" name="mensaje"></textarea>
                                </div>
                              </div>
  
                          <div class="col-12 py-4">
                            <button type="submit" class="btn btn-primary solid blank" style="padding:5px 8px 10px 8px; width:170px; height:45px; font-size:20px;">{{__("FormJustSend")}}</button>
                          </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </form>
  </section>
  