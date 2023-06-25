@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">

            <div class="col-lg-8 fv-row fv-plugins-icon-container">
                <label class="col-lg-4 col-form-label required fw-bold fs-6">Title</label>
                <div class="form-control">
                    {{ $blog->title }}
                </div>
            </div>

            <div class="col-lg-8 fv-row fv-plugins-icon-container">
                <label class="col-lg-4 col-form-label required fw-bold fs-6">Description</label>
                <div class="form-control" style="height: auto">
                    {{ $blog->description }}
                </div>
            </div>

            <div class="col-lg-8 fv-row fv-plugins-icon-container">
                <label class="col-lg-4 col-form-label required fw-bold fs-6">Author</label>
                <div class="form-control">
                    {{ $blog->author }}
                </div>
            </div>

            <div class="col-lg-8 fv-row fv-plugins-icon-container">
                <label class="col-lg-4 col-form-label required fw-bold fs-6">Date</label>
                <div class="form-control">
                    {{ $blog->date }}
                </div>
            </div>


            <div class="col-lg-8 fv-row fv-plugins-icon-container">
                <label class="col-lg-4 col-form-label required fw-bold fs-6">Category</label>
                <div class="form-control">
                    @foreach ($blog->categoryBlog()->get() as $category )
                     <span class="mb-0 text-sm">{{ $category->name }}</span>
                     @endforeach
                </div>
            </div>

            <div class="col-lg-8 fv-row fv-plugins-icon-container">
                <label class="col-lg-4 col-form-label required fw-bold fs-6">Tags</label>
                <div class="form-control">
                    @foreach ($blog->tags()->get() as $tag)
                        <span class="mb-0 text-sm">{{ $tag->name }}</span>
                    @endforeach
                </div>
            </div>


            <div class="col-lg-8 fv-row fv-plugins-icon-container">
                <label class="col-lg-4 col-form-label required fw-bold fs-6">Slug</label>
                <div class="form-control">
                    {{ $blog->slug }}
                </div>
            </div>


            <div class="col-lg-8 fv-row fv-plugins-icon-container pt-5">
                <label class="col-lg-4 col-form-label required fw-bold fs-6">Image</label>
                <img src="{{ asset('storage') . '/' . $blog->image }}" alt=""
            style="width: 100px;height: 100px;">
            </div>

           


        </div>
        <br>
        <div style="margin-left:450px; margin-top:50px;" class="row mb-6">
                        <a href="{{ route('blogs.index') }}" class="btn btn-light me-2">Regresar</a>
                    </div>
    </div>
@endsection
