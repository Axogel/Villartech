<section id="content-contactUs">
<div class="container">
  <div class="row justify-content-center align-items-center">

    <div class="cn col-md-6" >
      <img class="img-contactUs w-100" src="{{asset('assets/img/bussiness2.png')}}" alt="img-contactUs" style="height:35rem;">
    </div>

        <div class="col-md-1"></div>

    <div class="col-md-3">
      <div class="text-contactUs text-left my-5">
        <b class="title-contact">Get in Touch for Exceptional Service</b>
        <br>
        <br>
        <p class="text-contact">We would love to hear from you! If you have any questions, inquiries, or project ideas, please reach out to us using the contact information below or by filling out the contact form. Our dedicated team is ready to assist you.</p>
      </div>
    </div>

  </div>
</div>
</section>

<section class="black row align-items-center">

  <div class="container-contactInfo">
    <b class="centered">Contact Information</b>
  </div>

</section>


<section class="cards-aboutUs" style="padding-bottom:0; padding-top:100px;">
  <div class="container-cards">
    <div class=" row justify-content-center " style=" background-color: #FAFAFA;  padding-left:6rem;" >

      <div class="cards-contactUs col-11 col-md-3" style="margin-top: -270px;">

    <x-card-component
    :width="'90%'"
    :height="'400px'"
    :img="'quedarse-en-casa.svg'"
    :subtitle="'Address'"
    :description="'123. Main Street, City, State, ZIP.'"
    :title="null"
/>


        </div>


      <div class="cards-contactUs col-11 col-md-3" style="margin-top: -270px;">



        </div>

      <div class="cards-contactUs col-11 col-md-3" style="margin-top: -270px;">

  


        </div>

    </div>
  </div>
</section>




<section class="section-form-contactUs" style="background-color:#FFFFF">

          
                   
          <form id="contact-form" action="{{route('send')}}" method="post" role="form" style="  background: linear-gradient(#F9F9F9, white)">
            <input type="hidden" name="_method" value="POST">
            <input type="hidden" name="_token" value="{{ csrf_token() }}">

          <div class="col-8 mx-auto " style="background-color: #FFFFF;" id="contact-form">
            <div class="" id="container-contact-us">
                <p class="title-contact">Contact Form</p>
                <p class="text-contact">Please fill out the form below, and we will get back to you as soon as possible:</p>
            </div>
                <br>
                <br>
                  <div class="container">
                    <div class="row">
                      <div class="col-lg-12">
                        <div class="contact-form-container">
                          <div class="row">
                            <div class="col-lg-4 col-md-4">
                              <div class="form-group">
                                <label for="name" class="subtitle-contact">Your Name</label>
                                <input type="text" class="form-control " id="name"  name="name" placeholder="Enter your name">
                              </div>
                            </div>
                            <br>
                            <div class="col-lg-4 col-md-4 ">
                              <div class="form-group">
                                <label for="email" class="subtitle-contact" >Your Email</label>
                                <input type="email" class="form-control" id="email" name="email" placeholder="Enter your email">
                              </div>
                            </div>
                            <br>
                            <div class="col-lg-4 col-md-4">
                              <div class="form-group">
                                <label for="number" class="subtitle-contact">Your Number</label>
                                <input type="text" class="form-control" id="number" placeholder="Enter your number" name="number"> 
                              </div>
                            </div>
                            <div class="col-12">
                              <div class="form-group">
                                <br>
                                <br>
                                <label for="interest" class="subtitle-contact">What you are interested in</label>
                                <input type="text" class="form-control" id="interest" placeholder="Enter your interest" name="interest">
                              </div>
                            </div>
                            <div class="col-12 col-md-12">
                              <div class="form-group">
                                <br>
                                <br>
                                <label for="message" class="subtitle-contact">Message</label>
                                <textarea class="form-control" id="mensaje" rows="5" placeholder="Enter your message" name="mensaje"></textarea>
                              </div>
                            </div>

                        <div class="col-12 py-4">
                          <button type="submit" class="btn btn-primary solid blank" style="padding:5px 8px 10px 8px; width:170px; height:45px; font-size:20px;">JUST SEND</button>
                        </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </form>
</section>
