@extends('layouts.home')

@section('styles')
    @include('sections.styles')
@endsection

@section('content')

    @include('sections.header-view')
    <x-header-view-dinamic :titleDinamic="'HeaderPortfolio'" :subtitleDinamic="$detailPortfolio->name" />
    @include('sections.details-portfolio')
@endsection

@section('scripts')
    @include('sections.scripts')
@endsection