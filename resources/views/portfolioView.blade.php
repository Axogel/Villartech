@extends('layouts.home')

@section('styles')
    @include('sections.styles')
@endsection

@section('content')

    @include('sections.header-view')
    <x-header-view-dinamic :titleDinamic="'HeaderPortfolio'"  :subtitleDinamic="''" />
    @include('sections.content-portfolio')
@endsection

@section('scripts')
    @include('sections.scripts')
@endsection