@extends('layouts.app', [
    'title' => 'Teams',
])


@section('content')
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.1/css/jquery.dataTables.min.css">
    <div class="container-fluid mt--7">
        <div class="row">
            <div class="col-xl-8 mb-5 mb-xl-0">

                <div class="mt-5" style="display:grid; padding-top:80px; width:80%;">
                    {!! Form::open([
                        'route' => ['teams.update', ['team' => $teamUser->id]],
                        'method' => 'PUT',
                        'files' => true,
                    ]) !!}
            
                  <div class="row mb-6">
                        <label class="col-lg-4 col-form-label required fw-bold fs-6">Firts and Lastname</label>
                        <div class="col-lg-8 fv-row fv-plugins-icon-container">
                            {!! Form::text('id_name', old('id_name', $teamUser->id_name), [
                                
                                'id' => 'id_name',
                                'class' => 'form-control form-control-solid mb-3 mb-lg-0',
                                'placeholder' => 'Firts and Lastname',
                            ]) !!}
                        </div>
                    </div> 
             
                   
             
                    <div class=" row mb-6">
                        <label class="col-lg-4 col-form-label required fw-bold fs-6">Email</label>
                        <div class="col-lg-8 fv-row fv-plugins-icon-container">
                            {!! Form::text('email', old('email', $teamUser->email), [
                               
                                'id' => 'email',
                                'class' => 'form-control form-control-solid mb-3 mb-lg-0',
                                'placeholder' => 'email',
                            ]) !!}
                        </div>
                    </div>
             
                    
                    <div class=" row mb-6">
                        <label class="col-lg-4 col-form-label required fw-bold fs-6" >Image:</label>
                            <span class="form-control" style="width:300px;">  
                             {!! Form::file('photo', null) !!}
                            </span>
                            
                        </div>
            
            
                    
                     <div class="row mb-6">
                        <label class="col-lg-4 col-form-label required fw-bold fs-6">Skills</label>
                        <div class="col-lg-8 fv-row fv-plugins-icon-container">
                            {!! Form::text('skills', old('skills', $teamUser->skills), [
                                
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
                                
                                'id' => 'age',
                                'class' => 'form-control form-control-solid mb-3 mb-lg-0',
                                'placeholder' => 'Age',
                            ]) !!}
                        </div>
                    </div> 
            
            
                    <div class=" row mb-6">
                        <label class="col-lg-4 col-form-label required fw-bold fs-6">Address</label>
                        <div class="col-lg-8 fv-row fv-plugins-icon-container">
                            {!! Form::text('address', old('address', $teamUser->address), [
                                
                                'id' => 'address',
                                'class' => 'form-control form-control-solid mb-3 mb-lg-0',
                                'placeholder' => 'Address',
                            ]) !!}
                        </div>
                    </div> 
            
            
                    <div class=" row mb-6">
                        <label class="col-lg-4 col-form-label required fw-bold fs-6">Description</label>
                        <div class="col-lg-8 fv-row fv-plugins-icon-container">
                            {!! Form::text('description', old('description', $teamUser->description), [
                                
                                'id' => 'description',
                                'class' => 'form-control form-control-solid mb-3 mb-lg-0',
                                'placeholder' => 'description',
                            ]) !!}
                        </div>
                    </div> 
            
            
                    <div class=" row mb-6">
                        <label class="col-lg-4 col-form-label required fw-bold fs-6">Youtube Video</label>
                        <div class="col-lg-8 fv-row fv-plugins-icon-container">
                            {!! Form::text('team_presentation', old('team_presentation', $teamUser->team_presentation), [
                                
                                'id' => 'team_presentation',
                                'class' => 'form-control form-control-solid mb-3 mb-lg-0',
                                'placeholder' => 'Insert a url of a youtube video',
                            ]) !!}
                        </div>
                    </div> 
            
                    <div class="row mb-6">
                        <label class="col-lg-4 col-form-label required fw-bold fs-6">CV LINK</label>
                        <div class="col-lg-8 fv-row fv-plugins-icon-container">
                            {!! Form::text('cv_link', old('cv_link', $teamUser->cv_link), [
                                
                                'id' => 'cv_link',
                                'class' => 'form-control form-control-solid mb-3 mb-lg-0',
                                'placeholder' => 'Insert a url of a CV',
                            ]) !!}
                        </div>
                    </div> 
            
            
                    <div class=" row mb-6">
                        <label class="col-lg-4 col-form-label required fw-bold fs-6">Residence</label>
                        <div class="col-lg-8 fv-row fv-plugins-icon-container">
                            {!! Form::text('residence', old('residence', $teamUser->residence), [
                                
                                'id' => 'residence',
                                'class' => 'form-control form-control-solid mb-3 mb-lg-0',
                                'placeholder' => 'Insert a Residence',
                            ]) !!}
                        </div>
                    </div> 
            
            
                    <div class=" row mb-6">
                        <label class="col-lg-4 col-form-label required fw-bold fs-6">Freelance</label>
                        <div class="col-lg-8 fv-row fv-plugins-icon-container">
                            {!! Form::text('freelance', old('freelance', $teamUser->freelance), [
                              
                                'id' => 'freelance',
                                'class' => 'form-control form-control-solid mb-3 mb-lg-0',
                                'placeholder' => '',
                            ]) !!}
                        </div>
                    </div> 
            
            
                    <div class=" row mb-6">
                        <label class="col-lg-4 col-form-label required fw-bold fs-6">Category</label>
                        <div class="col-lg-8 fv-row fv-plugins-icon-container">
                            {!! Form::text('team_category', old('team_category', $teamUser->team_category), [
                                
                                'id' => 'team_category',
                                'class' => 'form-control form-control-solid mb-3 mb-lg-0',
                                'placeholder' => 'Insert Category',
                            ]) !!}
                        </div>
                    </div> 
            
            
            
                    <div class="row mb-6">
                        <label class="col-lg-4 col-form-label required fw-bold fs-6">Work Time</label>
                        <div class="col-lg-8 fv-row fv-plugins-icon-container">
                            {!! Form::text('work_time', old('work_time', $teamUser->work_time), [
                               
                                'id' => 'work_time',
                                'class' => 'form-control form-control-solid mb-3 mb-lg-0',
                                'placeholder' => 'Insert a amount of hours per week',
                            ]) !!}
                        </div>
                    </div> 
            
            
                    <div class="row mb-6">
                        <label class="col-lg-4 col-form-label required fw-bold fs-6">Work Time</label>
                        <div class="col-lg-8 fv-row fv-plugins-icon-container">
                            {!! Form::text('overview', old('overview', $teamUser->overview), [
                               
                                'id' => 'overview',
                                'class' => 'form-control form-control-solid mb-3 mb-lg-0',
                                'placeholder' => 'Insert a overview',
                            ]) !!}
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
                    
                    <div class="row mb-6">
                        <div>
                            <a href="{{ route('teams.index') }}" class="btn btn-light me-2">Regresar</a>
                            <button type="submit" class="btn btn-info">
                                <span class="indicator-label">Actualizar</span>
                            </button>
                        </div>
            
                        </div> 
                        
                        {!! Form::close() !!}
                    </div>

            </div>
        </div>

    </div>
    
   

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
@stop
