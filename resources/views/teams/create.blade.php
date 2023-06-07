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
                            {!! Form::text('skills', null, ['placeholder' => 'Skills',
                            'class' => 'form-control form-control-solid mb-3 mb-lg-0',]) !!}

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
                            <label class="col-lg-4 col-form-label  fw-bold fs-6">Freelance</label>
                            {!! Form::text('freelance', null, ['placeholder' => '',
                            'class' => 'form-control form-control-solid mb-3 mb-lg-0',]) !!}

                        </div>

                        <div class="col-lg-8 fv-row fv-plugins-icon-container">
                            <label class="col-lg-4 col-form-label required fw-bold fs-6">Category</label>
                            {!! Form::select('category_id', $opcionesCategory, null, ['class' => 'form-control form-control-solid mb-3 mb-lg-0']) !!}

                        </div>
                        <!-- <div class="col-lg-8 fv-row fv-plugins-icon-container">
                            <label class="col-lg-4 col-form-label fw-bold fs-6">Category</label>
                            {!! Form::text('team_category', null, ['placeholder' => 'Insert a url of a CV',
                            'class' => 'form-control form-control-solid mb-3 mb-lg-0',]) !!}

                        </div> -->


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
   


    

    @include('sweetalert::alert')
@endsection

@push('js')
    <script src="{{ asset('argon') }}/vendor/chart.js/dist/Chart.min.js"></script>
    <script src="{{ asset('argon') }}/vendor/chart.js/dist/Chart.extension.js"></script>
@endpush

@section('scripts')




@stop
