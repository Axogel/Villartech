@extends('layouts.app')

<title>Villartechnologies Employees</title>

@section('content')

@include('sweetalert::alert')
    <div class="container-fluid mt--12">
        <div class="row">
           
            <div class="col-xl-12 mb-5 mb-xl-0">
                
                <p class="pt-5" style="font-size:25px; color:#045A97; font-weight:900;">Employee Experience <span> <a href="{{ route('teams-experience.create', ['team' => $teamUser->id]) }}" class="btn btn-success" style="float:right;">Create
                    Employee Experience</a></span></p>
               
                <div class="table-responsive" style="width: 100%;">
                    <table class="table align-items-center table-light" id="myTable">
                        <thead  class = "text-light" style="background-color: #045A97;">
                            <tr>
                            <th scope="col">Category</th>
                            <th scope="col">Date</th>
                            <th scope="col">Description</th>
                            <th scope="col">Company</th>


                            <th scope="col"></th>
                        </tr>
                    </thead>
                      @foreach ($teamExperience as $teamSkill)
                            <tbody>
                                <tr>
                                    <th scope="row">
                                        <div class="media align-items-center">
                                            <div class="media-body">
                                                <span class="mb-0 text-sm"> {{ $teamSkill->experience_category }} </span>
                                            </div>
                                        </div>
                                    </th>
    
                                    <td>
                                        <span class="badge badge-dot mr-4">
                                            {{ $teamSkill->experience_date }}
                                        </span>
                                    </td>
                                    <td>
                                        <span class="badge badge-dot mr-4">
                                       {{ $teamSkill->experience_description }}
                                        </span>
                                    </td>
                                    <td>
    
                                        <span class="badge badge-dot mr-4">
                                           {{ $teamSkill->experience_company }}
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
                                                    href="{{ route('teams-experience.edit', ['experience' => $teamSkill->experience_id]) }}">Edit</a>

                                                    <form  action="{{ route('teams-experience.destroy', $teamSkill->experience_id) }}" method="Post">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="dropdown-item"  data-confirm-delete="true">
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
                <nav aria-label="Page navigation example">
                    {{ $teamExperience->links('pagination::bootstrap-4') }}
                  </nav>     

            </div>

        </div>
    </div>

    </div>


    </div>
    @include('sweetalert::alert')



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
