@extends('layouts.app')


@section('content')
    <div class="container">
        <div class="row">

            <div class="col-lg-8 fv-row fv-plugins-icon-container">
                <label class="col-lg-4 col-form-label required fw-bold fs-6">Title</label>
                <div class="form-control">
                    {{ $portfolio->name }}
                </div>
            </div>

            <div class="col-lg-8 fv-row fv-plugins-icon-container">
                <label class="col-lg-4 col-form-label required fw-bold fs-6">Description</label>
                <div class="form-control" style="height: 230px;">
                    {{ $portfolio->description }}
                </div>
            </div>

            <div class="col-lg-8 fv-row fv-plugins-icon-container">
                <label class="col-lg-4 col-form-label required fw-bold fs-6">URL</label>
                <div class="form-control">
                    {{ $portfolio->url }}
                </div>
            </div>

            <div class="col-lg-8 fv-row fv-plugins-icon-container pt-5">
                <label class="col-lg-4 col-form-label required fw-bold fs-6">Image</label>
                <img src="{{ asset('storage') . '/' . $portfolio->image }}" alt=""
                    style="width: 100px;height: 100px;">
            </div>



            <div class="col-lg-8 fv-row fv-plugins-icon-container">
                <label class="col-lg-4 col-form-label required fw-bold fs-6">Slug</label>
                <div class="form-control">
                    {{ $portfolio->slug }}
                </div>
            </div>


            <div class="col-lg-8 fv-row fv-plugins-icon-container">
                <label class="col-lg-4 col-form-label required fw-bold fs-6">Skills</label>
                <div class="form-control">
                    @foreach ($portfolio->skills()->get() as $skill)
                        <span class="mb-0 text-sm">{{ $skill->name }}</span>
                    @endforeach
                </div>
            </div>


        </div>
    </div>
@endsection
