<section id="contact" class="contact-section" style="padding:50px 0 20px 0;">
    <div class="container">
        <div class="col-12 pt-5 heading">
            <h2  class="title classic" style="font-size: 45px; color:#045A97; font-family:'Lato'; font-weight:900; ">Contact Us</h2>
        </div>
        <div class="row">
            <div class="col-md-7">
                <form id="contact-form" action="/sendemail" method="post" role="form">
                    <input type="hidden" name="_method" value="POST">
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                    @foreach (['danger', 'warning', 'success', 'info'] as $key)
                        @if (Session::has($key))
                            <p class="alert alert-{{ $key }}">{{ Session::get($key) }}</p>
                        @endif
                    @endforeach
                    <div class="row">
                        <div class="col-md-4">
                            <div class="form-group">
                                <label>Name</label>
                                <input class="form-control" name="name" id="name" placeholder="" type="text" required>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label>Email</label>
                                <input class="form-control" name="email" id="email" placeholder="" type="email" required>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label>Subject</label>
                                <input class="form-control" name="subject" id="subject" placeholder="" required>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label>Message</label>
                        <textarea class="form-control" name="message" id="message" placeholder="" rows="10" required></textarea>
                    </div>
                    <div class="text-right"><br>
                        <button class="btn btn-primary solid blank" type="submit">Send Message</button>
                    </div>
                </form>
            </div>
            <div class="col-md-5">
                @foreach ($settings as $setting)
                    <div class="contact-info">
                        <h3 style="font-family: 'Lato'">Contact Details</h3>
                        <br>
                        <p><i class="fa fa-home info"></i>19 de Abril Avenida, San Cristóbal, Venezuela </p>
                        <p><i class="fa fa-phone info"></i> +58 276 3489292 </p>
                        <p><i class="fa fa-envelope-o info"></i> villar88@gmail.com</p>
                        <p><i class="fa fa-globe info"></i> www.villartechnologies.com.ve</p>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</section>