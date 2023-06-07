@extends('layouts.home')

@section('styles')
    @include('sections.styles')
@endsection

@section('content')
@include('sweetalert::alert')
    @include('sections.header-view')
<<<<<<< HEAD
    <x-header-view-dinamic :titleDinamic="'Contact Us'" :subtitleDinamic="''"  />
=======
    <x-header-view-dinamic :titleDinamic="'Contact Us'" :subtitleDinamic="''" />
>>>>>>> 9fdac60 (changes contactUs)
     @include('sections.content-contactUs')
@endsection

@section('scripts')
    @include('sections.scripts')
@endsection