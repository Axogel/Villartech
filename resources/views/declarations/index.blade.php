@extends('layouts.app')

<title>Villartechnologies Declarations</title>

@section('content')

@include('sweetalert::alert')
    <div class="container-fluid mt--12">
        <div class="row">
           
            <div class="col-xl-12 mb-5 mb-xl-0">

                <p class="pt-5" style="font-size:25px; color:#045A97; font-weight:900;">Declarations <span> <a href="{{ route('declarations.create') }}" class="btn btn-success" style="float:right;">Create
                 declaration</a></span></p>
               
                <div class="table-responsive" style="width: 100%;">
                    <table class="table align-items-center table-light" id="myTable">
                        <thead  class = "text-light" style="background-color: #045A97;">
                            <tr>
                                <th scope="col">Client</th>
                                <th scope="col">Client Testimony</th>
                                <th scope="col">Image</th>
                                <th scope="col"></th>
    
                            </tr>
                        </thead>
                        @foreach ($declarations as $declaration)
                            <tbody>
                                <tr>
                                    <th scope="row">
                                        <div class="media align-items-center">
                                            <div class="media-body">
                                                <span class="mb-0 text-sm">{{ $declaration->client }}</span>
                                            </div>
                                        </div>
                                    </th>
    
                                 
                                  
                                    <td>
                                        <span class="badge badge-dot mr-4">
                                            {{ $declaration->testimony }}
                                        </span>
                                    </td>
                                    <td>
    
                                        <img src="{{ asset('storage') . '/' .  $declaration->client_image }}" alt=""
                                            style="width: 50px;height: 50px;">
    
                                    </td>
                                
                                  
                                    <td class="text-right">
                                        <div class="dropdown">
                                            <a class="btn btn-sm btn-icon-only text-light" href="#" role="button"
                                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                <i class="fas fa-ellipsis-v" style="color: #045A97;"></i>
                                            </a>
                                            <div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow">
                                                <a class="dropdown-item"
                                                    href="{{ route('declarations.edit', ['declaration' => $declaration->id]) }}">Edit</a>
    
                                                  
                                                <form action="{{ route('declarations.destroy', $declaration->id) }}" method="Post">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="dropdown-item delete-link" onclick="return confirm('¿Are you sure you want to delete this declaration!?')">
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
                        {{ $declarations->links('pagination::bootstrap-4') }}
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