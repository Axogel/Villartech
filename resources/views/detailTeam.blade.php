@extends('layouts.home')

@section('styles')
    @include('sections.styles')
@endsection

@section('content')

    @include('sections.header-view')
    <x-header-view-dinamic :titleDinamic="'TEAM'" :subtitleDinamic="''" />
    @include('sections.details-Team')
@endsection

@section('scripts')
    @include('sections.scripts')
@endsection