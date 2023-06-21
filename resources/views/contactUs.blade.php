@extends('layouts.home')

@section('styles')
    @include('sections.styles')
@endsection

@section('content')
@include('sweetalert::alert')
    @include('sections.header-view')
    <x-header-view-dinamic :titleDinamic="'ContactTitle'" :subtitleDinamic="''" />

     @include('sections.content-contactUs')
@endsection

@section('scripts')
    @include('sections.scripts')
@endsection