@extends('layouts.home')

@section('styles')
    @include('sections.styles')
@endsection

@section('content')
    @include('sections.header-view')
    <x-header-view-dinamic :titleDinamic="'About Us'" />
     @include('sections.content-aboutUs')
@endsection

@section('scripts')
    @include('sections.scripts')
@endsection
