@extends('layouts.app', [
    'title' => 'Teams Skills',
])


@section('content')
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.1/css/jquery.dataTables.min.css">
    <div class="container-fluid mt--7">
        <div class="row">
            <div class="col-xl-8 mb-5 mb-xl-0">

            </div>
        </div>

    </div>
    <div class="row mt-5" style="display:grid; padding-top:80px; width:80%; margin-left:125px;">
        {!! Form::open([
            'route' => ['teams-skills.update', ['id' => $teamEducation->education_id]],
            'method' => 'PUT',
            'files' => true,
        ]) !!}
 


       
 <div class="" style="overflow:hidden; height:240px;">
    <div id="DivEn" class="">
        <div class="row mb-6">
            <label class="col-lg-4 col-form-label required fw-bold fs-6">Title</label>
            <div class="col-lg-8 fv-row fv-plugins-icon-container">
                {!! Form::text('education_title', old('education_title', $teamEducation->education_title), [
                    'required',
                    'id' => 'education_title',
                    'class' => 'form-control form-control-solid mb-3 mb-lg-0',
                    'placeholder' => 'Title',
                ]) !!}
            </div>
        </div>

        <div class="row mb-6">
            <label class="col-lg-4 col-form-label required fw-bold fs-6">Description</label>
            <div class="col-lg-8 fv-row fv-plugins-icon-container">
                {!! Form::text('education_description', old('education_description', $teamEducation->education_description), [
                    'required',
                    'id' => 'education_description',
                    'class' => 'form-control form-control-solid mb-3 mb-lg-0',
                    'placeholder' => 'description',
                ]) !!}
            </div>
        </div> 
    </div>
        <div class="Espanish-div " id="DivEs" style="position:relative; bottom:235px;">
            <div class="row mb-6">
                <label class="col-lg-4 col-form-label required fw-bold fs-6">Title Spanish</label>
                <div class="col-lg-8 fv-row fv-plugins-icon-container">
                    {!! Form::text('education_titleEs', old('education_titleEs', $teamEducation->education_titleEs), [
                        'required',
                        'id' => 'education_title',
                        'class' => 'form-control form-control-solid mb-3 mb-lg-0',
                        'placeholder' => 'Title',
                    ]) !!}
                </div>
            </div>
            <div class="row mb-6">
                <label class="col-lg-4 col-form-label required fw-bold fs-6">Description Spanish</label>
                <div class="col-lg-8 fv-row fv-plugins-icon-container">
                    {!! Form::text('education_descriptionEs', old('education_descriptionEs', $teamEducation->education_descriptionEs), [
                        'required',
                        'id' => 'education_description',
                        'class' => 'form-control form-control-solid mb-3 mb-lg-0',
                        'placeholder' => 'description',
                    ]) !!}
                </div>
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

         <div class="row mb-6">
            <label class="col-lg-4 col-form-label required fw-bold fs-6">Country</label>
            <div class="col-lg-8 fv-row fv-plugins-icon-container">
                {!! Form::text('education_country', old('education_country', $teamEducation->education_country), [
                    'required',
                    'id' => 'education_country',
                    'class' => 'form-control form-control-solid mb-3 mb-lg-0',
                    'placeholder' => 'Country',
                ]) !!}
            </div>
        </div> 

        <div class="row mb-6">
            <label class="col-lg-4 col-form-label required fw-bold fs-6">Date</label>
            <div class="col-lg-8 fv-row fv-plugins-icon-container">
                {!! Form::text('education_date', old('education_date', $teamEducation->education_date), [
                    'required',
                    'id' => 'education_date',
                    'class' => 'form-control form-control-solid mb-3 mb-lg-0',
                    'placeholder' => 'date',
                ]) !!}
            </div>
        </div> 


        <div class="invisible">
            <label class="col-lg-4 col-form-label required fw-bold fs-6">Developer_id</label>
            <div class="col-lg-8 fv-row fv-plugins-icon-container">
                {!! Form::text('developer_id', old('developer_id', $teamEducation->developer_id), [
                    'required',
                    'id' => 'developer_id',
                    'class' => 'form-control form-control-solid mb-3 mb-lg-0',
                    'placeholder' => 'description',
                ]) !!}
            </div>
        </div> 

        <div class="row mb-6">

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
            <div style="margin-left:450px; margin-top:50px;">
                <a href="{{ route('teams.index') }}" class="btn btn-light me-2">Regresar</a>
                <button type="submit" class="btn btn-info">
                    <span class="indicator-label">Actualizar</span>
                </button>
            </div>
            {!! Form::close() !!}
        </div>


    </div>


    </div>
    <br><br><br><br><br><br>

    <br>
    <style>
        .Espanish-div{
        position:relative;
        left:1000px;
    }
</style>
@endsection

@push('js')
    <script src="{{ asset('argon') }}/vendor/chart.js/dist/Chart.min.js"></script>
    <script src="{{ asset('argon') }}/vendor/chart.js/dist/Chart.extension.js"></script>
@endpush

@section('scripts')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"
        integrity="sha512-bLT0Qm9VnAYZDflyKcBaQ2gg0hSYNQrJ8RilYldYQ1FxQYoCLtUjuuRuZo+fjqhx/qtq/1itJ0C2ejDxltZVFg=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdn.datatables.net/1.13.1/js/jquery.dataTables.min.js"></script>
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
            $('#example').DataTable();
        });
    </script>
@stop
