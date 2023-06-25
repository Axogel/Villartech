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
                        'route' => ['testimonies.update', ['testimony' => $testimony->id]],
                        'method' => 'PUT',
                        'files' => true,
                    ]) !!}

                    <div class="row mb-6">

                            <div class="" style="overflow:hidden; height:330px;">
                                        <div id="DivEn" class="">


                                            <div class="col-lg-8 fv-row fv-plugins-icon-container">
                                                <label class="col-lg-4 col-form-label required fw-bold fs-6">Description</label>
                                                {!! Form::textarea('description',old('description', $testimony->description), ['class' => 'form-control summernote' , 'id' => 'description']) !!}

                                            </div>
                                        </div>
                                            <div class="Espanish-div" id="DivEs" style="position:relative; bottom:270px;">

                                            <div class="col-lg-8 fv-row fv-plugins-icon-container">
                                            <label class="col-lg-4 col-form-label required fw-bold fs-6">Description Spanish</label>
                                            {!! Form::textarea('descriptionEs', old('descriptionEs', $testimony->descriptionEs),['class' => 'form-control summernote', 'id' => 'descriptionEs']) !!}
                                            </div>
                                        </div>
                            </div>
                            <div class="col-lg-8 fv-row fv-plugins-icon-container">
                            <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                                <li class="nav-item" role="presentation">
                                    <a class="nav-link active" style="cursor:pointer;" id="pills-home-tab" data-toggle="pill" data-target="#pills-home" type="button" role="tab" aria-controls="pills-home" aria-selected="true" onclick="LanguageEn()" data-lang="en">English</a>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <a class="nav-link" style="cursor:pointer;" id="pills-profile-tab" data-toggle="pill" data-target="#pills-profile" type="button" role="tab" aria-controls="pills-profile" aria-selected="false" onclick="LanguageEs()" data-lang="es">Spanish</a>
                                </li>
                            </ul>
                        </div>

                        <div class="col-lg-8 fv-row fv-plugins-icon-container">
                            <label class="col-lg-4 col-form-label required fw-bold fs-6">Author</label>
                            {!! Form::text('author', old('author', $testimony->author), [
                                'id' => 'author',
                                'class' => 'form-control form-control-solid mb-3 mb-lg-0',
                                'placeholder' => 'description',
                            ]) !!}

                        </div>

                        <div class="col-lg-8 fv-row fv-plugins-icon-container">
                        <label class="col-lg-4 col-form-label fw-bold fs-6">Active</label>
                            <div class="form-check form-switch">
                                {!! Form::checkbox('active', 1, old('active', $testimony->active), ['class' => 'form-check-input', 'id' => 'activeSwitch', 'style' => 'display:none;']) !!}
                                <label class="form-check-label" for="activeSwitch">
                                    <span class="switch-slider rounded-circle"></span>
                                </label>
                            </div>

                        </div>
                        <div class="col-lg-8 fv-row fv-plugins-icon-container">
                        <label style="padding-left:30px;">Image: <img src="{{ asset('storage') . '/' . $testimony->image }}" alt=""style="width: 50px;height: 50px;" style="padding-left:60px;"></label>
                                <span class="form-control" style="margin-left:15px; width:360px;">  
                                    {!! Form::file('image', null) !!}
                                </span>

                        </div>




                       

                    </div>


                </div>


                @if ($errors->any())
                              <div class="alert alert-danger mx-2 my-2">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                          <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                               </div>
                            @endif
                

                <div style="text-align:center; margin-top:50px; margin-left:1px;" class="row mb-6">
                    <a href="{{ route('testimonies.index') }}" class="btn btn-light me-2">Back</a>
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
    .form-check.form-switch label {
    position: relative;
    display: inline-block;
    width: 48px;
    height: 24px;
    background-color: #ddd;
    border-radius: 12px;
    cursor: pointer;
}

.form-check.form-switch label:before {
    content: "";
    position: absolute;
    top: 2px;
    left: 2px;
    width: 20px;
    height: 20px;
    border-radius: 10px;
    background-color: #fff;
    transition: all 0.2s ease-in-out;
}

.form-check.form-switch .form-check-input:checked + label {
    background-color: #4CAF50;
}

.form-check.form-switch .form-check-input:checked + label:before {
    left: 26px;
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

@endsection
