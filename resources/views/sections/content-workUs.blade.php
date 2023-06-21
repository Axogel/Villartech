<section id="content-contactUs">
  <div class="container">
    <div class="row justify-content-center align-items-center">
  
      <div class="cn col-md-6" >
        <img class="img-contactUs w-100" src="{{asset('assets/img/strength-people-hands-success-meeting.png')}}" alt="img-contactUs" style="height:40rem;">
      </div>
  
          <div class="col-md-1"></div>
  
      <div class="col-md-3">
        <div class="text-contactUs text-left my-5">
          <b class="title-contact">Interested in Working With Us?</b>
          <br>
          <br>
          <p class="text-contact">At VILLARTECHNOLOGIES, a leading company in the field of software development, we are always on the lookout for talented individuals who are passionate about technology and software engineering. If you're enthusiastic, skilled, and eager to contribute to innovative projects, we'd love to hear from you!</p>
        </div>
      </div>
  
    </div>
  </div>
  </section>

    <section class="black row align-items-center">
  
    <div class="container-workInfo">
      <b class="centered">Why choose us?</b>
    </div>
  
  </section>
  
  
  <section class="cards-aboutUs" style="padding-bottom:0; padding-top:100px;">
    <div class="container-cards">
      <div class=" row justify-content-center " style="gap:-8rem; padding-left:3rem;">
  
        <div class="cards-contactUs col-11 col-md-3" style="margin-top: -250px;">
  
      <x-card-component
      :width="'90%'"
      :height="'650px;'"
      :img="'programacion.svg'"
      :subtitle="'Exciting Opportunities'"
      :description="'Join a dynamic team that takes on challenging and cutting-edge software development projects. We offer a stimulating work environment where you can grow both professionally and personally.'"
      :title="null"
  />
  
  
          </div>
  
  
        <div class="cards-contactUs col-11 col-md-3" style="margin-top: -250px;">
  
      <x-card-component
      :width="'90%'"
      :height="'650px'"
      :img="'e-aprendizaje.svg'"
      :subtitle="'Continuous Learning'" 
      :description="'We believe in investing in our employees growth. You all have access to learning resources, professional development opportunities, and the chance to enhance your skills in the latest technologies and industry trends.'"
      :title="null"
  />
  
  
          </div>
  
        <div class="cards-contactUs col-11 col-md-3" style="margin-top: -250px;">
  
      <x-card-component
      :width="'90%'"
      :height="'650px'"
      :img="'equilibrio.svg'"
      :subtitle="'Work-Life Balance'"
      :description="'We understand the importance of maintaining a healthy work-life balance. Our flexible work arrangements and supportive policies promote your overall well-being and allow you to thrive in and out of the workplace.'"
      :title="null"
  />
  
  
          </div>
  
      </div>
    </div>
  </section>

    <section class="section-form-contactUs" style="background-color:#FFFFF; margin-top:-60rem;">
  
            
                     
            <form id="contact-form" action="{{ route('job') }}" method="post" role="form" style="background: linear-gradient(#F9F9F9, white)" enctype="multipart/form-data">
              <input type="hidden" name="_method" value="POST">
              <input type="hidden" name="_token" value="{{ csrf_token() }}">
  
            <div class="col-8 mx-auto " style="background-color: #FFFFF;" id="contact-form">
              <div class="" id="container-contact-us">
                  <p class="title-contact">Application Form</p>
                  <p class="text-contact">Interested in joining our team? Please fill out the application form below, and we will review your submission:</p>
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
                                <br>
                                <br>
                              </div>


                              <div class="col-lg-8 col-md-4">
                                <div class="form-group">
                                  <label for="linkedin" class="subtitle-contact">Linkkedln / Website</label>
                                  <input type="text" class="form-control" id="linkedin" placeholder="name" name="linkedin"> 
                                </div>
                              </div>

                              <br>
                              <div class="col-lg-4 col-md-4">
                                <div class="form-group">
                                  <label for="attachment" class="subtitle-contact">Curriculum Vitae</label>
                                  <input type="file" class="form-control" id="attachment" name="attachment">
                                </div>
                              </div>

                              
                              <div class="col-12">
                                <div class="form-group">
                                  <br>
                                  <br>
                                  <label for="interest" class="subtitle-contact">What you are interested in</label>
                                  <input type="text" class="form-control" id="interest" placeholder="Area of Interest" name="interest">
                                </div>
                              </div>
                              <div class="col-12">
                                <div class="form-group">
                                  <br>
                                  <br>
                                  <label for="about_us" class="subtitle-contact">How did you hear about us?</label>
                                  <input type="text" class="form-control" id="about_us" placeholder="Google" name="about_us">
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