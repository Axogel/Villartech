<section id="contact" class="contact-section" style="padding:50px 0 20px 0;">
    <div class="container">
        <div class="col-12 pt-5 heading">
            <h2  class="title classic" style="font-size: 45px; color:#045A97; font-family:'Lato'; font-weight:900; ">Contact Us</h2>
        </div>
        <form form id="contact-form" action="{{ route('enviar') }}" method="post" role="form">
            <input type="hidden" name="_method" value="POST">
            <input type="hidden" name="_token" value="{{ csrf_token() }}">

            <div class="col-10 mx-auto " style="background-color: #F9F9F9; width:80%; margin-top:0px;" id="contact-form">
                <div class="" id="container-contact-us">
                    <p class="title-contact pt-3">CONTACT US</p>
                    <p class="subtitle-contact">Get in Touch for Exceptional Service</p>
                    <p class="subtitle-contact" style="font-size:17px; font-weight:700;" id="sub-sub">Contact Us to
                        Discuss Your
                        Project Requirements and Receive a Customized Solution</p>
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
                                            <label for="name" class="form-title-contact">Your Name</label>
                                            <input type="text" class="form-control" id="name" name="name"
                                                placeholder="Enter your name">
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-6">
                                        <div class="form-group">
                                            <label for="email" class="form-title-contact">Your Email</label>
                                            <input type="email" class="form-control" id="email" name="email"
                                                placeholder="Enter your email">
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-6">
                                        <div class="form-group">
                                            <label for="number" class="form-title-contact">Your Number</label>
                                            <input type="text" class="form-control" id="number"
                                                placeholder="Enter your number" name="number">
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6">
                                        <div class="form-group">
                                            <label for="interest" class="form-title-contact">What you are interested
                                                in</label>
                                            <input type="text" class="form-control" id="interest"
                                                placeholder="Enter your interest" name="interest">
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6">
                                        <div class="form-group">
                                            <label for="budget" class="form-title-contact">Project Budget</label>
                                            <input type="text" class="form-control" id="budget"
                                                placeholder="Enter project budget" name="budget">
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="form-group">
                                            <label for="message" class="form-title-contact">Message</label>
                                            <textarea class="form-control" id="mensaje" rows="5" placeholder="Enter your message" name="mensaje"></textarea>
                                        </div>
                                    </div>
                                    <div class="col-12" style="padding-left:25px; padding-top:20px;">
                                        <button type="submit" class="btn btn-primary solid blank" style="padding:5px 8px 10px 8px; width:170px; height:45px; font-size:20px;">JUST SEND</button>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
        </form>
    </div>
</section>

