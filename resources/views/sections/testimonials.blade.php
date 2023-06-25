<div id="testimonial" style="position:relative; bottom:50px;"></div>
<section  class="testimonial parallax parallax3">
    <div class="parallax-overlay"></div>
    <div class="container">
        <div class="row">
        @php 
    $locale = session('locale');
    $targetLocale = ($locale == 'es') ? 'en' : 'es'; 
@endphp

<div id="testimonial-carousel" class="owl-carousel owl-theme text-center testimonial-slide" style="overflow: hidden;">
    @foreach ($testimonials as $testimony)   
        @php 
            if ($testimony->active == 1) {
                if ($locale == 'es') {
                    $testimonyDescription = $testimony->descriptionEs;
                } else {
                    $testimonyDescription = $testimony->description;
                }
        @endphp
        <div class="item">
            <div class="testimonial-thumb">
                <h2>{{ __("Testimonials") }}</h2>
                <img src="{{ asset('storage') . '/' . $testimony->image }}" alt="">
            </div>
            <div class="testimonial-content">
                <p class="testimonial-text">
                    {{ $testimonyDescription }}
                </p>
                <h3 class="name">{{ $testimony->author }}</h3>
            </div>
        </div>
        @php
            }
        @endphp
    @endforeach
</div>

          
            </div>
        </div>
    </div>
</section>