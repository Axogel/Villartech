@extends('layouts.home')

@section('styles')
    @include('sections.styles')
@endsection

@section('content')
@include('sweetalert::alert')
    @include('sections.header-view')
    <x-header-view-dinamic :titleDinamic="'WORK WITH US'" :subtitleDinamic="''" />

     @include('sections.content-workUs')
@endsection

@section('scripts')
    @include('sections.scripts')
@endsection