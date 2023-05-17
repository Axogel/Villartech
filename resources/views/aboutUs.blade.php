@extends('layouts.home')

@section('styles')
    @include('sections.styles')
@endsection

@section('content')
    @include('sections.header-aboutUs')
     @include('sections.content-aboutUs')
@endsection

@section('scripts')
    @include('sections.scripts')
@endsection
