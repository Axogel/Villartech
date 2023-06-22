@extends('layouts.app', [
    'title' => 'Settings',
])


@section('content')


<link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>

    <div class="container-fluid mt--7">

    

        <div class="row">

            <div class="col-xl-8 mb-5 mb-xl-0">
                <div class="col mt-5" style="display:grid; padding-top:80px; width:80%;">
                    {!! Form::open([
                        'route' => ['blogs.update', ['blog' => $blog->id]],
                        'method' => 'PUT',
                        'files' => true,
                    ]) !!}

                    <div class="row mb-6">

                            <div class="" style="overflow:hidden; height:550px;">
                                        <div id="DivEn" class="">
                                            <div class="col-lg-8 fv-row fv-plugins-icon-container">
                                                <label class="col-lg-4 col-form-label required fw-bold fs-6">Title</label>
                                                {!! Form::text('title', null, ['placeholder' => 'Insert a Title',
                                                'class' => 'form-control form-control-solid mb-3 mb-lg-0',]) !!}

                                            </div>

                                            <div class="col-lg-8 fv-row fv-plugins-icon-container">
                                                <label class="col-lg-4 col-form-label required fw-bold fs-6">Description</label>
                                                {!! Form::textarea('description', null, ['class' => 'form-control summernote' , 'id' => 'description']) !!}

                                            </div>
                                        </div>
                                            <div class="Espanish-div" id="DivEs" style="position:relative; bottom:510px;">
                                            <div class="col-lg-8 fv-row fv-plugins-icon-container">
                                                <label class="col-lg-4 col-form-label required fw-bold fs-6">Title Spanish</label>
                                                {!! Form::text('titleES', null, ['placeholder' => 'Insert a Title',
                                                'class' => 'form-control form-control-solid mb-3 mb-lg-0',]) !!}

                                            </div>

                                            <div class="col-lg-8 fv-row fv-plugins-icon-container">
      <label class="col-lg-4 col-form-label required fw-bold fs-6">Description Spanish</label>
      {!! Form::textarea('descriptionES', null, ['class' => 'form-control summernote', 'id' => 'descriptionES']) !!}
    </div>
                                        </div>
                            </div>
                            <div class="col-lg-8 fv-row fv-plugins-icon-container">
                        <div class="dropdown ">
                            <button class="btn btn-primary dropdown-toggle" type="button" id="languageDropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Select Language
                            </button>
                            <div class="dropdown-menu" aria-labelledby="languageDropdown">
                                <a class="dropdown-item"  href="#" onclick="LanguageEn()" data-lang="en">English</a>
                                <a class="dropdown-item"  href="#"  onclick="LanguageEs()" data-lang="es">Spanish</a>
                            </div>
                        </div>
                        </div>

                        <div class="col-lg-8 fv-row fv-plugins-icon-container">
                            <label class="col-lg-4 col-form-label required fw-bold fs-6">Author</label>
                            {!! Form::text('author', old('author', $blog->author), [
                                'id' => 'author',
                                'class' => 'form-control form-control-solid mb-3 mb-lg-0',
                                'placeholder' => 'description',
                            ]) !!}

                        </div>

                        <div class="col-lg-8 fv-row fv-plugins-icon-container">
                            <label class="col-lg-4 col-form-label required fw-bold fs-6">Date</label>
                            {!! Form::text('date', old('date', $blog->date), [
                                'id' => 'date',
                                'class' => 'form-control form-control-solid mb-3 mb-lg-0',
                                'placeholder' => 'date',
                            ]) !!}

                        </div>
                        

                        <div class="col-lg-8 fv-row fv-plugins-icon-container">
                            <label class="col-lg-4 col-form-label required fw-bold fs-6">Category Type</label>
                            {!! Form::select('category_id', $opciones, $blog->category_id, ['class' => 'form-control form-control-solid mb-3 mb-lg-0']) !!}

                        </div>


                        <div class="col-lg-8 fv-row fv-plugins-icon-container">
                            <label class="col-lg-4 col-form-label required fw-bold fs-6">Tags</label>
                            {!! Form::select('tags[]', $tags, json_decode($blog->tags), ['class' => 'form-control js-example-basic-multiple',  'multiple' => 'multiple']) !!}

                        </div>
                       
                      
                      
                            <div style="margin-top:20px;">

                               <label style="padding-left:30px;">Image:  <img src="{{ asset('storage') . '/' . $blog->image }}" alt=""
                            style="width: 50px;height: 50px;" style="padding-left:60px;"></label>
                            <span class="form-control" style="margin-left:15px; width:360px;">  
                             {!! Form::file('image', null) !!}
                            </span>

                            </div>
                       

                    </div>


                </div>



                

                <div style="text-align:center; margin-top:50px; margin-left:1px;" class="row mb-6">
                    <a href="{{ route('blogs.index') }}" class="btn btn-light me-2">Back</a>
                    <button type="submit" class="btn btn-info" style="width:106px;">
                        <span class="indicator-label">Update</span>
                    </button>
                </div>
                {!! Form::close() !!}

            </div>

        </div>
    </div>

    </div>



    </div>
    <style>
    .Espanish-div{
        position:relative;
        left:1000px;
    }
</style>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"
    integrity="sha512-bLT0Qm9VnAYZDflyKcBaQ2gg0hSYNQrJ8RilYldYQ1FxQYoCLtUjuuRuZo+fjqhx/qtq/1itJ0C2ejDxltZVFg=="
    crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script>
 let EsDiv = document.getElementById('DivEs');
  let EnDiv = document.getElementById('DivEn');
 function LanguageEs(){
    EnDiv.classList.add("Espanish-div");
    EsDiv.classList.remove("Espanish-div");
 }
 function LanguageEn(){
    EsDiv.classList.add("Espanish-div");
    EnDiv.classList.remove("Espanish-div");
}
</script>
    <script>
        $(document).ready(function() {
    $('.js-example-basic-multiple').select2();
    });
    </script>


    <script src="https://cdn.ckeditor.com/4.16.0/standard/ckeditor.js"></script>
    <script>
        CKEDITOR.replace('description');
    </script>
    <script>
        CKEDITOR.replace('descriptionES');
    </script>
@endsection
