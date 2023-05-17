@extends('layouts.home')

@section('styles')
    @include('sections.styles')
@endsection

@section('content')

    @include('sections.header-aboutUs')
    <x-header-view-dinamic :titleDinamic="'Portafolio'" />
    @include('sections.content-portfolio')
@endsection

@section('scripts')
    @include('sections.scripts')
@endsection