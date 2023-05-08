@extends('layouts.app')

<title>Villartechnologies Emplooyes\</title>

@section('content')

@include('sweetalert::alert')
    <div class="container-fluid mt--12">
        <div class="row">
           
            <div class="col-xl-12 mb-5 mb-xl-0">
                
                <p class="pt-5" style="font-size:25px; color:#045A97; font-weight:900;">Employees <span> <a href="{{ route('teams.create') }}" class="btn btn-success" style="float:right;">Create
                    Employee</a></span></p>
               
                <div class="table-responsive" style="width: 100%;">
                    <table class="table align-items-center table-light" id="myTable">
                        <thead  class = "text-light" style="background-color: #045A97;">
                            <tr>
                                <th scope="col">Name</th>
                                <th scope="col">Email</th>
                                <th scope="col">Photo</th>
                                <th scope="col">Skills</th>
                                <th scope="col">Address</th>
                                <th scope="col">Age</th>
                                <th scope="col">Description</th>
                                <th scope="col">Youtube Video</th>
                                <th scope="col">CV LINK</th>
                                <th scope="col">RESIDENCE</th>
                                <th scope="col">FREELANCE</th>
                                <th scope="col">CATEGORY</th>
                                <th scope="col">WORK TIME</th>
    
                                <th scope="col">OVERVIEW</th>
    
    
                                <th scope="col"></th>
    
                            </tr>
                        </thead>
                        @foreach ($teamUsers as $teamUser)
                            <tbody>
                                <tr>
                                    <th scope="row">
                                        <div class="media align-items-center">
                                            <div class="media-body">
                                                <span class="mb-0 text-sm">{{ $teamUser->id_name }}</span>
                                            </div>
                                        </div>
                                    </th>
    
                                    <td>
                                        <span class="badge badge-dot mr-4">
                                            {{ $teamUser->email }}
                                        </span>
                                    </td>
                                    <td>
    
                                        <img src="{{ asset('storage') . '/' . $teamUser->photo }}" alt=""
                                            style="width: 50px;height: 50px;">
    
                                    </td>
                                    <td>
    
                                        <span class="badge badge-dot mr-4">
                                            {{ $teamUser->skills }}
                                        </span>
    
                                    </td>
    
                                    <td>
    
                                        <span class="badge badge-dot mr-4">
                                            {{ $teamUser->age }}
                                        </span>
    
                                    </td>
    
    
                                    <td>
    
                                        <span class="badge badge-dot mr-4">
                                            {{ $teamUser->address }}
                                        </span>
    
                                    </td>
    
                                    <td>
    
                                        <span class="badge badge-dot mr-4">
                                            {{ $teamUser->description }}
                                        </span>
    
                                    </td>
    
    
                                    <td>
    
                                        <span class="badge badge-dot mr-4">
                                            {{ $teamUser->team_presentation }}
                                        </span>
    
                                    </td>
    
                                    <td>
    
                                        <span class="badge badge-dot mr-4">
                                            {{ $teamUser->cv_link }}
                                        </span>
    
                                    </td>
    
                                    <td>
    
                                        <span class="badge badge-dot mr-4">
                                            {{ $teamUser->residence }}
                                        </span>
    
                                    </td>
    
                                    <td>
    
                                        <span class="badge badge-dot mr-4">
                                            {{ $teamUser->freelance }}
                                        </span>
    
                                    </td>
    
                                    <td>
    
                                        <span class="badge badge-dot mr-4">
                                            {{ $teamUser->team_category}}
                                        </span>
    
                                    </td>
    
                                    <td>
    
                                        <span class="badge badge-dot mr-4">
                                            {{ $teamUser->work_time}}
                                        </span>
    
                                    </td>
    
    
                                    <td>
    
                                        <span class="badge badge-dot mr-4">
                                            {{ $teamUser->overview}}
                                        </span>
    
                                    </td>
    
    
                                    <td class="text-right">
                                        <div class="dropdown">
                                            <a class="btn btn-sm btn-icon-only text-light" href="#" role="button"
                                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                <i class="fas fa-ellipsis-v" style="color: #045A97;"></i>
                                            </a>
                                            <div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow">
                                                <a class="dropdown-item"
                                                    href="{{ route('teams.edit', ['team' => $teamUser->id]) }}">Edit</a>
    
                                                  
                                                <form action="{{ route('teams.destroy', $teamUser->id) }}" method="Post">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="dropdown-item delete-link" onclick="return confirm('¿Are you sure you want to delete this emplooye!?')">
                                                        Delete
                                                    </button>
                                                </form>
                                                <a class="dropdown-item" style="padding-top: 0px;"
                                                href="{{ route('employee', ['team' => $teamUser->id]) }}">Education</a>
    
                                                <a class="dropdown-item" style="padding-top: 15px;"
                                                href="{{ route('employeeExperience', ['team' => $teamUser->id]) }}">Experience</a>
    
                                                <a class="dropdown-item" style="padding-top: 15px;"
                                                href="{{ route('employeeSkill', ['team' => $teamUser->id]) }}">Skills</a>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
    
                                </td>
                                </tr>
                            </tbody>
                            
                        @endforeach
                    </table>
                    <nav aria-label="Page navigation example">
                        {{ $teamUsers->links('pagination::bootstrap-4') }}
                      </nav>                    
                </div>
            </div>
    
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

@stop