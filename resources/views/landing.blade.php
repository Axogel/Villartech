@extends('layouts.home')

@section('styles')
    @include('sections.styles')
@endsection

@section('content')
    @include('sections.header-home')
    @include('sections.profile')
    @include('sections.portafolio')
    @include('sections.services')
    @include('sections.testimonials')
    @include('sections.team')
    @include('sections.contact')

@endsection

@section('scripts')
    @include('sections.scripts')
@endsection
