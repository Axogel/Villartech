@extends('layouts.app', [
    'title' => 'Settings',
])


@section('content')
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.1/css/jquery.dataTables.min.css">
    <div class="container-fluid mt--7">

        <div class="row">

            <div class="col-xl-8 mb-5 mb-xl-0">
                <div class="col mt-5" style="display:grid; padding-top:80px; width:80%; margin-left:125px;">
                    {!! Form::open(['method' => 'PUT', 'route' => ['portfolios.update', ['portfolio' => $portfolio->id]], 'files' => 'true']) !!}

                    <div class="row mb-6">

                        <div class="col-lg-8 fv-row fv-plugins-icon-container">
                            <label class="col-lg-4 col-form-label required fw-bold fs-6">Name</label>
                            {!! Form::text('name', old('name', $portfolio->name), ['placeholder' => 'Insert a name',
                            'class' => 'form-control form-control-solid mb-3 mb-lg-0',]) !!}

                        </div>

                        <div class="col-lg-8 fv-row fv-plugins-icon-container">
                            <label class="col-lg-4 col-form-label required fw-bold fs-6">Url</label>
                            {!! Form::text('url', old('url', $portfolio->url), ['placeholder' => 'Insert a url to the portfolio',
                            'class' => 'form-control form-control-solid mb-3 mb-lg-0',]) !!}

                        </div>


                        <div class="col-lg-8 fv-row fv-plugins-icon-container">
                            <label class="col-lg-4 col-form-label required fw-bold fs-6">Description</label>
                            {!! Form::text('description', old('description', $portfolio->description), ['placeholder' => 'Insert a description',
                            'class' => 'form-control form-control-solid mb-3 mb-lg-0',]) !!}

                        </div>

                        <div class="col-lg-8 fv-row fv-plugins-icon-container">
                            <label class="col-lg-4 col-form-label required fw-bold fs-6">Skills</label>
                            {!! Form::select('skills[]', $skills, null, ['class' => 'form-control', 'multiple' => 'multiple']) !!}

                        </div>

                        <br>
                        <br>
                        <br>
                        <br>
                        <br>

                        <div>
                        <label style="padding-left:30px;">Image:  <img src="{{ asset('storage') . '/' . $portfolio->image }}" alt=""
                            style="width: 50px;height: 50px;" style="padding-left:60px;"></label>
                            <span class="form-control" style="margin-left:15px; width:360px;">  
                             {!! Form::file('image', null) !!}
                            </span>
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
                            <a href="{{ route('portfolios.index') }}" class="btn btn-light me-2" style="width:106px;">Back</a>
                            <button type="submit" class="btn btn-info" style="width: 106px">
                                <span class="indicator-label">Update</span>
                            </button>
                        </div>
                        {!! Form::close() !!}
                    </div>


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
