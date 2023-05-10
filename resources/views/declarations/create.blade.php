@extends('layouts.app', [
    'title' => 'Settings',
])


@section('content')
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.1/css/jquery.dataTables.min.css">
    <div class="container-fluid mt--7">

        <div class="row">

            <div class="col-xl-8 mb-5 mb-xl-0">
                <div class="col mt-5" style="display:grid; padding-top:80px; width:80%; margin-left:125px;">
                    {!! Form::open(['method' => 'POST', 'route' => ['declarations.store'], 'files' => 'true']) !!}

                    <div class="row mb-6">


                        <div class="col-lg-8 fv-row fv-plugins-icon-container">
                            <label class="col-lg-4 col-form-label required fw-bold fs-6">Client</label>
                            {!! Form::text('client', null, ['placeholder' => 'Client Name',
                            'class' => 'form-control form-control-solid mb-3 mb-lg-0',]) !!}

                        </div>


                        <div class="col-lg-8 fv-row fv-plugins-icon-container">
                            <label class="col-lg-4 col-form-label required fw-bold fs-6">Testimony</label>
                            {!! Form::text('testimony', null, ['placeholder' => 'Testimony',
                            'class' => 'form-control form-control-solid mb-3 mb-lg-0',]) !!}

                        </div>
               

                        <br>
                     
                        <br>

                        <br>

                        <br> 
                        <br> 

                        <div>
                            <label style="padding-left:30px;">Image:</label>
                                <span class="form-control" style="margin-left:15px; width:360px;">  
                                 {!! Form::file('client_image', null) !!}
                                </span>
                            </div>
                    </div>

                    <div style="margin-left:450px; margin-top:50px;" class="row mb-6">
                        <a href="{{ route('declarations.index') }}" class="btn btn-light me-2">Regresar</a>
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
    <br><br><br><br><br><br>

    <br>

@endsection

@push('js')
    <script src="{{ asset('argon') }}/vendor/chart.js/dist/Chart.min.js"></script>
    <script src="{{ asset('argon') }}/vendor/chart.js/dist/Chart.extension.js"></script>
@endpush

@section('scripts')
@stop
