@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">



            <div class="col-lg-8 fv-row fv-plugins-icon-container">
                <label class="col-lg-4 col-form-label required fw-bold fs-6">Description</label>
                <div class="form-control" style="height: auto">
                    {{ $testimony->description }}
                </div>
            </div>
            

            <div class="col-lg-8 fv-row fv-plugins-icon-container">
                <label class="col-lg-4 col-form-label required fw-bold fs-6">DescriptionEs</label>
                <div class="form-control" style="height: auto">
                    {{ $testimony->descriptionEs }}
                </div>
            </div>

            <div class="col-lg-8 fv-row fv-plugins-icon-container">
                <label class="col-lg-4 col-form-label required fw-bold fs-6">Author</label>
                <div class="form-control">
                    {{ $testimony->author }}
                </div>
            </div>

  










            <div class="col-lg-8 fv-row fv-plugins-icon-container pt-5">
                <label class="col-lg-4 col-form-label required fw-bold fs-6">Image</label>
                <img src="{{ asset('storage') . '/' . $testimony->image }}" alt=""
            style="width: 100px;height: 100px;">
            </div>

           


        </div>
        <br>
        <div style="margin-left:450px; margin-top:50px;" class="row mb-6">
                        <a href="{{ route('testimonies.index') }}" class="btn btn-light me-2">Regresar</a>
                    </div>
    </div>
@endsection
