@extends('layouts.home')

@section('styles')
    @include('sections.styles')
@endsection

@section('content')
@include('sweetalert::alert')
    @include('sections.header-view')
<<<<<<< HEAD
    <x-header-view-dinamic :titleDinamic="'Contact Us'" :subtitleDinamic="''"  />
<<<<<<< HEAD
=======
    <x-header-view-dinamic :titleDinamic="'Contact Us'" :subtitleDinamic="''" />
>>>>>>> 9fdac60 (changes contactUs)
=======
>>>>>>> 5f3ea2c (services)
=======
    <x-header-view-dinamic :titleDinamic="'Contact Us'" :subtitleDinamic="''" />
>>>>>>> refs/remotes/origin/develop
     @include('sections.content-contactUs')
@endsection

@section('scripts')
    @include('sections.scripts')
@endsection