@extends('layouts.home')

@section('styles')
    @include('sections.styles')
@endsection

@section('content')

    @include('sections.profile')
    @include('sections.services')
    @include('sections.portafolio')
    @include('sections.team')
    @include('sections.testimonials')
    @include('sections.contact')

@endsection

@section('scripts')
    @include('sections.scripts')
@endsection
