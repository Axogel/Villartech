@extends('layouts.app', [
    'title' => 'Settings',
])


@section('content')
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.1/css/jquery.dataTables.min.css">
    <div class="container-fluid mt--7">

        <div class="row">

            <div class="col-xl-8 mb-5 mb-xl-0">
                <div class="col mt-5" style="display:grid; padding-top:80px; width:80%;">
                    {!! Form::open(['method' => 'POST', 'route' => ['tags.store'], 'files' => 'true']) !!}

                    <div class="row mb-6">


                        <div class="col-lg-8 fv-row fv-plugins-icon-container">
                            <label class="col-lg-4 col-form-label required fw-bold fs-6">Name</label>
                            {!! Form::text('name', null, ['placeholder' => 'Ingrese nombre',
                            'class' => 'form-control form-control-solid mb-3 mb-lg-0',]) !!}

                        </div>

           
                    </div>

                    <div style="text-align:center; margin-top:50px; margin-left:1px;" class="row mb-6">
                        <a href="{{ route('tags.index') }}" class="btn btn-light me-2">Regresar</a>
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

    @include('layouts.footers.auth')
@endsection