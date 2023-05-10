@extends('layouts.app', [
    'title' => 'Settings',
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
            'route' => ['settings.update', ['setting' => $setting->id]],
            'method' => 'PUT',
            'files' => true,
        ]) !!}

        <div class="row mb-6">
            <label class="col-lg-4 col-form-label required fw-bold fs-6">Email</label>
            <div class="col-lg-8 fv-row fv-plugins-icon-container">
                {!! Form::text('email', old('email', $setting->email), [
                    'required',
                    'id' => 'email',
                    'class' => 'form-control form-control-solid mb-3 mb-lg-0',
                    'placeholder' => 'Email',
                ]) !!}
            </div>
        </div>

        <div class="row mb-6">
            <label class="col-lg-4 col-form-label required fw-bold fs-6">Phone</label>
            <div class="col-lg-8 fv-row fv-plugins-icon-container">
                {!! Form::text('phone', old('phone', $setting->phone), [
                    'required',
                    'id' => 'phone',
                    'class' => 'form-control form-control-solid mb-3 mb-lg-0',
                    'placeholder' => 'phone',
                ]) !!}
            </div>
        </div>

        <div class="row mb-6">
            <label class="col-lg-4 col-form-label required fw-bold fs-6">Linkedin</label>
            <div class="col-lg-8 fv-row fv-plugins-icon-container">
                {!! Form::text('date', old('date', $setting->date), [
                    'required',
                    'id' => 'date',
                    'class' => 'form-control form-control-solid mb-3 mb-lg-0',
                    'placeholder' => 'Date',
                ]) !!}
            </div>
        </div>


        <div class="row mb-6">
            <label class="col-lg-4 col-form-label required fw-bold fs-6">Facebook</label>
            <div class="col-lg-8 fv-row fv-plugins-icon-container">
                {!! Form::text('facebook', old('facebook', $setting->facebook), [
                    'required',
                    'id' => 'facebook',
                    'class' => 'form-control form-control-solid mb-3 mb-lg-0',
                    'placeholder' => 'facebook',
                ]) !!}
            </div>


        </div>


        <div class="row mb-6">
            <label class="col-lg-4 col-form-label required fw-bold fs-6">Instagram</label>
            <div class="col-lg-8 fv-row fv-plugins-icon-container">
                {!! Form::text('instagram', old('instagram', $setting->instagram), [
                    'required',
                    'id' => 'instagram',
                    'class' => 'form-control form-control-solid mb-3 mb-lg-0',
                    'placeholder' => 'instagram',
                ]) !!}
            </div>
        </div>


        <div class="row mb-6">
            <label class="col-lg-4 col-form-label required fw-bold fs-6">Address</label>
            <div class="col-lg-8 fv-row fv-plugins-icon-container">
                {!! Form::text('address', old('address', $setting->address), [
                    'required',
                    'id' => 'address',
                    'class' => 'form-control form-control-solid mb-3 mb-lg-0',
                    'placeholder' => 'Address',
                ]) !!}

            </div>
            <div style="margin-left:500px; margin-top:50px;">
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
