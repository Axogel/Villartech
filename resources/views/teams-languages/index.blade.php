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
                            <th scope="col">Skill Name</th>
                            <th scope="col">Skill Percent</th>


                            <th scope="col"></th>
                        </tr>
                    </thead>
                    @foreach ($teamSkill as $teamSkill)
                        <tbody>
                            <tr>
                                

                                <td>
                                    <span class="badge badge-dot mr-4">
                                        {{ $teamSkill->skill_name }}
                                    </span>
                                </td>
                               
                                <td>

                                    <span class="badge badge-dot mr-4">
                                        {{ $teamSkill->skill_percentage }}
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
                                                href="{{ route('teams-skills.edit', ['education' => $teamSkill->skill_id]) }}">Edit</a>

                                            <form action="{{ route('teams-skills.destroy', $teamSkill->skill_id) }}" method="Post">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="dropdown-item">
                                                    Delete
                                                </button>
                                            </form>

                                        </div>
                                    </div>
                                </td>
                            </tr>

                            </td>
                            </tr>
                        </tbody>
                    @endforeach
                </table>

                <a href="{{ route('teams-language.create', ['team' => $teamUser->id]) }}" class="btn btn-info" style="margin-left: 500px; margin-top:5%;">Create
                    a Skill</a>
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