@extends('layouts.home')

@section('styles')
    @include('sections.styles')
@endsection

@section('content')
@include('sweetalert::alert')
    @include('sections.header-view')
    <x-header-view-dinamic :titleDinamic="'BLOG'" :subtitleDinamic="''" />
     @include('sections.content-blog')
@endsection

@section('scripts')
    @include('sections.scripts')
@endsection