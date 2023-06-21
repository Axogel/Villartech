@extends('layouts.home')

@section('styles')
    @include('sections.styles')
@endsection

@section('content')
    @include('sections.header-view')
    <x-header-view-dinamic :titleDinamic="'HeaderAbout'" :subtitleDinamic="''" />
     @include('sections.content-aboutUs')
@endsection

@section('scripts')
    @include('sections.scripts')
@endsection
