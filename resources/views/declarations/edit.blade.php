@extends('layouts.app', [
    'title' => 'Declarations',
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
            'route' => ['declarations.update', ['declaration' => $declaration->id]],
            'method' => 'PUT',
            'files' => true,
        ]) !!}

      <div class="row mb-6">
            <label class="col-lg-4 col-form-label required fw-bold fs-6">Client Name</label>
            <div class="col-lg-8 fv-row fv-plugins-icon-container">
                {!! Form::text('client', old('client', $declaration->client), [
                    'required',
                    'id' => 'client',
                    'class' => 'form-control form-control-solid mb-3 mb-lg-0',
                    'placeholder' => 'Name',
                ]) !!}
            </div>
        </div> 
 
       
        <div class="row mb-6">
            <label class="col-lg-4 col-form-label required fw-bold fs-6">Client Testimony</label>
            <div class="col-lg-8 fv-row fv-plugins-icon-container">
                {!! Form::text('testimony', old('testimony', $declaration->testimony), [
                    'required',
                    'id' => 'testimony',
                    'class' => 'form-control form-control-solid mb-3 mb-lg-0',
                    'placeholder' => 'testimony',
                ]) !!}
            </div>
        </div> 
       
 
        
        <div class="row mb-6">
            <label style="margin-left:10px;">Client Image:</label>
                <span class="form-control" style="margin-left:236px; width:300px;">  
                 {!! Form::file('client_image', null) !!}
                </span>
                <img src="{{ asset('storage') . '/' . $declaration->client_image }}" alt=" "style="width: 50px;height: 50px; margin-left:40px;">
            </div>


        


        <div class="row mb-6">

            </div> 
            <div style="margin-left:450px; margin-top:50px;">
                <a href="{{ route('declarations.index') }}" class="btn btn-light me-2">Regresar</a>
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
