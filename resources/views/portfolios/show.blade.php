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
                <div class="form-control" style="height: auto">
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


            <div class="col-lg-8 fv-row fv-plugins-icon-container mb-5">
                <label class="col-lg-4 col-form-label required fw-bold fs-6">Skills</label>
                <div class="form-control">
                    @foreach ($portfolio->skills()->get() as $skill)
                        <span class="mb-0 text-sm">{{ $skill->name }}</span>
                    @endforeach
                </div>
            </div>


        </div>
        <div class="mb-5" style="margin-left:450px; margin-top:50px;">
                            <a href="{{ route('portfolios.index') }}" class="btn btn-light me-2" style="width:106px;">Back</a>

                        </div>
    </div>
@endsection
