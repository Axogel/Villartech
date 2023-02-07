@extends('layouts.app', [
    'title' => 'Settings',
])


@section('content')
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.1/css/jquery.dataTables.min.css">
    <div class="container-fluid mt--7">

        <div class="row">

            <div class="col-xl-8 mb-5 mb-xl-0">
                <div class="col mt-5" style="display:grid; padding-top:80px; width:80%; margin-left:125px;">
                    {!! Form::open(['method' => 'POST', 'route' => ['teams-language.store'], 'files' => 'true']) !!}

                    <div class="row mb-6">







                        <div class="col-lg-8 fv-row fv-plugins-icon-container">
                            <label class="col-lg-4 col-form-label required fw-bold fs-6">Skill Name</label>
                            {!! Form::text('skill_name', null, ['placeholder' => 'Skill Name',
                            'class' => 'form-control form-control-solid mb-3 mb-lg-0',]) !!}

                        </div>


                      

                        <div class="col-lg-8 fv-row fv-plugins-icon-container">
                            <label class="col-lg-4 col-form-label required fw-bold fs-6">Skill Percent</label>
                            {!! Form::text('skill_percentage', null, ['placeholder' => 'Skill Percentage',
                            'class' => 'form-control form-control-solid mb-3 mb-lg-0',]) !!}

                        </div>


                        
                        <div class="invisible">
                            <label class="col-lg-4 col-form-label required fw-bold fs-6"></label>
                            {!! Form::text('developer_id', $teamUser->id, ['placeholder' => 'Title',
                            'class' => 'form-control form-control-solid mb-3 mb-lg-0',]) !!}

                        </div>

                        <br>
                     
                        <br>

                        <br>

                        <br> 
                        <br> 

                  

                    <div style="margin-left:450px; margin-top:50px;" class="row mb-6">
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
    <br><br><br><br><br><br>

    <br>

    @include('layouts.footers.auth')
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
        $(document).ready(function() {
            $('#example').DataTable();
        });
    </script>
@stop
