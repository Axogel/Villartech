@extends('layouts.app')


@section('content')
    <div class="container">
        <div class="row">

            <div class="col-lg-8 fv-row fv-plugins-icon-container">
                <label class="col-lg-4 col-form-label required fw-bold fs-6">Name</label>
                <div class="form-control">
                    {{ $teamUser->name }}
                </div>
            </div>
            <div class="col-lg-8 fv-row fv-plugins-icon-container">
                <label class="col-lg-4 col-form-label required fw-bold fs-6">Email</label>
                <div class="form-control">
                    {{ $teamUser->email }}
                </div>
            </div>
            <div class="col-lg-8 fv-row fv-plugins-icon-container">
                <label class="col-lg-4 col-form-label required fw-bold fs-6">Freelance</label>
                <div class="form-control">
                @if($teamUser->freelance == 1)
             <p class="py-1" style="line-height: 1.3em; ">{{__("Available")}}</p>
            @else
            <p class="py-1" style="line-height: 1.3em; ">{{__("Occupied")}}</p>
            @endif
                </div>
            </div>
            <div class="col-lg-8 fv-row fv-plugins-icon-container">
                <label class="col-lg-4 col-form-label required fw-bold fs-6">Age</label>
                <div class="form-control">
                    {{ $teamUser->age }}
                </div>
            </div>
            <div class="col-lg-8 fv-row fv-plugins-icon-container">
                <label class="col-lg-4 col-form-label required fw-bold fs-6">Address</label>
                <div class="form-control">
                    {{ $teamUser->address }}
                </div>
            </div>


            <div class="col-lg-8 fv-row fv-plugins-icon-container">
                <label class="col-lg-4 col-form-label required fw-bold fs-6">Description</label>
                <div class="form-control" style="height: auto;">
                    {{ $teamUser->description }}
                </div>
            </div>
            
            <div class="col-lg-8 fv-row fv-plugins-icon-container">
                <label class="col-lg-4 col-form-label required fw-bold fs-6">  Team Presentation </label>
                                    <iframe style="width:100%;" class="ml-sm-1" src="{{ $teamUser->team_presentation }}" title="YouTube video player"
                                                            frameborder="0"
                                                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                                                            allowfullscreen>
                                    </iframe>
            </div>
            <div class="col-lg-8 fv-row fv-plugins-icon-container">
                <label class="col-lg-4 col-form-label required fw-bold fs-6">CV Link</label>
                <div class="form-control" style="height: auto;">
                    {{ $teamUser->cv_link }}
                </div>
            </div>
            <div class="col-lg-8 fv-row fv-plugins-icon-container">
                <label class="col-lg-4 col-form-label required fw-bold fs-6">Residence</label>
                <div class="form-control" style="height: auto;">
                    {{ $teamUser->residence }}
                </div>
            </div>
            <div class="col-lg-8 fv-row fv-plugins-icon-container">
                <label class="col-lg-4 col-form-label required fw-bold fs-6">Category</label>
                <div class="form-control" style="height: auto;">
                @foreach ($teamUser->EmployeeCategories()->get() as $employeeCategory)
                                               {{ $employeeCategory->name }}
                                    @endforeach
                </div>
            </div>
            <div class="col-lg-8 fv-row fv-plugins-icon-container">
                <label class="col-lg-4 col-form-label required fw-bold fs-6">Work Time</label>
                <div class="form-control" style="height: auto;">
                    {{ $teamUser->work_time }}
                </div>
            </div>
            <div class="col-lg-8 fv-row fv-plugins-icon-container">
                <label class="col-lg-4 col-form-label required fw-bold fs-6">Overview</label>
                <div class="form-control" style="height: auto;">
                    {{ $teamUser->overview }}
                </div>
            </div>
            <div class="col-lg-8 fv-row fv-plugins-icon-container">
                <label class="col-lg-4 col-form-label required fw-bold fs-6">Languages</label>
                <div class="form-control" style="height: auto;">
                        <ul>
                            @foreach ($teamUser->languages()->get() as $language)
                                <li>{{$language->name}}</li>
                            @endforeach
                    </ul>
                </div>
            </div>

 

            <div class="col-lg-8 fv-row fv-plugins-icon-container pt-5">
                <label class="col-lg-4 col-form-label required fw-bold fs-6">Image</label>
                <img src="{{ asset('storage') . '/' . $teamUser->photo }}" alt=""
                    style="width: 100px;height: 100px;">
            </div>



    


            <div class="col-lg-8 fv-row fv-plugins-icon-container mb-5">
                <label class="col-lg-4 col-form-label required fw-bold fs-6">Skills</label>
                <div class="form-control">
                    @foreach ($teamUser->EmployeeSkills()->get() as $skill)
                        <span class="mb-0 text-sm">{{ $skill->name }}</span>
                    @endforeach
                </div>
            </div>


        </div>
        <div style="margin-top:50px;" class="row mb-6">
                        <a href="{{ route('teams.index') }}" class="btn btn-light me-2">Regresar</a>
                    </div>
    </div>
@endsection

