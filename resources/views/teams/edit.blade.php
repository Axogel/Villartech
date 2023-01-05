@extends('layouts.app', [
    'title' => 'Teams',
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
            'route' => ['teams.update', ['team' => $teamUser->id]],
            'method' => 'PUT',
            'files' => true,
        ]) !!}

      <div class="row mb-6">
            <label class="col-lg-4 col-form-label required fw-bold fs-6">Name</label>
            <div class="col-lg-8 fv-row fv-plugins-icon-container">
                {!! Form::text('id_name', old('id_name', $teamUser->id_name), [
                    'required',
                    'id' => 'id_name',
                    'class' => 'form-control form-control-solid mb-3 mb-lg-0',
                    'placeholder' => 'Name',
                ]) !!}
            </div>
        </div> 
 
       
 
        <div class="row mb-6">
            <label class="col-lg-4 col-form-label required fw-bold fs-6">Email</label>
            <div class="col-lg-8 fv-row fv-plugins-icon-container">
                {!! Form::text('email', old('email', $teamUser->email), [
                    'required',
                    'id' => 'email',
                    'class' => 'form-control form-control-solid mb-3 mb-lg-0',
                    'placeholder' => 'email',
                ]) !!}
            </div>
        </div>
 
        
        <div class="row mb-6">
            <label style="margin-left:10px;">Image:</label>
                <span class="form-control" style="margin-left:320px; width:300px;">  
                 {!! Form::file('image', null) !!}
                </span>
                <img src="{{ asset('storage') . '/' . $teamUser->photo }}" alt=" "style="width: 50px;height: 50px; margin-left:40px;">
            </div>


        
         <div class="row mb-6">
            <label class="col-lg-4 col-form-label required fw-bold fs-6">Skills</label>
            <div class="col-lg-8 fv-row fv-plugins-icon-container">
                {!! Form::text('skills', old('skills', $teamUser->skills), [
                    'required',
                    'id' => 'skills',
                    'class' => 'form-control form-control-solid mb-3 mb-lg-0',
                    'placeholder' => 'skills',
                ]) !!}
            </div>
        </div> 


        <div class="row mb-6">
            <label class="col-lg-4 col-form-label required fw-bold fs-6">Age</label>
            <div class="col-lg-8 fv-row fv-plugins-icon-container">
                {!! Form::text('age', old('age', $teamUser->age), [
                    'required',
                    'id' => 'age',
                    'class' => 'form-control form-control-solid mb-3 mb-lg-0',
                    'placeholder' => 'Age',
                ]) !!}
            </div>
        </div> 


        <div class="row mb-6">
            <label class="col-lg-4 col-form-label required fw-bold fs-6">Address</label>
            <div class="col-lg-8 fv-row fv-plugins-icon-container">
                {!! Form::text('address', old('address', $teamUser->address), [
                    'required',
                    'id' => 'address',
                    'class' => 'form-control form-control-solid mb-3 mb-lg-0',
                    'placeholder' => 'Address',
                ]) !!}
            </div>
        </div> 


        <div class="row mb-6">
            <label class="col-lg-4 col-form-label required fw-bold fs-6">Description</label>
            <div class="col-lg-8 fv-row fv-plugins-icon-container">
                {!! Form::text('description', old('description', $teamUser->description), [
                    'required',
                    'id' => 'description',
                    'class' => 'form-control form-control-solid mb-3 mb-lg-0',
                    'placeholder' => 'description',
                ]) !!}
            </div>
        </div> 

        <div class="row mb-6">

            </div> 
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
