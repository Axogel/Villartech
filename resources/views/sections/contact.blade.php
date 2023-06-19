<section id="contact" class="contact-section" style="padding:50px 0 20px 0;">
    <div class="container">
        <div class="col-12 pt-5 heading">
            <h2  class="title classic" style="font-size: 45px; color:#045A97; font-family:'Lato'; font-weight:900; ">{{__("ContactTitle")}}</h2>
        </div>
        <form form id="contact-form" action="{{ route('enviar') }}" method="post" role="form">
            <input type="hidden" name="_method" value="POST">
            <input type="hidden" name="_token" value="{{ csrf_token() }}">

            <div class="col-10 mx-auto " style="background-color: #F9F9F9; width:100%; margin-top:0px;" id="contact-form">
                <div class="" id="container-contact-us">
                    <p class="title-contact pt-3">{{__("ContactTitle")}}</p>
                    <p class="subtitle-contact">{{__("ContactSubTitle")}}</p>
                    <p class="subtitle-contact" style="font-size:17px; font-weight:700;" id="sub-sub">
                    {{__("ContactDiscuss")}}
                    </p>
                </div>

                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="contact-form-container">
                                <div class="row"
                                    style="    margin-right: calc(var(--bs-gutter-x) * 0.5);
                          margin-left: calc(var(--bs-gutter-x) * 0.5);">
                                    <div class="col-lg-4 col-md-6">
                                        <div class="form-group">
                                            <label for="name" class="form-title-contact">{{__("FormYour")}} {{__("FormName")}}</label>
                                            <input type="text" class="form-control" id="name" name="name"
                                                placeholder="{{__('FormPlaceholder')}}  {{__('FormName')}}">
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-6">
                                        <div class="form-group">
                                            <label for="email" class="form-title-contact">{{__("FormYour")}} {{__("FormEmail")}}</label>
                                            <input type="email" class="form-control" id="email" name="email"
                                                placeholder="{{__('FormPlaceholder')}}  {{__('FormEmail')}}">
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-6">
                                        <div class="form-group">
                                            <label for="number" class="form-title-contact">{{__("FormYour")}} {{__("FormNumber")}}</label>
                                            <input type="text" class="form-control" id="number"
                                                placeholder="{{__('FormPlaceholder')}}  {{__('FormNumber')}}" name="number">
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6">
                                        <div class="form-group">
                                            <label for="interest" class="form-title-contact">
                                                {{__("FormInteresed")}}

                                            </label>
                                            <input type="text" class="form-control" id="interest"
                                                placeholder="{{__('FormPlaceholder')}}  {{__('interest')}}" name="interest">
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6">
                                        <div class="form-group">
                                            <label for="budget" class="form-title-contact">{{__("FormProject")}}</label>
                                            <input type="text" class="form-control" id="budget"
                                                placeholder="{{__('FormPlaceholder')}}  {{__('FormProject')}}" name="budget">
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="form-group">
                                            <label for="message" class="form-title-contact">{{__("FormMessage")}}</label>
                                            <textarea class="form-control" id="mensaje" rows="5" placeholder="{{__('FormPlaceholder')}} {{__('FormMessage')}}" name="mensaje"></textarea>
                                        </div>
                                    </div>
                                    <div class="col-12" style="padding-left:25px; padding-top:20px;">
                                        <button type="submit" class="btn btn-primary solid blank" style="padding:5px 8px 10px 8px; width:170px; height:45px; font-size:20px;">{{__("FormJustSend")}}</button>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
        </form>
    </div>
</section>