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

    <div class="row mt-5" style="display:grid; padding-top:80px; width:80%; margin-left:125px;">
        {!! Form::open([
            'route' => ['teams-language.update', ['id' => $teamSkill->id]],
            'method' => 'PUT',
            'files' => true,
        ]) !!}
 


       
 
        <div class="row mb-6">
            <label class="col-lg-4 col-form-label required fw-bold fs-6">Skill Name</label>
            <div class="col-lg-8 fv-row fv-plugins-icon-container">
                {!! Form::text('skill_name', old('skill_name', $teamSkill->skill_name), [
                    'required',
                    'id' => 'skill_name',
                    'class' => 'form-control form-control-solid mb-3 mb-lg-0',
                    'placeholder' => 'Skill Name',
                ]) !!}
            </div>
        </div>
 
        
       


        
         <div class="row mb-6">
            <label class="col-lg-4 col-form-label required fw-bold fs-6">Skill Percent</label>
            <div class="col-lg-8 fv-row fv-plugins-icon-container">
                {!! Form::text('skill_percentage', old('skill_percentage', $teamSkill->skill_percentage), [
                    'required',
                    'id' => 'skill_percentage',
                    'class' => 'form-control form-control-solid mb-3 mb-lg-0',
                    'placeholder' => 'Skill percentage',
                ]) !!}
            </div>
        </div> 


       

   


        <div class="invisible">
            <label class="col-lg-4 col-form-label required fw-bold fs-6">Developer_id</label>
            <div class="col-lg-8 fv-row fv-plugins-icon-container">
                {!! Form::text('developer_id', old('developer_id', $teamSkill->developer_id), [
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
