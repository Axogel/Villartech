@extends('layouts.home')

@section('content')

    <!-- About tab start -->
         @include('sections.profile')
    <!--Our Services-->
         @include('sections.services')

    <!-- Portfolio start -->
        @include('sections.proyect')
    <!-- Portfolio end -->

    <!-- The Modal Team -->
        @include('sections.team')

    <!-- Testimonial start-->
        @include('sections.testimonials')
    <!--/ Testimonial end-->


    <!-- Newsletter start -->
        @include('sections.contact')
    <!-- Newsletter end -->

   <!-- script -->
        @include('sections.scripts')

    <!-- styles -->
        @include('sections.styles')
@endsection
