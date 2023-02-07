@extends('layouts.app')

<title>Villartechnologies Employees</title>

@section('content')

    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.1/css/jquery.dataTables.min.css">
    <div class="container-fluid mt--7">
        <div class="row">
            <div class="col-xl-8 mb-5 mb-xl-0">

            </div>
        </div>

    </div>
    <div class="row mt-5">
        <div class="col-xl-8 mb-5 mb-xl-0" style="margin-left: 25px; margin-top:80px;">
            <div class="table-responsive" style="width: 146%">
                <table class="table align-items-center table-dark" id="example">
                    <thead class="thead-light">
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
                                            <i class="fas fa-ellipsis-v"></i>
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow">
                                            <a class="dropdown-item"
                                                href="{{ route('teams.edit', ['team' => $teamUser->id]) }}">Edit</a>

                                              
                                            <form action="{{ route('teams.destroy', $teamUser->id) }}" method="Post">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="dropdown-item">
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

                <a href="{{ route('teams.create') }}" class="btn btn-info" style="margin-left: 500px; margin-top:5%;">Create
                    Employee</a>
            </div>

        </div>
    </div>

    </div>


    </div>


    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
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
