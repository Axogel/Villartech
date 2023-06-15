@extends('layouts.app', [
    'title' => 'Settings',
])


@section('content')
    <div class="container-fluid mt--7">

        <div class="row">

            <div class="col-xl-12 mb-5 mb-xl-0 pt-5">
                <div class="col mt-5" style="display:grid;">
                    {!! Form::open(['method' => 'POST', 'route' => ['teams.store'], 'files' => 'true']) !!}

                    <div class="row mb-6">


                        <div class="col-lg-8 fv-row fv-plugins-icon-container">
                            <label class="col-lg-4 col-form-label required fw-bold fs-6">insert first and last name</label>
                            {!! Form::text('id_name', null, ['placeholder' => 'Firts and Lastname',
                            'class' => 'form-control form-control-solid mb-3 mb-lg-0',]) !!}

                        </div>


                        <div class="col-lg-8 fv-row fv-plugins-icon-container">
                            <label class="col-lg-4 col-form-label required fw-bold fs-6">Email</label>
                            {!! Form::text('email', null, ['placeholder' => 'Email',
                            'class' => 'form-control form-control-solid mb-3 mb-lg-0',]) !!}

                        </div>



                        <div class="col-lg-8 fv-row fv-plugins-icon-container">
                            <label class="col-lg-4 col-form-label required fw-bold fs-6">Skills</label>
                            {!! Form::select('skills[]', $skills, null, ['class' => 'form-control js-example-basic-multiple ', 'multiple' => 'multiple']) !!}


                        </div>

                        

                        <div class="col-lg-8 fv-row fv-plugins-icon-container">
                            <label class="col-lg-4 col-form-label required fw-bold fs-6">Age</label>
                            {!! Form::text('age', null, ['placeholder' => 'Age',
                            'class' => 'form-control form-control-solid mb-3 mb-lg-0',]) !!}

                        </div>


                        <div class="col-lg-8 fv-row fv-plugins-icon-container">
                            <label class="col-lg-4 col-form-label required fw-bold fs-6">Address</label>
                            {!! Form::text('address', null, ['placeholder' => 'Address',
                            'class' => 'form-control form-control-solid mb-3 mb-lg-0',]) !!}

                        </div>


                        <div class="col-lg-8 fv-row fv-plugins-icon-container">
                            <label class="col-lg-4 col-form-label required fw-bold fs-6">Description</label>
                            {!! Form::text('description', null, ['placeholder' => 'Description',
                            'class' => 'form-control form-control-solid mb-3 mb-lg-0',]) !!}

                        </div>


                        <div class="col-lg-8 fv-row fv-plugins-icon-container">
                            <label class="col-lg-4 col-form-label  fw-bold fs-6">Youtube Video</label>
                            {!! Form::text('team_presentation', null, ['placeholder' => 'Insert a url of a youtube video',
                            'class' => 'form-control form-control-solid mb-3 mb-lg-0',]) !!}

                        </div>


                        <div class="col-lg-8 fv-row fv-plugins-icon-container">
                            <label class="col-lg-4 col-form-label  fw-bold fs-6">CV LINK</label>
                            {!! Form::text('cv_link', null, ['placeholder' => 'Insert a url of a CV',
                            'class' => 'form-control form-control-solid mb-3 mb-lg-0',]) !!}

                        </div>

                        <div class="col-lg-8 fv-row fv-plugins-icon-container">
                            <label class="col-lg-4 col-form-label  fw-bold fs-6">Residence</label>
                            {!! Form::text('residence', null, ['placeholder' => 'Insert a Residence for the about section',
                            'class' => 'form-control form-control-solid mb-3 mb-lg-0',]) !!}

                        </div>

                        <div class="col-lg-8 fv-row fv-plugins-icon-container">
                            <label class="col-lg-4 col-form-label fw-bold fs-6">Freelance</label>
                            <div class="form-check form-switch">
                                {!! Form::checkbox('freelance', 1, null, ['class' => 'form-check-input', 'id' => 'freelanceSwitch', 'style' => 'display:none;']) !!}
                                <label class="form-check-label" for="freelanceSwitch">
                                    <span class="switch-slider rounded-circle"></span>
                                </label>
                            </div>
                        </div>



                        <div class="col-lg-8 fv-row fv-plugins-icon-container">
                            <label class="col-lg-4 col-form-label required fw-bold fs-6">Category</label>
                            {!! Form::select('category_id', $opcionesCategory, null, ['class' => 'form-control form-control-solid mb-3 mb-lg-0']) !!}

                        </div>
     


                        <div class="col-lg-8 fv-row fv-plugins-icon-container">
                            <label class="col-lg-4 col-form-label  fw-bold fs-6">Work Time</label>
                            {!! Form::text('work_time', null, ['placeholder' => 'Insert a amount of hours per week',
                            'class' => 'form-control form-control-solid mb-3 mb-lg-0',]) !!}

                        </div>

                        <div class="col-lg-8 fv-row fv-plugins-icon-container">
                            <label class="col-lg-4 col-form-label  fw-bold fs-6">Overview</label>
                            {!! Form::text('overview', null, ['placeholder' => 'Insert a overview',
                            'class' => 'form-control form-control-solid mb-3 mb-lg-0',]) !!}

                       </div>
                        <div class="col-lg-8 fv-row fv-plugins-icon-container">
                            <label class="col-lg-4 col-form-label required fw-bold fs-6">Languages</label>
                            {!! Form::select('languages[]', $languages, null, ['class' => 'form-control form-control-solid mb-3 mb-lg-0']) !!}


                        </div>
                        
                        <div class="col-lg-8 fv-row fv-plugins-icon-container">
                        <label class="col-lg-4 col-form-label required fw-bold fs-6">Level</label>
                        {!! Form::text('language_levels[]', null, ['placeholder' => 'Insert your level', 'class' => 'form-control form-control-solid mb-3 mb-lg-0']) !!}
                    </div>
                        <div class="col-lg-8 fv-row fv-plugins-icon-container">
                        <div id="language-forms-container"></div>
                        </div>
   

<button type="button" id="add-language-btn" class="btn btn-primary col-lg-8 fv-row my-2">Agregar nuevo idioma</button>



                    

                        <div>
                            <label style="padding-left:30px;">Image:</label>
                                <span class="form-control" style="margin-left:15px; width:360px;">  
                                    {!! Form::file('photo', null) !!}
                                </span>
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

                    <div style="margin-top:50px;" class="row mb-6">
                        <a href="{{ route('teams.index') }}" class="btn btn-light me-2">Regresar</a>
                        <button type="submit" class="btn btn-info" style="width:106px;">
                            <span class="indicator-label">Crear</span>
                        </button>
                    </div>
                    {!! Form::close() !!}

                </div>

            </div>
        </div>

    </div>



    </div>
   <style>
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


    

    @include('sweetalert::alert')
@endsection

@push('js')
    <script src="{{ asset('argon') }}/vendor/chart.js/dist/Chart.min.js"></script>
    <script src="{{ asset('argon') }}/vendor/chart.js/dist/Chart.extension.js"></script>
@endpush

@section('scripts')

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"
integrity="sha512-bLT0Qm9VnAYZDflyKcBaQ2gg0hSYNQrJ8RilYldYQ1FxQYoCLtUjuuRuZo+fjqhx/qtq/1itJ0C2ejDxltZVFg=="
crossorigin="anonymous" referrerpolicy="no-referrer"></script>

<script>
    $(document).ready(function() {
$('.js-example-basic-multiple').select2();
});
</script>

<script>
    $(document).ready(function() {
        var formCounter = 1;
        var languageFormsContainer = $('#language-forms-container');

        $('#add-language-btn').on('click', function() {
            var formId = 'language-form-' + formCounter;

            var languageForm = $('<div>').attr('id', formId).addClass('language-form');

            var selectField = $('<div>').addClass(' fv-row fv-plugins-icon-container')
                .append($('<label>').addClass('col-lg-4 col-form-label required fw-bold fs-6').text('Languages'))
                .append('{!! Form::select("languages[]", $languages, null, ["class" => "form-control form-control-solid mb-3 mb-lg-0"]) !!}');

            var levelField = $('<div>').addClass(' fv-row fv-plugins-icon-container')
                .append($('<label>').addClass('col-lg-4 col-form-label required fw-bold fs-6').text('Level'))
                .append(`{!! Form::text("language_levels[]", null, ["placeholder" => "Insert your level", "class" => "form-control form-control-solid mb-3 mb-lg-0"]) !!}`);

            languageForm.append(selectField);
            languageForm.append(levelField);

            languageFormsContainer.append(languageForm);

            formCounter++;
        });
    });
</script>
 


@stop
